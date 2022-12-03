<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\QuestionDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\QuestionRequest;
use App\Providers\RouteServiceProvider;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Yajra\Datatables\Datatables;

class QuestionController extends Controller
{

    const PAGINATE = 10;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $questions = Question::with('answers')->paginate(self::PAGINATE);
        return view('admin.questions.index', compact('questions'));
    }

    public function indexByDataTable(Request $request, QuestionDataTable $questionDataTable)
    {
        return $questionDataTable->ajax();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.questions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(QuestionRequest $request) {

        $data = $request->validated();

        $question = Question::create($data);

        if (!$question) {
            return response()->json([
                'code' => 1,
                'message' => 'Create error'
            ]);
        }

        return response()->json([
            'code' => 0,
            'message' => 'Create question success !'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $question = Question::with('answers')->find($id);
        if (!$question) {
            abort(404);
        }

        return view('admin.questions.edit', compact('question'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(QuestionRequest $request, $id) {

        $data = $request->validated();
        $question = Question::find($id);

        if (!$question) {
            return response()->json([
                'code' => 1,
                'message' => 'Update error'
            ]);
        }
        $question->update($data);

        return response()->json([
            'code' => 0,
            'message' => 'Update question success !'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $question = Question::with('answers')->find($id);
        if (!$question) {
            session()->flash('error', __("Question not found"));
        }
        $question->delete();
        session()->flash('success', __("Successful delete"));
        return redirect()->route('admin.question.index');
    }

    public function show($id) {

        $question = Question::with('answers')->find($id);

        if (!$question) {
            return response()->json([
                'code' => 1,
                'message' => 'Notfound question'
            ]);
        }

        return response()->json([
            'code' => 0,
            'data' => $question
        ]);
    }

}
