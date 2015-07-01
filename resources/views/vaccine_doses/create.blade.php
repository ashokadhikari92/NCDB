@extends('layouts.master')

@section('content')
    <div class="panel pull-down">
        <div class="panel-body">
            @include('errors.error')
        </div>
    </div>

 <div class="panel-body">
    <div class="content-box-large">

                    {!! Form::open(['route'=>'vaccine_doses.store']) !!}
                    <div class="col-lg-12">
                        <legend class="header">Vaccine and Dose Interval</legend>
                    </div>

                    <div class="form-group col-lg-6">
                        {!! Form::label('dose_interval','Dose No ') !!}{!!$i+1 !!}
                        {!! Form::text('dose_interval',null,array('class'=>'form-control')) !!}
                    </div>

                   <div class="col-lg-12">
                    {!!Form::submit('Save',['class'=>'btn btn-info']) !!}
                    {!! Form::close() !!}
                    <a href="{!!route('vaccine_doses.index')!!}" ><button class="btn btn-warning">Cancel</button></a>
                    </div>

        </div>

 </div>

@stop

@section('js_section')
 <script src="{{ asset('assets/ncdb/js/child_vaccine/vaccine_program.js') }}"></script>
@stop