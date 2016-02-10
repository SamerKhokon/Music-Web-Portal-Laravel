<!DOCTYPE html>
<html lang="en" class="app">
<head> 
  <meta charset="utf-8" /> 
  <title>Nextstep Music Application</title> 
  <meta name="description" content="" />
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
 <link rel="stylesheet" href="http://localhost/Fuck/resources/assets/js/jPlayer/jplayer.flat.css" type="text/css" /> 
 <link rel="stylesheet" href="http://localhost/Fuck/resources/assets/css/app.v1.css" type="text/css" /> 
 <!--[if lt IE 9]> <script src="http://localhost/Fuck/resources/assets/js/ie/html5shiv.js"></script>
 <script src="http://localhost/Fuck/resources/assets/js/ie/respond.min.js"></script> 
 <script src="http://localhost/Fuck/resources/assets/js/ie/excanvas.js"></script> 
 <![endif]-->
 
</head>
<body class=""> 

    
	<section class="vbox"> 

                <header class="bg-white-only header header-md navbar navbar-fixed-top-xs"> 
               	<div class="navbar-header aside bg-info dk">
               		<a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html"> 
               		 	<i class="icon-list"></i> 
               		</a>
               		<a href="index.php" class="navbar-brand text-lt"> 
               		 	<i class="icon-earphones"></i> 
               		 	<img src="http://localhost/Fuck/resources/assets/images/logo.png" alt="." class="hide"> 
               		 	<span class="hidden-nav-xs m-l-sm">Music</span> 
               		</a> 
               		<a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".user"> 
               		 	<i class="icon-settings"></i> 
               		</a> 
               	</div> 

               	<ul class="nav navbar-nav hidden-xs">
               		 <li> 
                        <a href="#nav,.navbar-header" data-toggle="class:nav-xs,nav-xs" class="text-muted"> 
               			 <i class="fa fa-indent text"></i> 
                               <i class="fa fa-dedent text-active"></i> 
                              </a> 
               	 	</li> 
               	</ul> 

                	<form class="navbar-form navbar-left input-s-lg m-t m-l-n-xs hidden-xs" role="search"> 
                		<div class="form-group"> 
                			<div class="input-group"> 
                				<span class="input-group-btn"> 
                					<button type="submit" class="btn btn-sm bg-white btn-icon rounded">
                						<i class="fa fa-search"></i>
                					</button> 
                				</span> 
                				<input type="text" class="form-control input-sm no-border rounded" placeholder="Search songs, albums...">
                 			</div> 
                 		</div>
                   </form>

                    <div class="navbar-right ">
                         <ul class="nav navbar-nav m-n hidden-xs nav-user user"> 
                              <li class="hidden-xs">                
                                @if(Auth::check())
                                   <a href="http://localhost/Fuck/public/up" >Upload</a>
                                @else
                                   <a href="http://localhost/Fuck/public/register" >Upload</a>
                                @endif   
                               </li>
              							<li class="hidden-xs">
              								<a href="http://localhost/Fuck/public/profile" class="user">Profile</a>
              							</li>
                              
                         	<li class="dropdown"> 
                         		<a href="#" class="dropdown-toggle bg clear" data-toggle="dropdown">
                         			<span class="thumb-sm avatar pull-right m-t-n-sm m-b-n-sm m-l-sm"> 
                         			<img src="http://localhost/Fuck/resources/assets/images/a0.png" alt="..."> </span> 
                                 	<b class="caret"></b>
                         		</a>
                         		<ul class="dropdown-menu animated fadeInRight"> 
                         			<li> <span class="arrow top"></span> <a href="#">Settings</a> </li> 
                         			<li> <a href="http://localhost/Fuck/public/profile">Profile</a> </li> 
                         			<li> <a href="docs.html">Help</a> </li>
                         			<li class="divider"></li> 
                         			<li> <a href="http://localhost/Fuck/public/auth/logout" >Logout</a> </li> 
                         		</ul> 
                         	</li> 
                         </ul> 
                    </div> 
                </header>

				
				
	          <section> 
                    <!--  Start hbox stretch -->
		        <section class="hbox stretch">

          		      <!-- .aside --> 
                    <aside class="bg-black dk aside hidden-print" id="nav"> 
          		 	 	      <section class="vbox"> 
                            <section class="w-f-md scrollable">
          			 	 		            <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="10px" data-railOpacity="0.2">
          				 	 		<!-- nav --> 
                                            <nav class="nav-primary hidden-xs"> 
                                  					 	 		<ul class="nav bg clearfix"> 
                                  					 	 		  	<li class="hidden-nav-xs padder m-t m-b-sm text-xs text-muted"></li>
                                  					 	 		  	 <li> <a href="index-2.html"> 
                                  					 	 		  	 	<i class="icon-disc icon text-success"></i> 
                                  					 	 		  	 	<span class="font-bold">What's new</span> </a> 
                                  					 	 		  	 </li> 
                                  					 	 		  	 <li> <a href="genres.html"> <i class="icon-music-tone-alt icon text-info"></i> 
                                  					 	 		  	 	<span class="font-bold">Genres</span> </a> 
                                  					 	 		  	 </li>
                                  					 	 		  	 <li> <a href="events.html"> <i class="icon-drawer icon text-primary-lter"></i>
                                  					 	 		  	  <b class="badge bg-primary pull-right">6</b> 
                                  					 	 		  	  <span class="font-bold">Events</span> </a>
                                  					 	 		  	   </li> 
                                  					 	 		  	 <li> <a href="listen.html"> <i class="icon-list icon text-info-dker"></i>
                                  					 	 		  	  <span class="font-bold">Listen</span> </a> 
                                  					 	 		  	</li> 
                                  					 	 		  	<li> <a href="video.html" data-target="#content" data-el="#bjax-el" data-replace="true"> 
                                  					 	 		  		<i class="icon-social-youtube icon text-primary"></i> 
                                  					 	 		  		<span class="font-bold">Video</span> </a> 
                                  					 	 		  	</li> 
                                  					 	 		  	<li class="m-b hidden-nav-xs"></li>
                                  					 	 		</ul>
                                             </nav> 
                                             <!-- / nav --> 
                                        </div> 
                                   </section> 
                              </section> 
                         </aside> 
                         <!-- /.aside --> 

                         <!-- Main Profile  -->
                         <section id="content"> 
                              <section class="vbox"> 
                                   <section class="scrollable"> 
                                        <section class="hbox stretch"> 
                                             <aside class="aside-lg bg-light lter b-r"> 
                                                  <section class="vbox"> 
                                                       <section class="scrollable"> 
                                                            <div class="wrapper"> 
                                                                 <div class="text-center m-b m-t"> 
																		                                  <a href="#" class="thumb-lg"> 
                                                                           <img src="http://localhost/Fuck/resources/assets/images/a0.png" class="img-circle"> 
																		                                  </a> 
                                                                            <div> 
                                                                                <div class="h3 m-t-xs m-b-xs">
																				                                        </div> 
                                                                                <small class="text-muted">
                                                                                     <i class="fa fa-map-marker"></i> 
																					                                            {{ Auth::user()->email }} 
                                                                                </small> 
                                                                            </div> 
                                                                      </div> 
                                                                      <div class="panel wrapper"> 
                                                                           <div class="row text-center"> 
                                                                                <div class="col-xs-6"> 
                                                                                     <a href="#"> <span class="m-b-xs h4 block">245</span> 
                                                                                          <small class="text-muted">Followers</small> 
                                                                                     </a> 
                                                                                </div> 
                                                                                <div class="col-xs-6"> 
                                                                                     <a href="#"> <span class="m-b-xs h4 block">55</span> 
                                                                                          <small class="text-muted">Following</small> 
                                                                                     </a> 
                                                                                </div> 
                                                                           </div> 
                                                                      </div> 
                                                                        <div> 
                                                                            <small class="text-uc text-xs text-muted">
                                                                              {{ '01719347580' }}
                                                                            </small> 
                                                                           <p>User</p> 
                                                                           <p>{{ Auth::user()->created_at }}</p> 
                                                                           <div class="line"></div>                                                                            
                                                                        </div> 
                                                                 </div> 
                                                            </section> 
                                                       </section> 
                                                  </aside> 
                                                  <!-- Tabs -->     
                                                  <aside class="bg-white"> 
                                                       <section class="vbox"> 
                                                            <header class="header bg-light lt"> 
                                                                 <ul class="nav nav-tabs nav-white"> 
                                                                      <li class="active"><a href="#activity" data-toggle="tab">1 Friends</a></li> 
                                                                      <li class=""><a href="#events" data-toggle="tab">2 Accounts</a></li> 
                                                                      <li class=""><a href="#interaction" data-toggle="tab">3 History</a></li> 
                                                                 </ul> 
                                                            </header> 
                                                            <section class="scrollable"> 
                                                                 <div class="tab-content"> 


                                                                      <div class="tab-pane active" id="activity"> 
                                                                           <ul class="list-group no-radius m-b-none m-t-n-xxs list-group-lg no-border"> 



																				 
                                                                                <li class="list-group-item"> 
                                                                                     <a href="#" class="thumb-sm pull-left m-r-sm"> 
                                                                                          <img src="http://localhost/Fuck/resources/assets/images/a0.png" class="img-circle"> 
                                                                                     </a> 
                                                                                     <a href="#" class="clear"> 
                                                                                          <small class="pull-right">3 minuts ago</small> 
                                                                                          <strong class="block">contact_name</strong> 
                                                                                          <small>contact_number_raw</small> 

                                                                                     </a> 
                                                                                </li> 
                                                                                

                                                                                 
                                                                           </ul> 
                                                                      </div>
                                                                      
                                                                      <div class="tab-pane" id="events"> 
                                                                           
                                                                          
                                                                           <ul class="list-group no-radius m-b-none m-t-n-xxs list-group-lg no-border"> 


                                                                                <li class="list-group-item"> 
                                                                                     <a href="#" class="thumb-sm pull-left m-r-sm"> 
                                                                                          <img src="http://localhost/Fuck/resources/assets/images/a0.png" class="img-circle"> 
                                                                                     </a> 
                                                                                     @foreach($balances as $b)
                                                                                     <a href="#" class="clear"> 
                                                                                          <small class="pull-right">{{ $b->balance_end_time }}</small> 
                                                                                          <strong class="block">{{ $b->current_balance }} Minutes</strong> 
                                                                                          <small>{{ $b->used_balance }} Minutes</small> 
                                                                                     </a> 
                                                                                     @endforeach
                                                                                    <?php //print_r($balances);?> 
                                                                                </li>                                                                                 


                                                                           </ul>     

                                                                      </div> 
                                                                      <div class="tab-pane" id="interaction">
                                                                           
                                                                           <ol>
                                                                            @foreach($activities as $a)
                                                                              <li>
                                                                                  <a href="#" class="clear">
                                                                                      <strong class="block">{{ $a->activity_info  }}</strong> 
                                                                                      <small>{{ $a->created_at  }}</small> 
                                                                                  </a>
                                                                              </li>
                                                                            @endforeach    
                                                                          </ol>  
                                                                      </div> 
                                                                 </div> 
                                                            </section> 
                                                       </section> 
                                                  </aside> 
                                             </section> 
                                        </section> 
                                   </section> 

               				          <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a> 
                         </section> 
                         <!--  End Profile -->
                    </section> 

               </section> 
               <!-- End hbox stretch -->



     </section> 
 
 <!-- Bootstrap --> <!-- App  JS Library --> 
 
 <script src="http://localhost/Fuck/resources/assets/js/app.v1.js"></script>
 <script src="http://localhost/Fuck/resources/assets/js/charts/easypiechart/jquery.easy-pie-chart.js"></script> 
 <script src="http://localhost/Fuck/resources/assets/js/app.plugin.js"></script> 
 <script type="text/javascript" src="http://localhost/Fuck/resources/assets/js/jPlayer/jquery.jplayer.min.js"></script>
 <script type="text/javascript" src="http://localhost/Fuck/resources/assets/js/jPlayer/add-on/jplayer.playlist.min.js"></script>
 <script type="text/javascript" src="http://localhost/Fuck/resources/assets/js/jPlayer/demo.js"></script>
 
 </body>
 
</html>