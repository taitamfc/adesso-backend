@extends('admin.layouts.layout')
@section('title', 'Edit Exam')
@section('title-breadcrumb', 'Edit Exam')

@section('content')

<div class="section">
    <div class="card-body">


            @include('admin.components.forms.select', [
                "label" => "Type",
                "name" => "type",
                "required" => true,
                "model" => $exam,
                "placeholder" => "",
                "options" =>  $types,
                "disabled" => true,
            ])
            @include('admin.components.forms.input', [
                "label" => "Name",
                "name" => "name",
                "required" => true,
                "model" => $exam,
                "placeholder" => "",
                "disabled" => true,
            ])
            @include('admin.components.forms.textarea', [
                "label" => "Description",
                "name" => "description",
                "required" => false,
                "model" => $exam,
                "placeholder" => "",
                "rows" => 5,
                "disabled" => true,
            ])
            @include('admin.components.forms.questions', [
                "label" => "Questions",
                "name" => "questions[]",
                "required" => true,
                "value" => '',
                "placeholder" => "",
                "rows" => 5,
                "questions" => $questions,
                "disabled" => true,
            ])

            <div class="section text-right pt-5 pb-5 pr-5">
                <a href="{{route('admin.exam.send-notification', $exam->id)}}"> <button type="button" class="btn btn-primary">Send Notification</button> </a>
            </div>


    </div>
</div>

@endsection

