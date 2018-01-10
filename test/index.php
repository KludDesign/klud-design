<!DOCTYPE html>
<html lang="fr">

<head>
	
	<?php
	$path = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	$current = basename ($path);
	?>

	<meta charset="utf-8">
	<meta name="description" content="Lambert Coleman part la découverte de l'incroyable diversité culturelle du monde à travers la photographie. Entre anthropologie photographique et photodocumentaire, cet espace comporte de nombreux clichés issus de ses différents voyages.">
	<meta name="author" content="Vincent Gillibert">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Lambert Coleman photography | anthropologie photographique et photodocumentaire</title>

	<!-- Favicon -->
	<link rel="shortcut icon" href="../favicon.ico.png" type="image/png">

	<!-- Bootstrap Core CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<!-- Custom CSS -->
	<link rel="stylesheet" href="css/style-lambert-coleman.css" type="text/css">

	<!-- Font -->
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

	<body class="fond">
		<div class="entrer">
			<div class="bouton-entrer"><a href="SiteFR/menu.php">FR </a>|<a href="SiteEN/menu.php"> EN</a></div>
		</div>
		
	<footer>
		<div class="pubindex">
			<div class="kludindex">
			<p>&copy Lambert Coleman, website designed by <a href="http://www.klud.fr/web.php" target="_blank">klud.fr</a></p>
			</div>
		</div>
	</footer>
		

	<!-- jQuery -->
    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	
	<!-- perso -->
	<script>
	// Fondu intro
	$(document).ready(function() {
		$(".ecoleprivee-intro").click(function(event){
			event.preventDefault();
			linkLocation = "menu.php";
			$("body").fadeOut(1000, redirectPage);      
		});
			 
		function redirectPage() {
			window.location = linkLocation;
		}
	});
	</script>
		
	</body>

</html>
