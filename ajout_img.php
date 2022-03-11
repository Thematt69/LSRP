<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <META NAME="TITLE" CONTENT="Site du serveur GTA 5 LSRP [FR]">
    <META NAME="AUTHOR" CONTENT="Los Santos Roleplay [FR]">
    <META NAME="DESCRIPTION" CONTENT="Envoyer votre images - Site du serveur GTA 5 LSRP [FR]">
    <META NAME="KEYWORDS" CONTENT="GTA 5, Online, Multijoueur, Serveur, Roleplay, EMS, LSPD, LSCoFD, Los Santos, FR">
    <META NAME="OWNER" CONTENT="Matthieu Devilliers">
    <META NAME="ROBOTS" CONTENT="index,all">
    <META NAME="Reply-to" CONTENT="devilliers.matthieu@gmail.com">
    <META NAME="REVISIT-AFTER" CONTENT="10">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Envoyer votre image - Los Santos RolePlay</title>
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

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>

<body>

    <?php include_once("entete.php"); ?>

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/save364.jpg);">
        <div class="bradcumbContent">
            <h2>Envoyer votre image</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Contact Area Start ##### -->

    <section class="contact-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-heading style-2">
                        <form method="POST" action="ajout_img.php" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" name="Pseudo" class="form-control" placeholder="Votre pseudo*" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="Titre" class="form-control" placeholder="Titre de l'image*" required>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <input type="file" name="Images" required/>
                                                <p>Format acceptés : .png, .jpg, .jpeg, .gif</p>
                                                <p>Taille maximal : 8 Mo</p>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <div class="g-recaptcha" data-sitekey="6LcB9L0UAAAAAMTVkZYrZ8E_3ssX-0EDVjgwTEm1" require></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn oneMusic-btn mt-30">Envoyer</button>
                                    </div>
                                    <?php

                                    // Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur

                                    if ($_FILES['Images']['error'] == 0 AND $_POST['g-recaptcha-response']==true)
                                    {
                                        // Testons si le fichier n'est pas trop gros

                                        if ($_FILES['Images']['size'] <= 8000000)
                                        {
                                            // Testons si l'extension est autorisée
                                            $infosfichier = pathinfo($_FILES['Images']['name']);
                                            $extension_upload = $infosfichier['extension'];
                                            $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');

                                            if (in_array($extension_upload, $extensions_autorisees))
                                            {
                                                // On peut valider le fichier et le stocker définitivement
                                                move_uploaded_file($_FILES['Images']['tmp_name'], 'img_public/' . htmlspecialchars($_POST['Titre']) . '-' . htmlspecialchars($_POST['Pseudo']) . '.' . $extension_upload);
                                                // Envoi du mail
                                                mail('devilliers.matthieu@gmail.com', 'Ajout d\'une image - LSRPFR', htmlspecialchars($_POST['Titre']) . ' http://lsrpfr.com/img_public/' . htmlspecialchars($_POST['Titre']) . '-' . htmlspecialchars($_POST['Pseudo']) . '.' . $extension_upload);
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