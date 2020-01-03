<?php
SESSION_START();
if(!isset($_SESSION['user_logged'])){
    $_SESSION['user_logged'] = false;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Heroic Features - Start Bootstrap Template</title>
    <!-- Bootstrap core CSS -->
    <link href="src/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="src/vendor/bootstrap/css/heroic-features.css" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="icon" type="image/png" href="src/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="src/vendor/bootstrap/css/bootstrap.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="src/vendor/bootstrap/css/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="src/vendor/bootstrap/css/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="src/vendor/bootstrap/css/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="src/vendor/bootstrap/css/util.css">
    <link rel="stylesheet" type="text/css" href="src/vendor/bootstrap/css/main.css">
    <!--===============================================================================================-->
</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">CINEMA YAS!</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul id="mainMenu" class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="?menu=hm">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?menu=hm">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?menu=ser">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?menu=con">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?menu=sin">Sign in</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<main>
    <?php
        $targetMenu = filter_input(INPUT_GET, 'menu');
        switch($targetMenu){
                case 'hm':
                    include_once 'view/home.php';
                    break;
                case 'at':
                    include_once 'view/about.php';
                    break;
                case 'ir':
                    break;
                case 'iru':
                    include_once 'view/insurance_update.php';
                    break;
                case 'pt':
                    break;
                case 'ptu':
                    include_once 'view/patient_update.php';
                    break;
                case 'us':
                    break;
                case 'sin':
                    include_once 'view/signinsignup.php';
                    break;
                case 'out':
                    session_destroy();
                    header('view/home.php');
                default:
                    include_once 'view/home.php';
                    break;
        }
    ?>
</main>
<!-- Page Content -->
<div class="container">
    <!-- Jumbotron Header -->
    <header class="jumbotron my-3">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="src/images/poster/blackchristmas.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="src/images/poster/frozen2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="src/images/poster/jumanji.jpg" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="src/images/poster/spies.jpg" alt="Fourth slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="src/images/poster/starwars.jpg" alt="Fifth slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>
    <!-- Page Features -->
    <div class="row text-center">
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card h-100">
                <img class="card-img-top" src="http://placehold.it/500x325" alt="">
                <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">Find Out More!</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card h-100">
                <img class="card-img-top" src="http://placehold.it/500x325" alt="">
                <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente, tempore debitis beatae culpa natus architecto.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">Find Out More!</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card h-100">
                <img class="card-img-top" src="http://placehold.it/500x325" alt="">
                <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">Find Out More!</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card h-100">
                <img class="card-img-top" src="http://placehold.it/500x325" alt="">
                <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente, tempore debitis beatae culpa natus architecto.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">Find Out More!</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->
<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; YAS 2019</p>
    </div>
    <!-- /.container -->
</footer>
<!-- Bootstrap core JavaScript -->
<script src="src/vendor/jquery/jquery.min.js"></script>
<script src="src/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function () {
        $(".nav-tabs a").click(function () {
            $(this).tab('show');
        });
    });
</script>

<!--===============================================================================================-->
<script src="src/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="src/vendor/bootstrap/js/popper.js"></script>
<script src="src/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="src/vendor/bootstrap/js/select2.js"></script>
<!--===============================================================================================-->
<script src="src/vendor/bootstrap/js/tilt.jquery.min.js"></script>
<script>
    $('.js-tilt').tilt({scale: 1.1})
</script>
<!--===============================================================================================-->
<script src="src/vendor/bootstrap/js/main.js"></script>
</body>
</html>
