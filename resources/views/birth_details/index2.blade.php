@extends('layouts.master')

@section('content')

    <div class="col-md-10">
      			<div class="content-box-large">
      				<div class="panel-heading">
      				@include('errors.error')
      				<div class="panel-title col-md-12">
                         <div class="row">
                            <div class="col-md-6">
                                <a href="{!! route('birth_details.create') !!}"><button class="btn btn-success">New Birth Registration<i class="icon-plus icon-white"></i></button></a>
                            </div>

                            <div class="col-md-6">
                                <div class="btn-group pull-right">
                                 <button data-toggle="dropdown" class="btn dropdown-toggle">Tools <span class="caret"></span></button>
                                 <ul class="dropdown-menu">
                                     <li><a href="#">Print</a></li>
                                     <li><a href="#">Save as PDF</a></li>
                                     <li><a href="#">Export to Excel</a></li>
                                 </ul>
                             </div>
                            </div>

                            </div>
                        </div>
      				</div>

    				 <div class="table-toolbar">

                    </div>
      				<div class="panel-body">
      					<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
    						<thead>
    							<tr>
    							    <th>S.N.</th>
    								<th>Full Name </th>
    								<th>DOB </th>
    								<th>Gender</th>
    								<th>Father</th>
    								<th>Mother</th>
    								<th>Details</th>
    							</tr>
    						</thead>
    						<tbody>
    							<tr class="odd gradeX">
    								<td>1</td>
    								<td>Asheem Manandhar</td>
    								<td>2050-09-12</td>
    								<td class="center">Male</td>
    								<td class="center">Father Manandhar</td>
    								<td class="center">Mother Manandhar</td>
    								<td><a href="#"><i class="glyphicon glyphicon-saved"></i></a></td>
    							</tr>
                                <tr class="odd gradeX">
    								<td>2</td>
    								<td>Ashok Adhikari</td>
    								<td>2049-02=19</td>
    								<td class="center">Male</td>
    								<td class="center">Father Adhikari</td>
    								<td class="center">Mother Adhikari</td>
    								<td><a href="#"><i class="glyphicon glyphicon-saved"></i></a></td>
    							</tr>
                                <tr class="odd gradeX">
    								<td>3</td>
    								<td>Dinesh Sharma</td>
    								<td>2050-01-23</td>
    								<td class="center">Male</td>
    								<td class="center">Father Sharma</td>
    								<td class="center">Mother Sharma</td>
    								<td><a href="#"><i class="glyphicon glyphicon-saved"></i></a></td>
    							</tr>
                                <tr class="odd gradeX">
    								<td>4</td>
    								<td>Santosh Dhungana</td>
    								<td>२०४९-०३-०४</td>
    								<td class="center">Male</td>
    								<td class="center">Father Dhungana </td>
    								<td class="center">Mother Dhungana</td>
    								<td><a href="#"><i class="glyphicon glyphicon-saved"></i></a></td>
    							</tr>
    						</tbody>
    					</table>
      				</div>
      			</div>
    </div>

@stop

@section('js_section')
 <script src="{{asset('assets/datatables/js/jquery.dataTables.min.js')}}"></script>
@stop