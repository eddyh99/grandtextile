<div class="container col-12" style="background: #eaedf7;padding-bottom:60px">
<div class="container-fluid col-9 mt-5" style="background:white;padding-bottom : 20px">
    <div class="d-flex justify-content-center mt-3" >
        <h1>Edit Sales</h1>
    </div>
    <form action="<?php echo base_url('sales'); ?>" method="post">
                <div class="form-group row mt-5 mb-3 align-items-center">
                    <label for="nama" class="col-md-2 col-form-label-lg">Nama</label>
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
                    <label for="tgllahihr" class="col-md-2 col-form-label-lg">Tanggal Lahir</label>
                    <div class="col-md-9">
                        <input type="date" class="form-control form-control-lg" id="tgllahir" name="tgllahir" required>
                    </div>
                </div>
                <div class="form-group row mb-3 align-items-center">
                    <label for="cp3" class="col-md-2 col-form-label-lg">Area</label>
                    <div class="col-md-9">
                        <select class="form-control form-control-lg" id="area" name="area" required>
                            <option value="" disabled selected>Pilih Area</option>
                            <option value="1">Seminyak</option>
                            <option value="2">Senyamuk</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row mb-3 align-items-center">
                    <label for="komisi" class="col-md-2 col-form-label-lg">Komisi</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control form-control-lg" id="komisi" name="komisi" required>
                    </div>
                </div>
    <div class="row mb-3">
        <div class="col-md-11 d-flex justify-content-end">
            <a href="<?php echo site_url('sales'); ?>" class="btn btn-secondary me-2">
                <i class="fas fa-times"></i> Cancel
            </a>
            <button type="submit" class="btn btn-primary" style="background-color: #624DE3;">
                <i class="fas fa-save"></i> Simpan
            </button>
        </div>
    </div>
</form>
</div>
</div>