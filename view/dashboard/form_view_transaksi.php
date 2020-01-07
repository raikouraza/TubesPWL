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
                        <table id="myTableTrx" class="display compact">
                            <thead>
                            <tr>
                                <th>Transaksi ID</th>
                                <th>Total Harga</th>
                                <th>Payment Method</th>
                                <th>Tanggal</th>
                                <th>Tiket ID</th>
                                <th>Jadwal ID</th>
                                <th>Member</th>
                                <th>Studio</th>
                                <th>Judul Film</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            /* @var $transaksi Transaksi */

                            foreach ($transaksis as $transaksi) {
                                echo '<tr align="center">';
                                echo '<td>' . $transaksi["transaksi_id"] . '</td>';
                                echo '<td>' . $transaksi["transaksi_totalprice"] . '</td>';
                                echo '<td>' . $transaksi["transaksi_payment_method"] . '</td>';
                                echo '<td>' . $transaksi["transaksi_tanggal"]  . '</a></td>';
                                echo '<td>' . $transaksi["tbTiket_tiket_id"] . '</td>';
                                echo '<td>' . $transaksi["tbTiket_tbJadwal_jadwal_id"] . '</td>';
                                $member = new Member();
                                $memberDao = new MemberDao();
                                $member->setMemberId($transaksi["tbTiket_tbMember_member_id"]);
                                /* @var $member Member */
                                $member = $memberDao->getMemberById($member);
                                echo '<td>' . $member->getMemberUsername() . '</td>';
                                $studio = new Studio();
                                $studioDao = new StudioDao();
                                $studio->setStudioId($transaksi["tbTiket_tbStudio_studio_id"]);
                                /* @var $studio Studio */
                                $studio = $studioDao->getStudioById($studio);
                                echo '<td>' . $studio->getStudioNama() . '</td>';
                                $film = new Film();
                                $filmDao = new filmDao();
                                $film->setFilmId($transaksi["tbFilm_film_id"]);
                                /* @var $film Film */
                                $film = $filmDao->getFilmById($film);
                                echo '<td>' . $film->getFilmJudul() . '</td>';
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