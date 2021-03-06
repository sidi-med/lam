<?php
    include_once 'connexion.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mohamed LAM</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- Ekko -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" />
    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-md  bg-dark  fixed-top " id="main-nav">
            <div class="container">
                <a class="navbar-brand" href="index.html">Mohamed LAM</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto" id="liens">
                        <li class="nav-item mr-1 active">
                            <a class="nav-link" href="index.html">Accueil <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item mr-1 active">
                            <a class="nav-link" href="biographie.html">Biographie </a>
                        </li>
                        <li class="nav-item mr-1 active">
                            <a class="nav-link" href="bibliograhie.html">Bibliographie</a>
                        </li>

                        <li class="nav-item mr-1 active">
                            <a class="nav-link" href="actualites.html">Actualités </a>
                        </li>

                        <li class="nav-item mr-1 active">
                            <a class="nav-link" href="inerview.html">Interviews </a>
                        </li>

                        <li class="nav-item mr-1 active">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <section id="contact" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">


                    <br><br><br><br>

                    <h3>Contactez-moi</h3>
                    <form action="contact.php" method="POST">
                        <div class="input-group input-group-lg mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-user"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" placeholder="Nom" name="nom">

                        </div>

                        <div class="input-group input-group-lg mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-user"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" placeholder="Prénom" name="prenom" />
                        </div>
                        <div class="input-group input-group-lg mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-envelope"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" placeholder="Email" name="email" />
                        </div>

                        <div class="input-group input-group-lg mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-pencil-alt"></i>
                                </span>
                            </div>
                            <textarea class="form-control" placeholder="Message" rows="5" name="message"></textarea>
                        </div>

                        <input type="submit" value="Envoyer" class="btn btn-light btn-block btn-lg" name="submit">
                    </form>
                </div>

            </div>
        </div>
    </section>

    <div>
        <section id="footer2" style="position: absolute;width: 100%;height: 49px;bottom: 0;left: 0;right: 0;">
            <div class="container fixed-bttom" style="padding-top: 0;padding-bottom: 0;margin-top: 15px;">
                <div class="row align-items-center text-center">
                    <div class="col">
                        <p>Tous Droits Réservés ©
                            <span id="year">2020</span> Mohamed LAM</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
    <script src="./assets/js/app.js"></script>
</body>

</html>