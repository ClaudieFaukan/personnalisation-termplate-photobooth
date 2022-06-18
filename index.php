<?php
$format = urldecode($_GET["format"]);
$mail = urldecode($_GET["mail"]);
$commande = urldecode($_GET["commande"]);


if(empty($format) || empty($mail) || empty($commande)){

    echo("Veuillez vérifier votre lien");

}else{

    //Création du dossier si client non réportorier
    $dirExist = file_exists("./templates/".$mail);

    if($dirExist == false){
        mkdir("./templates/".$mail);
    }
    //Verification du format
    switch ($format) {
    
        case 'centrer':
            $path = "Location: http://".$_SERVER["HTTP_HOST"]."/templateCentrer.php?mail=".$mail."&commande=".$commande."&all=false";
            header($path);
            break;

        case 'portrait':
            $path = "Location: http://".$_SERVER["HTTP_HOST"]."/templatePortrait.php?mail=".$mail."&commande=".$commande."&all=false";
            header($path);
            break;    
    
        case 'paysage':
            $path = "Location: http://".$_SERVER["HTTP_HOST"]."/templatePaysage.php?mail=".$mail."&commande=".$commande."&all=false";
            header($path);
            break;
    
        case 'stripe':
            $path = "Location: http://".$_SERVER["HTTP_HOST"]."/templateStrip.php?mail=".$mail."&commande=".$commande."&all=false";
            header($path);
            break;
    
        case 'all':
            $path = "Location: http://".$_SERVER["HTTP_HOST"]."/templateCentrer.php?mail=".$mail."&commande=".$commande."&all=true";
            header($path);
            break;        

        case 'cutie':
            $path = "Location: http://".$_SERVER["HTTP_HOST"]."/templateCutiePortrait.php?mail=".$mail."&commande=".$commande."&all=false";
            header($path);    
            break;
        default:
            echo("Un problème est survenue veuillez nous excusez");
            break;    
    }
}

