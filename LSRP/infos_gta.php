<?php
session_start();

/*if($_SESSION['prenom']!=NULL)
{
    try
	{
	    // On se connecte à MySQL
		$bdd = new PDO('mysql:host=95.156.227.201;dbname=zap385305-1;charset=utf8', 'zap385305-1', 'JuDWy5SdzQDW4D1e', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch(Exception $e)
	{
		// En cas d'erreur, on affiche un message et on arrête tout
		die('Erreur : '.$e->getMessage());
	}

	// Si tout va bien, on peut continuer
	// On récupère tout le contenu
	$reponse = $bdd->prepare('SELECT job, bank, firstname, lastname FROM users WHERE firstname = ?');
	$reponse->execute(array($_SESSION['prenom']));

	// On affiche chaque entrée une à une
	while ($donnees = $reponse->fetch())
	{
        $bank = $donnees['bank'];
        $job = $donnees['job'];
	}
	$reponse->closeCursor(); // Termine le traitement de la requête
}*/

if($_SESSION['utilisateur']!=NULL)
{
    include_once("bdd/bdd_site.php");

	// Si tout va bien, on peut continuer
	// On récupère tout le contenu
	$reponse1 = $bdd->prepare('SELECT * FROM compte WHERE utilisateur = ?');
	$reponse1->execute(array($_SESSION['utilisateur']));

	// On affiche chaque entrée une à une
	while($donnees1 = $reponse1->fetch())
	{
        if($_SESSION['prenom']!=NULL)
        {
			$_SESSION['prenom'] = $donnees1['prenom'];
        }
        if($_SESSION['nom']!=NULL)
        {
			$_SESSION['nom'] = $donnees1['nom'];
        }
	}
	$reponse1->closeCursor(); // Termine le traitement de la requête
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <META NAME="TITLE" CONTENT="Site du serveur GTA 5 LSRP [FR]">
    <META NAME="AUTHOR" CONTENT="Los Santos Roleplay [FR]">
    <META NAME="DESCRIPTION" CONTENT="Informations GTA V - Site du serveur GTA 5 LSRP [FR]">
    <META NAME="KEYWORDS" CONTENT="GTA 5, Online, Multijoueur, Serveur, Roleplay, EMS, LSPD, LSCoFD, Los Santos, FR">
    <META NAME="OWNER" CONTENT="Matthieu Devilliers">
    <META NAME="ROBOTS" CONTENT="index,all">
    <META NAME="Reply-to" CONTENT="devilliers.matthieu@gmail.com">
    <META NAME="REVISIT-AFTER" CONTENT="10">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Informations GTA V - Los Santos RolePlay</title>
    <link rel="icon" href="img/Sans_titre-1.png">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/audioplayer.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/classy-nav.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/one-music-icon.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/util.css">
    <link rel="stylesheet" href="style.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <?php include_once("bdd/google_analytics.php"); ?>

</head>

<body>

    <?php include_once("entete.php"); ?>

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/save361.jpg);">
        <div class="bradcumbContent">
            <h2>Informations GTA V</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="section-heading style-2">
                        <h3>Menu</h3>
                        <ul>
                            <li><a href="compte.php">Mon Profil</a></li><!--profil-->
                            <li><a href="infos_perso.php">Informations personnelles</a></li><!--modification mdp/utilisateur/photo-->
                            <li><a href="infos_gta.php">Informations GTA V</a></li><!--argent(banque uniquement)/metier/véhicule/appartement-->
                            <li><a href="confidentialite.php">Confidentialité et Sécurité</a></li><!--newsletter/signalement/suppression du compte-->
                            <li><a href="deconnection.php" style="color: red;">Se déconnecter</a></li><!--déconnexion-->
                        </ul>
                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="section-heading style-2">
                        <div class="row">
                            <div class="col-3">
                                <img src="img/Sans_titre.png" alt="Logo-Membre" style="height: 100%; width: 100%;">
                            </div>
                            <div class="col-9">
                                <br>
                                <h2><?php echo $_SESSION['prenom'] . ' ' . $_SESSION['nom'];  ?></h2>
                                <br>
                                <h2><?php echo $_SESSION['utilisateur']; ?></h2>
                        </div>
                            <div class="col-12">
                                <br><br>
                            </div>
                            <div class="col-6">
                                <h3>Votre argent en banque</h3>
                                <?php
                                if($bank!=NULL)
                                {
                                    ?>
                                    <h5><?php echo $bank; ?> $</h5>
                                    <?php
                                }
                                else
                                {
                                    ?>
                                    <h5>Nous n'arrrivons pas à retrouvez cette information...</h5>
                                    <?php
                                }
                                ?>
                            </div>
                            <div class="col-6">
                                <h3>Vos habitations</h3>
                                <h5>Cette fonctionnalité n'est pas encore disponible</h5>
                            </div>
                            <div class="col-12">
                                <br><br>
                            </div>
                            <div class="col-6">
                                <h3>Votre métier</h3>
                                <?php
                                if($job!=NULL)
                                {
                                    switch ($job)
                                    { 
                                        case 'unemployed':
                                            ?><h5>👔 Sans emploi</h5><?php
                                        break;
                                        
                                        case 'slaughterer':
                                            ?><h5>🐷 Abatteur</h5><?php
                                        break;
                                        
                                        case 'fisherman':
                                            ?><h5>🐟 Pecheur</h5><?php
                                        break;
                                        
                                        case 'miner':
                                            ?><h5>⛏️ Mineur</h5><?php
                                        break;
                                        
                                        case 'lumberjack':
                                            ?><h5>🌲 Bucheron</h5><?php
                                        break;
                                        
                                        case 'fueler':
                                            ?><h5>🛢️ Raffineur</h5><?php
                                        break;
                                        
                                        case 'reporter':
                                            ?><h5>📰 CNN</h5><?php
                                        break;
                                        
                                        case 'tailor':
                                            ?><h5>👕 Couturier</h5><?php
                                        break;
                                        
                                        case 'ambulance':
                                            ?><h5>👨🏻‍🚒 LSCoFD</h5><?php
                                        break;
                                        
                                        case 'banker':
                                            ?><h5>💳 Banquier</h5><?php
                                        break;
                                        
                                        case 'cardealer':
                                            ?><h5>🚘 Premium deluxe</h5><?php
                                        break;
                                        
                                        case 'taxi':
                                            ?><h5>🚖 Taxi</h5><?php
                                        break;
                                        
                                        case 'realestateagent':
                                            ?><h5>📬 Agent immobilier</h5><?php
                                        break;
                                        
                                        case 'police':
                                            ?><h5>👮 LSPD/LSSD</h5><?php
                                        break;
                                        
                                        case 'mecano':
                                            ?><h5>🔧 Mécano</h5><?php
                                        break;
                                        
                                        case 'bahama_mamas':
                                            ?><h5>🥂 Bahama Mamas</h5><?php
                                        break;
                                        
                                        case 'vigne':
                                            ?><h5>🍇 Vigneron</h5><?php
                                        break;
                                        
                                        case 'conveyor':
                                            ?><h5>💼 Brinks</h5><?php
                                        break;
                                        
                                        case 'epicerie':
                                            ?><h5>🥙 Epicerie</h5><?php
                                        break;
                                        
                                        case 'bikedealer':
                                            ?><h5>🏍️ Concessionnaire motos</h5><?php
                                        break;
                                        
                                        case 'poolcleaner':
                                            ?><h5>🌷 Paysagiste</h5><?php
                                        break;
                                        
                                        case 'gouv':
                                            ?><h5>🗽 Gouvernement</h5><?php
                                        break;
                                        
                                        case 'digilux':
                                            ?><h5>Event Job</h5><?php
                                        break;
                                        
                                        case 'black':
                                            ?><h5>Cat6 Industries</h5><?php
                                        break;
                                        
                                        default:
                                            ?><h5>Nous n'arrrivons pas à retrouvez cette information...</h5><?php
                                    }
                                }
                                else
                                {
                                    ?>
                                    <h5>Nous n'arrrivons pas à retrouvez cette information...</h5>
                                    <?php
                                }
                                ?>
                            </div>
                            <div class="col-6">
                                <h3>Vos véhicules</h3>
                                <h5>Cette fonctionnalité n'est pas encore disponible</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->

    <?php include_once("pied_de_page.php"); ?>

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>