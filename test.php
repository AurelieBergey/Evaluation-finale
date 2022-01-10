<?php

require 'Employee.php';

// (name ,surname, sex, dateOfBirth, adress, diplome)

$variable = new Employee("Bloodreina","Clark","feminin","27 décembre 1985","5 rue de la bas, 33700 Merignac","oui");
    var_dump($variable);




$variable->Afficher_Stats();


