<?php

    //DONNE D ARRIVE
    $image = $_POST["image"];
    $mail = $_POST["mail"];
    $commande = $_POST["commande"];
    $format = $_POST["format"];

    //TRAITEMENT IMAGE

    list($type, $image) = explode(';', $image);
    list(, $image) = explode(',', $image);
    $image = base64_decode($image);

    //CREATION DU FICHIER

    $path = "./templates/".$mail;
    $image_name = $commande."_".$format.'.png';

    //CHECK IF FILE EXIST AND REMOVE IT

    $dirCommandePath = $path."/".$commande;

    $dirCommandeExist = file_exists($dirCommandePath);

    if($dirCommandeExist == false ){
        mkdir($dirCommandePath);
    }

    file_put_contents($dirCommandePath."/".$image_name,$image);