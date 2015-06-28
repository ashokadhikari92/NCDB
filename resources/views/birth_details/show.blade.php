@extends('layouts.master')

@section('content')

    <div class="px-margin-top"></div>

       <div class="row">

          {{-- <div class="col-lg-9" >--}}
               <div class="col-lg-3 col-sm-4 small-border back-white">
                   <div class="px-margin-top"></div>

                          <div class="padding-left-right">
                              <img src="images/image.jpg" height="170px" width="170px" />
                              <h1><b>Madhu Sudhan </b></h1>
                              <h3>Owner at our company, Inc.</h3>
                              <p>Ipsam voluptatem quia voluptas
                                  sit aspernatur aut odit aut fugit, sed
                                  quia consequuntur magni dolores eos qui ratione
                                  voluptatem sequi nesciunt.
                              </p>
                              <table class="table table-striped ">
                                  <tbody>
                                    <tr><td>Status</td><td><button class="btn green-back white-text">Active</button></td></tr>
                                    <tr><td>Rating</td><td>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star-half text-warning"></i>
                                    </td></tr>
                                    <tr><td>Member Since</td><td>Jan 07, 2014 </td></tr>
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
                                       <button class=" btn btn-warning margin-top">
                                           <i class="fa fa-pencil"></i>
                                           Edit
                                       </button>
                                   </div>
                               </div>
                               <div class="col-md-12 col-xs-24">
                                   <div class="col-md-6 pull-left col-xs-12">
                                        <table class="table table-hover">
                                            <tbody>
                                            <tr><td class="bold">First Name:</td><td>Madhu Sudhan</td></tr>
                                            <tr><td class="bold">User Name:</td><td>Madhu Sudhan</td></tr>
                                            <tr><td class="bold">City:</td><td>Nawalparasi</td></tr>
                                            <tr><td class="bold">Birthday:</td><td>22 may 1996</td></tr>
                                            <tr><td class="bold">Website:</td><td>madhu.wordpress.com</td></tr>
                                            </tbody>
                                        </table>
                                   </div>
                                   <div class="col-md-6 col-xs-12">
                                       <table class="table">
                                           <tbody>
                                           <tr><td class="bold">Last Name:</td><td>Subedi</td></tr>
                                           <tr><td class="bold">Email:</td><td>madhu@acd.edu.np</td></tr>
                                           <tr><td class="bold">Country:</td><td>Nepal</td></tr>
                                           <tr><td class="bold">Interests:</td><td>Basketball, Web, Design, etc.</td></tr>
                                           <tr><td class="bold">Phone:</td><td>9843360552</td></tr>
                                           </tbody>
                                       </table>
                                   </div>
                               </div>

                               <br/>

                               <div class="col-md-12">
                                   <div class="col-md-6 pull-left">

                                       <h2><i class="fa fa-file-text fa-1x"></i> Experience</h2>
                                       <table class="table table-hover">
                                           <tr> <td><i class="fa fa-circle-o"></i> Owner at Vendroid Ltd.<br/> <p class="timestamps">March 2013 ~ Now</p></td> </tr>
                                           <tr> <td><i class="fa fa-circle-o"></i> CEO at Mc. Dondon<br/> <p class="timestamps">March 2013 ~ Now</p> </td></tr>
                                           <tr> <td><i class="fa fa-circle-o"></i> Web Designer at Web Design Company Ltd.<br/><p class="timestamps">March 2013 ~ Now</p></td></tr>
                                           <tr><td><i class="fa fa-circle-o"></i> Sales at Sales Company Ltd.<br/> <p class="timestamps">March 2013 ~ Now</p></td></tr>
                                       </table>

                                   </div>
                                   <br/>
                                   <div class="col-md-6">
                                       <h2><i class="glyphicon glyphicon-education"></i> Education</h2>
                                       <table class="table table-hover">
                                           <tr> <td><i class="fa fa-circle-o"></i> Bachelor's degree, E-Commerce/Electronic Commerce at UCLA<br/><p class="timestamps">March 2013 ~ Now</p></td> </tr>
                                           <tr><td> <i class="fa fa-circle-o"></i> Student at Web Design Education<br/> <p class="timestamps">March 2013 ~ Now</p></td> </tr>
                                           <tr> <td><i class="fa fa-circle-o"></i> Student at St. Louis High School<br/> <p class="timestamps">March 2013 ~ Now</p></td> </tr>
                                           <tr><td> <i class="fa fa-circle-o"></i> Student at St. Monica Junior High School<br/> <p class="timestamps">March 2013 ~ Now</p></td> </tr>
                                       </table>
                                   </div>
                               </div>
                               <br/>
                               <div class="col-md-12">
                                   <div class="col-md-6">
                                       <h2><i class="fa fa-globe"></i> ACTIVITY</h2>
                                       <table class="table table-hover">
                                           <tr> <td><i class="fa fa-suitcase text-danger"></i> Someone has give you a surprise <br/><p class="timestamps">~ 12 Minutes Ago</p></td> </tr>
                                           <tr><td><i class="fa fa-user text-primary"></i> Change your user profile details<br/> <p class="timestamps">~ 12 Days Ago</p></td> </tr>
                                           <tr> <td> <i class="fa fa-book text-success"></i> Added new article <br/> <p class="timestamps">~ 19 Days Ago</p></td> </tr>
                                           <tr><td><i class="fa fa-user text-primary"></i> Change Profile Pic <br/> <p class="timestamps">~ 20 Days Ago</p></td> </tr>
                                           <tr> <td><i class="fa fa-cog text-primary"></i> Your setting is updated <br/> <p class="timestamps">~ 12 Days Ago</p></td> </tr>
                                           <tr><td> <i class="fa fa-book text-success"></i> Added new article <br/> <p class="timestamps">~ 19 Days Ago</p></td> </tr>
                                           <tr class="panel panel-default"><td class="panel-heading"><p class="text-center">see more>></p></td> </tr>
                                       </table>

                                   </div>
                                   <div class="col-md-6">
                                       <h2><i class="fa fa-filter"></i> SKILL</h2>
                                       <div>
                                           <p><strong>Photoshop</strong></p>
                                           <div class="progress progress-striped active">
                                               <div class="progress-bar" role="progressbar" aria-valuenow="60"
                                                    aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                                               </div>
                                           </div>
                                       </div>
                                       <div>
                                           <p><strong>Illustrator </strong></p>
                                           <div class="progress progress-striped ">
                                               <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60"
                                                    aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                               </div>
                                           </div>
                                       </div>
                                       <div>
                                           <p><strong>PHP </strong></p>
                                           <div class="progress progress-striped">
                                               <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
                                                    aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
                                               </div>
                                           </div>
                                       </div>
                                       <div>
                                           <p><strong>Javascript </strong></p>
                                           <div class="progress progress-striped">
                                               <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60"
                                                    aria-valuemin="0" aria-valuemax="100" style="width: 55%;">
                                               </div>
                                           </div>
                                       </div>
                                       <div>
                                           <p><strong>Communication</strong></p>
                                           <div class="progress progress-striped active">
                                               <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60"
                                                    aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                               </div>
                                           </div>
                                       </div>
                                       <div>
                                           <p><strong>writing</strong></p>
                                           <div class="progress progress-striped active">
                                               <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60"
                                                    aria-valuemin="0" aria-valuemax="100" style="width: 99%;">
                                               </div>
                                           </div>
                                       </div>
                               </div>
                           </div>

                       </div>

                   </div>{{-- tab 1 ends--}}
                   <div class="tab-pane fade" id="tab2">
                                              Thisis our second tab......This is our second tab....
                                              Thisis our second tab......This is our second tab....
                                              Thisis our second tab......This is our second tab....
                   </div> {{--tab 2 ends--}}
                   <div class="tab-pane fade" id="tab3">
                                              This is our third tab......This is our third tab......
                                              This is our third tab......This is our third tab......
                                              This is our third tab......This is our third tab......
                   </div>{{-- tab 3 ends--}}
                   <div class="tab-pane fade" id="tab4">
                                              This is our fourth tab....This is our fourth tab....
                                              This is our fourth tab....This is our fourth tab....
                                              This is our fourth tab....This is our fourth tab....
                   </div>{{-- tab 4 ends--}}
                   <div class="tab-pane fade" id="tab5">
                                              This is our fifth tab....This is our fifth tab..
                                              This is our fifth tab....This is our fifth tab..
                                              This is our fifth tab....This is our fifth tab..
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