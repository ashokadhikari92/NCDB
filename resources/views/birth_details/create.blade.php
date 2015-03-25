@extends('layouts.master')

@section('content')
 <div class="col-md-10">
  <div class="content-box-large">
   <div class="row">
    <div class="col-md-12">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#tab1"> शिशुको विवरण </a></li>
            <li><a data-toggle="tab" href="#tab2"> बाबु अामाको विवरण  </a></li>
            <li><a data-toggle="tab" href="#tab3"> सुचकको विवरण </a></li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane active" id="tab1">
                {!! Form::open(['route'=>'birth_details.store']) !!}
                    <div class="form-group col-lg-6">
                        {!! Form::label('child_first_name','First Name') !!}
                        {!! Form::text('child_first_name',null,array('class'=>'form-control')) !!}
                    </div>
                    <div class="form-group col-lg-6">
                         {!! Form::label('child_last_name','Last Name') !!}
                         {!! Form::text('child_last_name',null,array('class'=>'form-control')) !!}
                     </div>
                    <div class="form-group col-lg-12">
                         {!! Form::label('child_full_name','Full Name') !!}
                         {!! Form::text('child_full_name',null,array('class'=>'form-control')) !!}
                     </div>
                    <div class="form-group col-lg-6">
                         {!! Form::label('child_birth_date_bs','Birth Date (B.S)') !!}
                         {!! Form::text('child_birth_date_bs',null,array('class'=>'form-control')) !!}
                     </div>
                   <div class="form-group col-lg-6">
                        {!! Form::label('child_birth_date_ad','Birth Date (A.D)') !!}
                        {!! Form::text('child_birth_date_ad',null,array('class'=>'form-control')) !!}
                    </div>

            </div>
            <div class="tab-pane" id="tab2">

                <div class="col-lg-6">
                 <fieldset class="scheduler-border">
                    <legend class="scheduler-border"><h4>बाबुको  विवरण </h4></legend>

                    <div class="form-group col-lg-6">
                        {!! Form::label('father_first_name','First Name') !!}
                        {!! Form::text('father_first_name',null,array('class'=>'form-control')) !!}
                    </div>
                    <div class="form-group col-lg-6">
                         {!! Form::label('father_last_name','Last Name') !!}
                         {!! Form::text('father_last_name',null,array('class'=>'form-control')) !!}
                     </div>
                    <div class="form-group col-lg-12">
                         {!! Form::label('father_full_name','Full Name') !!}
                         {!! Form::text('father_full_name',null,array('class'=>'form-control')) !!}
                     </div>
                </fieldset>
                </div>

                <div class="col-lg-6">
                 <fieldset class="scheduler-border">
                 <legend class="scheduler-border"><h4> अामाको  विवरण   </h4></legend>

                                    <div class="form-group col-lg-6">
                                        {!! Form::label('mother_first_name','First Name') !!}
                                        {!! Form::text('mother_first_name',null,array('class'=>'form-control')) !!}
                                    </div>
                                    <div class="form-group col-lg-6">
                                         {!! Form::label('mother_last_name','Last Name') !!}
                                         {!! Form::text('mother_last_name',null,array('class'=>'form-control')) !!}
                                     </div>
                                    <div class="form-group col-lg-12">
                                         {!! Form::label('mother_full_name','Full Name') !!}
                                         {!! Form::text('mother_full_name',null,array('class'=>'form-control')) !!}
                                     </div>
                </fieldset>
                </div>
            </div>
            <div class="tab-pane" id="tab3">

                 <div class="form-group col-lg-6">
                                    {!! Form::label('informer_first_name','First Name') !!}
                                    {!! Form::text('informer_first_name',null,array('class'=>'form-control')) !!}
                                </div>
                                <div class="form-group col-lg-6">
                                     {!! Form::label('informer_last_name','Last Name') !!}
                                     {!! Form::text('informer_last_name',null,array('class'=>'form-control')) !!}
                                 </div>
                                <div class="form-group col-lg-12">
                                     {!! Form::label('informer_full_name','Full Name') !!}
                                     {!! Form::text('informer_full_name',null,array('class'=>'form-control')) !!}
                                 </div>
                </div>
             {!!Form::submit('Save',['class'=>'btn btn-primary']) !!}
             {!! Form::close() !!}
        </div>
    </div>

   </div>
</div>
</div>
@stop

@section('js_section')

@stop