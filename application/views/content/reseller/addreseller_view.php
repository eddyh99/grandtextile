<div class="container col-12" style="background: #eaedf7; display: flex; justify-content: center; align-items: center;padding-bottom:60px">
    <div class="container-fluid col-10 mt-5" style="padding-bottom: 20px; background:white">
        <div class="d-flex justify-content-center">
            <h1>Tambah Reseller</h1>
        </div>
        <form action="<?php echo base_url('reseller'); ?>" method="post">

            <div class="form-group row mb-3 align-items-center">
                <label for="area" class="col-md-2 col-form-label-lg">Nama</label>
                <div class="col-md-9 ">
                    <input type="text" class="form-control form-control-lg" id="nama" name="nama" required>
                </div>
            </div>

            <div class="form-group row mb-3 align-items-center">
                <label for="area" class="col-md-2 col-form-label-lg">Alamat</label>
                <div class="col-md-9">
                    <input type="text" class="form-control form-control-lg" id="alamat" name="alamat" required>
                </div>
            </div>

            <div class="form-group row mb-3 align-items-center">
                <label for="area" class="col-md-2 col-form-label-lg">Kota</label>
                <div class="col-md-9">
                    <input type="text" class="form-control form-control-lg" id="kota" name="kota" required>
                </div>
            </div>
    
            <div class="form-group row mb-3 align-items-center">
                <label for="area" class="col-md-2 col-form-label-lg">Telp/WA</label>
                <div class="col-md-9">
                    <input type="text" class="form-control form-control-lg" id="telp" name="telp" required>
                </div>
            </div>

            <div class="form-group row mb-3 align-items-center">
                <label for="area" class="col-md-2 col-form-label-lg">Tanggal Lahir</label>
                <div class="col-md-9">
                    <input type="date" class="form-control form-control-lg" id="tgllahir" name="tgllahir" required>
                </div>
            </div>

            <div class="form-group row mb-3 align-items-center">
                <label for="area" class="col-md-2 col-form-label-lg">Plafon</label>
                <div class="col-md-9">
                    <input type="text" class="form-control form-control-lg" id="plafon" name="plafon" required>
                </div>
            </div>

            <div class="form-group row mb-3 align-items-center">
                <label for="area" class="col-md-2 col-form-label-lg">Email</label>
                <div class="col-md-9">
                    <input type="email" class="form-control form-control-lg" id="email" name="email" required>
                </div>
            </div>

            <div class="form-group row mb-3 align-items-center">
                <label for="area" class="col-md-2 col-form-label-lg">Password</label>
                <div class="col-md-9">
                    <input type="password" class="form-control form-control-lg" id="pass" name="pass" required>
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