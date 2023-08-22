<div class="container col-12" style="background: #eaedf7;padding-bottom:60px">
<div style="background : white" class="container-fluid col-8 mt-5" style="padding-bottom: 20px">
    <div class="d-flex justify-content-center">
        <h1>Tambah client hotel</h1>
    </div>
    <form action="<?php echo base_url('clienthotel'); ?>" method="post">
                <div class="form-group row mb-3 align-items-center">
                    <label for="nama" class="col-md-2 col-form-label-lg">Nama</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control form-control-lg" id="nama" name="nama" required>
                    </div>
                </div>
                <div class="form-group row mb-3 align-items-center">
                    <label for="alamat" class="col-md-2 col-form-label-lg">Alamat</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control form-control-lg" id="alamat" name="alamat" required>
                    </div>
                </div>
                <div class="form-group row mb-3 align-items-center">
                    <label for="kota" class="col-md-2 col-form-label-lg">Kota</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control form-control-lg" id="kota" name="kota" required>
                    </div>
                </div>
    
                <div class="form-group row mb-3 align-items-center">
                    <label for="telp" class="col-md-2 col-form-label-lg">Telp/WA</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control form-control-lg" id="telp" name="telp" required>
                    </div>
                </div>
                <div class="form-group row mb-3 align-items-center d-flex">
                <label for="cp2" class="col-md-2 col-form-label-lg">CP1</label>
                <div class="col-md-8 input-group">
                    <select class="form-control form-control-lg" id="cp1" name="cp1" required>
                        <option value="" disabled selected>Pilih CP</option>
                        <option value="1">CP 1</option>
                        <option value="2">CP 2</option>
                    </select>
                    <div class="input-group-append">
                        <button class="btn btn btn-secondary me-2" type="button" data-toggle="modal" data-target="#cpmodal">
                                <i class="fas fa-plus"></i>
                        </button>
                    </div>
                     </div>
                 </div>
                 <div class="form-group row mb-3 align-items-center d-flex">
                    <label for="cp2" class="col-md-2 col-form-label-lg">CP2</label>
                    <div class="col-md-8 input-group">
                        <select class="form-control form-control-lg" id="cp2" name="cp2" required>
                            <option value="" disabled selected>Pilih CP</option>
                            <option value="1">CP 1</option>
                            <option value="2">CP 2</option>
                        </select>
                        <button class="btn btn btn-secondary me-2" type="button" data-toggle="modal" data-target="#cpmodal">
                                <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
                 <div class="form-group row mb-3 align-items-center d-flex">
                    <label for="cp3" class="col-md-2 col-form-label-lg">CP2</label>
                    <div class="col-md-8 input-group">
                        <select class="form-control form-control-lg" id="cp3" name="cp3" required>
                            <option value="" disabled selected>Pilih CP</option>
                            <option value="1">CP 1</option>
                            <option value="2">CP 2</option>
                        </select>
                        <button class="btn btn btn-secondary me-2" type="button" data-toggle="modal" data-target="#cpmodal">
                                <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
                 <div class="form-group row mb-3 align-items-center d-flex">
                    <label for="cp4" class="col-md-2 col-form-label-lg">CP4</label>
                    <div class="col-md-8 input-group">
                        <select class="form-control form-control-lg" id="cp4" name="cp4" required>
                            <option value="" disabled selected>Pilih CP</option>
                            <option value="1">CP 1</option>
                            <option value="2">CP 2</option>
                        </select>
                        <button class="btn btn btn-secondary me-2" type="button" data-toggle="modal" data-target="#cpmodal">
                                <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
                 <div class="form-group row mb-3 align-items-center d-flex">
                    <label for="cp5" class="col-md-2 col-form-label-lg">CP5</label>
                    <div class="col-md-8 input-group">
                        <select class="form-control form-control-lg" id="cp5" name="cp5" required>
                            <option value="" disabled selected>Pilih CP</option>
                            <option value="1">CP 1</option>
                            <option value="2">CP 2</option>
                        </select>
                        <div class="input-group-append">
                        <button class="btn btn btn-secondary me-2" type="button" data-toggle="modal" data-target="#cpmodal">
                                <i class="fas fa-plus"></i>
                        </button>
                        </div>
                    </div>
                </div>
                 <div class="form-group row mb-3 align-items-center d-flex">
                    <label for="area" class="col-md-2 col-form-label-lg">Area</label>
                    <div class="col-md-8 input-group">
                        <select class="form-control form-control-lg" id="area" name="area" required>
                            <option value="" disabled selected>Pilih CP</option>
                            <option value="1">Area 1</option>
                            <option value="2">Area 2</option>
                        </select>
                        <button class="btn btn btn-secondary me-2" type="button" data-toggle="modal" data-target="#areaModal">
                                <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>

    <div class="row mb-3">
        <div class="col-md-12 d-flex justify-content-end">
            <a href="<?php echo site_url('clienthotel'); ?>" class="btn btn-secondary me-2">
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
<!-- Start Modal CP-->
    <div class="modal fade" id="cpmodal" role="dialog">
            <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header text-center">
                  <h4 class="modal-title">Tambah Client Hotel</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                <div class="form-group row mb-3 align-items-center">
                    <label for="nama" class="col-md-3 col-form-label-lg">Nama</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control form-control-md" id="nama" name="nama" required>
                    </div>
                    <label for="telp" class="col-md-3 col-form-label-lg">Telp</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control form-control-md" id="telp" name="telp" required>
                    </div>
                    <label for="tgl_lahir" class="col-md-3 col-form-label-lg">Tanggal Lahir</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control form-control-md" id="tgl_lahir" name="tgl_lahir" required>
                    </div>
                    <label for="komisi" class="col-md-3 col-form-label-lg">Komisi</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control form-control-md" id="komisi" name="komisi" required>
                    </div>
                </div>
                </div>
                <div class="modal-footer justify-content-center" >
                  <button type="button" style="background-color: gray;" class="btn btn-danger" data-dismiss="modal">
                  <i class="fas fa-times"></i> Batal
                  </button>
                  <button type="button " style="background-color: #624DE3;" class="btn btn-primary" data-dismiss="modal">
                  <i class="fas fa-save"></i>Simpan
                  </button>
                </div>
               </div>
            </div>
    </div>
    <!-- End Modal CP-->

    <!-- Start Modal CP-->
    <div class="modal fade" id="areaModal" role="dialog">
            <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header text-center">
                  <h4 class="modal-title">Tambah Area</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                <div class="form-group row mb-3 align-items-center">
                    <label for="area" class="col-md-3 col-form-label-lg">Area</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control form-control-md" id="area" name="area" required>
                    </div>
                </div>
                <div class="modal-footer justify-content-center" >
                  <button type="button" style="background-color: gray;" class="btn btn-danger" data-dismiss="modal">
                  <i class="fas fa-times"></i> Batal
                  </button>
                  <button type="button " style="background-color: #624DE3;" class="btn btn-primary" data-dismiss="modal">
                  <i class="fas fa-save"></i>Simpan
                  </button>
                </div>
               </div>
            </div>
    </div>
    <!-- End Modal Area-->


