<div class="bg-content-container col-12">
    <div class="content-container col-11 mt-5">
        <div class="card-header bg-white d-flex justify-content-center">
            <h3>Tambah Komisi</h3>
        </div>
        <form class="card-body" action="<?php echo base_url('kompenjahit/addkompenjahit'); ?>" method="post">

            <div class="form-group row mb-3 align-items-center">
                <label for="jenis" class="col-md-2 col-form-label-lg">Jenis</label>
                <div class="col-md-9 input-group">
                    <select class="form-control form-control-lg" id="jenis" name="jenis" required>
                        <option value="" disabled selected>Jenis</option>
                        <option value="1">Borongan Luar</option>
                        <option value="2">Borongan Dalam</option>
                    </select>
                </div>
            </div>

            <div class="form-group row mb-3 align-items-center">
                <label for="area" class="col-md-2 col-form-label-lg">Kategori</label>
                <div class="col-md-9">
                <select class="form-control form-control-lg" id="id_kategori" name="id_kategori" required>
                    <option value="" disabled selected>Pilih Kategori</option>
                    <?php foreach ($katbarang->message as $barang) : ?>
                            <option value="<?= $barang->id; ?>"><?= $barang->namakategori; ?></option>
                    <?php endforeach; ?>
                </select>
                </div>
            </div>

            <div class="form-group row mb-3 align-items-center">
                <label for="fee" class="col-md-2 col-form-label-lg">Fee</label>
                <div class="col-md-9">
                    <input type="text" class="form-control form-control-lg" id="fee" name="fee" required>
                </div>
            </div>
    
            <div class="row mb-3">
                <div class="col-md-11 d-flex justify-content-end">
                    <a href="<?php echo site_url('kompenjahit'); ?>" class="btn btn-secondary me-2">
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