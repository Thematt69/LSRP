<?php
try
{
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=91.216.107.162;dbname=lsrpf1089253', 'lsrpf1089253', 'itoexuch3w', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}

catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : '.$e->getMessage());
}
?>