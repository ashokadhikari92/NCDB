@extends('layouts.master')

@section('content')
    <div class="panel panel-default">
        <div class="panel-body">

            <p>{!! link_to_route('birth_details.create', '',null,array('class'=>"glyphicon glyphicon-plus-sign is-add-button"))
                !!} </p>

            @include('errors.error')

        </div>
    </div>

    <table id="data_table" class="table table-striped table-bordered">
        <thead class="dtHead">
        <tr class="dtThRow">
    	    <th>Registration No</th>
    		<th>Full Name </th>
    		<th>DOB </th>
    		<th>Gender</th>
    	    <th>Father</th>
    		<th>Mother</th>
    		<th>Details</th>
    		<th>Edit</th>
    		<th>Delete</th>
        </tr>
        </thead>
        <tbody class="dtBody">

        </tbody>
    </table>
@stop

@section('js_section')
 <script src="{{ asset('assets/ncdb/js/birth/birth.js') }}"></script>
@stop