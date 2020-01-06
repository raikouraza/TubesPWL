<!-- [ Main Content ] start -->
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h5>Form Create User</h5>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <form method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="txtUsername">Masukkan Username</label>
                                <hr>
                                <input type="text" class="form-control" name="txtUserUsername"  placeholder="Masukkan Username">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="txtPassword">Masukkan Password</label>
                                <hr>
                                <input type="password" class="form-control" name="txtUserPassword" placeholder="Masukkan Password">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="txtName">Masukkan Name</label>
                                <hr>
                                <input type="text" class="form-control" name="txtUserName"  placeholder="Masukkan Name">
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
                                <th>ID User</th>
                                <th>Username</th>
                                <th>Name</th>
                                <th>Role</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            /* @var $user User*/
                            foreach ($users as $user)
                            {
                                echo '<tr align="center">';
                                echo '<td>' . $user->getUserId() . '</td>';
                                echo '<td>' . $user->getUserUsername() . '</td>';
                                echo '<td>' . $user->getUserName() . '</td>';
                                echo '<td>' . $user->getUserRole() . '</td>';
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
