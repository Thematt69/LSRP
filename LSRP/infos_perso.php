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
        if($_SESSION['description']!=NULL)
        {
			$_SESSION['description'] = $donnees['description'];
        }
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
    <META NAME="DESCRIPTION" CONTENT="Informations personnelles - Site du serveur GTA 5 LSRP [FR]">
    <META NAME="KEYWORDS" CONTENT="GTA 5, Online, Multijoueur, Serveur, Roleplay, EMS, LSPD, LSCoFD, Los Santos, FR">
    <META NAME="OWNER" CONTENT="Matthieu Devilliers">
    <META NAME="ROBOTS" CONTENT="index,all">
    <META NAME="Reply-to" CONTENT="devilliers.matthieu@gmail.com">
    <META NAME="REVISIT-AFTER" CONTENT="10">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Informations personnelles - Los Santos RolePlay</title>
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
            <h2>Informations personnelles</h2>
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
                            <form action="infos_perso.php" method="POST">
                                <div class="row">
                                    <?php
                                    include_once("bdd/bdd_site.php");

                                    $reponse = $bdd->prepare('SELECT * FROM compte WHERE utilisateur = ?');
                                    
                                    $reponse->execute(array($_SESSION['utilisateur']));

                                    // On affiche chaque entrée une à une
                                    while($donnees = $reponse->fetch())
                                    {
                                        if ($_POST['confirmation']==$donnees['mdp'])
                                        {   
                                            ?>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <h4>Les modifications ont bien été enregistées !</h4>
                                                </div>
                                            </div>
                                            <?php

                                            $req = $bdd->prepare('UPDATE compte SET utilisateur = :utilisateur, mdp = :mdp, prenom = :prenom, nom = :nom, mail = :mail, description = :description WHERE utilisateur = :cible');
                                            
                                            $req->execute(array(
                                                'utilisateur' => htmlspecialchars($_POST['utilisateur']),
                                                'mdp' => htmlspecialchars($_POST['mdp']),
                                                'prenom' => htmlspecialchars($_POST['prenom']),
                                                'nom' => htmlspecialchars($_POST['nom']),
                                                'mail' => htmlspecialchars($_POST['mail']),
                                                'description' => htmlspecialchars($_POST['description']),
                                                'cible' => htmlspecialchars($_SESSION['utilisateur']),
                                                ));
                                            
                                            if($_POST['utilisateur']!=NULL)
                                            {
                                                $_SESSION['utilisateur'] = htmlspecialchars($_POST['utilisateur']);
                                            }
                                            if($_POST['mdp']!=NULL)
                                            {
                                                $_SESSION['mdp'] = htmlspecialchars($_POST['mdp']);
                                            }
                                            if($_POST['prenom']!=NULL)
                                            {
                                                $_SESSION['prenom'] = htmlspecialchars($_POST['prenom']);
                                            }
                                            if($_POST['nom']!=NULL)
                                            {
                                                $_SESSION['nom'] = htmlspecialchars($_POST['nom']);
                                            }
                                            if($_POST['mail']!=NULL)
                                            {
                                                $_SESSION['mail'] = htmlspecialchars($_POST['mail']);
                                            }                                                
                                            if($_POST['description']!=NULL)
                                            {
                                                $_SESSION['description'] = htmlspecialchars($_POST['description']);
                                            }
                                        }
                                        else if($_POST['confirmation']==NULL)
                                        {

                                        }
                                        else
                                        {
                                            ?>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <h4>Les modifications n'ont pas été enregistées !</h4>
                                                    <h5>Vérifier les informations inscrites !</h5>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                        $reponse->closeCursor(); // Termine le traitement de la requête
                                    }
                                    ?>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <h5 style="text-align: left;">Utilisateur :</h5>
                                            <input type="text" class="form-control" name="utilisateur" maxlength="255" placeholder="Modifier utilisateur" value="<?php echo htmlspecialchars($_SESSION['utilisateur']);?>">
                                    </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <h5 style="text-align: left;">Mot de passe  </h5>
                                            <input type="text" class="form-control" name="mdp" maxlength="255" placeholder="Modifier mot de passe" value="<?php echo htmlspecialchars($_SESSION['mdp']);?>">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <h5 style="text-align: left;">Prénom RP sur le serveur :</h5>
                                            <input type="text" class="form-control" name="prenom" maxlength="255" placeholder="Modifier prénom" value="<?php echo htmlspecialchars($_SESSION['prenom']);?>">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <h5 style="text-align: left;">Confirmer votre ancien mot de passe :</h5>
                                            <input type="password" class="form-control" name="confirmation" maxlength="255" placeholder="Confirmer mot de passe" required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <h5 style="text-align: left;">Nom RP sur le serveur :</h5>
                                            <input type="text" class="form-control" name="nom" maxlength="255" placeholder="Modifier nom" value="<?php echo htmlspecialchars($_SESSION['nom']);?>">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <h5 style="text-align: left;">Adresse mail :</h5>
                                            <input type="mail" class="form-control" name="mail" maxlength="255" placeholder="Modifier e-mail" value="<?php echo htmlspecialchars($_SESSION['mail']);?>">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <h5 style="text-align: left;">Description :</h5>
                                            <textarea type="text" class="form-control" name="description" maxlength="255" placeholder="Modifier description"><?php echo htmlspecialchars($_SESSION['description']);?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                    </div>
                                    <div class="col-4 text-center">
                                        <button class="form-control" type="submit">Enregistrer</button>
                                    </div>
                                    <div class="col-4">
                                    </div>
                                </div>
                            </form>
                            <div class="col-12">
                            </div>
                            <form action="infos_perso.php" method="POST">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <h5>Changer votre photo de profil :</h5>
                                            <input type="file" name="photo">
                                            <p>Toutes images non conformes au réglement seront supprimés</p>
                                            <p>Format acceptés : .png, .jpg, .jpeg, .gif</p>
                                            <p>Taille maximal : 8 Mo</p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                    </div>
                                    <div class="col-4 text-center">
                                        <button class="form-control" type="submit">Enregistrer</button>
                                    </div>
                                    <div class="col-4">
                                    </div>
                                    <?php

                                    // Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur

                                    if (isset($_FILES['photo']) AND $_FILES['photo']['error'] == 0)
                                    {
                                        // Testons si le fichier n'est pas trop gros

                                        if ($_FILES['photo']['size'] <= 8000000)
                                        {
                                            // Testons si l'extension est autorisée
                                            $infosfichier = pathinfo($_FILES['photo']['name']);
                                            $extension_upload = $infosfichier['extension'];
                                            $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');

                                            if (in_array($extension_upload, $extensions_autorisees))
                                            {
                                                // On peut valider le fichier et le stocker définitivement
                                                move_uploaded_file($_FILES['photo']['tmp_name'], 'img/Profil/' . htmlspecialchars($_SESSION['utilisateur']) . '.png');
                                                ?>
                                                <div class="form-group">
                                                    <h4>L'envoi a bien été effectué !</h4>
                                                </div>
                                                <?php
                                            }
                                            else
                                            {
                                            ?>
                                            <div class="form-group">
                                                <h4>L'envoi a échoué ! Vérifiez que vous utiliser une extension autorisées.</h4>
                                            </div>
                                            <?php
                                            }
                                        }
                                        else
                                        {
                                        ?>
                                        <div class="form-group">
                                            <h4>L'envoi a échoué ! Votre image ne doit pas dépasser 8 Mo.</h4>
                                        </div>
                                        <?php
                                        }
                                    }
                                    ?>
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