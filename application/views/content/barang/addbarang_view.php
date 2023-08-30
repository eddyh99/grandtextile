<div class="bg-content-container col-12">
    <div class="content-container col-11 mt-5 mb-3">
        <div class="d-flex justify-content-center">
            <h1>Tambah Barang</h1>
        </div>
        <form action="<?php echo base_url('barang'); ?>" method="post">
                    <div class="form-group row mb-3 align-items-center">
                    <label for="kategori" class="col-md-2 col-form-label-lg">Kategori</label>
                        <div class="col-md-9 input-group">
                            <select class="form-control form-control-lg" id="kategori" name="kategori" required>
                                <option value="" disabled selected>Pilih barang</option>
                                <option value="1">barang 1</option>
                                <option value="2">barang 2</option>
                            </select>
                            <div class="input-group-append">
                                <button class="btn btn btn-secondary me-2" type="button" data-toggle="modal" data-target="#katModal">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                         </div>
                     </div>
                    <div class="form-group row mb-3 align-items-center">
                        <label for="nambarang" class="col-md-2 col-form-label-lg">Nama Barang</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control form-control-lg" id="nambarang" name="nambarang" required>
                        </div>
                    </div>
                    <div class="form-group row mb-3 align-items-center">
                        <label for="foto" class="col-md-2 col-form-label-lg">Foto</label>
                        <div class="col-md-9">
                            <div class="d-flex align-items-center">
                                <div class="image-container mr-3">
                                    <img src="" alt="Image" class="img-fluid">
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="foto" name="foto" accept="image/*" required>
                                    <label class="custom-file-label" for="foto">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-3 align-items-center">
                        <label for="design" class="col-md-2 col-form-label-lg">Design</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control form-control-lg" id="design" name="design" required>
                        </div>
                    </div>
                    <div class="form-group row mb-3 align-items-center">
                        <label for="ukuran" class="col-md-2 col-form-label-lg">Ukuran</label>
                        <div class="col-md-4">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-p"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control form-control-lg" id="ukuran_p" name="ukuran_p" required>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-l"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control form-control-lg" id="ukuran_l" name="ukuran_l" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-3 align-items-center">
                        <label for="gsm" class="col-md-2 col-form-label-lg">GSM</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control form-control-lg" id="gsm" name="gsm" required>
                        </div>
                    </div>

                    <div class="form-group row mb-3 align-items-center">
                        <label for="gr" class="col-md-2 col-form-label-lg">Gr/Pcs</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control form-control-lg" id="gr" name="gr" required>
                        </div>
                    </div>

                    <div class="form-group row mb-3 align-items-center">
                        <label for="quality" class="col-md-2 col-form-label-lg">Quality</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control form-control-lg" id="quality" name="quality" required>
                        </div>
                    </div>
                    <div class="form-group row mb-3 align-items-center">
                        <label for="color" class="col-md-2 col-form-label-lg">Color</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control form-control-lg" id="color" name="color" required>
                        </div>
                    </div>
                    <div class="form-group row mb-3 align-items-center">
                        <label for="cons" class="col-md-2 col-form-label-lg">Cons</label>
                        <div class="col-md-9">
                            <button type="button" class="btn btn-link p-0" data-toggle="modal" data-target="#consModal">
                                    <img src="<?= base_url('assets/img/plus.png') ?>" alt="Delete" class="img-fluid" />
                            </button>
                        </div> 
                    </div>
                    <div class="form-group row mb-3 align-items-center">
                        <label for="addOn" class="col-md-2 col-form-label-lg">Add On</label>
                        <div class="col-md-9">
                            <button type="button" class="btn btn-link p-0" data-toggle="modal" data-target="#addOnModal">
                                    <img src="<?= base_url('assets/img/plus.png') ?>" alt="Delete" class="img-fluid" />
                            </button>
                        </div>
                    </div>
                    <div class="form-group row mb-3 align-items-center">
                        <label for="keterangan" class="col-md-2 col-form-label-lg">Keterangan</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control form-control-lg" id="keterangan" name="keterangan" required>
                        </div>
                    </div>
                <div class="row mb-3">
                    <div class="col-md-12 d-flex justify-content-end">
                        <a href="<?php echo site_url('barang'); ?>" class="btn btn-secondary me-2">
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

    <!-- Start Modal -->
    <div class="modal fade" id="consModal" role="dialog">
            <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header text-center">
                  <h4 class="modal-title">Tambah Cons</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body text-center">
                <div class="form-group row mb-3 align-items-center">
                    <label for="bahan" class="col-md-2 col-form-label-lg">Bahan</label>
                    <div class="col-md-10">
                        <select class="form-control form-control-lg" id="bahan" name="bahan" required>
                            <option value="" disabled selected>Bahan</option>
                            <option value="1">Kain</option>
                            <option value="2">Batu</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row mb-3 align-items-center">
                    <label for="jumlah" class="col-md-2 col-form-label-lg">Jumlah</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control form-control-lg" id="jumlah" name="jumlah" required>
                    </div>
                </div>
                <div class="form-group row mb-3 align-items-center">
                    <label for="satuan" class="col-md-2 col-form-label-lg">Satuan</label>
                    <div class="col-md-10">
                        <select class="form-control form-control-lg" id="satuan" name="satuan" required>
                            <option value="" disabled selected>satuan</option>
                            <option value="1">1000</option>
                            <option value="2">2000</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row mb-3 align-items-center">
                    <label for="harga" class="col-md-2 col-form-label-lg">Harga</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control form-control-lg" id="harga" name="harga" required>
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
    
    <!-- Start Modal Kategori-->
    <div class="modal fade" id="katModal" role="dialog">
            <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header text-center">
                  <h4 class="modal-title">Tambah Kategori</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body text-center">
                <div class="form-group row mb-3 align-items-center">
                    <label for="kategori" class="col-md-2 col-form-label-lg">Kategori</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control form-control-lg" id="kategori" name="kategori" required>
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
    <!-- End Modal Kategori-->
    <!-- Start Modal Addon -->
    <div class="modal fade" id="addOnModal" role="dialog">
            <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header text-center">
                  <h4 class="modal-title">Tambah Kategori</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body text-center">
                <div class="form-group row mb-3 align-items-center">
                    <label for="nama" class="col-md-2 col-form-label-lg">Nama</label>
                        <div class="col-md-10 input-group">
                            <select class="form-control form-control-lg" id="nama" name="nama" required>
                                <option value="" disabled selected>Nama</option>
                                <option value="1">nama 1   </option>
                                <option value="2">nama 2</option>
                            </select>
                         </div>
                     </div>
                <div class="form-group row mb-3 align-items-center">
                    <label for="jumlah" class="col-md-2 col-form-label-lg">Jumlah</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control form-control-lg" id="jumlah" name="jumlah" required>
                    </div>
                </div>
                <div class="form-group row mb-3 align-items-center">
                    <label for="harga" class="col-md-2 col-form-label-lg">Harga</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control form-control-lg" id="harga" name="harga" required>
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
    
    <!-- End Modal addOn-->
</div>