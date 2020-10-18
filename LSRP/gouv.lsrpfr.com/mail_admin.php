<!DOCTYPE HTML>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Confirmation de l'envoi - Site du gouvernement">
        <meta name="author" content="Los Santos RP [FR] - Matthieu Devilliers">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Site officiel du Gouvernement</title>
        <link rel="icon" href="images/xCesWdT.png">
	
	    <!-- Font -->
	    <link href="https://fonts.googleapis.com/css?family=Roboto:400,600,700" rel="stylesheet">
	
	    <!-- Stylesheets -->
	
	    <link href="plugin-frameworks/bootstrap.css" rel="stylesheet">
	    <link href="fonts/ionicons.css" rel="stylesheet">
	    <link href="common/styles.css" rel="stylesheet">

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <?php include("google_analytics.php"); ?>
	
    </head>

    <body>

        <?php
        include("entete.php");

        if(htmlspecialchars($_POST['Mdp'])=='jetaimepas')
        {
            // Envoi du mail
            mail('matthieu@devilliers.fr', 'Message du gouvernement - LSRPFR', htmlspecialchars($_POST['Message']));
            ?>
            <section style="text-align:center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="mb-30 p-30 ptb-sm-25 plr-sm-15 card-view">
                                <h3>Le message a bien été envoyé.</h3>
                                <h3>Vous aurez une réponses dans quelques heures.</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php
        }
        else
        {
            ?>
            <section style="text-align:center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="mb-30 p-30 ptb-sm-25 plr-sm-15 card-view">
                                <h3>Votre mot de passe est incorrect !</h3>
                                <h3>Le message n'a pas été envoyé.</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php
        }
        ?>
        
    

        <?php include("pied_de_page.php"); ?>
	
	    <!-- SCIPTS -->
	    <script src="plugin-frameworks/jquery-3.2.1.min.js"></script>
	    <script src="plugin-frameworks/tether.min.js"></script>
	    <script src="plugin-frameworks/bootstrap.js"></script>
	    <script src="common/scripts.js"></script>
    </body>
</html>