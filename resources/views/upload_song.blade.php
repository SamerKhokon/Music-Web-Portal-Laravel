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
					<span class="h3 font-bold">User Music Request</span>
				</a>

			 	<section class="m-b-lg"> 

					<form method="POST" enctype="multipart/form-data" action="http://localhost/Fuck/public/up-file">
						{!! csrf_field() !!}
					    
						<input type="file" name="song_name"  class="form-control rounded input-lg text-center no-border" />
						<p></p>

						<input type="text" name="song_title" placeholder="Song Title"  class="form-control rounded input-lg text-center no-border" />
						<p></p>


						<input type="text" name="song_remarks" placeholder="Remarks"  class="form-control rounded input-lg text-center no-border" />
						<p></p>

						<input type="submit" class="btn btn-lg btn-warning lt b-white b-2x btn-block btn-rounded" value="Upload"/>
						
					</form>	


				</section> 
			</div> 
		</section>



	<!-- Bootstrap --> <!-- App -->
	<script src="http://localhost/Fuck/resources/assets/js/app.v1.js"></script>
	<script src="http://localhost/Fuck/resources/assets/js/app.plugin.js"></script> 
	<script type="text/javascript" src="http://localhost/Fuck/resources/assets/js/jPlayer/jquery.jplayer.min.js"></script>
	<script type="text/javascript" src="http://localhost/Fuck/resources/assets/js/jPlayer/add-on/jplayer.playlist.min.js"></script> 
	<script type="text/javascript" src="http://localhost/Fuck/resources/assets/js/jPlayer/demo.js"></script>
	<script type="text/javascript" src="http://localhost/Fuck/resources/assets/js/sign_in.js"></script>


	</body>
</html>
