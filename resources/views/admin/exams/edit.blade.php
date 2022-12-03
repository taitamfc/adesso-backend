@extends('admin.layouts.layout')
@section('title', 'Edit Exam')
@section('title-breadcrumb', 'Edit Exam')

@section('content')

<div class="section">
    <div class="card-body">

        <form action="{{route('admin.exam.update', $exam->id)}}" method="POST">

            @csrf

            @include('admin.components.forms.select', [
                "label" => "Type",
                "name" => "type",
                "required" => true,
                "model" => $exam,
                "placeholder" => "",
                "options" =>  $types,
            ])
            @include('admin.components.forms.input', [
                "label" => "Name",
                "name" => "name",
                "required" => true,
                "model" => $exam,
                "placeholder" => ""
            ])
            @include('admin.components.forms.textarea', [
                "label" => "Description",
                "name" => "description",
                "required" => false,
                "model" => $exam,
                "placeholder" => "",
                "rows" => 5
            ])
            @include('admin.components.forms.questions', [
                "label" => "Questions",
                "name" => "questions[]",
                "required" => true,
                "value" => '',
                "placeholder" => "",
                "rows" => 5,
                "questions" => $questions,
            ])

            <div class="section text-right pt-5 pb-5 pr-5">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>

    </div>
</div>

@endsection

