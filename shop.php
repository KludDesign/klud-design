<!DOCTYPE html>
<html lang="fr">

<head>

	<?php
	$path = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	$current = basename ($path);
	?>
	
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="Vincent Gillibert">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <title>KLUD Design | Designer, concepteur de produit, mobilier et site web</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link href="css/style-klud.css" type="text/css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

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
                <a class="navbar-brand" href="index.php">KLUD</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="<?php if ($current == 'mobilier.php'){ echo 'current';} else{ echo'no_current';}?>"><a class="page-scroll" href="mobilier.php">Mobilier</a></li>
                    <li class="<?php if ($current == 'produit.php'){ echo 'current';} else{ echo'no_current';}?>"><a class="page-scroll" href="produit.php">Produit</a></li>
                    <li class="<?php if ($current == 'web.php'){ echo 'current';} else{ echo'no_current';}?>"><a class="page-scroll" href="web.php">Web</a></li>                    
                    <li class="<?php if ($current == 'bureau_etude.php'){ echo 'current';} else{ echo'no_current';}?>"><a class="page-scroll" href="bureau_etude.php">Bureau d'étude</a></li>
                    <li class="<?php if ($current == 'shop.php'){ echo 'current';} else{ echo'no_current';}?>"><a class="page-scroll" href="shop.php">Shop</a></li>
					<li class="<?php if ($current == 'contact.php'){ echo 'current';} else{ echo'no_current';}?>"><a class="page-scroll" href="contact.php">Contact</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <span class="copyright">Copyright &copy; klud-design.fr</span>
                </div>                
            </div>
        </div>
    </footer>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/klud.js"></script>
	
</body>

</html>
