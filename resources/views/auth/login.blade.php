<!DOCTYPE html>
<html lang="en" class="bg-info">
<head> 
	<meta charset="utf-8" /> 
	<title>Nextstep Music Application</title> 
	<meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off creen nav" /> 
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	 <link rel="stylesheet" href="http://localhost/Fuck/resources/assets/js/jPlayer/jplayer.flat.css" type="text/css" /> 
	 <link rel="stylesheet" href="http://localhost/Fuck/resources/assets/css/app.v1.css" type="text/css" /> 
	 <!--[if lt IE 9]>
	  <script src="js/ie/html5shiv.js"></script> 
	  <script src="js/ie/respond.min.js"></script>
	   <script src="js/ie/excanvas.js"></script> 
	   <![endif]-->
	</head>
	<body class="bg-info"> 



		<section id="content" class="m-t-lg wrapper-md animated fadeInUp">
			<div class="container aside-xl"> 
			 	<a class="navbar-brand block" href="index-2.html">
					<span class="h1 font-bold">Nextstep Music</span>
				</a>

			 	<section class="m-b-lg"> 

				 	<header class="wrapper text-center"> 
					<strong>Sign in to get in touch</strong> 
					</header> 

				 	<form method="POST" action="http://localhost/Fuck/public/auth/check-login"> 
					     {!! csrf_field() !!}
				 		<div class="form-group"> 
				 			<input type="text" name="email" value="{{ old('email') }}" id="mobile_number" placeholder="Email or Mobile Number" class="form-control rounded input-lg text-center no-border"> 
				 		</div> 
						
				 		<div class="form-group"> 
				 			<input type="password" id="password" name="password" placeholder="Password" class="form-control rounded input-lg text-center no-border"> 
				 		</div> 

				 		<button type="submit" id="signin_btn" class="btn btn-lg btn-warning lt b-white b-2x btn-block btn-rounded">
				 			<i class="icon-arrow-right pull-right"></i>
				 			<span class="m-r-n-lg">Sign in</span>
				 		</button>

				 		<div class="text-center m-t m-b">
				 			<a href="#"><small>Forgot password?</small></a>
				 		</div> 
				 		
						<div class="line line-dashed"></div> 
				 		
						<p class="text-muted text-center">
							<small>Do not have an account?</small>
						</p>
				 		
						<a href="http://localhost/Fuck/public/auth/register" class="btn btn-lg btn-info btn-block rounded">
							Create an account</a> 
						 
				 	</form>
			 	</section> 
			</div> 
		</section>

	 <!-- footer -->
	  <footer id="footer"> 
	  	<div class="text-center padder">
	  	 <p> <small>All right reserved by Nextstep Interactive<br>&copy; 2015</small> </p> 
	  	</div> 
	  </footer> <!-- / footer -->


	<!-- Bootstrap --> <!-- App -->
	<script src="http://localhost/Fuck/resources/assets/js/app.v1.js"></script>
	<script src="http://localhost/Fuck/resources/assets/js/app.plugin.js"></script> 
	<script type="text/javascript" src="http://localhost/Fuck/resources/assets/js/jPlayer/jquery.jplayer.min.js"></script>
	<script type="text/javascript" src="http://localhost/Fuck/resources/assets/js/jPlayer/add-on/jplayer.playlist.min.js"></script> 
	<script type="text/javascript" src="http://localhost/Fuck/resources/assets/js/jPlayer/demo.js"></script>
	<script type="text/javascript" src="http://localhost/Fuck/resources/assets/js/sign_in.js"></script>


	</body>
</html>






<!--
<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

          
      
      <link href = "//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel = "stylesheet">
      
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      
      <!--[if lt IE 9]>
      <script src = "https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src = "https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    
	
		
	<!--	
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
				
					<form method="POST" action="http://localhost/Fuck/public/auth/check-login">
						{!! csrf_field() !!}
						<div>
							Email
							<input type="email" class="form-control" name="email" value="{{ old('email') }}">
						</div>

						<div>
							Password
							<input type="password" class="form-control" name="password" id="password">
						</div>

						<div>
							<input type="checkbox" class="form-control" name="remember"> Remember Me
						</div>

						<div>
							<button type="submit" class="btn btn-primary">Login</button>
						</div>
					</form>

				</div>			
            </div>
        </div>
		
      <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      
      <script src = "//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    
		
		
    </body>
</html>
-->

