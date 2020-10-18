<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Stats GTA 5 RP</title>
    </head>
    <body>
        <?php
        try
            {
                // On se connecte à MySQL
                $bdd = new PDO('mysql:host=mysql-mariadb14-104.zap-hosting.com;dbname=zap451080-1;charset=UTF8', 'zap451080-1', 'zXV9s97IxiWbQ7Cq', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            }
            
            catch(Exception $e)
            {
                // En cas d'erreur, on affiche un message et on arrête tout
                die('Erreur : '.$e->getMessage());
            }

            $req1 = $bdd->prepare('SELECT ROUND(AVG(price)),ROUND(MIN(price)),ROUND(MAX(price)) FROM vehicles WHERE category = ?');
            $req1->execute(array("motorcycles"));

            while($donnees = $req1->fetch()) {
                ?>
                    <h2>motorcycles</h2>
                    <p>Prix moyen : <?php echo $donnees['ROUND(AVG(price))'] ?> $</p>
                    <p>Prix minimum : <?php echo $donnees['ROUND(MIN(price))'] ?> $</p>
                    <p>Prix maximum : <?php echo $donnees['ROUND(MAX(price))'] ?> $</p>
                    <hr>
                <?php
            }

            $req1->closeCursor();

            //////////////////////////

            $req2 = $bdd->prepare('SELECT ROUND(AVG(price)),ROUND(MIN(price)),ROUND(MAX(price)) FROM vehicles WHERE category = ?');
            $req2->execute(array("compacts"));

            while($donnees = $req2->fetch()) {
                ?>
                    <h2>compacts</h2>
                    <p>Prix moyen : <?php echo $donnees['ROUND(AVG(price))'] ?> $</p>
                    <p>Prix minimum : <?php echo $donnees['ROUND(MIN(price))'] ?> $</p>
                    <p>Prix maximum : <?php echo $donnees['ROUND(MAX(price))'] ?> $</p>
                    <hr>
                <?php
            }

            $req2->closeCursor();

            //////////////////////////

            $req3 = $bdd->prepare('SELECT ROUND(AVG(price)),ROUND(MIN(price)),ROUND(MAX(price)) FROM vehicles WHERE category = ?');
            $req3->execute(array("coupes"));

            while($donnees = $req3->fetch()) {
                ?>
                    <h2>coupes</h2>
                    <p>Prix moyen : <?php echo $donnees['ROUND(AVG(price))'] ?> $</p>
                    <p>Prix minimum : <?php echo $donnees['ROUND(MIN(price))'] ?> $</p>
                    <p>Prix maximum : <?php echo $donnees['ROUND(MAX(price))'] ?> $</p>
                    <hr>
                <?php
            }

            $req3->closeCursor();

             //////////////////////////

             $req4 = $bdd->prepare('SELECT ROUND(AVG(price)),ROUND(MIN(price)),ROUND(MAX(price)) FROM vehicles WHERE category = ?');
             $req4->execute(array("muscle"));
 
             while($donnees = $req4->fetch()) {
                 ?>
                    <h2>muscle</h2>
                    <p>Prix moyen : <?php echo $donnees['ROUND(AVG(price))'] ?> $</p>
                    <p>Prix minimum : <?php echo $donnees['ROUND(MIN(price))'] ?> $</p>
                    <p>Prix maximum : <?php echo $donnees['ROUND(MAX(price))'] ?> $</p>
                    <hr>
                 <?php
             }
 
             $req4->closeCursor();

              //////////////////////////

            $req5 = $bdd->prepare('SELECT ROUND(AVG(price)),ROUND(MIN(price)),ROUND(MAX(price)) FROM vehicles WHERE category = ?');
            $req5->execute(array("offroad"));

            while($donnees = $req5->fetch()) {
                ?>
                    <h2>offroad</h2>
                    <p>Prix moyen : <?php echo $donnees['ROUND(AVG(price))'] ?> $</p>
                    <p>Prix minimum : <?php echo $donnees['ROUND(MIN(price))'] ?> $</p>
                    <p>Prix maximum : <?php echo $donnees['ROUND(MAX(price))'] ?> $</p>
                    <hr>
                <?php
            }

            $req5->closeCursor();

             //////////////////////////

             $req6 = $bdd->prepare('SELECT ROUND(AVG(price)),ROUND(MIN(price)),ROUND(MAX(price)) FROM vehicles WHERE category = ?');
             $req6->execute(array("sedans"));
 
             while($donnees = $req6->fetch()) {
                 ?>
                    <h2>sedans</h2>
                    <p>Prix moyen : <?php echo $donnees['ROUND(AVG(price))'] ?> $</p>
                    <p>Prix minimum : <?php echo $donnees['ROUND(MIN(price))'] ?> $</p>
                    <p>Prix maximum : <?php echo $donnees['ROUND(MAX(price))'] ?> $</p>
                    <hr>
                 <?php
             }
 
             $req6->closeCursor();

              //////////////////////////

            $req7 = $bdd->prepare('SELECT ROUND(AVG(price)),ROUND(MIN(price)),ROUND(MAX(price)) FROM vehicles WHERE category = ?');
            $req7->execute(array("sports"));

            while($donnees = $req7->fetch()) {
                ?>
                    <h2>sports</h2>
                    <p>Prix moyen : <?php echo $donnees['ROUND(AVG(price))'] ?> $</p>
                    <p>Prix minimum : <?php echo $donnees['ROUND(MIN(price))'] ?> $</p>
                    <p>Prix maximum : <?php echo $donnees['ROUND(MAX(price))'] ?> $</p>
                    <hr>
                <?php
            }

            $req7->closeCursor();

             //////////////////////////

             $req8 = $bdd->prepare('SELECT ROUND(AVG(price)),ROUND(MIN(price)),ROUND(MAX(price)) FROM vehicles WHERE category = ?');
             $req8->execute(array("sportsclassics"));
 
             while($donnees = $req8->fetch()) {
                 ?>
                    <h2>sportsclassics</h2>
                    <p>Prix moyen : <?php echo $donnees['ROUND(AVG(price))'] ?> $</p>
                    <p>Prix minimum : <?php echo $donnees['ROUND(MIN(price))'] ?> $</p>
                    <p>Prix maximum : <?php echo $donnees['ROUND(MAX(price))'] ?> $</p>
                    <hr>
                 <?php
             }
 
             $req8->closeCursor();

              //////////////////////////

            $req9 = $bdd->prepare('SELECT ROUND(AVG(price)),ROUND(MIN(price)),ROUND(MAX(price)) FROM vehicles WHERE category = ?');
            $req9->execute(array("super"));

            while($donnees = $req9->fetch()) {
                ?>
                    <h2>super</h2>
                    <p>Prix moyen : <?php echo $donnees['ROUND(AVG(price))'] ?> $</p>
                    <p>Prix minimum : <?php echo $donnees['ROUND(MIN(price))'] ?> $</p>
                    <p>Prix maximum : <?php echo $donnees['ROUND(MAX(price))'] ?> $</p>
                    <hr>
                <?php
            }

            $req9->closeCursor();

             //////////////////////////

             $req10 = $bdd->prepare('SELECT ROUND(AVG(price)),ROUND(MIN(price)),ROUND(MAX(price)) FROM vehicles WHERE category = ?');
             $req10->execute(array("suvs"));
 
             while($donnees = $req10->fetch()) {
                 ?>
                    <h2>suvs</h2>
                    <p>Prix moyen : <?php echo $donnees['ROUND(AVG(price))'] ?> $</p>
                    <p>Prix minimum : <?php echo $donnees['ROUND(MIN(price))'] ?> $</p>
                    <p>Prix maximum : <?php echo $donnees['ROUND(MAX(price))'] ?> $</p>
                    <hr>
                 <?php
             }
 
             $req10->closeCursor();

              //////////////////////////

            $req11 = $bdd->prepare('SELECT ROUND(AVG(price)),ROUND(MIN(price)),ROUND(MAX(price)) FROM vehicles WHERE category = ?');
            $req11->execute(array("vans"));

            while($donnees = $req11->fetch()) {
                ?>
                    <h2>vans</h2>
                    <p>Prix moyen : <?php echo $donnees['ROUND(AVG(price))'] ?> $</p>
                    <p>Prix minimum : <?php echo $donnees['ROUND(MIN(price))'] ?> $</p>
                    <p>Prix maximum : <?php echo $donnees['ROUND(MAX(price))'] ?> $</p>
                    <hr>
                <?php
            }

            $req11->closeCursor();

            //////////////////////////

            $req12 = $bdd->prepare('SELECT store,price FROM shops WHERE item = ?');
            $req12->execute(array("bread"));

            ?>
                <h2>bread</h2>
            <?php
            while($donnees = $req12->fetch()) {
                ?>
                    <p>Vendu par <?php echo $donnees['store'] ?> au prix de <?php echo $donnees['price'] ?> $</p>
                <?php
            }

            $req12->closeCursor();

            ?>
                <hr>
            <?php

            //////////////////////////

            $req13 = $bdd->prepare('SELECT store,price FROM shops WHERE item = ?');
            $req13->execute(array("water"));

            ?>
                <h2>water</h2>
            <?php
            while($donnees = $req13->fetch()) {
                ?>
                    <p>Vendu par <?php echo $donnees['store'] ?> au prix de <?php echo $donnees['price'] ?> $</p>
                <?php
            }

            $req13->closeCursor();

            ?>
                <hr>
            <?php

            //////////////////////////

            $req14 = $bdd->prepare('SELECT ROUND(AVG(price)),ROUND(MIN(price)),ROUND(MAX(price)) FROM properties WHERE price > ?');
            $req14->execute(array(0));

            while($donnees = $req14->fetch()) {
                ?>
                    <h2>properties</h2>
                    <p>Prix moyen : <?php echo $donnees['ROUND(AVG(price))'] ?> $</p>
                    <p>Prix minimum : <?php echo $donnees['ROUND(MIN(price))'] ?> $</p>
                    <p>Prix maximum : <?php echo $donnees['ROUND(MAX(price))'] ?> $</p>
                    <br>
                <?php
            }

            $req14->closeCursor();

            //////////////////////////

            $req15 = $bdd->prepare('SELECT label,price FROM properties WHERE price > ?');
            $req15->execute(array(0));

            while($donnees = $req15->fetch()) {
                ?>
                    <p><?php echo $donnees['label'] ?> au prix de <?php echo $donnees['price'] ?> $</p>
                <?php
            }

            $req15->closeCursor();

            /////////////////////////

            ?>
                <hr>
                <h2>Emplois</h2>
            <?php

            $req16 = $bdd->prepare('SELECT ROUND(AVG(salary)),ROUND(MIN(salary)),ROUND(MAX(salary)) FROM job_grades');
            $req16->execute(array());

            while($donnees = $req16->fetch()) {
                ?>
                    <p>Salaire moyen : <?php echo $donnees['ROUND(AVG(salary))'] ?> $ par jour.</p>
                    <p>Salaire le plus faible : <?php echo $donnees['ROUND(MIN(salary))'] ?> $ par jour.</p>
                    <p>Salaire le plus élevé : <?php echo $donnees['ROUND(MAX(salary))'] ?> $ par jour.</p>
                    <br>
                <?php
            }

            $req16->closeCursor();

            ////////////////////////

            $req17 = $bdd->prepare('SELECT jobs.label AS "entreprise",job_grades.label AS "grade",salary FROM job_grades,jobs WHERE jobs.name=job_grades.job_name');
            $req17->execute(array());
                
            while($donnees = $req17->fetch()) {
                ?>
                    <p>Un employé dans l'entreprise <?php echo $donnees['entreprise'] ?>, avec le grade <?php echo $donnees['grade'] ?> sera payer <?php echo $donnees['salary'] ?> $ par jour.</p>
                <?php
            }

            $req17->closeCursor();

        ?>
    
    </body>
</html>