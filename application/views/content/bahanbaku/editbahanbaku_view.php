<div class="bg-content-container col-12">
    <div class="content-container col-11 mt-5">

        <div class="card-header bg-white d-flex justify-content-center">
            <h3>Edit bahanbaku</h3>
        </div>

            <?php if (!empty($_SESSION["message"])): ?>
                <div class="alert alert-success">
                    <?= $_SESSION["message"]; ?>
                </div>
                <?php unset($_SESSION["message"]); ?>
            <?php endif; ?>

        <form class="card-body" action="<?php echo base_url('bahanbaku/editbahanbaku/' . ($bahanbaku_data->message->id)); ?>" method="post">
            <div class="form-group row mb-3 align-items-center">
                <label for="Nama" class="col-lg-2 col-form-label-lg">Nama Bahan</label>
                <div class="col-md-9">
                    <input type="text" class="form-control form-control-lg" id="namabahan" name="namabahan" required value="<?php echo htmlspecialchars($bahanbaku_data->message->namabahan); ?>">
                </div>
            </div>

            <div class="form-group row mb-3 align-items-center">
                <label for="satuan" class="col-md-2 col-form-label-lg">Satuan</label>
                <div class="col-md-9">
                    <input type="text" class="form-control form-control-lg" id="satuan" name="satuan" required value="<?php echo htmlspecialchars($bahanbaku_data->message->satuan); ?>">
                </div>
            </div>
    
            <div class="form-group row mb-3 align-items-center">
                <label for="harga" class="col-md-2 col-form-label-lg">Harga</label>
                <div class="col-md-9">
                    <input type="text" class="form-control form-control-lg" id="haga" name="harga" required value="<?php echo htmlspecialchars($bahanbaku_data->message->harga); ?>">
                </div>
            </div>


            <div class="row mb-3">
                <div class="col-md-11 d-flex justify-content-end">
                    <a href="<?php echo site_url('bahanbaku'); ?>" class="btn btn-secondary me-2">
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