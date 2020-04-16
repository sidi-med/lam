<?php 

    function connexion_db($db_host, $db_name, $db_user, $db_password) {
        
        //On essaie de se connecter
        try{
            $conn = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_password);
            //On définit le mode d'erreur de PDO sur Exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        
        // On capture les exceptions si une exception est lancée 
        // et on affiche les informations relatives à celle-ci
        catch(PDOException $e){
            echo "Erreur : " . $e->getMessage();
        }           

        return $conn;
    }
?>