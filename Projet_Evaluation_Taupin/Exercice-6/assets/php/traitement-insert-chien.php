<?php

$Name = $_POST['name'];
$Age = $_POST['surname'];
$Race = $_POST['mail'];
// $Name2 = $_POST['name1'];
// $Age2 = $_POST['surname1'];
// $Race2 = $_POST['mail1'];
// $Name3 = $_POST['name2'];
// $Age3 = $_POST['surname2'];
// $Race3 = $_POST['mail2'];

if(isset($_POST['name'])){
    if(empty($Name)){
        echo('<div class="alert alert-danger" role="alert">
        « Attention, le champ nom, doit être remplis »
      </div>');
    ?><br><?php   
    }
    if(empty($Age)){
        echo('<div class="alert alert-danger" role="alert">
        « Attention, le champ Age, doit être remplis »
      </div>');
    ?><br><?php    
    }
    if(empty($Race)){
        echo('<div class="alert alert-danger" role="alert">
        « Attention, le champ Race, doit être remplis »
      </div>');
    ?><br><?php    
    }
    if(!empty($Name) && !empty($Age) && !empty($Race)){
        echo('<div class="alert alert-success" role="alert">
        «nous avon bien reçus les info de votre canidé»
      </div>');
      ?><br><?php


      class db {
        protected $db;
        public function condb(){
          try {
            $this->db = new PDO('mysql:host=db5006773335.hosting-data.io;dbname=dbs5603922;charset=utf8mb4', 'dbu2228906', 'y93Vb7iW');
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);  
          } catch (PDOException $e) {
            echo "Connection failed : ". $e->getMessage();
          }
        }

      }



      class chien extends db {
      private $nom = '';
      private $age = '';
      private $race = '';

      public function __construct($nom, $age, $race) {
        $this->nom = $nom;
        $this->age = $age;
        $this->race = $race;
      }

      public function __toString() {
        return "Nom: ".$this->nom."\nAge: ".$this->age."\nRace: ".$this->race."\n ";
      }
      public function insertjson(){
        $message = array();

        $message['name'] = $this->nom;
        $message['age'] = $this->age;
        $message['race'] = $this->race;

        $js = file_get_contents('message.json');
        $js = json_decode($js, true);

        $js[] = $message;

        $js = json_encode($js);

        file_put_contents('message.json', $js);
      }
      public function insertbdd(){
        $this->condb();
        $sqlRequest = "INSERT INTO pet_exo (nom_chien, age_chien, race_chien)
                        VALUES (:nom_chien, :age_chien, :race_chien);";
        $pdoStat = $this->db-> prepare($sqlRequest);
        $pdoStat->execute(Array(
        ':nom_chien' => $this->nom,
        ':age_chien' => $this->age,
        ':race_chien' => $this->race
        ));
      }
      
    }
      

    $chien = new chien ($Name, $Age, $Race);
    $chien->insertbdd();


    

    // print_r($js);
    }
  }