<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ExamDataTable;
use App\Models\Exam;
use App\Http\Controllers\Controller;
use App\Http\Requests\ExamRequest;
use App\Mail\SendEmailExamToStudentMail;
use App\Models\Question;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ExamController extends Controller
{

       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.exams.index');
    }


    public function indexByDataTable(Request $request, ExamDataTable $examDataTable)
    {
        return $examDataTable->ajax();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = $this->getTypeExam();
        $students = [];

        $questions = Question::select('id','name')->get();

        return view('admin.exams.create', compact('types', 'questions', 'students'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ExamRequest $request)
    {
        $data = $request->validated();

        $data['extend_id'] = Str::uuid()->toString();
        $exam = Exam::create($data);

        if (!$exam) {
            session()->flash('error', __("Create faild"));
            return redirect()->back();
        }

        $exam->questions()->sync($this->formatQuestionsByOrderSelected($data['questions'] ?? []));

        session()->flash('success', __("Create success"));
        return redirect()->route('admin.exam.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $exam = Exam::with('questions')->find($id);
        if (!$exam) {
            abort(404);
        }
        $types = $this->getTypeExam();
        $students = [];
        $studentsJoinExam = [];
        $questions = $this->markQuestionsSelectedInQuestions($exam->questions);

        return view('admin.exams.edit', compact('exam', 'questions', 'types', 'students', 'studentsJoinExam'));

    }

    public function show($id)
    {
        $exam = Exam::with('questions')->find($id);
        if (!$exam) {
            abort(404);
        }
        $types = $this->getTypeExam();
        $students = [];
        $studentsJoinExam = [];
        $questions = $this->markQuestionsSelectedInQuestions($exam->questions);

        return view('admin.exams.show', compact('exam', 'questions', 'types', 'students', 'studentsJoinExam'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ExamRequest $request, $id)
    {
        $data = $request->validated();

        $exam = Exam::find($id);

        if (!$exam) {
            session()->flash('error', __("Not found"));
            return redirect()->back();
        }
        if (empty($exam->extend_id)) {
            $data['extend_id'] = Str::uuid()->toString();
        }
        $exam->update($data);
        $exam->questions()->sync($this->formatQuestionsByOrderSelected($data['questions'] ?? []));

        session()->flash('success', __("Update success"));
        return redirect()->route('admin.exam.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $exam = Exam::with('questions')->find($id);
        if (!$exam) {
            session()->flash('error', __("Exam not found"));
        }
        $exam->delete();
        session()->flash('success', __("Successful delete"));
        return redirect()->route('admin.exam.index');
    }

    private function markQuestionsSelectedInQuestions($questionsSelected) {

        $questionsAll = Question::select('id', 'name')->get()->map( function ($question) use($questionsSelected) {
            if($questionsSelected->where('id', $question->id)->isNotEmpty()) {
                $question->selected = true;
            }
            return $question;
        });

        return $questionsAll;

    }
    private function getTypeExam() {

        return [
            [
                'type' => Exam::TYPE_EXAM_PUBLIC_RESULTS,
                'name' => (new Exam())->getNameType(Exam::TYPE_EXAM_PUBLIC_RESULTS),
            ],
            [
                'type' => Exam::TYPE_EXAM_PRIVATE_RESULTS,
                'name' => (new Exam())->getNameType(Exam::TYPE_EXAM_PRIVATE_RESULTS),
            ],
        ];

    }
    private function formatQuestionsByOrderSelected($questionsSelected) {

        if (!is_array($questionsSelected)) {
            return [];
        }
        $result = [];
        array_filter($questionsSelected ,function ($questionId, $index) use(&$result) {
            $result[$questionId] = ['order' => $index + 1];
        }, ARRAY_FILTER_USE_BOTH);
        return $result;
    }

    public function sendNotification($id)
    {

        $exam = Exam::find($id);

        if (!$exam) {
            session()->flash('error', __("Not found"));
            return redirect()->back();
        }

        $students = [];
        foreach ($students as $student) {
            Log::info("Send Exam To : " .$student->name ."link: " ."/exams/" .$exam->extend_id);
            // Send Email
            Mail::queue( new SendEmailExamToStudentMail($student->user, $exam));
        }


        session()->flash('success', __("Send Notification success"));
        return redirect()->route('admin.exam.index');
    }



}
