<!-- [ Main Content ] start -->
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h5>Form Add Film</h5>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <form method="post" enctype="multipart/form-data" id="filmForm">
                            <div class="form-group">
                                <label for="txtJudulFilm">Masukkan Judul</label>
                                <hr>
                                <input type="text" class="form-control" id="txtjudul" name="txtFilmJudul" placeholder="Masukkan Judul">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="txtDeskripsi">Masukkan Deskripsi</label>
                                <hr>
                                <textarea class="form-control" rows="5" form="filmForm" name="txtFilmDeskripsi" placeholder="Masukan Deskripsi"></textarea>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="txtPoster">Masukkan Poster</label>
                                <hr>
                                <input type="file" class="form-control-file" id="txtPoster" name="txtFilmPoster">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="txtTrailer">Masukkan Link Video</label>
                                <hr>
                                <input type="url" class="form-control" id="txtTrailer" name="txtFilmTrailer" placeholder="Masukkan Link Video">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="txtSutradara">Masukkan Nama Sutradara</label>
                                <hr>
                                <input type="text" class="form-control" id="txtSutradara" name="txtFilmSutradara" placeholder="Masukkan Nama Sutradara">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="txtNamaAktor">Masukkan Nama-Nama Aktor</label>
                                <hr>
                                <input type="text" class="form-control" id="txtAktor" name="txtFilmAktor" placeholder="Masukkan Nama-Nama Aktor">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="txtDurasi">Masukkan Durasi</label>
                                <hr>
                                <input type="text" class="form-control" id="txtDurasi" name="txtFilmDurasi" placeholder="Masukkan Durasi">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="txtRating">Pilih Rating</label>
                                <hr>
                                <label class="radio-inline"><input value="SU" type="radio" name="txtFilmRating" checked>SU</label>
                                <label class="radio-inline"><input value="BO" type="radio" name="txtFilmRating">BO</label>
                                <label class="radio-inline"><input value="R" type="radio" name="txtFilmRating">R</label>
                                <label class="radio-inline"><input value="D" type="radio" name="txtFilmRating">D</label>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="txtNamaAktor">Masukkan Genre Film</label>
                                <hr>
                                <input type="text" class="form-control" name="txtFilmGenre" placeholder="Masukkan Genre">
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary" id="btnSubmit" name="btnSubmit">Submit</button>
                        </form>
                    </div>
                    <br>
                    <div class="col-md-6">
                        <table id="myTable" class="display compact">
                            <thead>
                            <tr>
                                <th>ID User</th>
                                <th>Judul</th>
                                <th>Deskripsi</th>
                                <th>Poster</th>
                                <th>Trailer</th>
                                <th>Sutradara</th>
                                <th>Aktor</th>
                                <th>Durasi</th>
                                <th>Rating</th>
                                <th>Genre</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            /* @var $film Film*/
                            foreach ($films as $film)
                            {
                                echo '<tr align="center">';
                                echo '<td>' . $film->getFilmId() . '</td>';
                                echo '<td>' . $film->getFilmJudul() . '</td>';
                                echo '<td>' . $film->getFilmDeskripsi() . '</td>';
                                if (!empty($film->getFilmPoster())) {
                                    echo '<td> <img src="../../' . $film->getFilmPoster() . '" width="50" height="50" alt="Photo" class="photo-list"> </td>';
                                }
                                else {
                                    echo '<td width="50" height="50">';
                                }
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
                </div>
                <hr>
            </div>
        </div>
    </div>
</div>
<!-- [ Main Content ] end -->