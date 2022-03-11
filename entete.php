<?php
session_start();
?>

<div class="preloader d-flex align-items-center justify-content-center">
    <div class="lds-ellipsis">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>

<section style="background-color:black;width:100%">
    <div class="container">
        <div class="row">
            <h6 style="font-family:'Courier New', Courier, monospace;font-size:18px;text-align:center;color:red;padding-bottom:10px;padding-top:10px;">Le serveur GTA V LSRPFR est fermé officiellement depuis le 30 janvier 2019 ! Ce site ne sera plus disponible après le 12 décembre 2019 !</h6>
        </div>
    </div>
</section>

<header class="header-area" style="top:78px;">
    <!-- Navbar Area -->
    <div class="oneMusic-main-menu">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <nav class="classy-navbar justify-content-between" id="oneMusicNav">
                    <!-- Nav brand -->
                    <a href="index.php" class="nav-brand"><img src="img/Sans_titre-1.png" style="height:60px" alt=""></a>
                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>
                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="index.php">Accueil</a></li>
                                    <li><a href="reglement.php">Réglement</a></li>
                                    <li><a href="inscription.php">Inscription</a></li>
                                    <li class="cn-dropdown"><a href="metiers.php">Métiers</a>
                                        <ul class="dropdown arrow-top">
                                            <li><a href="metiers/avocat.php">⚖️ Avocat</a></li>
                                            <li><a href="index.php">🥂 Bahamas</a></li>
                                            <li><a href="metiers/banquier.php">💳 Banquier</a></li>
                                            <li><a href="metiers/cnn.php">📰 CNN</a></li>
                                            <li><a href="http://weazelnews.lsrpfr.com" target="_blank">📰 Weazel News</a></li>
                                            <li><a href="metiers/concessionnaire.php">🚘 Concessionaire</a></li>
                                            <li><a href="metiers/epicier.php">🍟 Titi's Rapid</a></li>
                                            <li><a href="http://gouv.lsrpfr.com" target="_blank">🗽 Gouvernement</a></li>
                                            <li><a href="http://lscofd.lsrpfr.com" target="_blank">💉 LSCoFD</a></li>
                                            <li><a href="metiers/lscustom.php">🔧 LS Custom</a></li>
                                            <li><a href="index.php">👮 LSPD</a></li>
                                            <li><a href="index.php">👮 LSSD</a></li>
                                            <li><a href="index.php">🚔 Secret Service</a></li>
                                            <li><a href="metiers/taxi.php">🚖Taxi</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="albums.php">Albums</a>
                                        <ul class="dropdown arrow-top">
                                            <li><a href="albums.php">Albums</a></li>
                                            <li><a href="ajout_img.php">Envoyer votre image</a></li>
                                        </ul>
                                    </li>
                                    <!--<li><a href="inscription.php">Inscription</a></li>-->
                                    <li><a href="news.php">News</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                    <?php
                                    if($_SESSION['utilisateur']!=NULL)
                                        {
                                            ?>
                                                <li><a href="compte.php"><?php echo $_SESSION['utilisateur']; ?></a></li>
                                            <?php
                                        }
                                    else
                                        {
                                            ?>
                                                <li><a href="compte_connexion.php">Se connecter</a></li>
                                            <?php
                                        }
                                        ?>
                                </ul>
                            </div>
                        </div>
                    <!-- Nav End -->
                </nav>
            </div>
        </div>
    </div>
</header>