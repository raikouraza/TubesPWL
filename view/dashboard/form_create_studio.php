<!-- [ Main Content ] start -->
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h5>Form Add Studio</h5>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <form method="post" enctype="multipart/form-data" id="filmForm">
                            <div class="form-group">
                                <label for="txtNamaStudio">Masukkan Nama Studio</label>
                                <hr>
                                <input type="text" class="form-control" name="txtStudioNama" placeholder="Masukkan Nama">
                            </div>
                            <div class="form-group">
                                <label for="txtNamaStudio">Masukkan Kapasitas Studio</label>
                                <hr>
                                <input type="number" class="form-control" name="txtStudioKapasitas" placeholder="Masukkan Kapasitas">
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary" name="btnSubmit">Submit</button>
                        </form>
                    </div>
                    <br>
                    <div class="col-md-6">
                        <table>
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Kapasitas</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            /* @var $studio Studio*/
                            foreach ($studios as $studio)
                            {
                                echo '<tr align="center">';
                                echo '<td>' . $studio->getStudioId() . '</td>';
                                echo '<td>' . $studio->getStudioNama() . '</td>';
                                echo '<td>' . $studio->getStudioKapasitas() . '</td>';
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