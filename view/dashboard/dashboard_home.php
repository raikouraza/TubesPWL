<?php
$filmDao = new FilmDao();
$jadwalDao = new JadwalDao();
$studioDao = new StudioDao();

$viewed = filter_input(INPUT_POST, 'btnView');

$jadwals = $jadwalDao->getAllJadwalDistinct();
$films = $filmDao->getAllFilm();
$studios = $studioDao->getAllStudioDistinct();

?>
<header>
    <h2 style="text-transform: capitalize">Welcome to dashboard <?php echo $_SESSION['user_role'] . ' ' . $_SESSION['name'] ?></h2>
</header>
<footer>
    Pemrograman Web 2 &copy;2019
</footer>
<br>
<!-- [ Main Content ] start -->
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h5>View Seluruh Film</h5>
                <div class="row">
                    <div class="col-md-6">
                        <form method="post" enctype="multipart/form-data" id="filmForm">
                            <div class="form-group">
                                <label>Masukkan Tanggal Yang Ingin Di Cari</label>
                                <hr>
                                <select name="txtViewFilmTanggal" class="form-control">
                                    <?php
                                    /* @var $jadwal Jadwal */
                                    foreach ($jadwals as $jadwal) {
                                        echo '<option value="' . $jadwal->getJadwalId() . '">' . $jadwal->getJadwalTanggal() . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <br>
                            <div class="form-group">
                                <label>Masukkan Studio</label>
                                <hr>
                                <select name="txtViewFilmStudio" class="form-control">
                                    <?php
                                    /* @var $studio Studio */
                                    foreach ($studios as $studio) {
                                        echo '<option value="' . $studio->getStudioId() . '">' . $studio->getStudioNama() . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary" name="btnView">View</button>
                        </form>
                    </div>
                    <br>
                    <div class="col-md-6">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Judul</th>
                                <th>Poster</th>
                                <th>Rating</th>
                                <th>Genre</th>
                                <th>Durasi</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            /* @var $film Film*/
                            foreach ($films as $film)
                            {
                                if (isset($viewed)) {
                                    $view_jadwal = filter_input(INPUT_POST, 'txtViewFilmTanggal');
                                    $view_studio = filter_input(INPUT_POST, 'txtViewFilmStudio');

                                    $tempJadwal = new Jadwal();
                                    $tempJadwal->setJadwalId($view_jadwal);
                                    $jadwal_dicari = $jadwalDao->getJadwalById($tempJadwal);
                                    /* @var $jadwal_dicari Jadwal */
                                    if($film->getFilmId() == $jadwal_dicari->getTbFilmFilmId() && $view_studio == $jadwal_dicari->getTbStudioStudioId())
                                    {
                                        echo '<tr align="center">';
                                        echo '<td>' . $film->getFilmJudul() . '</td>';
                                        if (!empty($film->getFilmPoster())) {
                                            echo '<td> <img src="../../' . $film->getFilmPoster() . '" width="100" alt="Photo" class="photo-list"> </td>';
                                        }
                                        else {
                                            echo '<td width="50">';
                                        }
                                        echo '<td>' . $film->getFilmRating() . '</td>';
                                        echo '<td>' . $film->getFilmGenre() . '</td>';
                                        echo '<td>' . $film->getFilmDurasi() . '</td>';
                                        echo '</tr>';
                                    }
                                }
                                else
                                {
                                    echo '<tr align="center">';
                                    echo '<td>' . $film->getFilmJudul() . '</td>';
                                    if (!empty($film->getFilmPoster())) {
                                        echo '<td> <img src="../../' . $film->getFilmPoster() . '" width="100" alt="Photo" class="photo-list"> </td>';
                                    }
                                    else {
                                        echo '<td width="50">';
                                    }
                                    echo '<td>' . $film->getFilmRating() . '</td>';
                                    echo '<td>' . $film->getFilmGenre() . '</td>';
                                    echo '<td>' . $film->getFilmDurasi() . '</td>';
                                    echo '</tr>';
                                }

                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
</div>
<!-- [ Main Content ] end -->