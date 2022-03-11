<?php
session_start();

include_once("bdd/bdd_site.php");

$reponse = $bdd->prepare('SELECT * FROM compte WHERE utilisateur = ?');

$reponse->execute(array($_SESSION['utilisateur']));

// On affiche chaque entrée une à une
while($donnees = $reponse->fetch())
{
    // Destinataires
    $to  = htmlspecialchars($_SESSION['mail']);
    
    // Sujet
    $subject = 'Informations - Compte - LSRPFR';
    
    // Message
    $contenu = '
    <html>
        <body>
            <h3>Voici toutes les données stockés dans notre base de données : </h3>
            <p><strong>Utilisateur : </strong>' . $donnees['utilisateur'] . '</p>
            <p><strong>Mot de passe : </strong>' . $donnees['mdp'] . '</p>
            <p><strong>Prenom RP : </strong>' . $donnees['prenom'] . '</p>
            <p><strong>Nom RP : </strong>' . $donnees['nom'] . '</p>
            <p><strong>Adresse mail : </strong>' . $donnees['mail'] . '</p>
            <p><strong>Description : </strong>' . $donnees['description'] . '</p>
            <p><strong>Images de profil : </strong>' . $donnees['images'] . '</p>
            <p><strong>Inscription au newsletter : </strong>' . $donnees['newsletters'] . '</p>
            <br>
            <p>Il se peut que certaines informations soit mal traismises, n\'hésiter nous contacter en réponse à ce mail.</p>
        </body>
    </html>
    ';
    
    // Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso-8859-1';
    $headers[] = 'From: LSRPFR <devilliers.matthieu@gmail.com>';
    
    // Envoi du mail
    mail($to, $subject, $contenu, implode("\r\n", $headers));
}

?>
<script language="javascript"
	type="text/javascript">
	<!--
	window.location.replace(
	"http://lsrpfr.com/compte.php");
	-->
</script>