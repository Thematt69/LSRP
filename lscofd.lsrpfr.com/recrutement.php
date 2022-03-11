<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Accueil - LSCoFD</title>
    <link rel="icon" href="images/sTeRFWaP_400x400_burned.png">
	<meta charset="utf-8">
    <META NAME="TITLE" CONTENT="Site du LSCoFD">
    <META NAME="AUTHOR" CONTENT="Los Santos Roleplay [FR]">
    <META NAME="DESCRIPTION" CONTENT="Page d'accueil - Site du LSCoFD">
    <META NAME="KEYWORDS" CONTENT="GTA 5, Online, Multijoueur, Serveur, Roleplay, EMS, LSPD, LSCoFD, Los Santos, FR">
    <META NAME="OWNER" CONTENT="Vivian Pirotton or Matthieu Devilliers">
    <META NAME="ROBOTS" CONTENT="index,all">
    <META NAME="Reply-to" CONTENT="admin@lsrpfr.com">
    <META NAME="REVISIT-AFTER" CONTENT="10">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<?php include("google_analytics.php"); ?>

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="styles/logo.css">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="styles/contact.css">
    <link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Menu -->

    <?php include("menu.php"); ?>
    
    <!-- Formulaire -->

    <?php
        if(htmlspecialchars($_POST['Nom'])=='')
        {
            ?>
            <div class="contact">
		        <div class="container">
			        <div class="row">                
				        <div class="col-lg-12 contact_col" style="margin-top: 110px">
					        <div class="contact_form">
						    <div class="contact_title">Formulaire de recrutement</div>
						        <div class="contact_form_container">
							        <form action="recrutement.php" method="POST" id="contact_form" class="contact_form">
								        <input name="Nom" type="text" id="contact_input" class="contact_input" placeholder="Votre Nom RP" required>
								        <input name="Prénom" type="text" id="contact_input" class="contact_input" placeholder="Votre Prénom RP" required>
							            <select name="Services" class="contact_input contact_select" required>
								            <option value="Aucun">Sélectionner un service</option>
								            <option value="Médical">Services Medical</option>
								            <option value="Incendie">Services Incendie</option>
								            <option value="CalFire">Cal Fire</option>
                                        </select>
                                        <br>
								        <textarea name="Motivations" class="contact_input contact_textarea" id="contact_textarea" placeholder="Vos motivations" required></textarea>
								        <button class="contact_button" id="contact_button">Envoyer ma demande</button>
                                    </form>
						        </div>
					        </div>
				        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        else
        {
            // Envoi du mail
            mail('devilliers.matthieu@gmail.com', 'Recrutement de ' . htmlspecialchars($_POST['Nom']) . ' ' . htmlspecialchars($_POST['Prénom']) . ' - LSCoFD', 'Nom : ' . htmlspecialchars($_POST['Nom']) . '          Prénom : ' . htmlspecialchars($_POST['Prénom']) . '          Services demandée : ' . htmlspecialchars($_POST['Services']) . '          Motivations : ' . htmlspecialchars($_POST['Motivations']));
            ?>
            <div class="contact">
		        <div class="container">
			        <div class="row">                
				        <div class="col-lg-12 contact_col" style="margin-top: 110px">
					        <div class="contact_form">
						    <div class="contact_title">Formulaire de recrutement</div>
						        <div class="contact_form_container">
							        <form action="recrutement.php" method="POST" id="contact_form" class="contact_form">
								        <input name="Nom" type="text" id="contact_input" class="contact_input" placeholder="Votre Nom RP" required>
								        <input name="Prénom" type="text" id="contact_input" class="contact_input" placeholder="Votre Prénom RP" required>
							            <select name="Services" class="contact_input contact_select" required>
								            <option value="Aucun">Sélectionner un service</option>
								            <option value="Médical">Services Medical</option>
								            <option value="Incendie">Services Incendie</option>
								            <option value="CalFire">Cal Fire</option>
                                        </select>
                                        <br>
								        <textarea name="Motivations" class="contact_input contact_textarea" id="contact_textarea" placeholder="Vos motivations" required></textarea>
								        <button class="contact_button" id="contact_button">Envoyer ma demande</button>
                                        <br><br><br>
                                        <div class="contact_title">Votre demande a bien été envoyée au service concerné !</div>
                                    </form>
						        </div>
					        </div>
				        </div>
                    </div>
                </div>
            </div>
            <?php
        }   
            ?>

    
    
    
    <!-- Footer -->

	<?php include("footer.php"); ?>

</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>