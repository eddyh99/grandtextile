<div class="bg-content-container col-12">
    <div class="content-container col-11 mt-5">

        <div class="card-header bg-white d-flex justify-content-center">
            <h3>Edit outsource</h3>
        </div>

            <?php if (!empty($_SESSION["message"])): ?>
                <div class="alert alert-success">
                    <?= $_SESSION["message"]; ?>
                </div>
                <?php unset($_SESSION["message"]); ?>
            <?php endif; ?>

        <form class="card-body" action="<?php echo base_url('outsource/editoutsource/' . ($outsource_data->message->id)); ?>" method="post">
            <div class="form-group row mb-3 align-items-center">
                <label for="Nama" class="col-lg-2 col-form-label-lg">Nama</label>
                <div class="col-md-9">
                    <input type="text" class="form-control form-control-lg" id="nama" name="nama" required value="<?php echo htmlspecialchars($outsource_data->message->nama); ?>">
                </div>
            </div>

            <div class="form-group row mb-3 align-items-center">
                <label for="alamat" class="col-md-2 col-form-label-lg">Alamat</label>
                <div class="col-md-9">
                    <input type="text" class="form-control form-control-lg" id="alamat" name="alamat" required value="<?php echo htmlspecialchars($outsource_data->message->alamat); ?>">
                </div>
            </div>
    
            <div class="form-group row mb-3 align-items-center">
                <label for="telp" class="col-md-2 col-form-label-lg">Telp/WA</label>
                <div class="col-md-9">
                    <input type="text" class="form-control form-control-lg" id="telp" name="telp" required value="<?php echo htmlspecialchars($outsource_data->message->telp); ?>">
                </div>
            </div>

            <div class="form-group row mb-3 align-items-center">
                <label for="keterangan" class="col-md-2 col-form-label-lg">Keterangan</label>
                <div class="col-md-9">
                    <input type="text" class="form-control form-control-lg" id="keterangan" name="keterangan" required value="<?php echo htmlspecialchars($outsource_data->message->keterangan); ?>">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-11 d-flex justify-content-end">
                    <a href="<?php echo site_url('outsource'); ?>" class="btn btn-secondary me-2">
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