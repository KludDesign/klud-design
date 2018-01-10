<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">KLUD<span>Design</span></a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li class="<?php if ($current == 'bureau_etude.php'){ echo 'current';} else{ echo'no_current';}?>"><a class="page-scroll" href="bureau_etude.php">Le bureau d'étude</a></li>
				<li class="<?php if ($current == 'mobilier.php'){ echo 'current';} else{ echo'no_current';}?>"><a class="page-scroll" href="mobilier.php">Mobilier</a></li>
				<li class="<?php if ($current == 'produit.php'){ echo 'current';} else{ echo'no_current';}?>"><a class="page-scroll" href="produit.php">Produit</a></li>
				<li class="<?php if ($current == 'web.php'){ echo 'current';} else{ echo'no_current';}?>"><a class="page-scroll" href="web.php">Web</a></li>
				<li class="<?php if ($current == 'contact.php'){ echo 'current';} else{ echo'no_current';}?>"><a class="page-scroll" href="contact.php">Contact</a></li>
			</ul>
		</div>
		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container-fluid -->
</nav>