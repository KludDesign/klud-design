<!DOCTYPE html>
<html lang="fr">

<head>

	<?php include("structure/head.php"); ?>
	
	<title>KLUD Design | Design et conception de produit industriel</title>
	
	<meta name="description" content="Design et développement de produits industriels.">

</head>

<body>

	<?php include("structure/navigation.php"); ?>

	<section id="portfolio">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-6 portfolio-item marge-photo">
                    <a href="#" class="portfolio-link" data-toggle="modal" data-target="#modulariteConsole">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>					
                            </div>
							<h1>Console de commandement</h1>	
                        </div>
                        <img src="img/produit/modularite_console.jpg" class="img-responsive" alt="Console de commandement">
                    </a>
                </div>				
				<!-- <div class="col-md-4 col-sm-6 portfolio-item marge-photo">
                    <a href="#" class="portfolio-link" data-toggle="modal" data-target="#chaiseMedicale">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>					
                            </div>
							<h1>Chaise medicale</h1>	
                        </div>
                        <img src="img/produit/chaise_Medicale.jpg" class="img-responsive" alt="">
                    </a>
                </div> -->
				<div class="col-md-4 col-sm-6 portfolio-item marge-photo">
                    <a href="#" class="portfolio-link" data-toggle="modal" data-target="#pinceSkimmer">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
							<h1>Pince de skimmer</h1>
                        </div>
                        <img src="img/produit/Pince_Skimmer.jpg" class="img-responsive" alt="Pince de skimmer">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item marge-photo">
                    <a href="#" class="portfolio-link" data-toggle="modal" data-target="#kub">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>					
                            </div>
							<h1>Centrale de méthanisation</h1>	
                        </div>
                        <img src="img/produit/kub.jpg" class="img-responsive" alt="Centrale de méthanisation">
                    </a>
                </div>
			</div>
		</div>
	</section>
	
	<?php include("structure/galerieProduit.php"); ?>

    <?php include("structure/footer.php"); ?>
	
</body>

</html>
