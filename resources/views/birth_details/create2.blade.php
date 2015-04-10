@extends('layouts.master')

@section('content')
 <div class="col-md-10">
  <div class="content-box-large">
   <div class="row">
    <div class="col-md-12">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#tab1"><h6>Child Details</h6></a></li>
            <li><a data-toggle="tab" href="#tab2"><h6>Parents Details</h6></a></li>
            <li><a data-toggle="tab" href="#tab3"><h6>Informer Details</h6></a></li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane active" id="tab1">
                {!! Form::open(['route'=>'birth_details.store']) !!}
                <div class="col-lg-12">
                    <legend>Personal Detail</legend>
                </div>

                    <div class="form-group col-lg-6">
                        {!! Form::label('child_first_name','First Name') !!}
                        {!! Form::text('child_first_name',null,array('class'=>'form-control')) !!}
                    </div>
                    <div class="form-group col-lg-6">
                         {!! Form::label('child_last_name','Last Name') !!}
                         {!! Form::text('child_last_name',null,array('class'=>'form-control')) !!}
                    </div>
                   {{-- <div class="form-group col-lg-12">
                         {!! Form::label('child_full_name','Full Name') !!}
                         {!! Form::text('child_full_name',null,array('class'=>'form-control')) !!}
                    </div>--}}
                    <div class="form-group col-lg-6">
                         {!! Form::label('child_birth_date_bs','Birth Date (B.S)') !!}
                         {!! Form::text('child_birth_date_bs',null,array('class'=>'form-control')) !!}
                    </div>
                    <div class="form-group col-lg-6">
                        {!! Form::label('child_birth_date_ad','Birth Date (A.D)') !!}
                        {!! Form::text('child_birth_date_ad',null,array('class'=>'form-control')) !!}
                    </div>
                    <div class="form-group col-lg-6">
                        {!! Form::label('child_birth_place','Birth Place: ') !!}
                            <select class="form-control">
                                 <option value="">Choose Birth Place</option>
                                 <option value="Home">Home</option>
                                 <option value="Hospital">Hospital</option>
                                 <option value="Other">Other</option>
                             </select>
                    </div>
                    <div class="form-group col-lg-6">
                         {!! Form::label('child_birth_helper','Birth Helper: ') !!}
                           <select class="form-control">
                                <option value="">Choose Birth Helper</option>
                                <option value="People at Home">People at Home</option>
                                <option value="Nurse">Nurse</option>
                                <option value="Doctor">Doctor</option>
                            </select>
                    </div>
                     <div class="form-group col-lg-6">
                         {!! Form::label('child_gender','Gender: ') !!}
                           <select class="form-control" name="child_gender">
                                <option value="Female">Female</option>
                                <option value="Male">Male</option>
                                <option value="Other">Other</option>
                            </select>
                     </div>


                     <div class="form-group col-lg-12">
                        <legend><h4>Child Birth Address</h4></legend>
                    </div>
                     <div class="form-group col-lg-4">
                         {!! Form::label('child_birth_district','District: ') !!}
                             <select class="form-control" name="birth_district">
                                 <option value="Kathmandu">Kathmandu</option>
                                 <option value="Lalitpur">Lalitpur</option>
                                 <option value="Bhaktapur">Bhaktapur</option>
                             </select>
                     </div>
                     <div class="form-group col-lg-4">
                         {!! Form::label('child_birth_vdc','VDC/Municipality: ') !!}
                             <select class="form-control" name="birth_vdc">
                                 <option value="Kathmandu Metropolitan City">Kathmandu Metropolitan City</option>
                                 <option value="Balambu VDC">Balambu VDC</option>
                                 <option value="Budanilkantha VDC">Budanilkantha VDC</option>
                                 <option value="Daxinkali VDC">Daxinkali VDC</option>
                             </select>
                     </div>
                     <div class="form-group col-lg-4">
                         {!! Form::label('child_birth_ward_no','Ward No: ') !!}
                             <select class="form-control" name="birth_ward_no">
                                 <option value="01">01</option>
                                 <option value="02">02</option>
                                 <option value="03">03</option>
                                 <option value="04">04</option>
                                 <option value="05">05</option>
                                 <option value="06">06</option>
                                 <option value="07">07</option>
                                 <option value="08">08</option>
                                 <option value="09">09</option>
                                 <option value="10">10</option>
                                 <option value="11">11</option>
                                 <option value="12">12</option>
                                 <option value="13">13</option>
                                 <option value="14">14</option>

                             </select>
                     </div>
                     <div class="form-group col-lg-4">
                         {!! Form::label('child_birth_country','Country Name : ') !!}
                             <select class="form-control" name="birth_country">
                                 <option value="Nepal">Nepal</option>
                                 <option value="India">India</option>
                                 <option value="China">China</option>
                             </select>
                     </div>
                   {{-- <div class="form-group col-lg-8">
                         {!! Form::label('child_birth_address','Full Address : ') !!}
                         {!! Form::text('child_birth_address',null,array('class'=>'form-control')) !!}
                     </div>--}}

            </div> {{--End of tab-pane tab1--}}
            <div class="tab-pane" id="tab2">

                <div class="col-lg-6">
                 <fieldset class="scheduler-border">
                    <legend class="scheduler-border"><h4>Father Details </h4></legend>

                    <div class="form-group col-lg-6">
                        {!! Form::label('father_first_name','First Name') !!}
                        {!! Form::text('father_first_name',null,array('class'=>'form-control')) !!}
                    </div>
                    <div class="form-group col-lg-6">
                         {!! Form::label('father_last_name','Last Name') !!}
                         {!! Form::text('father_last_name',null,array('class'=>'form-control')) !!}
                    </div>
                   {{-- <div class="form-group col-lg-12">
                         {!! Form::label('father_full_name','Full Name') !!}
                         {!! Form::text('father_full_name',null,array('class'=>'form-control')) !!}
                    </div>--}}
                    <legend><h4>Address</h4></legend>
                     <div class="form-group col-lg-6">
                         {!! Form::label('father_district','District: ') !!}
                             <select class="form-control" name="father_district">
                                 <option value="Kathmandu">Kathmandu</option>
                                 <option value="Lalitpur">Lalitpur</option>
                                 <option value="Bhaktapur">Bhaktapur</option>

                             </select>
                     </div>
                     <div class="form-group col-lg-6">
                         {!! Form::label('father_vdc','VDC/Municipality: ') !!}
                             <select class="form-control" name="father_vdc">
                                  <option value="Kathmandu Metropolitan City">Kathmandu Metropolitan City</option>
                                  <option value="Balambu VDC">Balambu VDC</option>
                                  <option value="Budanilkantha VDC">Budanilkantha VDC</option>
                                  <option value="Daxinkali VDC">Daxinkali VDC</option>
                             </select>
                     </div>
                     <div class="form-group col-lg-6">
                         {!! Form::label('father_ward_no','Ward No: ') !!}
                             <select class="form-control" name="father_ward_no">
                                  <option value="01">01</option>
                                  <option value="02">02</option>
                                  <option value="03">03</option>
                                  <option value="04">04</option>
                                  <option value="05">05</option>
                                  <option value="06">06</option>
                                  <option value="07">07</option>
                                  <option value="08">08</option>
                                  <option value="09">09</option>
                                  <option value="10">10</option>
                                  <option value="11">11</option>
                                  <option value="12">12</option>
                                  <option value="13">13</option>
                                  <option value="14">14</option>
                             </select>
                     </div>
   {{--                  <div class="form-group col-lg-6">
                         {!! Form::label('father_road','Tole / Roard : ') !!}
                             <select class="form-control">
                                 <option value="">Tole 1</option>
                                 <option value="">Tole 2</option>
                             </select>
                     </div>--}}
                    <legend></legend>
                    <div class="form-group col-lg-6">
                         {!! Form::label('father_citizenship_no','Citizenship No: ') !!}
                         {!! Form::text('father_citizenship_no',null,array('class'=>'form-control')) !!}
                     </div>
                    <div class="form-group col-lg-6">
                         {!! Form::label('father_citizenship_issued_date','Citizenship Issued Date : ') !!}
                         {!! Form::text('father_citizenship_issued_date',null,array('class'=>'form-control')) !!}
                     </div>
                    <div class="form-group col-lg-6">
                         {!! Form::label('father_citizenship_issued_district','Citizenship Issued District : ') !!}
                        {{-- {!! Form::text('father_citizenship_issued_district',null,array('class'=>'form-control')) !!}--}}
                             <select class="form-control" name="father_citizenship_issued_district">
                                  <option value="Kathmandu">Kathmandu</option>
                                  <option value="Lalitpur">Lalitpur</option>
                                  <option value="Bhaktapur">Bhaktapur</option>
                              </select>
                     </div>
                    <div class="form-group col-lg-6">
                         {!! Form::label('father_passport_no','Passport No (If Foreigner) : ') !!}
                         {!! Form::text('father_passport_no',null,array('class'=>'form-control')) !!}
                     </div>
                    <div class="form-group col-lg-6">
                         {!! Form::label('father_country','Country Name (Citizenship Issued): ') !!}
                             <select class="form-control">
                                 <option value="USA">USA</option>
                                 <option value="India">India</option>
                             </select>
                     </div>

                </fieldset>
                </div>

                <div class="col-lg-6">
                 <fieldset class="scheduler-border">
                 <legend class="scheduler-border"><h4>Mother Details  </h4></legend>

                     <div class="form-group col-lg-6">
                        {!! Form::label('mother_first_name','First Name') !!}
                        {!! Form::text('mother_first_name',null,array('class'=>'form-control')) !!}
                     </div>
                     <div class="form-group col-lg-6">
                        {!! Form::label('mother_last_name','Last Name') !!}
                        {!! Form::text('mother_last_name',null,array('class'=>'form-control')) !!}
                     </div>
                    {{-- <div class="form-group col-lg-12">
                        {!! Form::label('mother_full_name','Full Name') !!}
                        {!! Form::text('mother_full_name',null,array('class'=>'form-control')) !!}
                     </div>--}}

                    <legend><h4>Address</h4></legend>
                     <div class="form-group col-lg-6">
                         {!! Form::label('mother_district','District: ') !!}
                             <select class="form-control" name="mother_district">
                                 <option value="Kathmandu">Kathmandu</option>
                                 <option value="Lalitpur">Lalitpur</option>
                                 <option value="Bhaktapur">Bhaktapur</option>
                             </select>
                     </div>
                     <div class="form-group col-lg-6">
                         {!! Form::label('mother_vdc','VDC/Municipality: ') !!}
                             <select class="form-control" name="mother_vdc">
                                 <option value="Kathmandu Metropolitan City">Kathmandu Metropolitan City</option>
                                  <option value="Balambu VDC">Balambu VDC</option>
                                  <option value="Budanilkantha VDC">Budanilkantha VDC</option>
                                  <option value="Daxinkali VDC">Daxinkali VDC</option>
                             </select>
                     </div>
                     <div class="form-group col-lg-6">
                         {!! Form::label('mother_ward_no','Ward No: ') !!}
                             <select class="form-control">
                                  <option value="01">01</option>
                                  <option value="02">02</option>
                                  <option value="03">03</option>
                                  <option value="04">04</option>
                                  <option value="05">05</option>
                                  <option value="06">06</option>
                                  <option value="07">07</option>
                                  <option value="08">08</option>
                                  <option value="09">09</option>
                                  <option value="10">10</option>
                                  <option value="11">11</option>
                                  <option value="12">12</option>
                                  <option value="13">13</option>
                                  <option value="14">14</option>
                             </select>
                     </div>
{{--                     <div class="form-group col-lg-6">
                         {!! Form::label('mother_road','Tole / Roard : ') !!}
                             <select class="form-control">
                                 <option value="">Tole 1</option>
                                 <option value="">Tole 2</option>
                             </select>
                     </div>--}}

                    <legend></legend>

                    <div class="form-group col-lg-6">
                         {!! Form::label('mother_citizenship_no','Citizenship No: ') !!}
                         {!! Form::text('mother_citizenship_no',null,array('class'=>'form-control')) !!}
                     </div>
                    <div class="form-group col-lg-6">
                         {!! Form::label('mother_citizenship_issued_date','Citizenship Issued Date : ') !!}
                         {!! Form::text('mother_citizenship_issued_date',null,array('class'=>'form-control')) !!}
                     </div>
                    <div class="form-group col-lg-6">
                         {!! Form::label('mother_citizenship_issued_district','Citizenship Issued District : ') !!}
                         {{--{!! Form::text('mother_citizenship_issued_district',null,array('class'=>'form-control')) !!}--}}
                            <select class="form-control" name="mother_citizenship_issued_district">
                                  <option value="Kathmandu">Kathmandu</option>
                                  <option value="Lalitpur">Lalitpur</option>
                                  <option value="Bhaktapur">Bhaktapur</option>
                              </select>
                     </div>
                    <div class="form-group col-lg-6">
                         {!! Form::label('mother_passport_no','Passport No (If Foreigner) : ') !!}
                         {!! Form::text('mother_passport_no',null,array('class'=>'form-control')) !!}
                     </div>
                    <div class="form-group col-lg-6">
                         {!! Form::label('mother_country','Country Name (Citizenship Issued): ') !!}
                             <select class="form-control" name="mother_country">
                                 <option value="">USA</option>
                                 <option value="">India</option>
                             </select>
                     </div>

                </fieldset>
                </div>
                <div class="col-lg-6">
                 <fieldset class="scheduler-border">
                    <legend class="scheduler-border"><h4>Common Details</h4></legend>

                    <div class="form-group col-lg-12">
                         {!! Form::label('common_marriage_registration_no','Marriage Registration No : ') !!}
                         {!! Form::text('common_marriage_registration_no',null,array('class'=>'form-control')) !!}
                    </div>
                    <div class="form-group col-lg-6">
                         {!! Form::label('common_marriage_date_ad','Marriage Date (A.D) : ') !!}
                         {!! Form::text('common_marriage_date_ad',null,array('class'=>'form-control')) !!}
                    </div>
                    <div class="form-group col-lg-6">
                         {!! Form::label('common_marriage_date_bs','Marriage Date (B.S) : ') !!}
                         {!! Form::text('common_marriage_date_bs',null,array('class'=>'form-control')) !!}
                    </div>

                 </fieldset>
                </div>

                <div class="col-lg-6">
                 <fieldset class="scheduler-border">
                    <legend class="scheduler-border"><h4>Grand Parents Details</h4></legend>
                    <div class="form-group col-lg-6">
                         {!! Form::label('grand_father_first_name','First Name : ') !!}
                         {!! Form::text('grand_father_first_name',null,array('class'=>'form-control','placeholder'=>'Grand Father')) !!}
                    </div>
                    <div class="form-group col-lg-6">
                         {!! Form::label('grand_father_last_name','Last Name : ') !!}
                         {!! Form::text('grand_father_last_name',null,array('class'=>'form-control','placeholder'=>'Grand Father')) !!}
                    </div>
                   {{-- <div class="form-group col-lg-12">
                         {!! Form::label('grand_father_full_name','Full Name : ') !!}
                         {!! Form::text('grand_father_full_name',null,array('class'=>'form-control','placeholder'=>'Grand Father')) !!}
                    </div>--}}
                    <legend></legend>
                    <div class="form-group col-lg-6">
                         {!! Form::label('grand_mother_first_name','First Name : ') !!}
                         {!! Form::text('grand_mother_first_name',null,array('class'=>'form-control','placeholder'=>'Grand Mother')) !!}
                    </div>
                    <div class="form-group col-lg-6">
                         {!! Form::label('grand_mother_last_name','Last Name : ') !!}
                         {!! Form::text('grand_mother_last_name',null,array('class'=>'form-control','placeholder'=>'Grand Mother')) !!}
                    </div>
                   {{-- <div class="form-group col-lg-12">
                         {!! Form::label('grand_mother_full_name','Full Name : ') !!}
                         {!! Form::text('grand_mother_full_name',null,array('class'=>'form-control','placeholder'=>'Grand Mother')) !!}
                    </div>--}}
                 </fieldset>
                </div>

            </div>
            <div class="tab-pane" id="tab3">
                <div class="col-lg-12">
                    <legend>Personal Detail</legend>
                </div>
                 <div class="form-group col-lg-6">
                    {!! Form::label('informer_first_name','First Name') !!}
                    {!! Form::text('informer_first_name',null,array('class'=>'form-control')) !!}
                 </div>
                 <div class="form-group col-lg-6">
                    {!! Form::label('informer_last_name','Last Name') !!}
                    {!! Form::text('informer_last_name',null,array('class'=>'form-control')) !!}
                 </div>
                {{-- <div class="form-group col-lg-12">
                    {!! Form::label('informer_full_name','Full Name') !!}
                    {!! Form::text('informer_full_name',null,array('class'=>'form-control')) !!}
                 </div>--}}
                  <div class="form-group col-lg-12">
                    {!! Form::label('informer_relation','Relation with Child: ') !!}
                    <select class="form-control">
                        <option value="">Father</option>
                        <option value="">Mother</option>
                        <option value="">Uncle</option>
                        <option value="">Aunt</option>
                        <option value="">Grand Father</option>
                        <option value="">Grand Mother</option>
                    </select>
                  </div>

                       <div class="col-lg-12">
                        <legend></legend>
                       </div>
                       <div class="form-group col-lg-6">
                           {!! Form::label('form_filled_date','Form Filled Date : ') !!}
                           {!! Form::text('form_filled_date',null,array('class'=>'form-control')) !!}
                       </div>
            </div>
            <div class="col-lg-12">
            {!!Form::submit('Save',['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
            <a href="{!!route('birth_details.index')!!}" ><button class="btn btn-warning">Cancel</button></a>
            </div>

        </div>
    </div>

   </div>
</div>
</div>
@stop

@section('js_section')

@stop