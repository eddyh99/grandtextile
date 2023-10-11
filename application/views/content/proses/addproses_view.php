<div class="bg-content-container col-12">
    <div class="content-container col-11 mt-5">

        <div class="card-header bg-white d-flex justify-content-center">
            <h3>Tambah proses</h3>
        </div>

            <?php if (!empty($_SESSION["message"])): ?>
                <div class="alert alert-success">
                    <?= $_SESSION["message"]; ?>
                </div>
                <?php unset($_SESSION["message"]); ?>
            <?php endif; ?>

        <form class="card-body" action="<?php echo base_url('proses/addproses'); ?>" method="post">

            <div class="form-group row mb-3 align-items-center">
                <label for="Nama" class="col-lg-2 col-form-label-lg">Nama</label>
                <div class="col-md-9">
                    <input type="text" class="form-control form-control-lg" id="nama" name="nama" required>
                </div>
            </div>

            <div class="form-group row mb-3 align-items-center">
                <label for="tglkirim" class="col-md-2 col-form-label-lg">Tanggal Kirim</label>
                <div class="col-md-9">
                    <input type="text" class="form-control form-control-lg" id="tglkirim" name="tglkirim" required>
                </div>
            </div>
    
            <div class="form-group row mb-3 align-items-center">
                <label for="estjadi" class="col-md-2 col-form-label-lg">Estimasi Jadi</label>
                <div class="col-md-9">
                    <input type="text" class="form-control form-control-lg" id="estjadi" name="estjadi" required>
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
                    <a href="<?php echo site_url('proses'); ?>" class="btn btn-secondary me-2">
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