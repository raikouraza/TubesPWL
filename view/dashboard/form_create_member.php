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
                                <input type="text" class="form-control" id="txtUsername"  placeholder="Masukkan Username">
                            </div>
                            <div class="form-group">
                                <label for="txtTanggalFilm">Masukkan Password</label>
                                <input type="date" class="form-control" id="txtPassword" placeholder="Masukkan Password">
                            </div>
                            <div class="form-group">
                                <label for="txtDeskripsi">Masukkan email</label>
                                <input type="email" class="form-control" id="txtEmail"  placeholder="Masukkan Nama Depan">
                            </div>
                            <div class="form-group">
                                <label for="txtFirstName">Masukkan Nama Depan</label>
                                <input type="text" class="form-control" id="txtFirstName">
                            </div>
                            <div class="form-group">
                                <label for="txtLastName">Masukkan Nama Belakang</label>
                                <input type="text" class="form-control" id="txtLastName" placeholder="Masukkan Nama Belakang">

                            </div>
                            <div class="form-group">
                                <label for="txtPhoto">Masukkan Photo</label>
                                <input type="file" class="form-control" id="txtPhoto" placeholder="Masukkan Photo">
                            </div>
                            <button type="submit" class="btn btn-primary" id="btnSubmit">Submit</button>
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
                                <th>Action</th>

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