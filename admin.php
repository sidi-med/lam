<?php
    include_once 'connexion.php';

    if (isset($_POST['submit'])) {
        try {
            $username = strip_tags($_POST['username']);
            $password = strip_tags($_POST['password']);

            $sql = "SELECT * FROM users WHERE name = ? AND password = ?";
            $req = $conn->prepare('SELECT * FROM users WHERE name = ? AND password = ?');
            $req->execute([$username, $password]);
            if ($req->fetch(PDO::FETCH_ASSOC)) {
                session_start();
                $_SESSION['connect'] = 1;
            } else {
                header('Refresh: 0');
            }
        } catch (Exception $e) {
            die("Erreur c'est produite lors de la connexion. Code : " . $e->getMessage());
        }

    }
?>


<!DOCTYPE html>
<html>
<head>
    <title>Emails</title>
    <!--Made with love by Mutiullah Samim -->
    <meta charset="utf-8" />

    <!--Bootsrap 4 CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!--Custom styles-->
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css?family=Numans');

        html,body{
            background-image: url('http://getwallpapers.com/wallpaper/full/a/5/d/544750.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            height: 100%;
            font-family: 'Numans', sans-serif;
        }

        .container{
            height: 100%;
            align-content: center;
        }

        .card{
            height: 370px;
            margin-top: auto;
            margin-bottom: auto;
            width: 400px;
            background-color: rgba(0,0,0,0.5) !important;
        }

        .social_icon span{
            font-size: 60px;
            margin-left: 10px;
            color: #FFC312;
        }

        .social_icon span:hover{
            color: white;
            cursor: pointer;
        }

        .card-header h3{
            color: white;
        }

        .social_icon{
            position: absolute;
            right: 20px;
            top: -45px;
        }

        .input-group-prepend span{
            width: 50px;
            background-color: #FFC312;
            color: black;
            border:0 !important;
        }

        input:focus{
            outline: 0 0 0 0  !important;
            box-shadow: 0 0 0 0 !important;

        }

        .remember{
            color: white;
        }

        .remember input
        {
            width: 20px;
            height: 20px;
            margin-left: 15px;
            margin-right: 5px;
        }

        .login_btn{
            color: black;
            background-color: #FFC312;
            width: 100px;
        }

        .login_btn:hover{
            color: black;
            background-color: white;
        }

        .links{
            color: white;
        }

        .links a{
            margin-left: 4px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="d-flex justify-content-center h-100">
        <?php
            if (isset($_SESSION) && $_SESSION['connect'] === 1) {
                include '_form_connect.php';
            } else {
                include '_show_emails.php';
            }
        ?>
    </div>
</div>
</body>
</html>