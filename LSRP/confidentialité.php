<?php
session_start();

if($_SESSION['utilisateur']!=NULL)
{
    include_once("bdd/bdd_site.php");

	// Si tout va bien, on peut continuer
	// On récupère tout le contenu de la table jeux_video
	$reponse = $bdd->prepare('SELECT * FROM compte WHERE utilisateur = ?');
	$reponse->execute(array($_SESSION['utilisateur']));

	// On affiche chaque entrée une à une
	while($donnees = $reponse->fetch())
	{
        if($_SESSION['prenom']!=NULL)
        {
			$_SESSION['prenom'] = $donnees['prenom'];
        }
        if($_SESSION['nom']!=NULL)
        {
			$_SESSION['nom'] = $donnees['nom'];
        }
	}
	$reponse->closeCursor(); // Termine le traitement de la requête
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <META NAME="TITLE" CONTENT="Site du serveur GTA 5 LSRP [FR]">
    <META NAME="AUTHOR" CONTENT="Los Santos Roleplay [FR]">
    <META NAME="DESCRIPTION" CONTENT="Confidentialité et Sécurité - Site du serveur GTA 5 LSRP [FR]">
    <META NAME="KEYWORDS" CONTENT="GTA 5, Online, Multijoueur, Serveur, Roleplay, EMS, LSPD, LSCoFD, Los Santos, FR">
    <META NAME="OWNER" CONTENT="Matthieu Devilliers">
    <META NAME="ROBOTS" CONTENT="index,all">
    <META NAME="Reply-to" CONTENT="admin@lsrpfr.com">
    <META NAME="REVISIT-AFTER" CONTENT="10">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Confidentialité et Sécurité - Los Santos RolePlay</title>
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
            <h2>Confidentialité et Sécurité</h2>
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
                            <li><a href="confidentialité.php">Confidentialité et Sécurité</a></li><!--newsletter/signalement/suppression du compte-->
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
                            <form action="confidentialité.php" method="POST">
                                <?php
                                include_once("bdd/bdd_site.php");

                                $req = $bdd->prepare('UPDATE compte SET newsletters = :newsletter WHERE utilisateur = :cible');
                                                
                                $req->execute(array(
                                    'newsletter' => htmlspecialchars($_POST['newsletter']),
                                    'cible' => htmlspecialchars($_SESSION['utilisateur']),
                                    ));                                       
                                
                                if($_POST['newsletter']!=NULL)
                                    {
                                        $_SESSION['newsletter'] = htmlspecialchars($_POST['newsletter']);
                                        ?>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <h4>Les modifications ont bien été enregistées !</h4>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    
                                    $req->closeCursor(); // Termine le traitement de la requête
                                ?>
                                <div class="col-12" style="text-align: left;">
                                    <div class="form-group">
                                        <h2>Confidentialité</h2>
                                        <br>
                                    </div>
                                </div>
                                <div class="col-1" style="text-align: left;">
                                    <div class="form-group">
                                        <input type="checkbox" id="newsletter" class="form-control" name="newsletters" value="1">
                                    </div>
                                </div>
                                <div class="col-11" style="text-align: left;">
                                    <div class="form-group">
                                        <label for="newsletter">Je ne souhaite plus recevoir de mails</label>
                                    </div>
                                </div>
                                <div class="col-4" style="text-align: left;">
                                    <div class="form-group">
                                        <button class="form-control" type="submit">Enregistrer</button>
                                    </div>
                                </div>
                                <div class="col-12" style="text-align: left;">
                                    <div class="form-group">
                                        <a href="données.php" style="color:orange;">Je souhaite recevoir toutes les données me concernant</a>
                                    </div>
                                </div>
                                <div class="col-12" style="text-align: left;">
                                    <div class="form-group">
                                        <a href="suppression.php" style="color:red;">Je veux supprimer mon compte</a>
                                    </div>
                                </div>
                            </form>
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