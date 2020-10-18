<!DOCTYPE HTML>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Page d'administration - Site du gouvernement">
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

        <?php include("entete.php"); ?>

        <section style="text-align:center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-view">
                            <h3>Faire une demande au admin</h3>
                            <form method="POST" action="mail_admin.php">
                                <label>Entrez votre prénom : <input type="text" name="Prénom" placeholder="Ex : Aaron"></label><br><br>
                                <label>Entrez votre nom : <input type="text" name="Nom" placeholder="Ex : Barton"></label><br><br>
                                <label>Demande : <textarea name="Message"></textarea></label><br><br>
                                <label>Mot de passe : <input type="password" name="Mdp"></label><br><br>
                                <input type="submit" value="Envoyer la demande">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include("pied_de_page.php"); ?>
	
	    <!-- SCIPTS -->
	    <script src="plugin-frameworks/jquery-3.2.1.min.js"></script>
	    <script src="plugin-frameworks/tether.min.js"></script>
	    <script src="plugin-frameworks/bootstrap.js"></script>
	    <script src="common/scripts.js"></script>
    </body>
</html>