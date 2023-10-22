<div class="container col-12" style="background: #eaedf7">
    <div class="container col-11 mt-5" style="background: white;border-radius: 15px;padding : 20px">
        <div class="card-header bg-white d-flex justify-content-center">
            <h3>Edit addon</h3>
        </div>

        <?php if (!empty($_SESSION["message"])): ?>
                <div class="alert alert-success">
                    <?= $_SESSION["message"]; ?>
                </div>
                <?php unset($_SESSION["message"]); ?>
            <?php endif; ?>

        <form class="card-body" action="<?php echo base_url('addon/editaddon/' . ($addon_data->message->id)); ?>" method="post">

            <div class="form-group row mb-3 align-items-center">
                <label for="namaaddon" class="col-lg-2 col-form-label-lg">Nama Addon</label>
                <div class="col-md-9">
                    <input type="text" class="form-control form-control-lg" id="namaaddon" name="namaaddon" required value="<?php echo ($addon_data->message->namaaddon);?>">
                </div>
            </div>

            <div class="form-group row mb-3 align-items-center">
                <label for="harga" class="col-md-2 col-form-label-lg">Harga</label>
                <div class="col-md-9">
                    <input type="text" class="form-control form-control-lg" id="harga" name="harga" required value="<?php echo ($addon_data->message->harga);?>">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-11 d-flex justify-content-end">
                    <a href="<?php echo site_url('addon'); ?>" class="btn btn-secondary me-2">
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