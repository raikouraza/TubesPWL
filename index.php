<?php
SESSION_START();
include_once 'entity/Film.php';
include_once 'entity/Genre.php';
include_once 'entity/Jadwal.php';
include_once 'entity/Member.php';
include_once 'entity/Tiket.php';
include_once 'entity/Film.php';
include_once 'entity/Topup.php';
include_once 'entity/Studio.php';

include_once 'db_function/MemberDao.php';
include_once 'db_function/DBHelper.php';
include_once 'db_function/FilmDao.php';
include_once 'db_function/UserDao.php';
include_once 'db_function/GenreDao.php';
include_once 'db_function/TiketDao.php';
include_once 'db_function/TopupDao.php';
include_once 'db_function/JadwalDao.php';

include_once 'controller/LoginMemberLoginController.php';
include_once 'controller/FilmController.php';
include_once 'controller/MemberController.php';
include_once 'controller/UserController.php';
include_once 'controller/JadwalController.php';

require 'util/Exception.php';
require 'util/PHPMailer.php';
require 'util/SMTP.php';

if (!isset($_SESSION['user_logged'])) {
    $_SESSION['user_logged'] = false;
}
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> CINEMA YAS!</title>
    <!-- Bootstrap core CSS -->
    <link href="src/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="src/vendor/bootstrap/css/heroic-features.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="src/vendor/bootstrap/css/seating.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="src/vendor/bootstrap/js/seating.js"></script>
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

    <link rel="stylesheet" type="text/css" href="src/vendor/bootstrap/css/navbar.css">

    <link rel="stylesheet" type="text/css" href="src/vendor/bootstrap/css/main.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="shortcut icon" type="image/jpg" href="src/images/movie.ico"/>

</head>
<body style="  display:flex;
  flex-direction:column; ">
<!-- Navigation -->
<!-- Jika User Sudah Login -->
<?php if ($_SESSION['user_logged']) { ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top ">
        <div class="container">
            <a class="navbar-brand" href="?menu=hm" style="text-decoration-color: #66fcf1">CINEMA YAS!</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul id="mainMenu" class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="?menu=hm">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item" >
                        <a class="nav-link" href="?menu=mov">Movies</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="?menu=book">Book Ticket!</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?menu=mem">Membership</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?menu=pro">Promotions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?menu=ab">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?menu=out">Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        <?php
        $targetMenu = filter_input(INPUT_GET, 'menu');
        switch ($targetMenu) {
            case 'hm':
                include_once 'view/home.php';
                break;
            case 'ab':
                include_once 'view/about.php';
                break;
            case 'pro':
                include_once 'view/promotions.php';
                break;
            case 'boo':
                include_once 'view/bookingseat.php';
                break;
            case 'book':
                include_once 'view/bookingticket.php';
                break;
            case 'mem':
                $memberController = new MemberController();
                $memberController->Index();
                break;
            case 'mov':
                include_once 'view/movies.php';
                break;
            case 'pay':
                include_once 'view/payment.php';
                break;
            case 'movd':
                include_once 'view/moviedata.php';
                break;
            case 'sin':
                $loginMember = new LoginMemberLoginController();
                $loginMember->index();
                break;
            case 'forgotPassword':
                $loginMember = new LoginMemberLoginController();
                $loginMember->index();
                break;
            case 'out':
                session_destroy();
                header('view/home.php');
            default:
                include_once 'view/home.php';
                break;
        }
        ob_end_flush();
        ?>
    </main>
    <!-- Jika User Belum Login -->
<?php } else { ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="?menu=hm">CINEMA YAS!</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
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
                        <a class="nav-link" href="?menu=mov">Movies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?menu=pro">Promotions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?menu=ab">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?menu=sin">Login/SignUp</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        <?php
        $targetMenu = filter_input(INPUT_GET, 'menu');
        switch ($targetMenu) {
            case 'hm':
                include_once 'view/home.php';
                break;
            case 'ab':
                include_once 'view/about.php';
                break;
            case 'pro':
                include_once 'view/promotions.php';
                break;
            case 'boo':
                include_once 'view/bookingseat.php';
                break;
            case 'mov':
                include_once 'view/movies.php';
                break;
            case 'movd':
                include_once 'view/moviedata.php';
                break;
            case 'sin':
                $loginMember = new LoginMemberLoginController();
                $loginMember->index();
                break;
            case 'out':
                session_destroy();
                header('view/home.php');
                break;
            default:
                include_once 'view/home.php';
                break;
        }
        ob_end_flush();
        ?>
    </main>
<?php } ?>
<!-- Footer -->
<footer class="py-3 bg-dark" style="  margin-top:auto; height: 10%; ">
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
<script src="src/functions.js"></script>
<script src="http://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function () {
        $('#myTable').DataTable();   $('#myTable2').DataTable();
    });
</script>
</body>
</html>
