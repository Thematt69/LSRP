<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <META NAME="TITLE" CONTENT="Site du serveur GTA 5 LSRP [FR]">
    <META NAME="AUTHOR" CONTENT="Los Santos Roleplay [FR]">
    <META NAME="DESCRIPTION" CONTENT="Page d'accueil - Site du serveur GTA 5 LSRP [FR]">
    <META NAME="KEYWORDS" CONTENT="GTA 5, Online, Multijoueur, Serveur, Roleplay, EMS, LSPD, LSCoFD, Los Santos, FR">
    <META NAME="OWNER" CONTENT="Matthieu Devilliers">
    <META NAME="ROBOTS" CONTENT="index,all">
    <META NAME="Reply-to" CONTENT="devilliers.matthieu@gmail.com">
    <META NAME="REVISIT-AFTER" CONTENT="10">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Inscription - Los Santos RolePlay</title>
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
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/save363.jpg);">
        <div class="bradcumbContent">
            <h2>Inscription</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading style-2">
                        <form action="inscription.php" method="POST">
                            <div class="row">
                                <?php
                                if ($_POST['g-recaptcha-response']==true)
                                {
                                    
                                    // Plusieurs destinataires
                                    $to  = 'devilliers.matthieu@gmail.com';

                                    // Sujet
                                    $subject = 'Recrutement de ' . htmlspecialchars($_POST['pseudo']);
                            
                                    // message
                                    $message = '
                                    <html>
                                        <body>
                                            <h2>Voici les réponses au questionnaires de recrutement</h2>
                                            <p><strong>Prénom : </strong>' . htmlspecialchars($_POST['prenom']) . '</p>
                                            <p><strong>Pseudo + Tag Discord : </strong>' . htmlspecialchars($_POST['pseudo']) . '</p>
                                            <p><strong>Age : </strong>' . htmlspecialchars($_POST['age']) . '</p>
                                            <p><strong>Genre : </strong>' . htmlspecialchars($_POST['genre']) . '</p>
                                            <p><strong>Motivations : </strong>' . htmlspecialchars($_POST['motivations']) . '</p>
                                            <p><strong>Défauts : </strong>' . htmlspecialchars($_POST['défauts']) . '</p>
                                            <p><strong>Qualités : </strong>' . htmlspecialchars($_POST['qualités']) . '</p>
                                            <p><strong>Avez vous déja jouer sur un serveur ? : </strong>' . htmlspecialchars($_POST['déja_jouer']) . '</p>
                                            <p><strong>Si oui pourquoi la tu quitté ? : </strong>' . htmlspecialchars($_POST['pourquoi_quitter']) . '</p>
                                            <p><strong>Quelles sont vos expériences ? : </strong>' . htmlspecialchars($_POST['expériences']) . '</p>
                                            <p><strong>Combien de temps pensez-vous passez sur le serveur ? : </strong>' . htmlspecialchars($_POST['temps_consacré']) . '</p>
                                            <p><strong>Qu\'avez vous a apporter au serveur ? : </strong>' . htmlspecialchars($_POST['apport']) . '</p>
                                            <p><strong>Qu\'attend tu du serveur ? : </strong>' . htmlspecialchars($_POST['attente']) . '</p>
                                            <p><strong>Noter ton niveau de RP : </strong>' . htmlspecialchars($_POST['note_RP']) . '</p>
                                            <p><strong>Comment avez-vous connu le serveur ? : </strong>' . htmlspecialchars($_POST['connaissance']) . '</p>
                                            <p><strong>Prénom RP : </strong>' . htmlspecialchars($_POST['prenom_rp']) . '</p>
                                            <p><strong>Nom RP : </strong>' . htmlspecialchars($_POST['nom_rp']) . '</p>
                                            <p><strong>Age RP : </strong>' . htmlspecialchars($_POST['age_rp']) . '</p>
                                            <p><strong>Genre RP : </strong>' . htmlspecialchars($_POST['genre_rp']) . '</p>
                                            <p><strong>Traits de caratères : </strong>' . htmlspecialchars($_POST['caractère']) . '</p>
                                            <p><strong>Signes distinctifs : </strong>' . htmlspecialchars($_POST['signe']) . '</p>
                                            <p><strong>Histoire : </strong>' . htmlspecialchars($_POST['histoire']) . '</p>
                                        </body>
                                    </html>
                                    ';

                                    // Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
                                    $headers[] = 'MIME-Version: 1.0';
                                    $headers[] = 'Content-type: text/html; charset=iso-8859-1';

                                    // Envoi du mail
                                    mail($to, $subject, $message, implode("\r\n", $headers));
                                    ?>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <h4>Le message a bien été envoyé. Nos équipes vont traités votre demande et reviendrons vers vous dans quelques jours.</h4>
                                        </div>
                                    </div>
                                    <?php
                                }
                                else
                                {
                                    ?>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <h3 style="font-family:'Courier New', Courier, monospace;font-size:22px;text-align:center;color:red;padding-bottom:10px;padding-top:10px;">Le serveur GTA V LSRPFR est fermé officiellement depuis le 30 janvier 2019 ! Ce site ne sera plus disponible après le 12 décembre 2019 !</h3>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                                <div class="col-12">
                                    <div class="form-group">
                                        <p>* champs requis</p>
                                        <br>
                                        <h2>Présentation IRL</h2>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="prenom" placeholder="Prénom*" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="pseudo" placeholder="Pseudo + Tag Discord*" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="number" class="form-control" name="age" placeholder="Age*" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <select name="genre" class="form-control">
                                            <option selected value="Aucune réponse">Sélectionner votre genre</option>
                                            <option value="Masculin">Masculin</option>
                                            <option value="Féminin">Féminin</option>
                                            <option value="Cisgenre">Transgenre</option>
                                            <option value="Cisgenre">Cisgenre/Non-binaire</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="mail" class="form-control" name="mail" placeholder="Adresse mail*" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="motivations" class="form-control" placeholder="Vos motivations*" required></textarea>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <textarea name="défauts" class="form-control" placeholder="Vos défauts*" required></textarea>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <textarea name="qualités" class="form-control" placeholder="Vos qualités*" required></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <h2>Expériences</h2>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <select name="déja_jouer" class="form-control" required>
                                            <option selected value="Aucune réponse">Avez vous déja jouer sur un autre serveur ?*</option>
                                            <option value="Oui">Oui</option>
                                            <option value="Non">Non</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="pourquoi_quitter" placeholder="Si oui, Pourquoi l'avez-vous quitté ?">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="expériences" class="form-control" placeholder="Vos expériences*" required></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="temps_consacré" placeholder="Combien de temps pensez-vous passez sur le serveur ?*" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="apport" class="form-control" placeholder="Qu'avez vous a apporter au serveur ?*" required></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="attente" class="form-control" placeholder="Qu'attendez vous du serveur ?*" required></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <select name="note_RP" class="form-control" required>
                                            <option selected value="Aucune réponse">Noter votre niveau de RP*</option>
                                            <option value="0">0/10</option>
                                            <option value="1">1/10</option>
                                            <option value="2">2/10</option>
                                            <option value="3">3/10</option>
                                            <option value="4">4/10</option>
                                            <option value="5">5/10</option>
                                            <option value="6">6/10</option>
                                            <option value="7">7/10</option>
                                            <option value="8">8/10</option>
                                            <option value="9">9/10</option>
                                            <option value="10">10/10</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <select name="connaissance" class="form-control" required>
                                            <option selected value="Aucune réponse">Comment avez-vous connu le serveur ?*</option>
                                            <option value="Facebook">Facebook</option>
                                            <option value="Twitter">Twitter</option>
                                            <option value="GTA-Top-Serveur">gta.top-serveurs.net</option>
                                            <option value="Seveur-Privé">serveur-prive.net</option>
                                            <option value="Invitation">Invitation privé</option>
                                            <option value="Site">Site internet</option>
                                            <option value="Autre">Autre</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <h2>Personnage InGame</h2>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="prenom_rp" placeholder="Prénom RP*" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="nom_rp" placeholder="Nom RP*" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="number" class="form-control" name="age_rp" placeholder="Age RP*" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <select name="genre_rp" class="form-control" required>
                                            <option selected value="Aucune réponse">Sélectionner votre genre RP*</option>
                                            <option value="Masculin">Masculin</option>
                                            <option value="Féminin">Féminin</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="caractère" placeholder="Qu'elle sont vos traits de caractères RP ?*" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="signe" placeholder="Qu'elle sont vos signes disctinctifs RP ?*" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="histoire" class="form-control" placeholder="Racontez votre histoire RP*" required></textarea>
                                    </div>
                                </div>
                                <div class="col-6 text-center">
                                    <div class="g-recaptcha" data-sitekey="6LcB9L0UAAAAAMTVkZYrZ8E_3ssX-0EDVjgwTEm1" require></div>
                                </div> 
                                <div class="col-3 text-center">
                                    <button class="btn oneMusic-btn mt-30" type="submit">Envoyer</button>
                                </div>
                                <div class="col-3 text-center">
                                    <button class="btn oneMusic-btn mt-30" type="reset">Effacer</button>
                                </div>
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