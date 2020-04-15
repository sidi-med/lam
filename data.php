<?php 
    include_once 'local.php';
    include_once 'utilities.php';

    //On essaie de se connecter
    $conn = connexion_db($db_host, 'momotest', $db_user, $db_password); 

    
    
    if (isset($_POST['submit'])) {
        var_dump($_POST);
        try{
            $sql = "SELECT * FROM visitors;
            $req = $conn->prepare($sql);
            $req->execute();
            $user = $req->fetch(PDO::FETCH_ASSOC); 

        } 
                    
    }

?>

