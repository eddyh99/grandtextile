<div class="bg-content-container col-12">
    <div class="content-container col-11 mt-5">

        <div class="card-header bg-white d-flex justify-content-center">
            <h3>Pengaturan</h3>
        </div>

            <?php if (!empty($_SESSION["message"])): ?>
                <div class="alert alert-success">
                    <?= $_SESSION["message"]; ?>
                </div>
                <?php unset($_SESSION["message"]); ?>
            <?php endif; ?>

        <form class="card-body" action="<?php echo base_url('reseller/addreseller'); ?>" method="post">

            <div class="form row align-items-center">
                <label for="Username" class="col-md col-form-label-lg">Username</label>
                <div class="col-md-12">
                    <input type="text" class="form-control form-control-lg" id="uname" name="uname" readonly>
                </div>
            </div>

            <div class="form row align-items-center">
                <label for="Email" class="col-md col-form-label-lg">Email</label>
                <div class="col-md-12">
                    <input type="text" class="form-control form-control-lg" id="email" name="email" required>
                </div>
            </div>

            <div class="form row align-items-center">
                <label for="Nama" class="col-md col-form-label-lg">Full Name</label>
                <div class="col-md-12">
                    <input type="text" class="form-control form-control-lg" id="nama" name="nama" required>
                </div>
            </div>

            <div class="form row align-items-center">
                <label for="Whatsapp" class="col-md col-form-label-lg">Whatsapp</label>
                <div class="col-md-12">
                    <input type="text" class="form-control form-control-lg" id="nohp" name="nohp" required>
                </div>
            </div>

            <div class="form row align-items-center">
                <label for="Birth Date" class="col-md col-form-label-lg">Birth Date</label>
                <div class="col-md-12">
                    <input type="text" class="form-control form-control-lg" id="tgllahir" name="tgllahir" required>
                </div>
            </div>

            <div class="form row align-items-center">
                <label for="Address" class="col-md col-form-label-lg">Address</label>
                <div class="col-md-12">
                    <input type="text" class="form-control form-control-lg" id="alamat" name="alamat" required>
                </div>
            </div>

            <div class="form row align-items-center">
                <label for="Change Password" class="col-md col-form-label-lg">Change Password</label>
                <div class="col-md-12">
                    <input type="text" class="form-control form-control-lg" id="pass" name="pass" required>
                </div>
            </div>

            <div class="form row mb-2 align-items-center">
                <label for="Confirm Password" class="col-md col-form-label-lg">Confirm Password</label>
                <div class="col-md-12">
                    <input type="text" class="form-control form-control-lg" id="pass" name="pass" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-11 d-flex justify-content-end">
                    <a href="<?php echo site_url('reseller'); ?>" class="btn btn-secondary me-2">
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