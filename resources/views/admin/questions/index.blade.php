@extends('admin.layouts.layout')
@section('title', 'Questions')
@section('title-breadcrumb', 'Questions')

@section('content')

<div class="section">
    <div class="pr-5 text-right">
        <a class="btn btn-sm btn-primary" href="{{route('admin.question.create')}}"> Create Question </a>
    </div>
    <div class="row pt-3">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Question Index</h3>
            </div>

            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover datatable">
                    <thead>
                    <tr>
                        <th style="width: 20px">Id</th>
                        <th style="width: 150px">Type</th>
                        <th>Name</th>
                        <th style="width: 150px">Created at</th>
                        <th style="width: 200px">Action</th>
                    </tr>
                    </thead>
                <tbody>
                </tbody>
              </table>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')

    <script>

        jQuery(function($) {
            $('.datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route("admin.question.datatables") !!}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'type', name: 'type' },
                    { data: 'name', name: 'name' },
                    { data: 'created_at', name: 'created_at' },
                    { data: 'action', name: 'action' },
                ]
            });
        });
    </script>

@endpush

