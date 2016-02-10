<!DOCTYPE html>
<html lang="en" class="app">
<head>
    <meta charset="utf-8" />
    <title> Nextstep Music Application </title>
    <meta name="description" content="app,off screen nav" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <link rel="stylesheet" href="http://localhost/Fuck/resources/assets/js/jPlayer/jplayer.flat.css" type="text/css" />
    <link rel="stylesheet" href="http://localhost/Fuck/resources/assets/css/app.v1.css" type="text/css" />
    <style type="text/css">
        @media all and (max-width: 600px) {
           #next_song_title{
               width: 100% !important;
               z-index: 12;
           }
        }
    </style>

    <!--[if lt IE 9]>
    <script src="http://localhost/Fuck/resources/assets/js/ie/html5shiv.js"></script>
    <script src="http://localhost/Fuck/resources/assets/js/ie/respond.min.js"></script>
    <script src="http://localhost/Fuck/resources/assets/js/ie/excanvas.js"></script>
    <![endif]-->

</head>
<body>
<section class="vbox">
		<header class="bg-white-only header header-md navbar navbar-fixed-top-xs">
			<div class="navbar-header aside bg-info nav-xs">
				<a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html">
					<i class="icon-list"></i>
				</a>
				<a href="index.php" class="navbar-brand text-lt">
					<i class="icon-earphones"></i>
					<img src="http://localhost/Fuck/resources/assets/images/logo.png" alt="." class="hide">
					<span class="hidden-nav-xs m-l-sm">
					  Music
					</span>
				</a>
				<a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".user">
					<i class="icon-settings">
					</i>
				</a>
			</div>
			<ul class="nav navbar-nav hidden-xs">
				<li>
					<a href="#nav,.navbar-header" data-toggle="class:nav-xs,nav-xs" class="text-muted">
						<i class="fa fa-indent text">
						</i>
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
			
			<div class="navbar-right">
				<ul class="nav navbar-nav m-n hidden-xs nav-user user">
					<li class="hidden-xs">                
						<a href="http://localhost/Fuck/public/upload" >Upload</a>
					</li>
					<li class="hidden-xs">
						<a href="http://localhost/Fuck/public/profile" >Profile</a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle bg clear" data-toggle="dropdown">
						  <span class="thumb-sm avatar pull-right m-t-n-sm m-b-n-sm m-l-sm">
							<img src="http://localhost/Fuck/resources/assets/images/a0.png" alt="...">
							@if(Auth::user()) 
							{{ Auth::user()->name }}
							@endif
						  </span>
						  <b class="caret"></b>
						</a>
						<ul class="dropdown-menu animated fadeInRight">
							<li><span class="arrow top"></span><a href="#">Settings</a></li>
							<li><a href="http://localhost/Fuck/public/profile">Profile</a></li>
							<li><a href="docs.html">Help</a></li>
							<li class="divider"></li>
							<li><a href="http://localhost/Fuck/public/auth/logout" >Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</header>
		
		
		
		
		<?php //print_r($songs); ?>
		




<section>

<section class="hbox stretch">
<aside class="bg-black dk nav-xs aside hidden-print" id="nav">
    <section class="vbox">
        <section class="w-f-md scrollable">

            <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="10px" data-railOpacity="0.2">

                <!-- nav -->
                <nav class="nav-primary hidden-xs">
                    <ul class="nav bg clearfix">
                        <li class="hidden-nav-xs padder m-t m-b-sm text-xs text-muted">
                          @if(Auth::user())
							Recomendation 
							<small>You may listen this songs</small>
						  @else
							Discover
						  @endif	
                        </li>
                        <li>
                            <a href="javascript:void(0)" id="whats_new">
                                <i class="icon-disc icon text-success"></i>
                                <span class="font-bold">What's new</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" id="song_list">
                                <i class="icon-music-tone-alt icon text-info"></i>
                                <span class="font-bold">Song</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" id="albam_link" data-el="#bjax-el" data-replace="true">
                                <i class=" icon-film"></i>
                                <span class="font-bold">Album</span>
                            </a>
                        </li>
                        <li>
                            <!--  data-target="#content" data-el="#bjax-el" data-replace="true"-->
                            <a href="javascript:void(0)" id="artist_link">
                                <i class=" icon-user icon text-primary"></i>
                                <span class="font-bold">Artist</span>
                            </a>
                        </li>
                           <li>
                               <a href="javascript:void(0)" id="listen_href">
                                   <i class="icon-list icon text-info-dker"></i>
                                   <span class="font-bold">Listen</span>
                               </a>
                           </li>
                       </ul>
                   </nav>

				   
				   
                   <!-- / nav -->
            </div>
        </section>

        <footer class="footer hidden-xs no-padder text-center-nav-xs">
            <div class="bg hidden-xs ">

                <div class="dropdown dropup wrapper-sm clearfix">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <span class="thumb-sm avatar pull-left m-l-xs">
                        <img src="http://localhost/Fuck/resources/assets/images/a3.png" class="dker" alt="...">
                        <i class="on b-black"></i>
                      </span>

					  <span class="hidden-nav-xs clear">
                        <span class="block m-l">
                          <strong class="font-bold text-lt"><?php //echo Auth::user()->user ;?></strong>
                          <b class="caret"></b>
                        </span>
                        <span class="text-muted text-xs block m-l">Art Director</span>
                      </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight aside text-left">
                        <li>
                            <span class="arrow bottom hidden-nav-xs"></span>
                            <a href="#">Settings</a>
                        </li>
                        <li>
                            <a href="http://localhost/Fuck/public/profile">Profile</a>
                        </li>
                        <li>
                            <a href="docs.html">
                                Help
                            </a>
                        </li>

                        <li class="divider"></li>
                        <li><a href="http://localhost/Fuck/public/auth/logout">Logout</a></li>
                    </ul>

                </div>

            </div>

        </footer>

    </section>

</aside>

<!-- /.aside -->

<section id="content">
<section class="hbox stretch">

<section>

<section class="vbox">
<section class="scrollable padder-lg w-f-md" id="bjax-target">
	<div class="hidden-lx" style="display: none">

	    <button class="btn btn-sm bg-white btn-icon rounded" type="submit">
	        <i class="fa fa-search"> </i>
	    </button>
	          <input type="text" class="input-sm no-border rounded" placeholder="Search songs, albums...">
	</div>

    <a href="#" class="pull-right text-muted m-t-lg" data-toggle="class:fa-spin" >
        <i class="icon-refresh i-lg inline" id="refresh">
        </i>
    </a>

    <h2 class="font-thin m-b">	    
        
			@if(!Auth::user())  
				Recomendation<br/>
				<small style='font-size:13px;'>You may listen this songs</small>
			@else
				Discover
			@endif
		
		<span class="musicbar animate inline m-l-sm" style="width:20px;height:20px">
			<span class="bar1 a1 bg-primary lter"></span>
			<span class="bar2 a2 bg-info lt"></span>
			<span class="bar3 a3 bg-success"></span>
			<span class="bar4 a4 bg-warning dk"></span>
			<span class="bar5 a5 bg-danger dker"></span>
		</span>
    </h2>

   <div id="actual_content_hold">
		<!-- Add By Ashad -->
        <div class="row row-sm">
           <!--- For ONE SONG-->
           
           
               @foreach($songs as $s)
               <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">

                   <div class="item">
                       <div class="pos-rlt">
                           <div class="bottom">
                                  <span class="badge bg-info m-l-sm m-b-sm">
                                    {{ $s->song_duration }}
                                  </span>
                           </div>

                           <div class="item-overlay opacity r r-2x bg-black">
								<div class="text-info padder m-t-sm text-sm">
                                   <i class="fa fa-star"></i>
                                   <i class="fa fa-star"></i>
                                   <i class="fa fa-star"></i>
                                   <i class="fa fa-star"></i>
                                   <i class="fa fa-star-o text-muted"></i>
                                </div>
								<div class="center text-center m-t-n">
									<a href="#" class="play_button" id="{{ $s->song_url .'#'. $s->song_title  . '#'.  $s->artist_name }}" >
                                       <i class="icon-control-play i-2x"></i>
									</a>
								</div>
                                <div class="bottom padder m-b-sm">
									<a href="#" class="pull-right" >
                                       <i class="fa fa-heart-o"></i>
									</a>
                                    <a href="#" class="ad_playlist" id="{{  $s->song_url . '#' . $s->song_title .'#' .  $s->artist_name  }}">
                                       <i class="fa fa-plus-circle"></i>
                                    </a>
                               </div>
                           </div>
                           <a href="#">
                           	@if(isset($s->album_image))                            	   
                               <img src="http://nextstepbpo.com/music/public/resources/images/e86ac194181fcf9c6a69211eb3bb83aa.jpg" alt="" class="r r-2x img-full">
                            @else                               
                                <img src="http://nextstepbpo.com/music/public/resources/images/{{ $s->album_image }}" alt="" class="r r-2x img-full">                               
                            @endif   
                           </a>
                       </div>

                       <div class="padder-v">
                           <a href="#" class="text-ellipsis">
                               {{  $s->song_title  }}
                           </a>

                           <a href="#" class="text-ellipsis text-xs text-muted">
                               {{ $s->artist_name }}
                           </a>
						   
						   <a href="#" class="text-ellipsis">
							 dedication
						   </a>

                       </div>

                   </div>

               </div>

               @endforeach


			   <!-- FOREONW SONG END -->
       </div>

       <div class="row">

           <div class="col-md-7">

               <h3 class="font-thin">
                   New Songs
               </h3>

               <div class="row row-sm">
                       
                       <div class="col-xs-6 col-sm-3">
                           <div class="item">
                               <div class="pos-rlt">
                                   <div class="item-overlay opacity r r-2x bg-black">
                                       <div class="center text-center m-t-n">
                                           <a href="#" class="play_button" id="song_url#song_title#artist_name" >
                                               <i class="icon-control-play i-2x"></i>
                                           </a>
                                           <!-- <a href="#">
                                                <i class="fa fa-play-circle i-2x">
                                                </i>
                                            </a>
                                            -->
                                       </div>
                                   </div>
                                   <a href="#">
                                       <img src="http://nextstepbpo.com/music/public/resources/images/" alt="" class="r r-2x img-full">
                                   </a>
                               </div>
                               <div class="padder-v">
                                   <a href="#" class="text-ellipsis">
                                       song_title
                                   </a>
                                   <a href="#" class="text-ellipsis text-xs text-muted">
                                       artist_name
                                   </a>
								   
								    <a href="#" class="text-ellipsis">
										dedication
									</a>

								   
                               </div>
                           </div>
                       </div>

               </div>

           </div>

           <div class="col-md-5">

               <h3 class="font-thin">
                   Top Songs
               </h3>

               <div class="list-group bg-white list-group-lg no-bg auto">

 
                       <a href="#" class="list-group-item clearfix">
                           <span class="pull-right h2 text-muted m-l">12</span>
                           <span class="pull-left thumb-sm avatar m-r">
						   <img src="http://localhost/music/public/resources/images/" alt="..."></span>
                          <span class="clear">
                            <span>song_title</span>
                            <small class="text-muted clear text-ellipsis">
                                artist_name
                            </small>
							<small class="text-ellipsis">
								<a href="#">dedication</a>
							</small>
							
                          </span>
                       </a>

               </div>

           </div>

       </div>

   </div>
   <!-- END Ad BY ASHAD Actual Content Hold-->
    <div class="row m-t-lg m-b-lg">

        <div class="col-sm-6">
			<!--
            <div class="bg-primary wrapper-md r">				
                <a href="#">
				  <span class="h4 m-b-xs block">
					<i class=" icon-user-follow i-lg">
					</i>
					Login or Create account
				  </span>

				  <span class="text-muted">
					Save and share your playlist with your friends when you log in or create an account.
				  </span>
                </a>				
            </div>
			-->

        </div>

        <div class="col-sm-6">

			<!--
            <div class="bg-black wrapper-md r">

                <a href="#">

                          <span class="h4 m-b-xs block">
                            <i class="icon-cloud-download i-lg">
                            </i>
                            Download our app
                          </span>

                          <span class="text-muted">
                            Get the apps for desktop and mobile to start listening music at anywhere and anytime.
                          </span>

                </a>

            </div>
			-->
        </div>

    </div>
 </section>
 
 
 
<section id="details_data" style="display: none" class="scrollable padder-lg w-f-md"></section>

	<footer class="bg-dark  navbar-fixed-bottom ">
        <div style="position:absolute; top:-32%; right:0%;width: 18%; background-color: indianred" align="center" id="next_song_title" >No Record  </div>


    <div id="jp_container_N">
        <div class="jp-type-playlist">
            <div id="jplayer_N" class="jp-jplayer hide"></div>
            <div class="jp-gui">
                <div class="jp-video-play hide">
                    <a class="jp-video-play-icon">play</a>
                </div>
                <div class="jp-interface">
                    <div class="jp-controls">
                        <div>
                            <a class="jp-previous">
                                <i class="icon-control-rewind i-lg"></i>
                            </a>
                        </div>
                        <div>
                            <a class="jp-play">
                                <i class="icon-control-play i-2x"></i>
                            </a>
                            <a class="jp-pause hid">
                                <i class="icon-control-pause i-2x"></i>
                            </a>
                        </div>
                        <div>
                            <a class="jp-next">
                                <i class="icon-control-forward i-lg"></i>
                            </a>
                        </div>
                        <div class="hide">
                            <a class="jp-stop">
                                <i class="fa fa-stop"></i>
                            </a>
                        </div>
                        <div>
                            <a class="" data-toggle="dropdown" data-target="#playlist">
                                <i class="icon-list"></i>
                            </a>
                        </div>
                        <div class="jp-progress">
                            <div class="jp-seek-bar dk">
                                <div class="jp-play-bar bg-info"></div>
                                <div class="jp-title text-lt">
                                    <ul>
                                        <li></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                     <div class="hidden-xs hidden-sm jp-current-time text-xs text-muted"></div>
                      <div class="hidden-xs hidden-sm jp-duration text-xs text-muted"></div>

                       <!--  <div class="hidden-xs hidden-sm jp-current-time text-xs text-muted"></div>
                        <div class="hidden-xs hidden-sm jp-duration text-xs text-muted"></div>
                        -->
						
                        <div class="hidden-xs hidden-sm">
                            <a class="jp-mute" title="mute">
                                <i class="icon-volume-2">
                                </i>
                            </a>
                            <a class="jp-unmute hid" title="unmute">
                                <i class="icon-volume-off">
                                </i>
                            </a>

                        </div>
                        <div class="hidden-xs hidden-sm jp-volume">
                            <div class="jp-volume-bar dk">
                                <div class="jp-volume-bar-value lter">
                                </div>
                            </div>
                        </div>
                        <div>
                            <a class="jp-shuffle" title="shuffle">
                                <i class="icon-shuffle text-muted">
                                </i>
                            </a>
                            <a class="jp-shuffle-off hid" title="shuffle off">
                                <i class="icon-shuffle text-lt">
                                </i>
                            </a>
                        </div>
                        <div>
                            <a class="jp-repeat" title="repeat">
                                <i class="icon-loop text-muted">
                                </i>
                            </a>
                            <a class="jp-repeat-off hid" title="repeat off">
                                <i class="icon-loop text-lt">
                                </i>
                            </a>
                        </div>

                        <div class="hide">
                            <a class="jp-full-screen" title="full screen">
                                <i class="fa fa-expand">
                                </i>
                            </a>
                            <a class="jp-restore-screen" title="restore screen">
                                <i class="fa fa-compress text-lt">
                                </i>
                            </a>

                        </div>

                    </div>

                </div>

            </div>
            <div class="jp-playlist dropup" id="playlist">

                <ul class="dropdown-menu aside-xl dker">
                    <!-- The method Playlist.displayPlaylist() uses this unordered list -->
                    <li class="list-group-item">
                    </li>

                </ul>

            </div>

            <div class="jp-no-solution hide">
          <span>
            Update Required
          </span>
                To play the media you will need to either update your browser to a
                recent version or update your
                <a href="http://get.adobe.com/flashplayer/" target="_blank">
                    Flash plugin
                </a>
                .
            </div>

        </div>
    </div>
</footer>
</section>


</section>
<aside class="aside-md bg-light dk" id="sidebar">
    <section class="vbox animated fadeInRight">
        <section class="w-f-md scrollable hover">
            <form class="navbar-fixed-top footer-md bg-black" role="search">
                <div class="form-group clearfix m-b-none">
                    <div class="input-group m-t m-b"> 
						<span class="input-group-btn"> 
							<button type="submit" class="btn btn-sm bg-empty text-muted btn-icon">
								<i class="fa fa-search"></i>
							</button> 
						</span>
						<input type="text" class="form-control input-sm text-white bg-empty b-b b-dark no-border" placeholder="Search members"> 
					</div>
                </div>
            </form>
            <h4 class="font-thin m-l-md m-t">Connected</h4>
            <ul class="list-group no-bg no-borders auto m-t-n-xxs">
                <li class="list-group-item"> 
					<span class="pull-left thumb-xs m-t-xs avatar m-l-xs m-r-sm"> 
					<img src="http://localhost/Fuck/resources/assets/images/a1.png" alt="..." class="img-circle"> <i class="on b-light right sm"></i> </span>
                    <div class="clear">
                        <div><a href="#">Chris Fox</a></div> 
						<small class="text-muted">New York</small> 
					</div>
                </li>
                <li class="list-group-item"> 
					<span class="pull-left thumb-xs m-t-xs avatar m-l-xs m-r-sm"> 
						<img src="http://localhost/Fuck/resources/assets/images/a2.png" alt="..."> 
						<i class="on b-light right sm"></i> 
					</span>
                    <div class="clear">
                        <div><a href="#">Amanda Conlan</a></div> 
						<small class="text-muted">France</small> 
					</div>
                </li>
                <li class="list-group-item"> 
					<span class="pull-left thumb-xs m-t-xs avatar m-l-xs m-r-sm"> 
						<img src="http://localhost/Fuck/resources/assets/images/a3.png" alt="..."> 
						<i class="busy b-light right sm"></i> 
					</span>
                    <div class="clear">
                        <div><a href="#">Dan Doorack</a></div> 
						<small class="text-muted">Hamburg</small> 
					</div>
                </li>
                <li class="list-group-item"> 
					<span class="pull-left thumb-xs m-t-xs avatar m-l-xs m-r-sm"> 
					<img src="http://localhost/Fuck/resources/assets/images/a4.png" alt="..."> 
						<i class="away b-light right sm"></i> 
					</span>
                    <div class="clear">
                        <div><a href="#">Lauren Taylor</a></div> 
						<small class="text-muted">London</small> 
					</div>
                </li>
                <li class="list-group-item"> <span class="pull-left thumb-xs m-t-xs avatar m-l-xs m-r-sm"> 
					<img src="http://localhost/Fuck/resources/assets/images/a5.png" alt="..." class="img-circle"> <i class="on b-light right sm"></i> </span>
                    <div class="clear">
                        <div><a href="#">Chris Fox</a></div> <small class="text-muted">Milan</small> </div>
                </li>
                <li class="list-group-item"> <span class="pull-left thumb-xs m-t-xs avatar m-l-xs m-r-sm"> 
				<img src="http://localhost/Fuck/resources/assets/images/a6.png" alt="..."> <i class="on b-light right sm"></i> </span>
                    <div class="clear">
                        <div><a href="#">Amanda Conlan</a></div> <small class="text-muted">Copenhagen</small> </div>
                </li>
                <li class="list-group-item"> 
					<span class="pull-left thumb-xs m-t-xs avatar m-l-xs m-r-sm"> 
						<img src="http://localhost/Fuck/resources/assets/images/a7.png" alt="..."> 
						<i class="busy b-light right sm"></i> 
					</span>
                    <div class="clear">
                        <div><a href="#">Dan Doorack</a></div> 
						<small class="text-muted">Barcelona</small> 
					</div>
                </li>
                <li class="list-group-item"> 
					<span class="pull-left thumb-xs m-t-xs avatar m-l-xs m-r-sm"> 
					<img src="http://localhost/Fuck/resources/assets/images/a8.png" alt="..."> 
						<i class="away b-light right sm"></i> 
					</span>
                    <div class="clear">
                        <div><a href="#">Lauren Taylor</a></div> 
						<small class="text-muted">Tokyo</small> 
					</div>
                </li>
                <li class="list-group-item"> 
					<span class="pull-left thumb-xs m-t-xs avatar m-l-xs m-r-sm"> 
						<img src="http://localhost/Fuck/resources/assets/images/a9.png" alt="..." class="img-circle"> 
						<i class="on b-light right sm"></i> 
					</span>
                    <div class="clear">
                        <div><a href="#">Chris Fox</a></div> 
						<small class="text-muted">UK</small> 
					</div>
                </li>
                <li class="list-group-item"> 
					<span class="pull-left thumb-xs m-t-xs avatar m-l-xs m-r-sm"> 
						<img src="http://localhost/Fuck/resources/assets/images/a1.png" alt="..."> 
						<i class="on b-light right sm"></i> 
					</span>
                    <div class="clear">
                        <div><a href="#">Amanda Conlan</a></div> 
						<small class="text-muted">Africa</small> 
					</div>
                </li>
                <li class="list-group-item"> 
					<span class="pull-left thumb-xs m-t-xs avatar m-l-xs m-r-sm"> 
						<img src="http://localhost/Fuck/resources/assets/images/a2.png" alt="..."> 
						<i class="busy b-light right sm"></i> 
					</span>
                    <div class="clear">
                        <div><a href="#">Dan Doorack</a></div> 
						<small class="text-muted">Paris</small> 
					</div>
                </li>
                <li class="list-group-item"> 
					<span class="pull-left thumb-xs m-t-xs avatar m-l-xs m-r-sm"> 
					<img src="http://localhost/Fuck/resources/assets/images/a3.png" alt="..."> 
						<i class="away b-light right sm"></i> 
					</span>
                    <div class="clear">
                        <div><a href="#">Lauren Taylor</a></div> 
						<small class="text-muted">Brussels</small> 
					</div>
                </li>
            </ul>
        </section>
    </section>
</aside>

<a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html">
</a>
</section>
</section>
</section>


		
		
		
		
</section>	


<script src="http://localhost/Fuck/resources/assets/js/app.v1.js"></script>
<script src="http://localhost/Fuck/resources/assets/js/app.plugin.js"></script>
<script type="text/javascript" src="http://localhost/Fuck/resources/assets/js/jPlayer/jquery.jplayer.min.js"></script>
<script type="text/javascript" src="http://localhost/Fuck/resources/assets/js/jPlayer/add-on/jplayer.playlist.min.js"></script>
<script type="text/javascript" src="http://localhost/Fuck/resources/assets/js/jPlayer/demo.js"></script>

<script>
    $('#albam_link').click(function(){
        $('#details_data').html('');
       $('#bjax-target').html('');
        $('#bjax-target').load('genres.php');
        $('#bjax-target').show();
    });
    $('#whats_new').click(function(){
        $('#details_data').hide();
        $('#bjax-target').html('');
        $('#bjax-target').load('whatsnew.php');
        $('#bjax-target').show();
    });
    $('#song_list').click(function(){
        $('#details_data').hide();
        $('#bjax-target').html('');
        $('#bjax-target').load('songs.php');
        $('#bjax-target').show();
    });
    $('#artist_link').click(function(){
        $('#details_data').hide();
        $('#bjax-target').html('');
        $('#bjax-target').load('artist.php');
        $('#bjax-target').show();
    });
    $('#listen_href').click(function(){
        $('#details_data').hide();
        $('#bjax-target').html('');
        $('#bjax-target').load('listen.php');
        $('#bjax-target').show();
    });


    $(document).ready(function() {

            var myPlaylist = new jPlayerPlaylist({
                    jPlayer: "#jplayer_N",
                    cssSelectorAncestor: "#jp_container_N"
                }
                , [

                ], {
                    playlistOptions: {
                        enableRemoveControls: true,
                        autoPlay: true
                    }
                    ,
                    swfPath: "http://localhost/Fuck/resources/assets/js/jPlayer",
                    supplied: "webmv, ogv, m4v, oga, mp3",
                    smoothPlayBar: true,
                    keyEnabled: false,
                    audioFullScreen: false
                }

            );

            $(document).on($.jPlayer.event.pause, myPlaylist.cssSelector.jPlayer, function () {
                    $('.musicbar').removeClass('animate');
                    $('.jp-play-me').removeClass('active');
                    $('.jp-play-me').parent('li').removeClass('active');
                }
            );

            $(document).on($.jPlayer.event.play, myPlaylist.cssSelector.jPlayer, function () {
                    $('.musicbar').addClass('animate');
                }
            );


            $(document).on('click', '.jp-play-me', function (e) {
                    e && e.preventDefault();
                    var $this = $(e.target);
                    if (!$this.is('a')) $this = $this.closest('a');

                    $('.jp-play-me').not($this).removeClass('active');
                    $('.jp-play-me').parent('li').not($this.parent('li')).removeClass('active');

                    $this.toggleClass('active');
                    $this.parent('li').toggleClass('active');
                    if (!$this.hasClass('active')) {
                        myPlaylist.pause();
                    }
                    else {
                        var i = Math.floor(Math.random() * (1 + 7 - 1));
                        myPlaylist.play(i);
                    }

                }
            );
            $(".ad_playlist").click(function(){
                    var songname=$(this).attr('id');
                    var array_data= songname.split("#");
                 //   alert(array_data);
                //   $('#sidebar').add("dddd");
                    myPlaylist.add({
                            title: array_data[1],
                            artist: array_data[2],
                            mp3: "http://nextstepbpo.com/music/public/resources/songs/"+array_data[0],
                            poster: "http://localhost/Fuck/resources/assets/images/m0.jpg"
                        }
                    );
                    myPlaylist.nextInfo();

                    // myPlaylist.play();
                }
            );

            $('.play_button').click(function () {
                    myPlaylist.remove();
                   /// alert('d');
                    var songname=$(this).attr('id');
                    var array_data= songname.split("#");
                    myPlaylist.add({
                            title: array_data[1],
                            artist: array_data[2],
                            mp3:"http://nextstepbpo.com/music/public/resources/songs/"+array_data[0],
                            //mp3: "http://nextstepbpo.com/music/public/resources/songs/"+array_data[0],//"http://flatfull.com/themes/assets/musics/Miaow-03-Lentement.mp3",
                            //  oga: "http://flatfull.com/themes/assets/musics/Miaow-03-Lentement.ogg",
                            poster: "http://localhost/Fuck/resources/assets/images/m0.jpg"
                        }
                    );
                    myPlaylist.play();
                }
            );           
        }
    )
</script>
</body>
</html>