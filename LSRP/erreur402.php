<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <META NAME="TITLE" CONTENT="Site du serveur GTA 5 LSRP [FR]">
    <META NAME="AUTHOR" CONTENT="Los Santos Roleplay [FR]">
    <META NAME="DESCRIPTION" CONTENT="Erreur 402 - Site du serveur GTA 5 LSRP [FR]">
    <META NAME="KEYWORDS" CONTENT="GTA 5, Online, Multijoueur, Serveur, Roleplay, EMS, LSPD, LSCoFD, Los Santos, FR">
    <META NAME="OWNER" CONTENT="Matthieu Devilliers">
    <META NAME="ROBOTS" CONTENT="index,all">
    <META NAME="Reply-to" CONTENT="devilliers.matthieu@gmail.com">
    <META NAME="REVISIT-AFTER" CONTENT="10">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Erreur 402 - Los Santos RolePlay</title>
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
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-1.jpg);">
        <div class="bradcumbContent">
            <h2>Oups... ERREUR 402 !</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area section-padding-100-0">
        <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading style-2">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <h2>Je crois qu'on a un problème...</h2>
                                <h3>Visiblement tu n'a pas le droit d'accéder ici, dommage pour toi...</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="section-heading style-2">
                    <form method="POST" action="erreur402.php">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <h3>Aide nous a mieux comprendre d'où provient ce problème</h3>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="pseudo" placeholder="Pseudo" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control" name="message" placeholder="Message" required></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <button type="submit" class="btn oneMusic-btn mt-30">Envoyer <i class="fa fa-angle-double-right"></i></button>
                                </div>
                            </div>
                            <?php
                                if ($_POST['message']!='')
                                {
                                    
                                    // Destinataires
                                    $to  = 'devilliers.matthieu@gmail.com';

                                    // Sujet
                                    $subject = 'Message Formulaire de contact - LSRPFR';
                              
                                    // Message
                                    $contenu = '
                                    <html>
                                        <body>
                                            <h2>Voici les réponses au formulaire de contact</h2>
                                            <p><strong>Email : </strong>' . htmlspecialchars($_POST['email']) . '</p>
                                            <p><strong>Pseudo : </strong>' . htmlspecialchars($_POST['pseudo']) . '</p>
                                            <p><strong>Object : </strong>Problème avec le site - Erreur 404</p>
                                            <p><strong>Message : </strong>' . htmlspecialchars($_POST['message']) . '</p>
                                        </body>
                                    </html>
                                    ';

                                    // Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
                                    $headers[] = 'MIME-Version: 1.0';
                                    $headers[] = 'Content-type: text/html; charset=iso-8859-1';

                                    // Envoi du mail
                                    mail($to, $subject, $contenu, implode("\r\n", $headers));
                                    ?>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <h4>Le message a bien été envoyé. Désolé pour la gène occasionée !</h4>
                                        </div>
                                    </div>
                                    <?php
                                }
                            ?>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="section-heading style-2">
                    <div class="row">
                        <iframe src="https://discordapp.com/widget?id=462771244962414592&theme=dark" width=100% height=400 allowtransparency="true" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!-- ##### Contact Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <?php include_once("pied_de_page.php"); ?>
    <!-- ##### Footer Area Start ##### -->

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