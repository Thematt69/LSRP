<?php
session_start();
try
{
    // On se connecte à MySQL // https://mysql9.lwspanel.com/phpmyadmin/sql.php?db=lsrpf1089253&table=compte&pos=0
    $bdd = new PDO('mysql:host=91.216.107.162;dbname=lsrpf1089253', 'lsrpf1089253', 'itoexuch3w', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}

catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->prepare('DELETE FROM compte WHERE utilisateur = ?');

$reponse->execute(array($_SESSION['utilisateur']));

session_destroy();
?>
<script language="javascript"
	type="text/javascript">
	<!--
	window.location.replace(
	"http://lsrpfr.com/");
	-->
</script>