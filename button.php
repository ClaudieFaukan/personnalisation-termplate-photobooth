<?php
require "./BDD.php";

    
    //TODO recuperer l'adresse email ?!
    $mail = "quaresma.nina@gmail.com";



    function genereateURLcustomisation($mail){
    //recuperer ladresse mail et l'id client
        //table : ex_users
        //->user_email;user_login;ID;
        $requete = BDDPersonnalisation::getInstance()->prepare("SELECT ID FROM ex_users WHERE user_email = :mail");
        $requete->execute([
            "mail" => $mail
        ]);
        $id = $requete->fetch();
        $id = $id["ID"];


        //transformer id en idcustomer
        $requete = BDDPersonnalisation::getInstance()->prepare("SELECT customer_id FROM ex_wc_customer_lookup WHERE user_id = :customer_id");
        $requete->execute([
            "customer_id" => $id
        ]);
        $id = $requete->fetch();
        $id_customer = $id["customer_id"];

        //recuper le numero de commande
        //table : ex_wc_order_product_lookup
        //order_item_id,order_id;customer_id
        $requete = BDDPersonnalisation::getInstance()->prepare("SELECT order_item_id,order_id FROM ex_wc_order_product_lookup WHERE customer_id = :id ");
        $requete->execute([
            "id" => $id_customer
        ]);
        $response = $requete->fetchall();
        $total = count($response);

        $order_item_id = $response[$total-1]["order_item_id"];
        $order_id = $response[$total-1]["order_id"];


        //TESTER si personnalisation à été déjà créer dans ce cas return url vide
        $requete = BDDPersonnalisation::getInstance()->prepare("SELECT custom_finish FROM personnalisation WHERE mail=:mail AND commande=:commande");
        $requete->execute(
            [
                ':mail'=> $mail,
                ':commande'=> $order_item_id,
            ]
        );
        $response = $requete->fetch();
        if($response["custom_finish"] == 1){
            $url = "/templateAlreadyFinish.html";
            return $url;
        }


    
        //recuperer le format de la commande
        //table : ex_woocommerce_order_itemmeta
        //order_item_id; _tmdata
    
        $requete = BDDPersonnalisation::getInstance()->prepare("SELECT meta_value FROM ex_woocommerce_order_itemmeta WHERE meta_key= :meta_key AND order_item_id = :id");
        $requete->execute([
            "id" => $order_item_id,
            "meta_key" => "_tmdata"
        ]);
        $response = $requete->fetchall();
        $data = $response[0]["meta_value"];

    
    
        $format_array = [
            "paysage"=>'s:9:"Paysage_1"',
            "portrait"=>'s:10:"Portrait_0"',
            "centre"=>'s:8:"Centre_2"',
            "stripe"=>'s:7:"Strip_3"',
            "all"=>'s:29:"Tous les formats (+4,99€)_4"'
        ];
        //default value
        $format = "cutie";
        foreach ($format_array as $key => $value) {
            $parseResponse = strpos($data,$value);
            if($parseResponse != false){
                $format= $key;
            }
        }
        if($format == "cutie"){
            $url = "https://personnalisation.cutiebox.fr?mail=$mail&commande=$order_id&format=$format";
        }else{
            $url = "https://personnalisation.cutiebox.fr?mail=$mail&commande=$order_id&format=$format";
        }
        
        return $url;
    }
    genereateURLcustomisation($mail);









