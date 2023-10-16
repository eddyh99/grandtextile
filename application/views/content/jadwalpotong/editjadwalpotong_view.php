<div class="bg-content-container col-12">
    <div class="content-container col-11 mt-5">

        <div class="card-header bg-white d-flex justify-content-center mt-3" >
            <h1>Edit Jadwal potong</h1>
        </div>

            <?php if (!empty($_SESSION["message"])): ?>
                <div class="alert alert-success">
                    <?= $_SESSION["message"]; ?>
                </div>
                <?php unset($_SESSION["message"]); ?>
            <?php endif; ?>

        <form c;ass="card-body" action="<?php echo base_url('jadwalpotong/Edittjadwalpotong'); ?>" method="post">
        
            <div class="form-group row mt-3 align-items-center">
                <label for="tgl" class="col-md-2 col-form-label-lg">Tanggal</label>
                <div class="col-md-9">
                    <input type="text" class="form-control form-control-lg" id="tgl" name="tgl" required>
                </div>
            </div>

            <div class="form-group row mb-3 align-items-center">
                <label for="NoWo" class="col-md-2 col-form-label-lg">No WO</label>
                <div class="col-md-9">
                    <select class="form-control form-control-lg" id="NoWo" name="NoWo" required>
                        <option value="" disabled selected>Pilih WO</option>
                    </select>
                </div>
            </div>


            <div class="row mb-3">
                <div class="col-md-11 d-flex justify-content-end">
                    <a href="<?php echo site_url('jadwalpotong'); ?>" class="btn btn-secondary me-2">
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