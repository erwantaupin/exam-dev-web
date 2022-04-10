<?php

$race = $_POST['race'];

    $json = file_get_contents('message.json');
    $json = json_encode($json, true);

    var_dump($json);

    


    // foreach ($json as $value) {
    //     if($value['race'] == $race) {
    //         echo $value;
    //     }
    // }






    //     $js = file_get_contents('message.json');
    //     $js = json_decode($js, true);

    //     var_dump(json_decode($js));

    //     $chien = $js->{'race'}->{$race};

    // echo $chien;


// $js = file_get_contents('message.json');
// $js = json_decode($js, true);

// $js[] = $message;

// $js = json_encode($js);

// file_put_contents('message.json', $js);
