<!-- [ Main Content ] start -->
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h5>Form Add Member</h5>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <form>
                            <div class="form-group">
                                <label for="txtJudulFilm">Masukkan Username</label>
                                <input type="text" class="form-control" name="txtMemberUsername"
                                       placeholder="Masukkan Username">
                            </div>
                            <div class="form-group">
                                <label for="txtTanggalFilm">Masukkan Password</label>
                                <input type="password" class="form-control" name="txtMemberPassword"
                                       placeholder="Masukkan Password">
                            </div>
                            <div class="form-group">
                                <label for="txtDeskripsi">Masukkan Email</label>
                                <input type="email" class="form-control" name="txtMemberEmail"
                                       placeholder="Masukkan Nama Depan">
                            </div>
                            <div class="form-group">
                                <label for="txtFirstName">Masukkan Nama Depan</label>
                                <input type="text" class="form-control" name="txtMemberFirstName">
                            </div>
                            <div class="form-group">
                                <label for="txtLastName">Masukkan Nama Belakang</label>
                                <input type="text" class="form-control" name="txtMemberLastName"
                                       placeholder="Masukkan Nama Belakang">

                            </div>
                            <div class="form-group">
                                <label for="txtPhoto">Masukkan Photo</label>
                                <input type="file" class="form-control" name="txtMemberPhoto"
                                       placeholder="Masukkan Photo">
                            </div>
                            <button type="submit" class="btn btn-primary" name="btnSubmit">Submit</button>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <table id="myTable">
                            <thead>
                            <tr>
                                <th>Id Member</th>
                                <th>Username</th>
                                <th>Passsword</th>
                                <th>Email</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Photo</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php
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