<!-- [ Main Content ] start -->
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h5>Form Update Delete Member</h5>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Username</th>
                                <th>Action</th>
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
                                echo '<td><button class="btn btn-primary" onclick="updateFilm(\''. $film->getFilmId() .'\')">Update</button><button class="btn btn-primary" onclick="deleteFilm(\''. $film->getFilmId() .'\')">Delete</button></td>';
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