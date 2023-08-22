<div class="container col-12" style="background: #eaedf7">
<div style="background : white" class="container-fluid col-8 mt-5" style="padding-bottom: 20px">
    <div class="d-flex justify-content-center">
        <h1>Tambah pengguna</h1>
    </div>
    <form action="<?php echo base_url('pengguna'); ?>" method="post">
                <div class="form-group row mb-3 align-items-center">
                    <label for="nama" class="col-md-2 col-form-label-lg">Nama</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control form-control-lg" id="nama" name="nama" required>
                    </div>
                </div>
                <div class="form-group row mb-3 align-items-center">
                    <label for="username" class="col-md-2 col-form-label-lg">Username</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control form-control-lg" id="username" name="username" required>
                    </div>
                </div>
                <div class="form-group row mb-3 align-items-center">
                    <label for="pass" class="col-md-2 col-form-label-lg">Password</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control form-control-lg" id="pass" name="pass" required>
                    </div>
                </div>
                <div class="form-group row mb-3 align-items-center">
                    <label for="area" class="col-md-2 col-form-label-lg">Role</label>
                    <div class="col-md-10">
                        <select class="form-control form-control-lg" id="role" name="role" required>
                            <option value="" disabled selected>pilih role</option>
                            <option value="1">Admin</option>
                            <option value="2">User</option>
                        </select>
                    </div>
                </div>

    <div class="row mb-3">
        <div class="col-md-12 d-flex justify-content-end">
            <a href="<?php echo site_url('pengguna'); ?>" class="btn btn-secondary me-2">
                <i class="fas fa-times"></i> Cancel
            </a>
            <button type="submit" class="btn btn-primary" style="background-color: #624DE3;">
                <i class="fas fa-save"></i> Simpan
            </button>
        </div>
    </div>
</form>
</div>
</div>