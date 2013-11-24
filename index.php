<?php
//Include backend/init.php
require 'backend/init.php';

if($_GET['register']) {
	require 'backend/register.php';
} else if ($_GET['activate']) {
	require 'backend/activate.php';
} else if ($_GET['login']) {
	require 'backend/login.php';
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Index 1</title>
	<meta name="author" content="" />
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta name="viewport" content="initial-scale=1">
	<meta http-equiv="x-dns-prefetch-control" content="on" />
	<link rel="dns-prefetch" href="//ajax.googleapis.com" />
	<link rel="stylesheet" href="css/styles.css" />
</head>
<!--[if lt IE 8]><body class="ie ie7"><![endif]-->
<!--[if IE 8]><body class="ie ie8"><![endif]-->
<!--[if IE 9]><body class="ie ie9"><![endif]-->
<!--[if !IE]><!--><body><!--<![endif]-->
	<div class="app">
	<div class="popup-container">
		<div class="popup">
			<span class="ui-btn-close icon-close"></span>
			<h4 class="popup-heading">Type in your email and sign up for the beta!</h4>
			<input type="text" placeholder="Type email here">
			<input type="submit"class="btn btn-login" value="Enroll today!">
		</div>
	</div>

		<div class="container main-block">
			<header class="header centered">
				<img class="logo" src="img/getlistlogo.svg">
			</header>
				<section class="row main">
					<div class="column large-12 login-module">
						<form class="create-profile is-visible">
							<input type="text" id="userEmail" class="login" placeholder="Email">
							<input type="password" id="userPassword" class="login" placeholder="Password">
							<a href="#" class="btn btn-succes">Create my Account!</a>
							<a href="#" id="accountExists">I already have an account</a>
						</form>
						<form class="login-user">
							<input type="text" id="userEmail" class="login" placeholder="Email">
							<input type="password" id="userPassword" class="login" placeholder="Password">
							<a href="#" class="btn btn-login">Log me in!</a>
							<a href="#" id="accountNone">I changed my mind! I need a profile!</a>
						</form>
					</div>
				</section>
			<!--What does the fox say?-->
		</div>
	</div>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="/js/vendor/jquery.min.js"><\/script>')</script>
	<!--[if IE]><script src="/js/vendor/PIE.js"></script><![endif]-->
	<script src="js/app.js"></script>
	<script>
		$("#accountExists").click(function(){
		  $(".create-profile, .login-user").toggleClass('is-visible');
		});
		$("#accountNone").click(function(){
			$(".login-user, .create-profile").toggleClass('is-visible');
		});
	</script>
</body>
</html>