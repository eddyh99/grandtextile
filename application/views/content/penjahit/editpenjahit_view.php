<div class="bg-content-container col-12">
    <div class="content-container col-11 mt-5">
        <div class="card-header bg-white d-flex justify-content-center">
            <h3>Edit penjahit</h3>
        </div>
        <form class="card-body" action="<?php echo base_url('penjahit/editpenjahit/' . ($penjahit_data->message->id)); ?>" method="post">

            <div class="form-group row mb-3 align-items-center">
                <label for="Nama" class="col-lg-2 col-form-label-lg">Nama</label>
                <div class="col-md-9">
                    <input type="text" class="form-control form-control-lg" id="nama" name="nama" required value="<?php echo ($penjahit_data->message->nama);?>">
                </div>
            </div>

            <div class="form-group row mb-3 align-items-center">
                <label for="alamat" class="col-md-2 col-form-label-lg">Alamat</label>
                <div class="col-md-9">
                    <input type="text" class="form-control form-control-lg" id="alamat" name="alamat" required value="<?php echo ($penjahit_data->message->alamat);?>">
                </div>
            </div>

            <div class="form-group row mb-3 align-items-center">
                <label for="whatsapp" class="col-md-2 col-form-label-lg">Whatsapp</label>
                <div class="col-md-9">
                    <input type="text" class="form-control form-control-lg" id="telp" name="telp" required value="<?php echo ($penjahit_data->message->telp);?>">
                </div>
            </div>
    
            <div class="form-group row mb-3 align-items-center">
                <label for="jenis" class="col-md-2 col-form-label-lg">Jenis</label>
                <div class="col-md-9 input-group">
                    <select class="form-control form-control-lg" id="jenis" name="jenis" required>
                        <option value="" disabled selected><?php echo ($penjahit_data->message->jenis);?></option>
                        <option value="1">Borongan Luar</option>
                        <option value="2">Borongan Dalam</option>
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