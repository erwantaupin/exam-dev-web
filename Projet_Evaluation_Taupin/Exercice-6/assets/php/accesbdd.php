<?php 
require("db.php");

$chien = ("SELECT * FROM chien 
      
    ");

$chien = $db->prepare($chien);

$chien->execute();

$execute = $chien ->fetchAll(PDO::FETCH_ASSOC);