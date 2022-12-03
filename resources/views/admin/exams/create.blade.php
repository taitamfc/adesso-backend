@extends('admin.layouts.layout')
@section('title', 'Create Exam')
@section('title-breadcrumb', 'Create Exam')
@section('content')

<div class="section">

    <div class="card-body">

        <form action="{{route('admin.exam.store')}}" method="POST">

            @csrf

            @include('admin.components.forms.select', [
                "label" => "Type",
                "name" => "type",
                "required" => true,
                "value" => '',
                "placeholder" => "",
                "options" =>  $types,
            ])
            @include('admin.components.forms.input', [
                "label" => "Name",
                "name" => "name",
                "required" => true,
                "value" => '',
                "placeholder" => ""
            ])
            @include('admin.components.forms.textarea', [
                "label" => "Description",
                "name" => "description",
                "required" => false,
                "value" => '',
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

