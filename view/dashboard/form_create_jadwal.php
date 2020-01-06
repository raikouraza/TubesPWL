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
                                <input type="date" class="form-control" name="txtJadwalTanggal"  placeholder="Masukkan Tanggal">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="txtSesi">Masukkan Sesi</label>
                                <hr>
                                <input type="number" class="form-control" name="txtJadwalSesi" placeholder="Masukkan Sesi">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="txtFilm">Pilih Film</label>
                                <hr>
                                <select name="txtJadwalFilm" class="form-control">
                                    <?php
                                    /* @var $film Film */
                                    foreach ($films as $film) {
                                        echo '<option value="' . $film->getFilmId() . '">' . $film->getFilmJudul() . '</option>';
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
                                        echo '<option value="' . $studio->getStudioId() . '">' . $studio->getStudioNama() . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary" name="btnSubmit">Submit</button>
                            <br>
                            <br>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <table id="myTable" class="table">
                            <thead>
                            <tr>
                                <th>ID Jadwal</th>
                                <th>Tanggal</th>
                                <th>Sesi</th>
                                <th>Film Judul</th>
                                <th>Film Poser</th>
                                <th>Studio Nama</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            /* @var $jadwal Jadwal*/
                            foreach ($jadwals as $jadwal)
                            {
                                echo '<tr align="center">';
                                echo '<td>' . $jadwal->getJadwalId() . '</td>';
                                echo '<td>' . $jadwal->getJadwalTanggal() . '</td>';
                                echo '<td>' . $jadwal->getJadwalSesi() . '</td>';
                                echo '<td>' . $jadwal->getFilm()->getFilmJudul() . '</td>';
                                if (!empty($jadwal->getFilm()->getFilmPoster())) {
                                    echo '<td> <img src="../../' . $jadwal->getFilm()->getFilmPoster() . '" width="50" alt="Photo" class="photo-list"> </td>';
                                }
                                else {
                                    echo '<td width="50">';
                                }
                                echo '<td>' . $jadwal->getStudio()->getStudioNama() . '</td>';
                                echo '</tr>';
                            }
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
