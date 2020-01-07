<!-- [ Main Content ] start -->
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h5>View Transaksi</h5>
                <br>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <table id="myTable" class="display compact">
                            <thead>
                            <tr>
                                <th>Transaksi ID</th>
                                <th>Total Harga</th>
                                <th>Payment Method</th>
                                <th>Tanggal</th>
                                <th>Tiket ID</th>
                                <th>Jadwal ID</th>
                                <th>Member ID</th>
                                <th>Studio ID</th>
                                <th>Film ID</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            /* @var $film Film */
                            foreach ($films as $film) {
                                echo '<tr align="center">';
                                echo '<td>' . $film->getFilmId() . '</td>';
                                echo '<td>' . $film->getFilmJudul() . '</td>';
                                echo '<td>' . $film->getFilmDeskripsi() . '</td>';
                                echo '<td> <a href=" ' . $film->getFilmTrailer() . '" target="_blank">' . $film->getFilmTrailer() . '</a></td>';
                                echo '<td>' . $film->getFilmSutradara() . '</td>';
                                echo '<td>' . $film->getFilmAktor() . '</td>';
                                echo '<td>' . $film->getFilmDurasi() . '</td>';
                                echo '<td>' . $film->getFilmRating() . '</td>';
                                echo '<td>' . $film->getFilmGenre() . '</td>';
                                echo '</tr>';
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <hr>
            </div>
        </div>
    </div>
</div>
<!-- [ Main Content ] end -->