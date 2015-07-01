@extends('layouts.master')

@section('content')

    <div class="px-margin-top"></div>

       <div class="row">


               <div class="col-lg-3 col-sm-4 small-border back-white">
                   <div class="px-margin-top"></div>

                          <div class="padding-left-right">
                              <img src="images/image.jpg" height="170px" width="170px" />
                              <h2><b>{!!$child->brth_first_name!!}{!!" ".$child->brth_last_name!!}</b></h2>
                              {{--<h3>{!!$child->brth_birth_date_bs!!} B.S</h3>--}}

                              <table class="table table-striped ">
                                  <tbody>
                                     <tr><td>Born On: </td><td>{!!$child->brth_birth_date_bs." "!!}B.S</td></tr>
                                     <tr><td>View :</td><td><a href="#">Birth Certificate</a> </td></tr>
                                  </tbody>
                              </table>
                          </div>

               </div>

               <div class="col-lg-9 col-sm-8">
                   <!------ Tab Navigation---->
                   <div class="green-back">
                       <ul class="nav nav-tabs "  data-tabs="tabs" id="my-tabs" >
                           <li><a href="#tab1"  class="white-text active">Profile</a> </li>
                           <li><a href="#tab2"  class="white-text">Parents</a> </li>
                           <li><a href="#tab3"  class="white-text">Vaccination</a> </li>
                           <li><a href="#tab4"  class="white-text">Education</a> </li>
                           <li><a href="#tab5"  class="white-text">Health</a> </li>
                       </ul>
                   </div>
                   <!--- Tab sections -->
                   <div class="tab-content back-white">

                       <div class="tab-pane active" id="tab1">
                           <div class="row">
                               <div class="col-md-12">
                                   <div class="col-md-10 col-xs-22"><h2><i class="fa fa-user fa-1x"> </i> About</h2></div>

                                   <div class="col-md-2 col-xs-2">

                                       {!! link_to_route('birth_details.edit','Edit', array($child->brth_id), array('class' => 'btn btn-warning margin-top'))!!}
                                   </div>
                               </div>
                               <div class="col-md-12 col-xs-24">
                                   <div class="col-md-6 pull-left col-xs-12">
                                        <table class="table table-hover">
                                            <tbody>
                                            <tr><td class="bold">First Name:</td><td>{!!$child->brth_first_name!!}</td></tr>
                                            <tr><td class="bold">User Name:</td><td>{!!$child->brth_last_name !!}</td></tr>
                                            <tr><td class="bold">City:</td><td>Nawalparasi</td></tr>
                                            <tr><td class="bold">Birthday:</td><td>{!!$child->brth_birth_date_bs !!}B.S</td></tr>
                                            <tr><td class="bold">Website:</td><td>madhu.wordpress.com</td></tr>
                                            </tbody>
                                        </table>
                                   </div>
                                   <div class="col-md-6 col-xs-12">
                                       <table class="table">
                                           <tbody>
                                           <tr><td class="bold">Last Name:</td><td>{!!$child->brth_last_name !!}</td></tr>
                                           <tr><td class="bold">Email:</td><td>madhu@acd.edu.np</td></tr>
                                           <tr><td class="bold">Country:</td><td>Nepal</td></tr>
                                           <tr><td class="bold">Interests:</td><td>Basketball, Web, Design, etc.</td></tr>
                                           <tr><td class="bold">Phone:</td><td>9843360552</td></tr>
                                           </tbody>
                                       </table>
                                   </div>
                               </div>


                       </div>

                       </div>{{-- tab 1 ends--}}
                       <div class="tab-pane fade" id="tab2">
                             <div class="row">

                               <div class="col-md-12 col-xs-24">
                                   <div class="col-md-6 pull-left col-xs-12">
                                   <div class="col-md-10 col-xs-22"><h2><i class="fa fa-user fa-1x"> </i> Father</h2></div>
                                          <div class="col-md-2 col-xs-2">
                                              {!! link_to_route('parents.edit','Edit', array($father['prnt_id']), array('class' => 'btn btn-warning margin-top'))!!}
                                          </div>
                                        <table class="table table-hover">
                                            <tbody>
                                            <tr><td class="bold">Full Name:</td><td>{!!$father['prnt_first_name']!!}</td></tr>
                                            <tr><td class="bold">Full Name(Devnagari):</td><td>{!!$child->brth_last_name !!}</td></tr>
                                            <br>
                                            <tr><td class="bold">Zone:</td><td>Nawalparasi</td></tr>
                                            <tr><td class="bold">District:</td><td>{!!$child->brth_birth_date_bs !!}B.S</td></tr>
                                            <tr><td class="bold">VDC/MC:</td><td>madhu.wordpress.com</td></tr>
                                            <tr><td class="bold">Ward No:</td><td>Nawalparasi</td></tr>
                                            <br>
                                            <tr><td class="bold">Citizenship No:</td><td>{!!$child->brth_birth_date_bs !!}B.S</td></tr>
                                            <tr><td class="bold">Citizenship Issued District:</td><td>madhu.wordpress.com</td></tr>
                                            </tbody>
                                        </table>
                                   </div>
                                   <div class="col-md-6 col-xs-12">
                                   <div class="col-md-10 col-xs-22"><h2><i class="fa fa-user fa-1x"> </i> Mother</h2></div>
                                        <div class="col-md-2 col-xs-2">
                                           {!! link_to_route('birth_details.edit','Edit', array($child->brth_id), array('class' => 'btn btn-warning margin-top'))!!}
                                         </div>
                                         <table class="table table-hover">
                                             <tbody>
                                             <tr><td class="bold">Full Name:</td><td>{!!$child->brth_first_name!!}{!!" ".$child->brth_last_name!!}</td></tr>
                                             <tr><td class="bold">Full Name(Devnagari):</td><td>{!!$child->brth_last_name !!}</td></tr>
                                             <br>
                                             <tr><td class="bold">Zone:</td><td>Nawalparasi</td></tr>
                                             <tr><td class="bold">District:</td><td>{!!$child->brth_birth_date_bs !!}B.S</td></tr>
                                             <tr><td class="bold">VDC/MC:</td><td>madhu.wordpress.com</td></tr>
                                             <tr><td class="bold">Ward No:</td><td>Nawalparasi</td></tr>
                                             <br>
                                             <tr><td class="bold">Citizenship No:</td><td>{!!$child->brth_birth_date_bs !!}B.S</td></tr>
                                             <tr><td class="bold">Citizenship Issued District:</td><td>madhu.wordpress.com</td></tr>
                                             </tbody>
                                         </table>
                                   </div>
                               </div>


                             </div>
                       </div> {{--tab 2 ends--}}
                       <div class="tab-pane fade" id="tab3">

                       </div>{{-- tab 3 ends--}}
                       <div class="tab-pane fade" id="tab4">
                        <div class="col-md-6">
                                                               <h2><i class="glyphicon glyphicon-education"></i> Education</h2>
                                                               <table class="table table-hover">
                                                                   <tr> <td><i class="fa fa-circle-o"></i> Bachelor's degree, E-Commerce/Electronic Commerce at UCLA<br/><p class="timestamps">March 2013 ~ Now</p></td> </tr>
                                                                   <tr><td> <i class="fa fa-circle-o"></i> Student at Web Design Education<br/> <p class="timestamps">March 2013 ~ Now</p></td> </tr>
                                                                   <tr> <td><i class="fa fa-circle-o"></i> Student at St. Louis High School<br/> <p class="timestamps">March 2013 ~ Now</p></td> </tr>
                                                                   <tr><td> <i class="fa fa-circle-o"></i> Student at St. Monica Junior High School<br/> <p class="timestamps">March 2013 ~ Now</p></td> </tr>
                                                               </table>
                                                           </div>
                   </div>{{-- tab 4 ends--}}
                   <div class="tab-pane fade" id="tab5">

                   </div>{{-- tab 5 ends--}}

               </div>
           </div>
       </div>

@stop

@section('js_section')
    <script type="text/javascript">

    $( '#my-tabs a' ).click( function ( e ) {
         e.preventDefault();
        $( this ).tab( 'show' );
     } );

    </script>
@stop