<?php
$format = urldecode($_GET["format"]);
$mail = urldecode($_GET["mail"]);
$commande = urldecode($_GET["commande"]);


if (empty($formassst) || empty($mail) || empty($commande)) {

    echo ("Veuillez vérifier votre lien");
} else {

    //Création du dossier si client non réportorier
    $dirExist = file_exists("./templates/" . $mail);

    if ($dirExist == false) {
        dump('oui');
        mkdir("./templates/" . $mail);
    }
    //Verification du format
    switch ($format) {

        case 'centrer':
            $path = "Location: http://" . $_SERVER["HTTP_HOST"] . "/photobooth-custom/templateCentrer.php?mail=" . $mail . "&commande=" . $commande . "&all=false";
            header($path);
            break;

        case 'portrait':
            $path = "Location: http://" . $_SERVER["HTTP_HOST"] . "/photobooth-custom/templatePortrait.php?mail=" . $mail . "&commande=" . $commande . "&all=false";
            header($path);
            break;

        case 'paysage':
            $path = "Location: http://" . $_SERVER["HTTP_HOST"] . "/photobooth-custom/templatePaysage.php?mail=" . $mail . "&commande=" . $commande . "&all=false";
            header($path);
            break;

        case 'stripe':
            $path = "Location: http://" . $_SERVER["HTTP_HOST"] . "/photobooth-custom/templateStrip.php?mail=" . $mail . "&commande=" . $commande . "&all=false";
            header($path);
            break;

        case 'all':
            $path = "Location: http://" . $_SERVER["HTTP_HOST"] . "/photobooth-custom/templateCentrer.php?mail=" . $mail . "&commande=" . $commande . "&all=true";
            header($path);
            break;

        case 'cutie':
            $path = "Location: http://" . $_SERVER["HTTP_HOST"] . "/photobooth-custom/templateCutiePortrait.php?mail=" . $mail . "&commande=" . $commande . "&all=false";
            header($path);
            break;
        default:
            echo ("Un problème est survenue veuillez nous excusez");
            break;
    }
}
