<div class="container col-12" style="background: #eaedf7; display: flex; justify-content: center; align-items: center;">
<div class="container mb-5" style="background: white;padding: 20px">
    <div class="d-flex justify-content-center mt-5 mb-5">
        <h1>Tambah area</h1>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="<?php echo base_url('area'); ?>" method="post">
                <div class="form-group row mb-3 align-items-center">
                    <label for="area" class="col-md-2 col-form-label-lg">
                    <h1>Area</h1></label>
                    <div class="col-md-10">
                        <input type="text" class="form-control form-control-lg" id="nama" name="nama" required>
                    </div>
                </div>
                <!-- Other form elements ... -->
                <div class="d-flex justify-content-end">
                    <a href="<?php echo site_url('area'); ?>" class="btn btn-secondary me-2">
                        <i class="fas fa-times"></i> Cancel
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
