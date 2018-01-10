<!DOCTYPE html>
<html lang="fr">

<head>
	
	<?php include("structure/head.php"); ?>
	
	<title>KLUD Design | Bureau d'étude en design global, ingénierie générale, conception de produit, de mobilier et d'application web en freelance</title>
	
	<meta name="description" content="KLUD design est ingénieur designer indépendant dans les domaines du mobilier contemporain sur mesure, 
	du développement de produit industriel et du développement d’application web (site web, application web et mobile). 
	J’intègre des projets demandant des connaissances en design global, mécanique générale, électronique, informatique et numérique.">

</head>

<body>
	<?php include("structure/navigation.php"); ?>
	
	<header>
        <div class="container">
            <div class="intro-text">
				<img src="img/logo-klud.png" class="img-responsive img-klud" width="110" alt="logo_klud_design">
                <div class="intro-heading">KLUD DESIGN</div>        
				<div class="intro-lead-in">Freelance en design global et ingénierie générale</div>
				<div class="col-sm-4 portfolio-item"></div>
				<div class="col-sm-4 portfolio-item"><a href="https://twitter.com/klud_design" class="btn btn-xl twitter" target="_blank"><img src="img/twitter.png" class="img-responsive" alt="logo_twitter"></a></div>
				<div class="col-sm-4 portfolio-item"></div>
            </div>
        </div>
    </header>
	
	<?php include("structure/footer.php"); ?>
	
	<script>
		//defilement fluide d'une ID vers une ancre en pacge index
		$('a[href^="#"]').click(function(){
			var the_id = $(this).attr("href");

			$('html, body').animate({
				scrollTop:$(the_id).offset().top
			}, 'slow');
			return false;
		});
	</script>
</body>

</html>
