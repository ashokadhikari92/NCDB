@extends('layouts.master')
@section('css')
    <link rel="stylesheet" href="{{asset('assets/css/jquery.sliderTabs.min.css')}}">
@stop
@section('content')
 <div class="panel panel-default">
      @include('errors.error')
 </div>
    <div class="col-lg-12">
        <legend>Vaccination Program</legend>
    </div>
    <input type="hidden" value="1" id="child_id">
    <div class="col-lg-12">
        <label >Full Name : </label>
    </div>
    <div class="col-lg-6">
        <label>Date of Birth : </label>
    </div>
    <div class="col-lg-6">
        <label>Age : </label>
    </div>
    <div class="col-lg-6">
        <label>Gender : </label>
    </div>
    <div class="col-lg-6">
        <label>Handicap : </label>
    </div>
    <div class="col-lg-12">
        <h3>Address</h3>
    </div>
    <div class="col-lg-6">
        <label>Region : </label>
    </div>
    <div class="col-lg-6">
        <label>District : </label>
    </div>
    <div class="col-lg-6">
        <label>VDC/Municipality : </label>
    </div>
    <div class="col-lg-6">
        <label>Ward No : </label>
    </div>

    <div class="col-lg-12">
       {{--<a href="{!!route('vaccination/program/vaccine/list')!!}" ><button class="btn btn-warning">Vaccine List</button></a>--}}
       <button class="btn btn-warning" id="vaccine_list">Vaccine List</button>
    </div>

@stop

@section('js_section')
     <script src="{{ asset('assets/ncdb/js/child_vaccine/vaccine_program.js') }}"></script>
@stop