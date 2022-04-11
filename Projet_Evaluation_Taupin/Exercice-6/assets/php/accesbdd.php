<?php 
class dbtab
{
    protected $data;
    public function __construct(){
      try {
        $this->data = new PDO('mysql:host=db5006773335.hosting-data.io;dbname=dbs5603922;charset=utf8mb4', 'dbu2228906', 'y93Vb7iW');
      } catch (PDOException $e) {
        echo "Connection failed : ". $e->getMessage();
      }
    }
    public function selectbdd(){

        $request = "SELECT * FROM pet_exo";
    
        $chien = $this->data->prepare($request);
    
        $chien->execute();
    
        $execute = $chien ->fetchAll();

        return $execute;
      }
}

$bdd = new dbtab();
$result = $bdd->selectbdd();