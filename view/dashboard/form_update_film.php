<!-- [ Main Content ] start -->
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h5>Form Update Film</h5>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <form method="post" enctype="multipart/form-data" id="filmForm">
                            <div class="form-group">
                                <label for="txtJudulFilm">Masukkan Judul Film</label>
                                <hr>
                                <input value="<?php /* @var $film Film*/ echo $film->getFilmJudul(); ?>" type="text" class="form-control" id="txtjudul" name="txtFilmJudul" placeholder="Masukkan Judul" >
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="txtDeskripsi">Masukkan Deskripsi Film</label>
                                <hr>
                                <textarea class="form-control" rows="5" form="filmForm" name="txtFilmDeskripsi"><?php /* @var $film Film*/ echo $film->getFilmDeskripsi(); ?>"</textarea>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="txtPoster">Masukkan Poster</label>
                                <hr>
                                <input value="<?php /* @var $film Film*/ echo $film->getFilmPoster(); ?>" type="file" class="form-control-file" id="txtPoster" name="txtFilmPoster">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="txtTrailer">Masukkan Link Video</label>
                                <hr>
                                <input value="<?php /* @var $film Film*/ echo $film->getFilmTrailer(); ?>" type="url" class="form-control" id="txtTrailer" name="txtFilmTrailer" placeholder="Masukkan Link Video">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="txtSutradara">Masukkan Nama Sutradara</label>
                                <hr>
                                <input value="<?php /* @var $film Film*/ echo $film->getFilmSutradara(); ?>" type="text" class="form-control" id="txtSutradara" name="txtFilmSutradara" placeholder="Masukkan nama sutradara">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="txtNamaAktor">Masukkan Nama-Nama Aktor</label>
                                <hr>
                                <input value="<?php /* @var $film Film*/ echo $film->getFilmAktor(); ?>" type="text" class="form-control" id="txtAktor" name="txtFilmAktor" placeholder="Masukkan Nama-Nama Aktor">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="txtDurasi">Masukkan Durasi Film</label>
                                <hr>
                                <input value="<?php /* @var $film Film*/ echo $film->getFilmDurasi(); ?>" type="text" class="form-control" id="txtDurasi" name="txtFilmDurasi" placeholder="Masukkan Durasi Film">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="txtRating">Masukkan Rating</label>
                                <hr>
                                <label class="radio-inline"><input value="SU" type="radio" name="txtRating" checked>SU</label>
                                <label class="radio-inline"><input value="BO" type="radio" name="txtRating">BO</label>
                                <label class="radio-inline"><input value="R" type="radio" name="txtRating">R</label>
                                <label class="radio-inline"><input value="D" type="radio" name="txtRating">D</label>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary" id="btnUpdate" name="btnUpdate">Update</button>
                        </form>
                    </div>
                    <div class="col-md-6">
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
</div>
<!-- [ Main Content ] end -->
