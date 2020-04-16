<?php
    include_once 'connexion.php';

    if (isset($_POST['submit'])) {
        // récupérer des valeurs
        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        // Requête mysql pour insérer des données
        try {
            $sql = "INSERT INTO emails(`prenom`, `nom`, `email`, `message`) VALUES (:prenom, :nom, :email, :message)";
            $res = $conn->prepare($sql);
            $exec = $res->execute([":prenom"=>$prenom, ":nom"=>$nom, ":email"=>$email, ":message"=> trim($message)]);
        } catch (Exception $e) {
            die("Une erreur c'est produite veuillez réessayer ultérieurement ! Code error : " .$e->getMessage());
        }


//        var_dump($_POST);die;
//        $sql = "SELECT * FROM users";
//        $req = $conn->prepare($sql);
//        $req->execute();
//        $users = $req->fetch(PDO::FETCH_ASSOC);
//        var_dump($users);die('je suis la');

    }
?>