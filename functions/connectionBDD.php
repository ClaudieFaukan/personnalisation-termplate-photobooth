<?php
require "./BDD.php";


function connectUser($email,$mdp){
    $stmt = BDDPersonnalisation::getInstance()->query("SELECT * FROM users WHERE email = '${email}'");
    $stmt->execute();
    

}