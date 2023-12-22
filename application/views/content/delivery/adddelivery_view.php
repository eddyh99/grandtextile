<div class="bg-content-container col-12">
    <div class="content-container col-11 mt-3">

        <div class="card-header bg-white d-flex justify-content-center">
            <h3>Tambah delivery</h3>
        </div>

            <?php if (!empty($_SESSION["message"])): ?>
                <div class="alert alert-success">
                    <?= $_SESSION["message"]; ?>
                </div>
                <?php unset($_SESSION["message"]); ?>
            <?php endif; ?>

        <form class="card-body" action="<?php echo base_url('delivery/adddelivery'); ?>" method="post">

            <div class="form-group row mb-3 align-items-center">
                <label for="Nama" class="col-lg-2 col-form-label-lg">No Invoice</label>
                <div class="col-md-9">
                    <input type="text" class="form-control form-control-lg" id="nama" name="nama" required>
                </div>
            </div>

            <div class="form-group row mb-3 align-items-center">
                <label for="tglkirim" class="col-md-2 col-form-label-lg">No DO</label>
                <div class="col-md-9">
                    <input type="text" class="form-control form-control-lg" id="tglkirim" name="tglkirim" required>
                </div>
            </div>
    
            <div class="form-group row mb-3 align-items-center">
                <label for="estjadi" class="col-md-2 col-form-label-lg">Tanggal</label>
                <div class="col-md-9">
                    <input type="text" class="form-control form-control-lg" id="estjadi" name="estjadi" required>
                </div>
            </div>

            <div class="form-group row mb-3 align-items-center">
                <label for="estjadi" class="col-md-2 col-form-label-lg">Penanggung Jawab</label>
                <div class="col-md-9">
                    <input type="text" class="form-control form-control-lg" id="estjadi" name="estjadi" required>
                </div>
            </div>

            <div class="form-group row mb-3 align-items-center">
                <label for="estjadi" class="col-md-2 col-form-label-lg">Pengirim</label>
                <div class="col-md-9">
                    <input type="text" class="form-control form-control-lg" id="estjadi" name="estjadi" required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div id="form-asli" class="mb-3">
                        <div class="row">
                            <div class="col-7">
                                <label for="namaBarang" class="col-form-label-lg">Nama Barang</label>
                                <input type="text" class="form-control form-control-lg" name="namaBarang">
                            </div>
                            <div class="col-4">
                                <label for="jumlah" class="col-form-label-lg">Jumlah</label>
                                <input type="text" class="form-control form-control-lg" name="jumlah">
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div id="form-dinamis"></div>
                </div>
                <div class="col-md-12 text-center">
                    <div id="form-dinamis"></div>
                    <button type="button" class="btn btn-primary mt-3 col-2" onclick="copyForm()">Tambah Form</button>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-11 d-flex justify-content-end">
                    <a href="<?php echo site_url('delivery'); ?>" class="btn btn-secondary me-2">
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

<script>
function copyForm() {
    var clonedForm = $("#form-asli").clone();

    // Add a remove button with Bootstrap styling
    clonedForm.append('<button type="button" class="btn btn-danger remove-form mt-2">Hapus</button>');

    // Append the cloned form with the remove button to the dynamic form container
    $("#form-dinamis").append(clonedForm);
}

// Handle removal of cloned forms
$("#form-dinamis").on("click", ".remove-form", function() {
    $(this).closest("#form-asli").remove();
});
</script>