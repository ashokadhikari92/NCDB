@extends('layouts.master')

@section('content')
    <div class="panel pull-down">
        <div class="panel-body">
{{--
            <p>{!! link_to_route('child_vaccines.create', '',null,array('class'=>"glyphicon glyphicon-plus-sign is-add-button"))
                !!} </p>--}}
                <span class="" > <a href="{!!route('child_vaccines.create')!!}" ><button class="btn btn-warning">Add New</button></a></span>

            @include('errors.error')

        </div>
    </div>
 <div class="panel-body">
    <table id="data_table" class="table table-striped table-bordered">
        <thead class="dtHead">
        <tr class="dtThRow">
    	    <th>Registration No</th>
    		<th>Full Name </th>
    		<th>Previous Date</th>
    		<th>Previous Vaccine</th>
    		<th>Next Date</th>
    		<th>Next Vaccine</th>
    		<th>Details</th>
    		<th>Edit</th>
    		<th>Delete</th>
        </tr>
        </thead>
        <tbody class="dtBody">

        </tbody>
    </table>
 </div>
@stop

@section('js_section')
 <script src="{{ asset('assets/ncdb/js/child_vaccine/child_vaccine.js') }}"></script>
@stop