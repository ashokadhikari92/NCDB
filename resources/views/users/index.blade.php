@extends('layouts.configuration.master')

@section('content')
    <div class="panel pull-down">
        <div class="panel-body">

            <span class="" > <a href="{!!route('users.create')!!}" ><button class="btn btn-warning">Add New</button></a></span>

            @include('errors.error')

        </div>
    </div>
    <div class="panel-body">
        <table id="data_table" class="table table-striped table-bordered">
                <thead class="dtHead">
                <tr class="dtThRow">
            		<th>Full Name </th>
            		<th>Email</th>
            		<th>Role</th>
            		<th>Details</th>
                </tr>
                </thead>
                <tbody class="dtBody">

                </tbody>
            </table>
    </div>

@stop

@section('js_section')
 <script src="{{ asset('assets/ncdb/js/birth/birth.js') }}"></script>
@stop