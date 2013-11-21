<?php
//Include backend/init.php
require 'backend/init.php';
require 'backend/register.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Index 1</title>
	<meta name="author" content="" />
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta name="HandheldFriendly" content="True" />
	<meta name="MobileOptimized" content="640" />
	<meta name="format-detection" content="telephone=no" />
	<meta http-equiv="cleartype" content="on" />
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
			<header class="header">
				<h1 class="logo">get<span class="logoalternate">li.st</span></h1>	
			</header>
				<section class="row main">
					<div class="column large-12 login-module">
						<form class="create-profile activated">
							<input type="text" id="username">
							<input type="password" id="userpassword">
							<input type="text" id="useremail">
						</form>
						<form class="login-user">
							<input type="text" id="username">
							<input type="password" id="userpassword">
						</form>
					</div>
				</section>
			<footer class="footer columns">
				<!--Social Links should go here-->
				<a href="#" class="logo">GET<span class="logoalternate">LI.ST</span></a>	
			</footer>	
			<!--What does the fox say?-->
		</div>
	</div>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="/js/vendor/jquery.min.js"><\/script>')</script>
	<!--[if IE]><script src="/js/vendor/PIE.js"></script><![endif]-->
	<script src="js/app.js"></script>
	<script>
		$("#optin").click(function(){
		  $(".popup-container").fadeIn('slow');
		});
		$(".ui-btn-close").click(function(){
		  $(".popup-container").fadeOut('slow');
		});
	</script>
</body>
</html> <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Index 1</title>
	<meta name="author" content="" />
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta name="HandheldFriendly" content="True" />
	<meta name="MobileOptimized" content="640" />
	<meta name="format-detection" content="telephone=no" />
	<meta http-equiv="cleartype" content="on" />
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
			<header class="header">
				<h1 class="logo">get<span class="logoalternate">li.st</span></h1>	
			</header>
				<div class="loginarea-module large-6 columns">
					<form>
						<input type="password" class="login" placeholder="Enter your password here">
						<input type="submit" class="btn btn-login" value="Login">
						<a href="#" id="optin" class="btn btn-optin">OptIn for Beta</a>
					</form>
				</div>

				<div class="information-module large-6 columns">
					<p class="information-text">Denne tekst er meget informativ, og hvis du ikke forstår den.
					Så får du et problem, da den er ultra mega meget informativ og hvis man ikke forstår den, er man
					en kæmpe idiot og burde skydes med en søm pistol eller sådan noget fis. Bare spørg din far?</p>

					<p class="information-text">Denne tekst er meget informativ, og hvis du ikke forstår den.
					Så får du et problem, da den er ultra mega meget informativ og hvis man ikke forstår den, er man
					en kæmpe idiot og burde skydes med en søm pistol eller sådan noget fis. Bare spørg din far?</p>
				</div>	
			<footer class="footer columns">
				<!--Social Links should go here-->
				<a href="#" class="logo">GET<span class="logoalternate">LI.ST</span></a>	
			</footer>	
			<!--What does the fox say?-->
		</div>
	</div>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="/js/vendor/jquery.min.js"><\/script>')</script>
	<!--[if IE]><script src="/js/vendor/PIE.js"></script><![endif]-->
	<script src="js/app.js"></script>
	<script>
		$("#optin").click(function(){
		  $(".popup-container").fadeIn('slow');
		});
		$(".ui-btn-close").click(function(){
		  $(".popup-container").fadeOut('slow');
		});
	</script>
</body>
</html>