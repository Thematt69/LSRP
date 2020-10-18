<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();

if (isset($_POST['utilisateur']) || isset($_SESSION['utilisateur']))
{  
    // On s'amuse à créer quelques variables de session dans $_SESSION
    $_SESSION['utilisateur'] = $_POST['utilisateur'];
}
?>

<div class="preloader d-flex align-items-center justify-content-center">
    <div class="lds-ellipsis">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>

<header class="header-area">
    <!-- Navbar Area -->
    <div class="oneMusic-main-menu">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <nav class="classy-navbar justify-content-between" id="oneMusicNav">
                    <!-- Nav brand -->
                    <a href="../index.php" class="nav-brand"><img src="../img/Sans_titre-1.png" style="height:80px" alt=""></a>
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
                                    <li><a href="../index.php">Accueil</a></li>
                                    <li><a href="../reglement.php">Réglement</a></li>
                                    <li class="cn-dropdown"><a href="../metiers.php">Métiers</a>
                                    <ul class="dropdown arrow-top">
                                        <li><a href="avocat.php">⚖️ Avocat</a></li>
                                        <li><a href="http://bahamas.lsrpfr.com" target="_blank">🥂 Bahamas</a></li>
                                        <li><a href="banquier.php">💳 Banquier</a></li>
                                        <li><a href="cnn.php">📰 CNN</a></li>
                                        <li><a href="http://weazelnews.lsrpfr.com" target="_blank">📰 Weazel News</a></li>
                                        <li><a href="concessionnaire.php">🚘 Concessionaire</a></li>
                                        <li><a href="epicier.php">🍟 Titi's Rapid</a></li>
                                        <li><a href="http://gouv.lsrpfr.com" target="_blank">🗽 Gouvernement</a></li>
                                        <li><a href="http://lscofd.lsrpfr.com" target="_blank">💉 LSCoFD</a></li>
                                        <li><a href="lscustom.php">🔧 LS Custom</a></li>
                                        <li><a href="http://lspd.lsrpfr.com" target="_blank">👮 LSPD</a></li>
                                        <li><a href="http://lssd.lsrpfr.com" target="_blank">👮 LSSD</a></li>
                                        <li><a href="http://ss.lsrpfr.com/" target="_blank">🚔 Secret Service</a></li>
                                        <li><a href="taxi.php">🚖Taxi</a></li>
                                    </ul>
                                    </li>
                                    <li><a href="../albums.php">Albums</a>
                                    <ul class="dropdown arrow-top">
                                        <li><a href="../albums.php">Albums</a></li>
                                        <li><a href=".//ajout_img.php">Envoyer votre image</a></li>
                                    </ul>
                                    </li>
                                    <li><a href="../inscription.php">Inscription</a></li>
                                    <li><a href="../news.php">News</a></li>
                                    <li><a href="../contact.php">Contact</a></li>
                                    <?php
                                    if($_SESSION['utilisateur']!=NULL)
                                        {
                                        ?>
                                        <li><a><?php echo $_SESSION['utilisateur']; ?></a></li>
                                        <?php
                                        }
                                    else
                                        {
                                        ?>
                                        <li><a href="../mdp.php">Se connecter</a></li>
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