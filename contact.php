<!DOCTYPE html>
<html lang="fr">

<head>

	<?php include("structure/head.php"); ?>

	<title>KLUD Design | Formulaire de contact</title>
	
</head>

<body>

	<?php include("structure/navigation.php"); ?>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact</h2>
                    <p class="text-muted">Laissez-moi votre message, je vous recontacterai le plus rapidement possible.</p>
                </div>
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nom *" id="name" required data-validation-required-message="Entrez votre nom.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email *" id="email" required data-validation-required-message="Entrez votre adresse email.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Message *" id="message" required data-validation-required-message="Entrez votre message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Envoyer le message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

	<!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
	
	<?php include("structure/footer.php"); ?>
	
</body>

</html>
