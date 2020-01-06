<!-- [ Main Content ] start -->
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h5>Form Top Up Saldo</h5>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <form method="post" enctype="multipart/form-data" id="filmForm">
                            <div class="form-group">
                                <label for="txtJudulFilm">Masukkan Username</label>
                                <hr>
                                <input type="text" class="form-control" id="txtUsername" name="txtUsername" placeholder="Masukkan Username">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="txtDeskripsi">Masukkan Jumlah Saldo</label>
                                <hr>
                                <input type="text" class="form-control" id="txtAmount" name="txtAmount" placeholder="Masukkan Jumlah Top up">
                            </div>
                            <button type="submit" class="btn btn-primary" id="btnSubmit" name="btnTopup" >Submit</button>

                        </form>
                    </div>
                    <br>
                </div>
                <hr>
            </div>
        </div>
    </div>
</div>
<!-- [ Main Content ] end -->
<!--<script>-->
<!--    --><?php
//    $topup = new Topup();
//    $member = new Member();
//    $total = (int)$topup->getTopupAmount()+(int)$member->getMemberSaldo();
//    ?>
//    function myFunction() {
//        var total = <?php //(int)$member->getMemberSaldo() + (int)$topup->getTopupAmount() ?>//;
//        var sebelum = <?php //$total ?>// - <?php //(int)$topup->getTopupAmount()?>// ;
//
//        alert("Saldo Telah Ditambahkan Sebesar :<?php //(int)$topup->getTopupAmount() ?>// . Saldo Sebelumnya adalah :" sebelum);
//    }
//</script>