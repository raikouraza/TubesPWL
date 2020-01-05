<!-- [ Main Content ] start -->
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h5>Form Update Delete User</h5>
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
                            /* @var $user User*/
                            foreach ($users as $user)
                            {
                                echo '<tr align="center">';
                                echo '<td>' . $user->getUserId() . '</td>';
                                echo '<td>' . $user->getUserUsername() . '</td>';
                                echo '<td><button class="btn btn-primary" onclick="updateUser(\''. $user->getUserId() .'\')">Update</button><button class="btn btn-primary" onclick="deleteUser(\''. $user->getUserId() .'\')">Delete</button></td>';
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