@extends('layouts.report_master')

     @section('content')
         <div class="panel-body">
             <table class="table-responsive">
                 <tr>
                     <th>Charts</th>
                 </tr>
                 <tr>
                     <td>
                        <span class="" > <a href="{!!route('birth_registration_reports.create')!!}" ><button class="btn btn-warning">View In PieChart</button></a></span>
                     </td>
                 </tr>
             </table>
         </div>
     @stop

     @section('js_section')
      <script src="{{ asset('assets/ncdb/js/child_vaccine/child_vaccine.js') }}"></script>
     @stop