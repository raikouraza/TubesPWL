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
    <div class="containerProfile" style="background-color: whitesmoke">
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
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#myModal">
                                    Edit Profile
                                </button>
                                <!-- The Modal Profile-->
                                <div class="modal" id="myModal">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Update Profile</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;
                                                </button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <form>
                                                    <div class="form-group">
                                                        <label for="txtJudulFilm">Masukkan Username Baru</label>
                                                        <input type="text"
                                                               value="<?php echo $member->getMemberUsername(); ?>"
                                                               class="form-control" id="txtUsername"
                                                               placeholder="Masukkan Username">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="txtTanggalFilm">Masukkan Password Baru</label>
                                                        <input type="password"
                                                               value="<?php echo $member->getMemberPassword(); ?>"
                                                               class="form-control" id="txtPassword"
                                                               placeholder="Masukkan Password">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="txtDeskripsi">Masukkan email Baru</label>
                                                        <input type="email"
                                                               value="<?php echo $member->getMemberEmail(); ?>"
                                                               class="form-control" id="txtEmail"
                                                               placeholder="Masukkan Nama Depan">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="txtFirstName">Masukkan Nama Depan Baru</label>
                                                        <input type="text"
                                                               value="<?php echo $member->getMemberNamaDepan(); ?>"
                                                               class="form-control" id="txtFirstName">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="txtLastName">Masukkan Nama Belakang Baru</label>
                                                        <input type="date"
                                                               value="<?php echo $member->getMemberNamaBelakang(); ?>"
                                                               class="form-control" id="txtLastName"
                                                               placeholder="Masukkan Nama Belakang">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="txtPhoto">Masukkan Photo Baru</label>
                                                        <input type="file"
                                                               value="<?php echo $member->getMemberPhoto(); ?>"
                                                               class="form-control" id="txtPhoto"
                                                               placeholder="Masukkan Photo">
                                                    </div>
                                                    <button type="submit" class="btn btn-primary" id="btnSubmit">
                                                        Submit
                                                    </button>
                                                </form>
                                            </div>

                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">
                                                    Close
                                                </button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <p>&nbsp;&nbsp;</p>
                            </li>
                            <li class="active">
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#myModal2">
                                    Top Up Saldo
                                </button>
                                <!-- The Modal Saldo -->
                                <div class="modal" id="myModal2">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Modal Heading</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;
                                                </button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <form method="post" enctype="multipart/form-data" id="filmForm">
                                                    <div class="form-group">
                                                        <label for="txtAmount">Masukkan Amount Saldo : </label>
                                                        <hr>
                                                        <input type="text" class="form-control" id="txtAmount"
                                                               name="txtAmount" placeholder="Masukkan Jumlah Saldo">
                                                    </div>
                                                    <br>
                                                    <!-- tanggal waktu -->
                                                    <label for="txtAmount">Tanggal dan Waktu Pembayaran: </label>
                                                         <input type="datetime-local" name="bdaytime">
                                                    <br>
                                                    <div class="form-group">
                                                        <label for="txtTransfer">Masukkan Bukti Transfer</label>
                                                        <hr>
                                                        <input type="file" class="form-control-file" id="txtTransfer"
                                                               name="txtTransfer">
                                                    </div>
                                                    <br>
                                                    <button type="submit" class="btn btn-primary" id="btnTopup">Top
                                                        Up!
                                                    </button>
                                            </div>
                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">
                                                    Close
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- END MENU -->
                </div>
            </div>
            <div class="col-md-9">
                <div class="profile-content">
                    Username : <?php echo $member->getMemberUsername(); ?> <br>
                    Email : <?php echo $member->getMemberEmail(); ?> <br>
                    Saldo : Rp <?php echo $member->getMemberSaldo(); ?>.- <br>
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
