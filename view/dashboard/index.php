<?php
include_once '../../controller/FilmController.php';
include_once '../../controller/UserController.php';
include_once '../../controller/StudioController.php';
include_once '../../controller/JadwalController.php';
include_once '../../controller/TopupController.php';
include_once '../../controller/TransaksiController.php';

include_once '../../db_function/FilmDao.php';
include_once '../../db_function/UserDao.php';
include_once '../../db_function/StudioDao.php';
include_once '../../db_function/JadwalDao.php';
include_once '../../db_function/TopupDao.php';
include_once '../../db_function/MemberDao.php';
include_once '../../db_function/TransaksiDao.php';

include_once '../../entity/Film.php';
include_once '../../entity/User.php';
include_once '../../entity/Studio.php';
include_once '../../entity/Jadwal.php';
include_once '../../entity/Member.php';
include_once '../../entity/Topup.php';
include_once '../../entity/Transaksi.php';


include_once '../../db_function/DBHelper.php';
include_once '../../util/view_util.php';

session_start();
ob_start();

if (!isset($_SESSION['user_logged'])) {
    $_SESSION['user_logged'] = false;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cinema Dashboard Template</title>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="description"
          content="Free Datta Able Admin Template come up with latest Bootstrap 4 framework with basic components, form elements and lots of pre-made layout options"/>
    <meta name="keywords"
          content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template, free admin theme, free dashboard template"/>
    <meta name="author" content="CodedThemes"/>
    <link rel="icon" href="../../src/images/icons/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../../src/vendor/bootstrap/css/animate.min.css">
    <link rel="stylesheet" href="../../src/vendor/bootstrap/css/style.css">
    <link rel="stylesheet" type="text/css"
          href="../../src/vendor/datatables/datatables.min.css"/>
</head>

<body>
<!-- [ Pre-loader ] start -->
<div class="loader-bg">
    <div class="loader-track">
        <div class="loader-fill"></div>
    </div>
</div>
<!-- [ Pre-loader ] End -->
<!-- [ navigation menu ] start -->
<?php if ($_SESSION['user_logged']) { ?>
    <!-- UNTUK ADMIN -->
    <?php if ($_SESSION['user_role'] == 'admin') { ?>
        <nav class="pcoded-navbar">
            <div class="navbar-wrapper">
                <div class="navbar-content scroll-div">
                    <ul class="nav pcoded-inner-navbar">
                        <li class="nav-item pcoded-menu-caption">
                            <label>Navigation</label>
                        </li>
                        <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item">
                            <a href="?dashboard=home" class="nav-link "><span class="pcoded-micon"><i
                                            class="feather icon-home"></i></span><span
                                        class="pcoded-mtext">Home</span></a>
                        </li>
                        <!-- LOGOUT -->
                        <li data-username="form elements advance componant validation masking wizard picker select"
                            class="nav-item">
                            <a href="?dashboard=out" class="nav-link "><span class="pcoded-micon"><i
                                            class="feather icon-file-text"></i></span><span class="pcoded-mtext">Logging Out</span></a>
                        </li>
                        <!-- USER -->
                        <li class="nav-item pcoded-menu-caption">
                            <label>Form User</label>
                        </li>
                        <li data-username="form elements advance componant validation masking wizard picker select"
                            class="nav-item">
                            <a href="?dashboard=createUser" class="nav-link "><span class="pcoded-micon"><i
                                            class="feather icon-file-text"></i></span><span class="pcoded-mtext">Form Create User</span></a>
                        </li>
                        <li data-username="form elements advance componant validation masking wizard picker select"
                            class="nav-item">
                            <a href="?dashboard=updateDeleteUser" class="nav-link "><span class="pcoded-micon"><i
                                            class="feather icon-file-text"></i></span><span class="pcoded-mtext">Form Update & Delete User</span></a>
                        </li>
                        <!-- FILM -->
                        <li class="nav-item pcoded-menu-caption">
                            <label>Form Film</label>
                        </li>
                        <li data-username="form elements advance componant validation masking wizard picker select"
                            class="nav-item ">
                            <a href="?dashboard=createFilm" class="nav-link "><span class="pcoded-micon"><i
                                            class="feather icon-file-text"></i></span><span class="pcoded-mtext">Form Create Film</span></a>
                        </li>
                        <li data-username="form elements advance componant validation masking wizard picker select"
                            class="nav-item">
                            <a href="?dashboard=updateDeleteFilm" class="nav-link "><span class="pcoded-micon"><i
                                            class="feather icon-file-text"></i></span><span class="pcoded-mtext">Form Update & Delete Film</span></a>
                        </li>
                        <!-- JADWAL -->
                        <li class="nav-item pcoded-menu-caption">
                            <label>Form Jadwal</label>
                        </li>
                        <li data-username="form elements advance componant validation masking wizard picker select"
                            class="nav-item ">
                            <a href="?dashboard=createJadwal" class="nav-link "><span class="pcoded-micon"><i
                                            class="feather icon-file-text"></i></span><span class="pcoded-mtext">Form Create Jadwal</span></a>
                        </li>
                        <li data-username="form elements advance componant validation masking wizard picker select"
                            class="nav-item">
                            <a href="?dashboard=updateDeleteJadwal" class="nav-link "><span class="pcoded-micon"><i
                                            class="feather icon-file-text"></i></span><span class="pcoded-mtext">Form Update & Delete Jadwal</span></a>
                        </li>
                        <!-- STUDIO -->
                        <li class="nav-item pcoded-menu-caption">
                            <label>Form Studio</label>
                        </li>
                        <li data-username="form elements advance componant validation masking wizard picker select"
                            class="nav-item">
                            <a href="?dashboard=createStudio" class="nav-link "><span class="pcoded-micon"><i
                                            class="feather icon-file-text"></i></span><span class="pcoded-mtext">Form Create Studio</span></a>
                        </li>
                        <li data-username="form elements advance componant validation masking wizard picker select"
                            class="nav-item">
                            <a href="?dashboard=updateDeleteStudio" class="nav-link "><span class="pcoded-micon"><i
                                            class="feather icon-file-text"></i></span><span class="pcoded-mtext">Form Update & Delete Studio</span></a>
                        </li>
                        <!-- Transaksi -->
                        <li class="nav-item pcoded-menu-caption">
                            <label>Transaksi</label>
                        </li>
                        <li data-username="form elements advance componant validation masking wizard picker select"
                            class="nav-item">
                            <a href="?dashboard=viewTransaksi" class="nav-link "><span class="pcoded-micon"><i
                                            class="feather icon-file-text"></i></span><span class="pcoded-mtext">View Transaksi</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- [ navigation menu ] end -->
        <!-- [ Header ] start -->
        <header class="navbar pcoded-header navbar-expand-lg navbar-light">
            <div class="m-header">
                <a class="mobile-menu" id="mobile-collapse1" href="javascript:"><span></span></a>
                <a href="dashboard_home.php" class="b-brand">
                    <div class="b-bg">
                        <i class="feather icon-trending-up"></i>
                    </div>
                    <span class="b-title"></span>
                </a>
            </div>
            <a class="mobile-menu" id="mobile-header" href="javascript:">
                <i class="feather icon-more-horizontal"></i>
            </a>
        </header>
        <!-- [ Header ] end -->
        <!-- VVV [ Switch ] VVV -->
        <!-- [ Main Content ] start -->
        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                <div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <div class="main-body">
                            <div class="page-wrapper">
                                <!-- [ Main Content ] start -->
                                <?php
                                $targetMenu = filter_input(INPUT_GET, 'dashboard');
                                $_SESSION['targetMenu'] = $targetMenu;
                                switch ($targetMenu) {
                                    case 'home':
                                        include_once 'dashboard_home.php';
                                        break;
                                    case 'createUser':
                                        $userController = new UserController();
                                        $userController->indexCreate();
                                        break;
                                    case 'viewTransaksi':
                                        $transaksiController = new TransaksiController();
                                        $transaksiController->index();
                                        break;
                                    case 'updateUser':
                                        $userController = new UserController();
                                        $userController->indexUpdate();
                                        break;
                                    case 'updateDeleteUser':
                                        $userController = new UserController();
                                        $userController->indexUpdateDelete();
                                        break;
                                    case 'createFilm':
                                        $filmController = new FilmController();
                                        $filmController->indexCreate();
                                        break;
                                    case 'updateFilm':
                                        $filmController = new FilmController();
                                        $filmController->indexUpdate();
                                        break;
                                    case 'updateDeleteFilm':
                                        $filmController = new FilmController();
                                        $filmController->indexUpdateDelete();
                                        break;
                                    case 'createJadwal':
                                        $jadwalController = new JadwalController();
                                        $jadwalController->indexCreate();
                                        break;
                                    case 'updateJadwal':
                                        $jadwalController = new JadwalController();
                                        $jadwalController->indexUpdate();
                                        break;
                                    case 'updateDeleteJadwal':
                                        $jadwalController = new JadwalController();
                                        $jadwalController->indexUpdateDelete();
                                        break;
                                    case 'createStudio':
                                        $studioController = new StudioController();
                                        $studioController->indexCreate();
                                        break;
                                    case 'updateStudio':
                                        $studioController = new StudioController();
                                        $studioController->indexUpdate();
                                        break;
                                    case 'updateDeleteStudio':
                                        $studioController = new StudioController();
                                        $studioController->indexUpdateDelete();
                                        break;
                                    case 'out':
                                        session_destroy();
                                        header('location:index.php');
                                    default;
                                        include_once 'dashboard_home.php';
                                }
                                ob_end_flush();
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } else if ($_SESSION['user_role'] == 'kasir') { ?>
        <!-- UNTUK KASIR -->
        <nav class="pcoded-navbar">
            <div class="navbar-wrapper">
                <div class="navbar-content scroll-div">
                    <ul class="nav pcoded-inner-navbar">
                        <li class="nav-item pcoded-menu-caption">
                            <label>Navigation</label>
                        </li>
                        <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item">
                            <a href="?dashboard=home" class="nav-link "><span class="pcoded-micon"><i
                                            class="feather icon-home"></i></span><span
                                        class="pcoded-mtext">Home</span></a>
                        </li>
                        <li data-username="form elements advance componant validation masking wizard picker select"
                            class="nav-item">
                            <a href="?dashboard=out" class="nav-link "><span class="pcoded-micon"><i
                                            class="feather icon-file-text"></i></span><span class="pcoded-mtext">Logging Out</span></a>
                        </li>
                        <!-- DIRECT BOOKING -->
                        <li class="nav-item pcoded-menu-caption">
                            <label>Pembelian Langsung</label>
                        </li>
                        <li data-username="form elements advance componant validation masking wizard picker select"
                            class="nav-item">
                            <a href="?dashboard=directBooking" class="nav-link "><span class="pcoded-micon"><i
                                            class="feather icon-file-text"></i></span><span class="pcoded-mtext">Direct Booking</span></a>
                        </li>
                        <!-- TOPUP -->
                        <li class="nav-item pcoded-menu-caption">
                            <label>Top up</label>
                        </li>
                        <li data-username="form elements advance componant validation masking wizard picker select"
                            class="nav-item">
                            <a href="?dashboard=manualTopup" class="nav-link "><span class="pcoded-micon"><i
                                            class="feather icon-file-text"></i></span><span class="pcoded-mtext">Top up manual</span></a>
                        </li>
                        <li data-username="form elements advance componant validation masking wizard picker select"
                            class="nav-item">
                            <a href="?dashboard=verification" class="nav-link "><span class="pcoded-micon"><i
                                            class="feather icon-file-text"></i></span><span class="pcoded-mtext">Acc Top up</span></a>
                        </li>

                        <!-- LOGOUT -->
                    </ul>
                </div>
            </div>
        </nav>
        <!-- [ navigation menu ] end -->
        <!-- [ Header ] start -->
        <header class="navbar pcoded-header navbar-expand-lg navbar-light">
            <div class="m-header">
                <a class="mobile-menu" id="mobile-collapse1" href="javascript:"><span></span></a>
                <a href="dashboard_home.php" class="b-brand">
                    <div class="b-bg">
                        <i class="feather icon-trending-up"></i>
                    </div>
                    <span class="b-title"></span>
                </a>
            </div>
            <a class="mobile-menu" id="mobile-header" href="javascript:">
                <i class="feather icon-more-horizontal"></i>
            </a>
        </header>
        <!-- [ Header ] end -->
        <!-- VVV [ Switch ] VVV -->
        <!-- [ Main Content ] start -->
        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                <div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <div class="main-body">
                            <div class="page-wrapper">
                                <!-- [ Main Content ] start -->
                                <?php
                                $targetMenu = filter_input(INPUT_GET, 'dashboard');
                                $_SESSION['targetMenu'] = $targetMenu;
                                switch ($targetMenu) {
                                    case 'home':
                                        include_once 'dashboard_home.php';
                                        break;
                                    case 'directBooking':
                                        include_once 'directbooking.php';
                                        break;
                                    case 'manualTopup':
                                        $topupController = new TopupController();
                                        $topupController->Index();
                                        break;
                                    case 'verification':
                                        $topupController = new TopupController();
                                        $topupController->Index2();
                                        break;
                                    case 'out':
                                        session_destroy();
                                        header('location:index.php');
                                    default;
                                        include_once 'dashboard_home.php';
                                }
                                ob_end_flush();
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    } else {
        include_once 'dashboard_home.php';
    }
} else {
    $userController = new UserController();
    $userController->indexLogin();
}
?>
</body>
<!-- Required Js -->
<script type="text/javascript" src="../../src/crudView.js"></script>
<script type="text/javascript" src="../../src/functions.js"></script>
<script src="../../src/vendor/bootstrap/js/vendor-all.min.js"></script>
<script src="../../src/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="../../src/vendor/bootstrap/js/pcoded.min.js"></script>
<script src="/src/functions.js"></script>
<script type="text/javascript" charset="utf8" src="../../src/vendor/datatables/datatables.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#myTabletopup').DataTable();
        $('#myTableTrx').DataTable();
    });
</script>
</html>