<div class="bg-content-container col-12">
    <div class="content-container col-11 mt-5 mb-3">
        <div class="d-flex justify-content-center">
            <h1>Tambah settings Bahan Baku</h1>
        </div>
        <form action="<?php echo base_url('settings'); ?>" method="post">
                    <div class="form-group row mt-5 mb-3 align-items-center">
                    <label for="nambahan" class="col-md-2 col-form-label-lg">Nama Bahan</label>
                        <div class="col-md-9 input-group">
                            <select class="form-control form-control-lg" id="nambahan" name="nambahan" required>
                                <option value="" disabled selected>Pilih barang</option>
                                <option value="1">barang 1</option>
                                <option value="2">barang 2</option>
                            </select>
                         </div>
                     </div> 
                    <div class="form-group row mb-3 align-items-center">
                    <label for="satuan" class="col-md-2 col-form-label-lg">Satuan</label>
                        <div class="col-md-9 input-group">
                            <select class="form-control form-control-lg" id="satuan" name="satuan" required>
                                <option value="" disabled selected>Pilih barang</option>
                                <option value="1">21</option>
                                <option value="2">22</option>
                            </select>
                         </div>
                     </div>
                     
                    <div class="form-group row mb-3 align-items-center">
                        <label for="jumlah" class="col-md-2 col-form-label-lg">Jumlah</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control form-control-lg" id="jumlah" name="jumlah" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-11 d-flex justify-content-end">
                            <a href="<?php echo site_url('settings'); ?>" class="btn btn-secondary me-2">
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