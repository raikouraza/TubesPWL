<!-- [ Main Content ] start -->
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h5>Form Update Delete Studio</h5>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Action</th>
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
                                echo '<td><button class="btn btn-primary" onclick="updateStudio(\''. $studio->getStudioId() .'\')">Update</button><button class="btn btn-primary" onclick="deleteStudio(\''. $studio->getStudioId() .'\')">Delete</button></td>';
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