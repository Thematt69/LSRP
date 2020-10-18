<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<META NAME="TITLE" CONTENT="Site du serveur GTA 5 LSRP [FR]">
		<META NAME="AUTHOR" CONTENT="Los Santos Roleplay [FR]">
		<META NAME="DESCRIPTION" CONTENT="Page de connexion - Site du serveur GTA 5 LSRP [FR]">
		<META NAME="KEYWORDS" CONTENT="GTA 5, Online, Multijoueur, Serveur, Roleplay, EMS, LSPD, LSCoFD, Los Santos, FR">
		<META NAME="OWNER" CONTENT="Matthieu Devilliers">
		<META NAME="ROBOTS" CONTENT="index,all">
		<META NAME="Reply-to" CONTENT="devilliers.matthieu@gmail.com">
		<META NAME="REVISIT-AFTER" CONTENT="10">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Connexion - Los Santos RolePlay</title>
		<link rel="icon" type="image/png" href="img/Sans_titre-1.png"/>
		<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
		<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">	
		<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
		<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
		<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">	
		<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
		<link rel="stylesheet" type="text/css" href="css/util.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<?php include_once("bdd/google_analytics.php"); ?>
		
	</head>

	<body>

		<div class="limiter">
			<div class="container-login100" style="background-image: url('img/save360.jpg');">
				<div class="wrap-login100 p-t-30 p-b-50">
					<span class="login100-form-title p-b-41">
						Me connecter
					</span>
					<form action="compte_connexion.php" method="POST" class="login100-form validate-form p-b-33 p-t-5">

						<div class="wrap-input100 validate-input" data-validate = "Entrer utilisateur">
							<input class="input100" type="text" name="utilisateur" placeholder="Utilisateur">
							<span class="focus-input100" data-placeholder="&#xe82a;"></span>
						</div>

						<div class="wrap-input100 validate-input" data-validate="Entrer mot de passe">
							<input class="input100" type="password" name="mdp" placeholder="Mot de passe">
							<span class="focus-input100" data-placeholder="&#xe80f;"></span>
						</div>

						<div class="container-login100-form-btn m-t-32">
							<button class="login100-form-btn">Se connecter</button>
							<div class="col-1"></div>
							<a href="compte_inscription.php" class="login100-form-btn">M'inscrire</a>
						</div>
						<?php
						if(isset($_POST['utilisateur']))
						{
							include_once("bdd/bdd_site.php");

							// Si tout va bien, on peut continuer
							$reponse = $bdd->prepare('SELECT * FROM compte WHERE utilisateur = ?');
							$reponse->execute(array(htmlspecialchars($_POST['utilisateur'])));

							// On affiche chaque entrée une à une
							while ($donnees = $reponse->fetch())
							{
								if($_POST['mdp']==$donnees['mdp'])
								{
									if($_SESSION['utilisateur']==NULL)
									{
										$_SESSION['utilisateur'] = $donnees['utilisateur'];
									}
									if($_SESSION['mdp']==NULL)
									{
										$_SESSION['mdp'] = $donnees['mdp'];
									}
									if($_SESSION['prenom']==NULL)
									{
										$_SESSION['prenom'] = $donnees['prenom'];
									}
									if($_SESSION['nom']==NULL)
									{
										$_SESSION['nom'] = $donnees['nom'];
									}
									if($_SESSION['mail']==NULL)
									{
										$_SESSION['mail'] = $donnees['mail'];
									}
									if($_SESSION['description']==NULL)
									{
										$_SESSION['description'] = $donnees['description'];
									}
									if($_SESSION['images']==NULL)
									{
										$_SESSION['images'] = $donnees['images'];
									}
									if($_SESSION['newsletters']==NULL)
									{
										$_SESSION['newsletters'] = $donnees['newsletters'];
									}
									?>
									<script language="javascript"
										type="text/javascript">
										<!--
										window.location.replace(
										"http://lsrpfr.com/compte.php");
										-->
									</script>
									<?php
								}
							}
							$reponse->closeCursor(); // Termine le traitement de la requête
						}
						?>
					</form>
				</div>
			</div>
		</div>
		

		<div id="dropDownSelect1"></div>
		
	<!--===============================================================================================-->
		<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
		<script src="vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
		<script src="vendor/bootstrap/js/popper.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
		<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
		<script src="vendor/daterangepicker/moment.min.js"></script>
		<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
		<script src="vendor/countdowntime/countdowntime.js"></script>

	</body>
</html>