<!-- [ Main Content ] start -->
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h5>Form Update Studio</h5>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <form method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="txtNamaStudio">Masukkan Nama Studio</label>
                                <hr>
                                <input value="<?php /* @var $studio Studio*/ echo $studio->getStudioNama(); ?>" type="text" class="form-control" name="txtStudioNama" placeholder="Masukkan Nama" >
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary" id="btnUpdate" name="btnUpdate">Update</button>
                        </form>
                    </div>
                    <div class="col-md-6">
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
</div>
<!-- [ Main Content ] end -->
