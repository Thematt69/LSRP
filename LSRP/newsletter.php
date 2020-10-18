<?php
session_start();

include_once("bdd/bdd_site.php");

$req = $bdd->prepare('UPDATE compte SET newsletters = :newsletter WHERE utilisateur = :cible');                                      

if($_POST['newsletter']=='OUI')
{
    $_SESSION['newsletter'] = 'OUI';
                
    $req->execute(array(
        'newsletter' => 'OUI',
        'cible' => htmlspecialchars($_SESSION['utilisateur']),
        )); 
}
else if($_POST['newsletter']=='NON')
{
    $_SESSION['newsletter'] = 'NON';
                
    $req->execute(array(
        'newsletter' => 'NON',
        'cible' => htmlspecialchars($_SESSION['utilisateur']),
        )); 
}
$req->closeCursor(); // Termine le traitement de la requête
?>

<script language="javascript"
	type="text/javascript">
	<!--
	window.location.replace(
	"http://lsrpfr.com/compte.php");
	-->
</script>
                                    