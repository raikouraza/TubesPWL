<!-- [ Main Content ] start -->
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h5>Form Update Delete Jadwal</h5>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>ID Jadwal</th>
                                <th>Tanggal</th>
                                <th>Judul</th>
                                <th>Action</th>
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
                                echo '<td>' . $jadwal->getFilm()->getFilmJudul() . '</td>';
                                echo '<td><button class="btn btn-primary" onclick="updateJadwal(\''. $jadwal->getJadwalId() .'\')">Update</button><button class="btn btn-primary" onclick="deleteJadwal(\''. $jadwal->getJadwalId() .'\')">Delete</button></td>';
                                echo '</tr>';
                            }
                            ?>
                            </tbody>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
</div>
<!-- [ Main Content ] end -->