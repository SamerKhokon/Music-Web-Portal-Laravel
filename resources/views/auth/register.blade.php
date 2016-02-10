<!DOCTYPE html>
<html lang="en" class="bg-info">
<head>
 <meta charset="utf-8" /> 
 <title>Nextstep Music Application</title>
  <meta name="description" content="app, , admin, flat, flat ui, ui kit, off screen nav" />
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
   <link rel="stylesheet" href="http://localhost/Fuck/resources/assets/js/jPlayer/jplayer.flat.css" type="text/css" /> 
   <link rel="stylesheet" href="http://localhost/Fuck/resources/assets/css/app.v1.css" type="text/css" /> 

   <!--[if lt IE 9]>
    <script src="http://localhost/Fuck/resources/assets/js/ie/html5shiv.js"></script> 
    <script src="http://localhost/Fuck/resources/assets/js/ie/respond.min.js"></script>
    <script src="http://localhost/Fuck/resources/assets/js/ie/excanvas.js"></script> 
  <![endif]-->

 </head>
 <body class="bg-info"> 

 	<section id="content" class="m-t-lg wrapper-md animated fadeInDown"> 
 		<div class="container aside-xl"> 
 			<a class="navbar-brand block" href="index.php">
				<span class="h1 font-bold">Nextstep Music</span>
			</a> 

 			<section class="m-b-lg"> 
 				<header class="wrapper text-center">
 					 <strong>Sign up to find interesting thing</strong> 
 				</header> 
				
				<!--<form action="http://flatfull.com/themes/musik/index.html"> -->
				
				<form method="POST" action="http://localhost/Fuck/public/auth/create"> 
					{!! csrf_field() !!}
 					<div class="form-group"> 
 						<input type="text" placeholder="Name" id="userName" value="{{ old('name') }}" class="form-control rounded input-lg text-center no-border"> 
 					</div> 

 					<div class="form-group"> 
 						<input type="text" name="email" placeholder="Email" value="{{ old('email') }}" id="userEmail" class="form-control rounded input-lg text-center no-border"> 
 					</div> 

 					<div class="form-group"> 
 						<input type="text" placeholder="Mobile Number" id="userMobile" class="form-control rounded input-lg text-center no-border"> 
 					</div> 

 					<div class="form-group"> 
 						<input type="password" placeholder="Password" id="userPassword" class="form-control rounded input-lg text-center no-border"> 
 					</div> 

 					<div class="checkbox i-checks m-b"> 
 						<label class="m-l"> 
 							<input type="checkbox" checked="">
							<i></i> Agree the <a href="#">terms and policy</a> 
 						</label> 
 					</div> 

 					<button type="button" id="reg_btn" class="btn btn-lg btn-warning lt b-white b-2x btn-block btn-rounded">
 						<i class="icon-arrow-right pull-right"></i>
						<span class="m-r-n-lg">Sign up</span>
 					</button> 

 					<div class="line line-dashed"></div> 

 					<p class="text-muted text-center"><small>Already have an account?</small></p> 
 					<a href="http://localhost/Fuck/public/auth/login" class="btn btn-lg btn-info btn-block btn-rounded">Sign in</a> 
					
 				</form> 
 			</section> 
 		</div> 
 	</section> 

 	<!-- footer --> 
 	<footer id="footer"> 
 		<div class="text-center padder clearfix"> 
 			<p> <small>All right reserved by Nextstep Interactive<br>&copy; 2015</small> </p> 
 		</div> 
 	</footer> 
 	<!-- / footer -->


  <!-- Bootstrap --> <!-- App -->
   <script src="http://localhost/Fuck/resources/assets/js/app.v1.js"></script> 
   <script src="http://localhost/Fuck/resources/assets/js/app.plugin.js"></script> 
   <script type="text/javascript" src="http://localhost/Fuck/resources/assets/js/jPlayer/jquery.jplayer.min.js"></script> 
   <script type="text/javascript" src="http://localhost/Fuck/resources/assets/js/jPlayer/add-on/jplayer.playlist.min.js"></script> 
   <script type="text/javascript" src="http://localhost/Fuck/resources/assets/js/jPlayer/demo.js"></script>
   <script src="http://localhost/Fuck/resources/assets/js/registration.js"></script>	
   
 </body>
</html>




