<!-- [ Main Content ] start -->
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h5>Form Update User</h5>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <form method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="txtUsername">Masukkan Username </label>
                                <hr>
                                <input value="<?php /* @var $user User*/ echo $user->getUserUsername(); ?>" type="text" class="form-control" name="txtUserUsername"  placeholder="Masukkan Judul">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="txtPassword">Masukkan Password</label>
                                <hr>
                                <input value="<?php /* @var $user User*/ echo $user->getUserPassword(); ?>" type="password" class="form-control" name="txtUserPassword" placeholder="Masukkan Password">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="txtName">Masukkan Name</label>
                                <hr>
                                <input value="<?php /* @var $user User*/ echo $user->getUserName(); ?>" type="text" class="form-control" name="txtUser  Name"  placeholder="Masukkan Name">
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary" name="btnUpdate">Update</button>
                            <br>
                            <br>
                        </form>
                    </div>
                    <div class="col-md-6">
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
</div>
<!-- [ Main Content ] end -->