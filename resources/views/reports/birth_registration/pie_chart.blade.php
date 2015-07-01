@extends('layouts.report_master')

@section('content')
    <div class="panel-body">
        <div id="chart-div"></div>
       {{-- // With Lava class alias--}}
        <? echo Lava::render('PieChart', 'IMDB', 'chart-div') ?>

       {{-- // With Blade Templates--}}
        @piechart('IMDB', 'chart-div')
    </div>
@stop

@section('js_section')
 <script src="{{ asset('assets/ncdb/js/child_vaccine/child_vaccine.js') }}"></script>
@stop