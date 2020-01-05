<?php
$id = $_SESSION['id'];
if (isset($id)) {
    $member = new Member();
    $memberDao = new MemberDao();
    $member->setMemberId($id);
    $member = $memberDao->getMemberById($member);

}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="limiter">
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Blog Home - Start Bootstrap Template</title>
        <!-- Bootstrap core CSS -->
        <link href="../src/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="../src/vendor/bootstrap/css/blog-home.css" rel="stylesheet">

    </head>
    <body>

    <!-- Page Content -->
    <div class="container" style="background-color: whitesmoke">
        <div class="row profile">
            <div class="col-md-3">
                <div class="profile-sidebar">
                    <!-- SIDEBAR USERPIC -->
                    <div class="profile-userpic">
                        <img class="card-img-top" src="<?php echo $member->getMemberPhoto(); ?>" alt="Card image cap">
                    </div>
                    <!-- END SIDEBAR USERPIC -->
                    <!-- SIDEBAR USER TITLE -->
                    <div class="profile-usertitle">
                        <div class="profile-usertitle-name" align="center">
                            <?php echo $member->getMemberNamaDepan(); ?>
                            <?php echo $member->getMemberNamaBelakang(); ?>
                        </div>

                    </div>
                    <!-- END SIDEBAR USER TITLE -->

                    <!-- SIDEBAR MENU -->
                    <div class="profile-usermenu">
                        <ul class="nav">
                            <li class="active">
                                <a href="#">
                                    <i class="glyphicon glyphicon-home"></i>
                                   Edit Profile
                                </a>
                            </li>
                            <li>
                                <p>&nbsp;&nbsp;</p>
                            </li>
                            <li class="active">
                                <a href="#">
                                    <i class="glyphicon glyphicon-home"></i>
                                    Top Up Saldo
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- END MENU -->
                </div>
            </div>
            <div class="col-md-9">
                <div class="profile-content">
                    Email : <?php echo $member->getMemberEmail(); ?> <br>
                    Member Id : <?php echo $member->getMemberId(); ?> <br>
                    Saldo : <?php echo $member->getMemberSaldo(); ?> <br>
                </div>
            </div>
        </div>
    </div>
    <center>
    <!-- /.container -->
    <!-- Bootstrap core JavaScript -->
    <script src="../src/vendor/jquery/jquery.js"></script>
    <script src="../src/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>
</div>
</div>
</body>
</html>
