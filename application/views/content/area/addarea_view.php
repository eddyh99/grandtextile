<div class="container col-12" style="background: #eaedf7">
    <div class="container col-11 mt-5" style="background: white;border-radius: 15px;padding : 20px">
        <div class="d-flex justify-content-center mb-3">
            <h1>Tambah Area</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <form action="<?php echo base_url('area'); ?>" method="post">
                    <div class="form-group row mb-3 align-items-center">
                        <label for="area" class="col-md-2 col-form-label col-form-label-lg">Area</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control form-control-lg" id="area" name="area" required>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end">
                        <a href="<?php echo site_url('area'); ?>" class="btn btn-secondary me-2">
                            <i class="fas fa-times"></i> Batal
                        </a>
                        <button type="submit" class="btn btn-primary" style="background-color: #624DE3;">
                            <i class="fas fa-save"></i> Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
