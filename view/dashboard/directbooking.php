<?php
?>
<!-- [ Main Content ] start -->
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h5>Form Pemesanan Tiket Langsung</h5>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <form method="post" enctype="multipart/form-data" id="filmForm">
                            <div class="form-group">
                                <label for="txtJudulFilm">Masukkan Harga Tiket</label>
                                <hr>
                                <input type="text" class="form-control" id="txtjudul" name="txtHarga" placeholder="Masukkan Judul">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="txtDeskripsi">Masukkan Jadwal</label>
                                <hr>
                                <input type="text" class="form-control" rows="5" form="filmForm" name="txtJadwal"></input>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="txtPoster">Masukkan Member Id</label>
                                <hr>
                                <input type="text" class="form-control-file" id="txtMemberId" name="txtMemberId">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="txtTrailer">Masukkan Studio Id</label>
                                <hr>
                                <input type="text" class="form-control" id="txtStudioId" name="txtStudioId" placeholder="Masukkan Studio Id">
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary" id="btnSubmit" name="btnSubmit">Submit</button>
                        </form>
                    </div>
                    <br>
                </div>
                <hr>
            </div>
        </div>
    </div>
</div>
