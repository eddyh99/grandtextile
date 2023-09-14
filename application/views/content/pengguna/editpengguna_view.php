<div class="bg-content-container col-12">
    <div class="content-container col-11 mt-5 mb-3">

        <div class="card-header bg-white d-flex justify-content-center mb-3">
            <h1>Edit Pengguna</h1>
        </div>

            <?php if (!empty($_SESSION["message"])): ?>
                <div class="alert alert-success">
                    <?= $_SESSION["message"]; ?>
                </div>
                <?php unset($_SESSION["message"]); ?>
            <?php endif; ?>
        
            <form class="card-body" action="<?php echo base_url('pengguna/editpengguna/' . ($pengguna_data->message->uname)); ?>" method="post">

            <div class=" form-group row mb-3 align-items-center">
                <label for="nama" class="col-md-2 col-form-label-lg">Nama</label>
                <div class="col-md-10">
                    <input type="text" class="form-control form-control-lg" id="nama" name="nama" value="<?php echo htmlspecialchars($pengguna_data->message->nama); ?>"required>
                </div>
            </div>

            <div class="form-group row mb-3 align-items-center">
                <label for="uname" class="col-md-2 col-form-label-lg">Username</label>
                <div class="col-md-10">
                    <input type="text" class="form-control form-control-lg" id="uname" name="uname" value="<?php echo htmlspecialchars($pengguna_data->message->uname); ?>"readonly>
                </div>
            </div>

           <div class="form-group row mb-3 align-items-center">
                <label for="role" class="col-md-2 col-form-label-lg">Role</label>
                <div class="col-md-10">
                    <select class="form-control form-control-lg" id="role" name="role" value="<?php echo htmlspecialchars($pengguna_data->message->role); ?>"required>
                        <option value="" disabled selected>Pilih Role</option>
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-12 d-flex justify-content-end">
                    <a href="<?php echo site_url('pengguna'); ?>" class="btn btn-secondary me-2">
                        <i class="fas fa-times"></i> Batal
                    </a>
                    <button type="submit" class="btn btn-primary" style="background-color: #624DE3;">
                        <i class="fas fa-save"></i> Simpan
                    </button>
                </div>
            </div>

        </form>
    </div>
</div>