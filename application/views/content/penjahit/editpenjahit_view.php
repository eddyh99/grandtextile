<div class="bg-content-container col-12">
    <div class="content-container col-11 mt-5">
        <div class="card-header bg-white d-flex justify-content-center">
            <h3>Edit penjahit</h3>
        </div>
        <form class="card-body" action="<?php echo base_url('penjahit'); ?>" method="post">

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
                <label for="whatsapp" class="col-md-2 col-form-label-lg">Whatsapp</label>
                <div class="col-md-9">
                    <input type="text" class="form-control form-control-lg" id="whatsapp" name="whatsapp" required>
                </div>
            </div>
    
            <div class="form-group row mb-3 align-items-center">
                <label for="jenis" class="col-md-2 col-form-label-lg">Jenis</label>
                <div class="col-md-9 input-group">
                    <select class="form-control form-control-lg" id="jenis" name="jenis" required>
                        <option value="" disabled selected>Jenis</option>
                        <option value="1">satu</option>
                        <option value="2">dua</option>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-11 d-flex justify-content-end">
                    <a href="<?php echo site_url('penjahit'); ?>" class="btn btn-secondary me-2">
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