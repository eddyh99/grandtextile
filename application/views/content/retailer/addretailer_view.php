<div class="bg-content-container col-12">
    <div class="content-container col-11 mt-5">

        <div class="card-header bg-white d-flex justify-content-center">
            <h3>Tambah Retailer</h3>
        </div>

            <?php if (!empty($_SESSION["message"])): ?>
                <div class="alert alert-success">
                    <?= $_SESSION["message"]; ?>
                </div>
                <?php unset($_SESSION["message"]); ?>
            <?php endif; ?>

        <form class="card-body" action="<?php echo base_url('retailer/addretailer'); ?>" method="post">

            <div class="form-group row mb-3 align-items-center">
                <label for="Nama" class="col-lg-2 col-form-label-lg">Nama</label>
                <div class="col-md-9">
                    <input type="text" class="form-control form-control-lg" id="nama" name="nama" required>
                </div>
            </div>

            <div class="form-group row mb-3 align-items-center">
                <label for="alamat" class="col-md-2 col-form-label-lg">Alamat</label>
                <div class="col-md-9">
                    <input type="text" class="form-control form-control-lg" id="alamat" name="alamat" required>
                </div>
            </div>

            <div class="form-group row mb-3 align-items-center">
                <label for="kota" class="col-md-2 col-form-label-lg">Kota</label>
                <div class="col-md-9">
                    <input type="text" class="form-control form-control-lg" id="kota" name="kota" required>
                </div>
            </div>
    
            <div class="form-group row mb-3 align-items-center">
                <label for="telp" class="col-md-2 col-form-label-lg">Telp/WA</label>
                <div class="col-md-9">
                    <input type="text" class="form-control form-control-lg" id="telp" name="telp" required>
                </div>
            </div>

            <div class="form-group row mb-3 align-items-center">
              <label for="tgllahir" class="col-md-2 col-form-label-lg">Tanggal Lahir</label>
              <div class="col-md-9">
                <div class="input-group">
                  <input type="text" class="form-control form-control-lg" id="tgllahir" name="tgllahir" placeholder="dd/mm/yyyy"required>
                </div>
              </div>
            </div>

            <div class="form-group row mb-3 align-items-center">
                <label for="email" class="col-md-2 col-form-label-lg">Email</label>
                <div class="col-md-9">
                    <input type="email" class="form-control form-control-lg" id="email" name="email" required>
                </div>
            </div>

            <div class="form-group row mb-3 align-items-center">
                <label for="passwd" class="col-md-2 col-form-label-lg">Password</label>
                <div class="col-md-9">
                    <input type="password" class="form-control form-control-lg" id="passwd" name="passwd" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-11 d-flex justify-content-end">
                    <a href="<?php echo site_url('retailer'); ?>" class="btn btn-secondary me-2">
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