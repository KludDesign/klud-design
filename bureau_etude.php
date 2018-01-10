<!DOCTYPE html>
<html lang="fr">

<head>

	<?php include("structure/head.php"); ?>
	
	<title>KLUD Design | Bureau d'étude mécanique, informatique, électronique, numérique et atelier de prototypage</title>
	
	<meta name="description" content="Klud design propose des services de développement de produit en innovant par le design, les matériaux et la technique. Sont utilisés des outils tel que l'optimisation topologique afin de réduire le poids des pièces et des outils de calcul de structure dont la méthode par éléments finis pour la validation de la structure.">

</head>

<body>

	<?php include("structure/navigation.php"); ?>
	
	<section>
		<div class="container">
			<div class="row">
			
				<!-- Nav tabs -->
				<div class="col-sm-3">
				  <ul class="nav nav-pills nav-stacked side-menu" role="tablist">
					<li role="presentation" class="active"><a href="#design" aria-controls="design" role="tab" data-toggle="tab">Design</a></li>
					<li role="presentation"><a href="#conception" aria-controls="conception" role="tab" data-toggle="tab">Etude / Conception</a></li>
					<li role="presentation"><a href="#optimisation" aria-controls="optimisation" role="tab" data-toggle="tab">Optimisation topologique</a></li>
					<li role="presentation"><a href="#proto" aria-controls="proto" role="tab" data-toggle="tab">Fabrication</a></li>
				  </ul>
				</div>
				
				  <!-- Tab panes -->
				<div class="col-sm-9 fondBlanc">
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="design">
							<h1 class="text-center">Design</h1>
							<p>Le design comme innovation est utilisé dans la majorité de mes projets. Le but est d'apporter au produit une esthétique moderne, adaptée à sa culture et à son environnement. De plus, et Faisant parti intégrante du design, l’ergonomie est étudiée pour améliorer le confort et l’efficacité du produit.</p>
							<p>Qu'il s'agisse du développement d’un nouveau produit ou de l’étude d’un produit existant, le design répond aujourd'hui à un des critères les plus importants dans le cycle de vente d’un produit. Il ne doit en aucun cas être négligé.</p>
						</div>
						<div role="tabpanel" class="tab-pane" id="conception">
							<h1 class="text-center">Conception / Etude de faisabilité</h1>
							<p>Après avoir validé le design formel du produit, étape par étape, la conception va devoir répondre à l’exigence du design :</p>
							<p>Sélection des composants standard, modélisation 3D du produit, calculs de structure, prototypes, validations</p>
							<img src="img/BE/conception.png" class="img-responsive" alt="Etude mécanique">
						</div>
						<div role="tabpanel" class="tab-pane" id="optimisation">
							<h1 class="text-center">Optomisation topologique</h1>
							<p>L’optimisation topologique est un outil qui apporte une approche différente pour le design et la conception d’un produit. Axé sur la simulation, le but est d’optimiser des pièces mécaniques pour ne garder que la matière nécessaire. 
							Actuellement, le concepteur se sert de son expérience pour approcher la forme la plus optimum de la pièce. Puis, à l’aide de la méthode par élément fini, il valide la tenue mécanique de celle-ci et fait des allers retours jusqu’à atteindre les meilleurs performances. 
							Cette approche de l'amélioration par essais-erreurs est lente et ne garantit pas de trouver le design optimum.</p>
							
							<p>La méthode d'optimisation topologique répond aux objectifs de design, de performances, d’écologie et de diminution des coûts d’un produit.</p>
							<p>Les gains qu’offre l’optimisation topologique :</p>
							<p>
							-	Diminution du poids des pièces<br/>
							-	Economie de matière première<br/>
							-	Réduction du temps de développement</p>
							<p>Je vous propose donc d'étudier vos projets de conception, retro-conception et/ou d'allégement de pièces.</p>
							<img src="img/BE/optimisation-topologique.png" class="img-responsive" alt="Optimisation topologique">
							</div>
						<div role="tabpanel" class="tab-pane" id="proto">
						<h1 class="text-center">Prototypage / Fabrication</h1>
							<p>Réalisation de prototypes ou petites séries en bois, métal, plastique, composites... suivant différents processus de fabrication (moulage, usinage, collage, impression 3D…), et selon le besoin du projet.</p>
							<!-- <img src="img/BE/atelier.jpg" class="img-responsive" alt="atelier"> -->
						</div>
					</div>
				</div>				
			</div>
		</div>
	</section>		

    <?php include("structure/footer.php"); ?>
	
</body>

</html>
