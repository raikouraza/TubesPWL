<?php
include_once '../../controller/FilmController.php';
include_once '../../db_function/FilmDao.php';
include_once '../../db_function/DBHelper.php';
include_once '../../entity/Film.php';
include_once '../../util/view_util.php';
session_start();
ob_start();
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Free Datta Able Admin Template come up with latest Bootstrap 4 framework with basic components, form elements and lots of pre-made layout options" />
    <meta name="keywords" content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template, free admin theme, free dashboard template"/>
    <meta name="author" content="CodedThemes"/>
    <link rel="icon" href="../../src/images/icons/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../../src/vendor/bootstrap/css/animate.min.css">
    <link rel="stylesheet" href="../../src/vendor/bootstrap/css/style.css">
    <script type="text/javascript" src="../../src/vendor/bootstrap/js/crudView.js"></script>
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
<nav class="pcoded-navbar">
    <div class="navbar-wrapper">
        <div class="navbar-content scroll-div">
            <ul class="nav pcoded-inner-navbar">
                <li class="nav-item pcoded-menu-caption">
                    <label>Navigation</label>
                </li>
                <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item">
                    <a href="?dashboard=home" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                </li>
                <li class="nav-item pcoded-menu-caption">
                    <label>Form User</label>
                </li>
                <li data-username="form elements advance componant validation masking wizard picker select" class="nav-item">
                    <a href="?dashboard=createUser" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Form Create User</span></a>
                </li>
                <li data-username="form elements advance componant validation masking wizard picker select" class="nav-item">
                    <a href="?dashboard=updateUser" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Form Update & Delete User</span></a>
                </li>
                <li class="nav-item pcoded-menu-caption">
                    <label>Form Film</label>
                </li>
                <li data-username="form elements advance componant validation masking wizard picker select" class="nav-item ">
                    <a href="?dashboard=createFilm" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Form Create Film</span></a>
                </li>
                <li data-username="form elements advance componant validation masking wizard picker select" class="nav-item">
                    <a href="?dashboard=updateDeleteFilm" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Form Update & Delete Film</span></a>
                </li>
                <li class="nav-item pcoded-menu-caption">
                    <label>Form Member</label>
                </li>
                <li data-username="form elements advance componant validation masking wizard picker select" class="nav-item">
                    <a href="?dashboard=createMember" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Form Create Member</span></a>
                </li>
                <li data-username="form elements advance componant validation masking wizard picker select" class="nav-item">
                    <a href="?dashboard=updateMember" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Form Update & Delete Member</span></a>
                </li>
                <li class="nav-item pcoded-menu-caption">
                    <label>Form Studio</label>
                </li>
                <li data-username="form elements advance componant validation masking wizard picker select" class="nav-item">
                    <a href="?dashboard=createStudio" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Form Create Studio</span></a>
                </li>
                <li data-username="form elements advance componant validation masking wizard picker select" class="nav-item">
                    <a href="?dashboard=updateStudio" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Form Update & Delete Studio</span></a>
                </li>
                <li class="nav-item pcoded-menu-caption">
                    <label>Form Sesi</label>
                </li>
                <li data-username="form elements advance componant validation masking wizard picker select" class="nav-item">
                    <a href="?dashboard=createSesi" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Form Create Sesi</span></a>
                </li>
                <li data-username="form elements advance componant validation masking wizard picker select" class="nav-item">
                    <a href="?dashboard=updateSesi" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Form Update & Delete Sesi</span></a>
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
            <span class="b-title">Datta Able</span>
        </a>
    </div>
    <a class="mobile-menu" id="mobile-header" href="javascript:">
        <i class="feather icon-more-horizontal"></i>
    </a>
</header>
<!-- [ Header ] end -->

<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <!-- [ breadcrumb ] start -->
                <!-- [ breadcrumb ] end -->
                <div class="main-body">
                    <div class="page-wrapper">
                        <!-- [ Main Content ] start -->
                        <?php
                        $targetMenu = filter_input(INPUT_GET, 'dashboard');
                        $_SESSION['targetMenu'] = $targetMenu;
                        switch ($targetMenu)
                        {
                            case 'home':
                                include_once 'dashboard_home.php';
                                break;
                            case 'createUser':
                                include_once 'form_create_user.php';
                                break;
                            case 'updateUser':
                                include_once 'form_update_user.php';
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
                            case 'createMember':
                                include_once 'form_create_member.php';
                                break;
                            case 'updateMember':
                                include_once 'form_update_member.php';
                                break;
                            case 'createStudio':
                                include_once 'form_create_studio.php';
                                break;
                            case 'updateStudio':
                                include_once 'form_update_studio.php';
                                break;
                            case 'createSesi':
                                include_once 'form_create_sesi.php';
                                break;
                            case 'updateSesi':
                                include_once 'form_update_sesi.php';
                                break;
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

<!-- Required Js -->
<script src="../../src/vendor/bootstrap/js/vendor-all.min.js"></script>
<script src="../../src/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="../../src/vendor/bootstrap/js/pcoded.min.js"></script>
</body>
</html>
