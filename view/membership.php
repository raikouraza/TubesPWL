<?php


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
            <div class="col-md-4" >
                <div class="profile-sidebar">
                    <!-- SIDEBAR USERPIC -->
                    <div class="profile-userpic">
                        <?php
                        /* @var $member Member */
                        ?>
                        <img class="card-img-top"
                             src=<?php echo $member->getMemberPhoto(); ?> alt="<?php echo $member->getMemberNamaDepan(); ?>"
                             width="200" height="200">
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
                                                <form method="post" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <label for="txtMemberUsername">Username</label>
                                                        <input type="text"
                                                               value="<?php echo $member->getMemberUsername(); ?>"
                                                               class="form-control" name="txtMemberUsername"
                                                               placeholder="Masukkan Username" disabled>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="txtMemberEmail">Masukkan email Baru</label>
                                                        <input type="email"
                                                               value="<?php echo $member->getMemberEmail(); ?>"
                                                               class="form-control" name="txtMemberEmail"
                                                               placeholder="Masukkan Nama Depan">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="txtMemberFirstName">Masukkan Nama Depan Baru</label>
                                                        <input type="text"
                                                               value="<?php echo $member->getMemberNamaDepan(); ?>"
                                                               class="form-control" name="txtMemberFirstName">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="txtMemberLastName">Masukkan Nama Belakang
                                                            Baru</label>
                                                        <input type="text"
                                                               value="<?php echo $member->getMemberNamaBelakang(); ?>"
                                                               class="form-control" name="txtMemberLastName"
                                                               placeholder="Masukkan Nama Belakang">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="txtMemberPhoto">Masukkan Photo Baru</label>
                                                        <input type="file"
                                                               value="<?php echo $member->getMemberPhoto(); ?>"
                                                               class="form-control" name="txtMemberPhoto"
                                                               placeholder="Masukkan Photo">
                                                    </div>
                                                    <center>
                                                    <button class="btn btn-primary" name="btnMemberUpdate">Update
                                                    </button></center>
                                                </form>
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
                                                <h4 class="modal-title">Topup Saldo</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;
                                                </button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <form method="post" enctype="multipart/form-data" id="filmForm">
                                                    <div class="form-group">
                                                        <label for="txtAmount">Masukkan Jumlah Saldo : </label>

                                                        <input type="text" class="form-control" id="txtAmount"
                                                               name="txtAmount" placeholder="Masukkan Jumlah Saldo">
                                                    </div>

                                                    <!-- tanggal waktu -->
                                                    <label for="txtDate">Tanggal dan Waktu Pembayaran: </label><br>
                                                    <input type="datetime-local" name="txtDate">
                                                    <br><br>
                                                    <div class="form-group">
                                                        <label for="txtTransfer">Masukkan Bukti Transfer</label>

                                                        <input type="file" class="form-control-file" id="txtTransfer"
                                                               name="txtTransfer">
                                                    </div>
                                                    <br>
                                                    <center>
                                                    <button type="submit" class="btn btn-primary" name="btnTopup">
                                                        Proses
                                                    </button></center>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- Change Password -->
                            &nbsp;
                            &nbsp;
                            <li class="active">
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#myModal3">
                                    Change Password
                                </button>
                                <!-- The Modal Change PAssword -->
                                <div class="modal" id="myModal3">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Change Password</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;
                                                </button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <form method="post" enctype="multipart/form-data" id="filmForm">
                                                    <div class="form-group">
                                                        <label for="txtAmount">Masukkan Password Baru : </label>

                                                        <input type="password" class="form-control" id="txtNewPassword"
                                                               name="txtNewPassword" placeholder="**************">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="txtAmount">Masukkan Password Lagi : </label>
                                                        <input type="password" class="form-control" id="txtNewPassword"
                                                               name="txtNewPassword2" placeholder="**************">
                                                    </div>
                                                    <center>
                                                    <button type="submit" class="btn btn-primary" name="btnChangePassword">
                                                        Change Password
                                                    </button>
                                                    </center>
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
            <div class="col-md-8">
                <div class="profile-content">
                    Username : <?php echo $member->getMemberUsername(); ?> <br>
                    Email : <?php echo $member->getMemberEmail(); ?> <br>
                    Saldo : Rp <?php echo $member->getMemberSaldo(); ?>.- <br>
                </div>
            </div>
            <br><br><br><br>
            <div class="col-md-6" align="center">
                <h5 align="center">HISTORI TRANSAKSI TIKET</h5>
                <table id="myTable" >
                    <thead>
                        <tr>
                            <th>Transaksi ID</th>
                            <th>Tiket ID</th>
                            <th>Judul Film</th>
                            <th>Tanggal</th>
                            <th>Tanggal Transaksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
//                        /* @var $pasien Pasien */
//                        foreach ($pasiens as $pasien) {
    //                        $tgl = date_create($pasien->getBirthDate());
    //                        echo '<tr>';
    //                        echo '<td>' . $pasien->getMedRecordNumber() . '</td>';
    //                        echo '<td>' . $pasien->getCitizenIdNumber() . '</td>';
    //                        echo '<td>' . $pasien->getName() . '</td>';
    //                        echo '<td>' . $pasien->getAddress() . '</td>';
    //                        echo '<td>' . $pasien->getBirthPlace() . '</td>';
    //                        echo '</tr>';
//                         }
                        ?>
                    </tbody>
                </table>
            </div>
            <br>
            <!--histori transaksi topup-->
            <div class="col-md-6" align="center">
                <h5 align="center">HISTORI TRANSAKSI TOP UP</h5>
                <table id="myTable2" >
                    <thead>
                    <tr>
                        <th>Topup ID</th>
                        <th>Tanggal TopUp</th>
                        <th>Jumlah</th>
                        <th>Status</th>

                    </tr>
                    </thead>
                    <tbody>

                        <?php
                        $topid = new Topup();
                        $topupDao = new TopupDao();
                        $topid->setTbMemberMemberId($_SESSION['id']);
                        $topups = $topupDao->getAllTopupByMemberId($topid);
                        /* @var $topup Topup */
                        foreach ($topups as $topup) {
                        echo '<tr>';
                        echo '<td>' . $topup->getTopupId() . '</td>';
                        echo '<td>' . $topup . '</td>';
                        echo '<td> Rp.' . $topup . '.-</td>';
                        echo '<td>' . $topup . '</td>';
                        echo '</tr>';
                         }
                        ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
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
