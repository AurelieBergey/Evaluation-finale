<?php

Class Employee{

    public $name;
    public $surname;
    private $sex;
    private $dateOfBirth;
    private $adress;
    private $diplome;
   

    public function __construct($name ,$surname, $sex, $dateOfBirth, $adress, $diplome ){

        $this->nane= $name;
        $this->surname= $surname;
        $this->sex= $sex;
        $this->dateOfBirth= $dateOfBirth;
        $this->adress= $adress;
        $this->diplome= $diplome;

    }
    public function getSex(){
        return $this->sex;
    }

    public function setSex ($para){
         $this->sex = ($para);
        
    }
    public function getDateOfBirth(){
        return $this->dateOfBirth;
    }

    public function setDateOfBirth ($para){
         $this->dateOfBirth = ($para);
        
    }
    public function getAdress(){
        return $this->adress;
    }

    public function setAdress ($para){
         $this->adress = ($para);
        
    }

    public function getDiplome(){
        return $this->diplome;
    }

    public function setDiplome ($para){
         $this->diplome = ($para);
        
    }

    public function Afficher_Stats(){

        echo "\n"."Prenom : ".$this->nane . "\n";
        echo "Nom :" .$this->surname . "\n";
        echo "Sexe: ".$this->sex . "\n";
        echo "Date de naissance : ".$this->dateOfBirth . "\n";
        echo "Adresses : ".$this->adress . "\n";
        echo "Obtention du diplome : ".$this->diplome . "\n";
    }
    
}

?>