<!-- [ Main Content ] start -->
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h5>Form Create Jadwal</h5>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <form method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="txtJadwal">Masukkan Tanggal</label>
                                <hr>
                                <input value="<?php /* @var $jadwal Jadwal*/ echo $jadwal->getJadwalTanggal(); ?>" type="date" class="form-control" name="txtJadwalTanggal"  placeholder="Masukkan Tanggal">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="txtSesi">Masukkan Sesi</label>
                                <hr>
                                <input value="<?php /* @var $jadwal Jadwal*/ echo $jadwal->getJadwalSesi(); ?>" type="number" class="form-control" name="txtJadwalSesi" placeholder="Masukkan Sesi">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="txtFilm">Pilih Film</label>
                                <hr>
                                <select name="txtJadwalFilm" class="form-control">
                                    <?php
                                    /* @var $film Film */
                                    foreach ($films as $film) {
                                        if($film->getFilmId() == $jadwal->getTbFilmFilmId())
                                            echo '<option value="' . $film->getFilmId() . '" selected >' . $film->getFilmJudul() . '</option>';
                                        else
                                            echo '<option value="' . $film->getFilmId() . '" >' . $film->getFilmJudul() . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="txtStudio">Pilih Studio</label>
                                <hr>
                                <select name="txtJadwalStudio" class="form-control">
                                    <?php
                                    /* @var $studio Studio */
                                    foreach ($studios as $studio) {
                                        if($studio->getStudioId() == $jadwal->getTbStudioStudioId())
                                            echo '<option value="' . $studio->getStudioId() . '" selected >' . $studio->getStudioNama() . '</option>';
                                        else
                                            echo '<option value="' . $studio->getStudioId() . '" >' . $studio->getStudioNama() . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary" name="btnUpdate">Submit</button>
                            <br>
                            <br>
                        </form>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
</div>
<!-- [ Main Content ] end -->
