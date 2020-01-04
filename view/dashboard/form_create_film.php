<!-- [ Main Content ] start -->
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h5>Form Add Film</h5>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <form>
                            <div class="form-group">
                                <label for="txtJudulFilm">Masukkan Judul Film</label>
                                <input type="text" class="form-control" id="txtjudul"  placeholder="Masukkan Judul">
                            </div>
                            <div class="form-group">
                                <label for="txtTanggalFilm">Masukkan Tanggal Rilis</label>
                                <input type="date" class="form-control" id="txtTanggal" placeholder="Masukkan Tanggal">
                            </div>
                            <div class="form-group">
                                <label for="txtDeskripsi">Masukkan Deskripsi Film</label>
                                <input type="text" class="form-control" id="txtDeskripsi"  placeholder="Masukkan Deskripsi">
                            </div>
                            <div class="form-group">
                                <label for="txtPoster">Masukkan Poster</label>
                                <input type="file" class="form-control" id="txtPoster">
                            </div>
                            <div class="form-group">
                                <label for="txtGenre">Masukkan Genre</label>
                                <input type="text" class="form-control" id="txtGenre" placeholder="Masukkan Genre">

                            </div>
                            <div class="form-group">
                                <label for="txtTrailer">Masukkan Link Video</label>
                                <input type="text" class="form-control" id="txtTrailer" placeholder="Masukkan Link Video">
                            </div>
                            <div class="form-group">
                                <label for="txtJam">Masukkan Jam</label>
                                <input type="time" class="form-control" id="txtJam"  placeholder="txtJam">
                            </div>
                            <div class="form-group">
                                <label for="txtSutradara">Masukkan Nama Sutradara</label>
                                <input type="text" class="form-control" id="txtSutradara" placeholder="Masukkan nama sutradara">
                            </div>
                            <button type="submit" class="btn btn-primary" id="btnSubmit">Submit</button>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <table id="myTable">
                            <thead>
                            <tr>
                                <th>Judul</th>
                                <th>Tanggal Rilis</th>
                                <th>Deskripsi</th>
                                <th>Poster</th>
                                <th>Genre</th>
                                <th>Video</th>
                                <th>Jam</th>
                                <th>Sutradara</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            ?>
                            </tbody>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
</div>
<!-- [ Main Content ] end -->