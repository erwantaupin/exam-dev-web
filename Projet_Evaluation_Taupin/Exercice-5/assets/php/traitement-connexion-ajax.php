<?php
    include('db.php');

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $mail = $_POST['mail'];

    if(empty($name)){
        echo('<div class="alert alert-danger" role="alert">
        « Attention, le champ NOMCHAMP, doit être remplis »
      </div>');
    ?><br><?php   
    }
    if(empty($surname)){
        echo('<div class="alert alert-danger" role="alert">
        « Attention, le champ PRENOMCHAMP, doit être remplis »
      </div>');
    ?><br><?php    
    }
    if(empty($mail)){
        echo('<div class="alert alert-danger" role="alert">
        « Attention, le champ MAILCHAMP, doit être remplis »
      </div>');
    ?><br><?php    
    }
    if(!empty($name) && !empty($surname) && !empty($mail)){
        echo('<div class="alert alert-success" role="alert">
        « NOMCHAMP PRENOMCHAMP, MAILCHAMP à bien été reçu, nous vous contacterons dans les plus bref délais »
      </div>');
    }

