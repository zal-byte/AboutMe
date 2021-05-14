<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="My Profile">
	<link rel="stylesheet" type="text/css" href="bs5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="style/font-awesome.min.css">
	<title>About Me</title>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="bs5/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/popper.min.js"></script>
	<script type="text/javascript" src="js/kit.js"></script>
	<style type="text/css">
		body{
			margin: 0;
			padding-bottom: 50px;
			font-family: google-sans;
		}
		@font-face{
			font-family: google-sans;
			src:url("font/google_sans.ttf");
		}
		footer{
			bottom: 0;
			width: 100%;
			height: -150px;
			position: fixed;
			background-color: #f5f5f5;
		}
		.forto-img{
			width: 125px;
			height: 125px;
		}
		.sky{
			background-color: #e9ecef;
		}
		.hov:hover{
			background-color: skyblue;
		}
	</style>
</head>
<body>
<!-- 	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" role="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#demo" aria-expanded="false">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar">
					</span>
					<span class="icon-bar">
					</span>
					<span class="icon-bar">
					</span>			
				</button>
				<a href="#" class="navbar-brand page-scroll">Rizal</a>
			</div>
			<div class="navbar-collapse collapse" id="demo">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#" class="page-scroll">About</a></li>
					<li><a href="#" class="page-scroll">Portofolio</a></li>
					<li><a href="#" class="page-scroll">Contanct</a></li>
				</ul>
			</div>
		</div>
	</div> -->

	<div class="jumbotron text-center">
		<img src="http://192.168.43.15/priv/crack/zalbyte/zalbyte/amatsuka_uto/png/chibi_uto.png" class="rounded-circle img-responsive" style="height: 10em;">
		<h1>Rizal Solehudin</h1>
		<p>Student | Mobile Application Developer </p>
	</div>

	<section class="about" id="about">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h2 class="text-center">
						About
					</h2>
					<hr>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4">
					<p> ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
				<div class="col-sm-4">
					<p> ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
				<div class="col-sm-4">
					<p> ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
			</div>
		</div>
	</section>
	<section class="section mb-4 mt-2" id="portofolio">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h2 class="text-center">
						Portofolio
					</h2>
					<hr>
				</div>
			</div>
			<center>
			<div class="row">
				<div class="col-sm m-1">
					<a href="#" class="thumbnail">
						<div class="card border-0 shadow">
							<div class="card-body">
								<img src="http://192.168.43.15/priv/crack/zalbyte/zalbyte/amatsuka_uto/png/chibi_uto.png" class="forto-img">
							</div>
						</div>
					</a>
				</div>
				<div class="col-sm m-1">
					<a href="#" class="thumbnail">
						<div class="card border-0 shadow">
							<div class="card-body">
								<img src="http://192.168.43.15/priv/crack/zalbyte/zalbyte/amatsuka_uto/png/chibi_uto.png" class="forto-img">
							</div>
						</div>
					</a>
				</div>
				<div class="col-sm m-1">
					<a href="#" class="thumbnail">
						<div class="card border-0 shadow">
							<div class="card-body">
								<img src="http://192.168.43.15/priv/crack/zalbyte/zalbyte/amatsuka_uto/png/chibi_uto.png" class="forto-img">
							</div>
						</div>
					</a>
				</div>
			</div>
			</center>
		</div>
	</section>
	<section class="section sky" id="contact">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h3 class="text-center"> Contact Me </h3>
					<hr>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<form>
						<div class="form-group">
							<label for="nama">Nama</label>
							<input type="text" id="nama" class="form-control shadow" placeholder="Nama Lengkap">
							<label for="email">Email</label>
							<input type="email" id="email" class="form-control shadow" placeholder="Email">
							<label for="pesan">Pesan</label>
							<textarea class="form-control shadow" id="pesan" rows="10" placeholder="Pesan"></textarea>
							<button type="submit" class="btn shadow p-2 mt-1 hov" style="width: 100px;"><span class="fa fa-send"></span></button>
						</div>
					</form>
				</div>
				<div class="col-sm">
					<center>
						<div class="container shadow pl-5 pb-5 pr-5">
							<p class="font-weight-bold text-center mt-2">Social Media</p>
							<div class="row">
								<div class="col-sm">
									<a href="https://facebook.com/rizal.lolicondesu">
										<span class="fa fa-facebook-square" style="font-size: 50px; color: darkcyan;">
										</span>	
									</a>
								</div>
								<div class="col-sm">
									<a href="https://twitter.com/Zappan10">
										<span class="fa fa-twitter-square" style="font-size: 50px; color: darkcyan;">
										</span>	
									</a>
								</div>
								<div class="col-sm">
									<a href="https://github.com/zal-byte">
										<span class="fa fa-github" style="font-size: 50px; color: darkcyan;">
										</span>	
									</a>
								</div>
							</div>
						</div>
					</center>
				</div>
			</div>
		</div>
	</section>
	<footer>
		<div class="container text-center">
			<div class="row">
				<div class="col-sm-12">
					<p>&copy; copyright 2021 | <span style="color: darkblue;">Rizal Solehudin</span></p>
				</div>
			</div>
		</div>
	</footer>
	<script type="text/javascript" src="js/boorubooru.js"></script>
</body>
</html>