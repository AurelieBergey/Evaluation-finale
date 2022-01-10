<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

    $pdo = new PDO('sqlite:Employee.db');

    
    $requete = $pdo->query("SELECT * FROM Employee");

  
    $resultat = $requete->fetchAll(PDO::FETCH_ASSOC);

    foreach($resultat as $tout) {

        
        echo "<div>";
            echo "\n"."<strong>Prenom : </strong> ".$tout['Name']. "\n";
            echo "<strong>Nom : </strong>" .$tout['Surname'] . "\n";
            echo "<strong>Sexe: </strong>".$tout['Sex'] . "\n";
            echo "<strong>Date de naissance : </strong>".$tout['Date Of Birth'] . "\n";
            echo "<strong>Adresses : </strong>".$tout['Adress'] . "\n";
            echo "<strong>Obtention du diplome : </strong>".$tout['Diplome'] . "\n";
    
        echo "</div>";
        echo "<br>";

        
    }
?>
    
</body>
</html>
