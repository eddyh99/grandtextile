<div class="container col-12" style="background: #eaedf7;padding-bottom: 60px">
<div style="background : white" class="container-fluid col-8 mt-5" >
    <div class="d-flex justify-content-center">
        <h1>Edit Pengguna</h1>
    </div>
    <form action="<?php echo base_url('pengguna'); ?>" method="post">
                <div class="form-group row mb-3 align-items-center">
                    <label for="nama" class="col-md-2 col-form-label-lg">Nama</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control form-control-lg" id="nama" name="nama" required>
                    </div>
                </div>
                <div class="form-group row mb-3 align-items-center">
                    <label for="alamat" class="col-md-2 col-form-label-lg">Alamat</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control form-control-lg" id="alamat" name="alamat" required>
                    </div>
                </div>
                <div class="form-group row mb-3 align-items-center">
                    <label for="kota" class="col-md-2 col-form-label-lg">Kota</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control form-control-lg" id="kota" name="kota" required>
                    </div>
                </div>
    
                <div class="form-group row mb-3 align-items-center">
                    <label for="telp" class="col-md-2 col-form-label-lg">Telp/WA</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control form-control-lg" id="telp" name="telp" required>
                    </div>
                </div>
                <div class="form-group row mb-3 align-items-center">
                    <label for="cp1" class="col-md-2 col-form-label-lg">CP1</label>
                    <div class="col-md-10">
                        <select class="form-control form-control-lg" id="cp1" name="cp1" required>
                            <option value="" disabled selected>Pilih CP</option>
                            <option value="1">CP 1</option>
                            <option value="2">CP 2</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row mb-3 align-items-center">
                    <label for="cp2" class="col-md-2 col-form-label-lg">CP2</label>
                    <div class="col-md-10">
                        <select class="form-control form-control-lg" id="cp2" name="cp2" required>
                            <option value="" disabled selected>Pilih CP</option>
                            <option value="1">CP 1</option>
                            <option value="2">CP 2</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row mb-3 align-items-center">
                    <label for="cp3" class="col-md-2 col-form-label-lg">CP3</label>
                    <div class="col-md-10">
                        <select class="form-control form-control-lg" id="cp3" name="cp3" required>
                            <option value="" disabled selected>Pilih CP</option>
                            <option value="1">CP 1</option>
                            <option value="2">CP 2</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row mb-3 align-items-center">
                    <label for="cp4" class="col-md-2 col-form-label-lg">CP4</label>
                    <div class="col-md-10">
                        <select class="form-control form-control-lg" id="cp4" name="cp4" required>
                            <option value="" disabled selected>Pilih CP</option>
                            <option value="1">CP 1</option>
                            <option value="2">CP 2</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row mb-3 align-items-center">
                    <label for="cp5" class="col-md-2 col-form-label-lg">CP5</label>
                    <div class="col-md-10">
                        <select class="form-control form-control-lg" id="cp5" name="cp5" required>
                            <option value="" disabled selected>Pilih CP</option>
                            <option value="1">CP 1</option>
                            <option value="2">CP 2</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row mb-3 align-items-center">
                    <label for="area" class="col-md-2 col-form-label-lg">Area</label>
                    <div class="col-md-10">
                        <select class="form-control form-control-lg" id="area" name="area" required>
                            <option value="" disabled selected>Select an area</option>
                            <option value="1">Area 1</option>
                            <option value="2">Area 2</option>
                        </select>
                    </div>
                </div>

    <div class="row mb-3">
        <div class="col-md-12 d-flex justify-content-end">
            <a href="<?php echo site_url('pengguna'); ?>" class="btn btn-secondary me-2">
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