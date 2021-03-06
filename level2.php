<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/profile.js"></script>
    <script src="js/card.js"></script>


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Hello, world!</title>
  </head>
  <body>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- <script src="vendor/jquery/jquery-1.11.1.js"></script> -->
    <!------ Include the above in your HEAD tag ---------->

    <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top"><img class="handicrush" src="vendor/images/logo-handic.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item btn-medium">
                    <a href="deconnection.html"><button type="button" class="btn btn-co">Déconnexion</button></a>
                </li>
                </ul>
            </div>
            </div>
        </nav>

    <div class="avatar rounded-circle">
        <img src="vendor/images/avatar-1.png" alt="">

    </div>

    <section id="vide"></section>


        <section id="contact">
            <div class="row featurette">
            <div class="col-md-7 order-md-2 text-center">
                <h2 class="featurette-heading">Niveau 1</h2>
                <p class="lead">Les principaux Handicaps seraient moteurs</p>
                    <img src="vendor/images/back-jeu.png" class="image-jeu" onclick=changeHtml() alt="">
            </div>
            </div>
        </section>
        <section id="question">
            <div class="row featurette">
            <div class="col-md-7">
                <div class="question_area">
                    <h3>Quelle tranche de la population est la plus touchée par le handicap?</h3>
                    <div class="answerA"><img src="./img/tick.png" alt="icons"><h4>Les 12-25 ans</h4></div>
                    <div class="answerB"><img src="./img/tick.png" alt="icons"><h4>Les 25-55 ans</h4></div>
                    <div class="answerC"><img src="./img/tick.png" alt="icons"><h4><?php header("Location: http://127.0.0.1/Hackathon/level3.php"); ?>Les 55-65 ans</h4></div>
                </div>
                <form class="submit" method="POST">
                    <input type="image" id="jouer" src="./img/button_jouer.png">
                    <input type="image" id="rejouer" src="./img/button_rejouer.png">
                </form>
            </div>
            </div>
        </section>




    </body>
</html>
