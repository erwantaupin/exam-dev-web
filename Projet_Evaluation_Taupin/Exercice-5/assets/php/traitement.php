<?php
    
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $mail = $_POST['mail'];

    if(isset($_POST['name'])){
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
          ?><br><?php
        $message = array();

        $message['name'] = $name;
        $message['surname'] = $surname;
        $message['mail'] = $mail;

        $js = file_get_contents('message.json');
        $js = json_decode($js, true);

        $js[] = $message;

        $js = json_encode($js);

        file_put_contents('message.json', $js);

        print_r($js);
        }






        
    }