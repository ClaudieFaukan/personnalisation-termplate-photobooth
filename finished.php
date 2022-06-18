

<?php
//require "./BDD.php";
$mail = $_GET["mail"];
$commande = $_GET["commande"];
$template = $_GET["template"];


//créer un dossier screen

$dir = "./templates/$mail/$commande/screen";

$dirExist = file_exists($dir);

if($dirExist == false){
    mkdir($dir);
}

//copier coller le screen_little et le mettre dans le dossier screen

$path_screen_little = "src/theme/".$template."/03_VISUELS_JPG/".$template."_SCREEN_LITTLE.jpg";
copy($path_screen_little,$dir."/".$template."_SCREEN_LITTLE.jpg");

//copier coller le le mp4 correspondant dans le dossier screen
$path_mp4 = "src/video/$template.mp4";
copy($path_mp4,$dir."/".$template.".mp4");


//$requete = BDDPersonnalisation::getInstance()->prepare("INSERT INTO personnalisation (mail,commande,custom_finish) VALUES (:mail,:commande,:custom_finish)");
//$requete->execute(
//    [
//    ':mail'=> $mail,
//    ':commande'=> $commande,
//    ":custom_finish" => 1
//    ]
//    );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!------ Include the above in your HEAD tag ---------->
    <title>Emotion's Box vous remercie</title>
</head>
<body>

<style>

.image-grid-cover {
    width: 100%;
    background-size: cover;
    min-height: 180px;
    position: relative;
    margin-bottom: 30px;
    text-shadow: rgba(0,0,0,.8) 0 1px 0;
    border-radius: 4px;
}
.image-grid-clickbox {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    display: block;
    width: 100%;
    height: 100%;
    z-index: 20;
    background: rgba(0,0,0,.45);
}
.cover-wrapper {
    font-size: 18px;
    text-align: center;
    display: block;
    color: #fff;
    text-shadow: rgba(0,0,0,.8) 0 1px 0;
    z-index: 21;
    position: relative;
    top: 80px;
}


body { font-family: 'Circular Std Book'; font-style: normal; font-weight: normal; font-size: 16px; line-height: 27px; color: #808294; -webkit-font-smoothing: antialiased; background: #f8f8fb; }
.body-bg { background-color: #fbfbfc; }
h1, h2, h3, h4, h5, h6 { color: #181825; margin: 0px 0px 15px 0px; font-family: 'Circular Std Book'; }
h1 { font-size: 42px; line-height: 54px; letter-spacing: -1px; }
h2 { font-size: 34px; line-height: 44px; letter-spacing: -1px; }
h3 { font-size: 26px; line-height: 33px; letter-spacing: -1px; }
h4 { font-size: 20px; line-height: 31px; }
h5 { font-size: 16px; line-height: 21px; }
h6 { font-size: 13px; line-height: 21px; }
.h2 { font-size: 35px; line-height: 48px; letter-spacing: -1px; }
.h3, h3 {
    font-size: 26px;
    line-height: 38px;
}
p { margin: 0px 0px 24px 0px; }
p:last-child { margin: 0px; }
a { color: #3544ee; }
a:hover { color: #202db8; text-decoration: none; }
a:active, a:hover { outline: 0; text-decoration: none; }
a.text-primary:focus, a.text-primary:hover {
    color: #202db8!important;
}
.space-medium { padding-top: 100px; padding-bottom: 100px; }

.btn { font-size: 16px; padding: 11px 21px; border-radius: 4px; overflow: hidden; display: inline-block; vertical-align: middle; -webkit-transform: perspective(1px) translateZ(0); transform: perspective(1px) translateZ(0); box-shadow: 0 0 1px rgba(0, 0, 0, 0); overflow: hidden; -webkit-transition-duration: 0.3s; transition-duration: 0.3s; -webkit-transition-property: color, background-color; transition-property: color, background-color; transition: .3s ease; font-family: 'Circular Std Medium' !important; }
.btn-outline-primary { color: #3544ee; background-color: transparent; border-color: #3544ee; }
.btn-outline-primary:hover { color: #fff; background-color: #3544ee; border-color: #3544ee; }
.btn-outline-primary.focus, .btn-outline-primary:focus { color: #fff; background-color: #3544ee; border-color: #3544ee; box-shadow: 0 0 0 1px rgb(53, 68, 238); }
.btn-rounded { border-radius: 100px; }


.feature-block-v7 { }
.feature-block-v7.feature-block { margin-bottom: 30px; }
.feature-block-v7 .feature-content { }
.feature-block-v7 .feature-title { margin-bottom: 5px; font-size: 21px; }
.feature-block-v7 .feature-text { }
.feature-block-v7 .feature-icon { background-color: #e1e4fd; color: #3544ee; padding: 18px; font-size: 20px; display: block; text-align: center; width: 60px; height: 60px; margin-bottom: 30px; line-height: 1.5; border-radius: 100%; }
.feature-app-img { position: relative; text-align: center; }
.circle-1 { position: absolute; top: 50%; left: 50%; -webkit-transform: translate(-50%, -50%); transform: translate(-50%, -50%); width: 390px; height: 390px; background-color: #3be1a4; color: white; text-align: center; line-height: 100px; border-radius: 50%; font-size: 1.3rem; }
.circle-1:hover { cursor: pointer; }
.circle-1::after, .circle-1::before { content: ""; display: block; position: absolute; top: 0; left: 0; width: 390px; height: 390px; background: #3be1a4; border-radius: 50%; z-index: -1; -webkit-animation: grow 3s ease-in-out infinite; animation: grow 3s ease-in-out infinite; }
.circle-1::after { background: rgb(59, 225, 164); }
.circle-1::after::before { content: ""; display: block; position: absolute; top: 0; left: 0; width: 390px; height: 390px; background: #3be1a4; border-radius: 50%; z-index: -1; -webkit-animation: grow 3s ease-in-out infinite; animation: grow 3s ease-in-out infinite; }
.circle-1::before { background: rgb(59, 225, 164); -webkit-animation-delay: -0.5s; animation-delay: -0.5s; }
.circle-2 { position: absolute; top: 50%; left: 50%; -webkit-transform: translate(-50%, -50%); transform: translate(-50%, -50%); width: 390px; height: 390px; background-color: #9c4efb; color: white; text-align: center; line-height: 100px; border-radius: 50%; font-size: 1.3rem; }
.circle-2:hover { cursor: pointer; }
.circle-2::after, .circle-2::before { content: ""; display: block; position: absolute; top: 0; left: 0; width: 390px; height: 390px; background: #9c4efb; border-radius: 50%; z-index: -1; -webkit-animation: grow 3s ease-in-out infinite; animation: grow 3s ease-in-out infinite; }
.circle-2::after { background: rgba(156, 78, 251, .5); }
.circle-2::after::before { content: ""; display: block; position: absolute; top: 0; left: 0; width: 390px; height: 390px; background: #3be1a4; border-radius: 50%; z-index: -1; -webkit-animation: grow 3s ease-in-out infinite; animation: grow 3s ease-in-out infinite; }
.circle-2::before { background: rgba(156, 78, 251, .5); -webkit-animation-delay: -0.5s; animation-delay: -0.5s; }
.circle-3 { position: absolute; top: 50%; left: 50%; -webkit-transform: translate(-50%, -50%); transform: translate(-50%, -50%); width: 390px; height: 390px; background-color: #fb8645; color: white; text-align: center; line-height: 100px; border-radius: 50%; font-size: 1.3rem; }
.circle-3:hover { cursor: pointer; }
.circle-3::after, .circle-3::before { content: ""; display: block; position: absolute; top: 0; left: 0; width: 390px; height: 390px; background: #fb8645; border-radius: 50%; z-index: -1; -webkit-animation: grow 3s ease-in-out infinite; animation: grow 3s ease-in-out infinite; }
.circle-3::after { background: rgba(251, 134, 69, .5); }
.circle-3::after::before { content: ""; display: block; position: absolute; top: 0; left: 0; width: 390px; height: 390px; background: #3be1a4; border-radius: 50%; z-index: -1; -webkit-animation: grow 3s ease-in-out infinite; animation: grow 3s ease-in-out infinite; }
.circle-3::before { background: rgba(251, 134, 69, .5); -webkit-animation-delay: -0.5s; animation-delay: -0.5s; }
@-webkit-keyframes grow {
	0% { -webkit-transform: scale(1, 1); transform: scale(1, 1); opacity: 1; }
	100% { -webkit-transform: scale(1.8, 1.8); transform: scale(1.8, 1.8); opacity: 0; }
}
@keyframes grow {
	0% { -webkit-transform: scale(1, 1); transform: scale(1, 1); opacity: 1; }
	100% { -webkit-transform: scale(1.8, 1.8); transform: scale(1.8, 1.8); opacity: 0; }
}

</style>
    
 <div class="space-medium">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
                    <div class="feature-block-v7 feature-block">
                        <div class="feature-icon text-brand bg-brand-light mb-5">
                            <i class="fas fa-paint-roller"></i>
                        </div>
                        <div class="feature-content">
                            <h2>Félicitations vous venez de personnaliser votre évènement</h2>
                            <p class="lead">Il va être ajouter à votre commande, par notre équipe ! </p>
                            <hr class="m-t-30 m-b-30">
                            <p>Il vous reste à personnaliser votre email pour les envois de photos.</p>
                            <p>Vous pouvez voir votre personnalisation de templates, en cliquant sur "voir rendu template".</p>
                        </div>
                    </div>
                </div>
                <div class="offset-xl-1 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <!-- TEMPLATES -->
            <div class="row">
                <h2 class="text-center">Vos templates :</h2>
            </div>
                <div class='row'>
                        <?php 
                        $render = "";
                            $dir = "./templates/$mail/$commande";
                            $scandir = scandir($dir);

                            foreach ($scandir as $key) {
                                if($key=='.'||$key == '..' ||$key=="screen"){
                                }else{
                                    $render = $render."

                                    <div class='col-12 col-sm-6 col-md-4 image-grid-item'>
                                        <div style='background-image: url($dir/$key);' class='image-grid-cover'>
                                            <a href='".$dir."/".$key."' class='image-grid-clickbox'></a>
                                            <a href='".$dir."/".$key."' class='cover-wrapper'>Voir rendu template</a>
                                        </div>
                                    </div>
                                    ";
                                }
                            }
                            echo($render);
                        ?>
                    </div>
                </div>
            </div>
            <!-- FORMULAIRE -->
            <div class="container">
    <h2 class="text-center">Je personnalise mes emails d'envois de photos souvenir</h2>
	<div class="row justify-content-center">
		<div class="col-12 col-md-8 col-lg-6 pb-5">


                    <!--Form with header-->

                    <form action="" method="POST">
                        <div class="card border-primary rounded-0">
                            <div class="card-header p-0">
                                <div class="bg-info text-white text-center py-2">
                                    <h3><i class="fa fa-envelope"></i> Email Personnalisé</h3>
                                    <p class="m-0">Chaque invité souhaitant recevoir sa photo par email, recevra votre message</p>
                                </div>
                            </div>
                            <div class="card-body p-3">
                            <input type="hidden" name="mail" value="<?php echo($mail)?>">
                            <input type="hidden" name="commande" value="<?php echo($commande)?>">

                                <!--Body-->
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="nombre" name="title" placeholder="Souvenir du Mariage d'Hélène et Babacar" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                        </div>
                                        <textarea name="body" class="form-control" placeholder="Nous vous remercions d'avoir fêté avec nous ce moment magique !" required></textarea>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <input type="submit" value="Je valide ma personnalisation" class="btn btn-info btn-block rounded-0 py-2" onclick="finish()" id="button">
                                </div>
                                <div class="alert alert-success" role="alert" style="display:none" id="success">
                                   Votre personnalisation est maintenant complète! <br>Vous pouvez fermer cette page désormais
                                    <div class="align-content-center mx-auto"style="width:300px;padding:50px 50px;height:300px; justify-content: center;"></span><img src="./asset/check.gif" style="width:200 px; height:200px"></div>
                                </div>
                            </div>

                        </div>
                    </form>
                    <!--Form with header-->
                </div>
        </div>
    </div>
				</div>
            </div>
        </div>
    </div>
</body>
<script>
function finish(){

    button = document.getElementById("button");
    button.setAttribute("disabled", false);
    $("#button").css("background-color","green").val("C'est validé!");
    $("#success").show();

}
</script>

</html>

<?php

    if(!empty($_POST["title"]) && !empty($_POST["body"]) && !empty($_POST["mail"]) && !empty($_POST["commande"]) ){

        $title = htmlspecialchars($_POST["title"]);
        $body = htmlspecialchars($_POST["body"]) ;
        
        $mail=$_POST["mail"];
        $commande=$_POST["commande"];
        
        
        $dir = "./templates/$mail/$commande/screen/data-email.txt";
        
        $data = "Titre : \n".$title."\n"."Corp du mail : \n".$body;
        file_put_contents($dir,$data);

        //return something et banniere true
        
    }

?>







 