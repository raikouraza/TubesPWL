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
                            <button type="submit" class="btn btn-primary" name="btnSubmit">Submit</button>
                            <br>
                            <br>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <table id="myTable" class="display">
                            <thead>
                            <tr>
                                <th>ID Jadwal</th>
                                <th>Tanggal</th>
                                <th>Sesi</th>
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
