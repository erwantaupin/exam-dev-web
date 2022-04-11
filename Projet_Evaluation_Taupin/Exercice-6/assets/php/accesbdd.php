<?php 
require("db.php");

$chien = ("SELECT * FROM pet_exo 
      
    ");

$chien = $db->prepare($chien);

$chien->execute();

$execute = $chien ->fetchAll(PDO::FETCH_ASSOC);