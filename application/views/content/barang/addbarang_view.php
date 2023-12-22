<div class="bg-content-container col-12">
    <div class="content-container col-11 mt-5 mb-3">
        <div class="card-header bg-white d-flex justify-content-center">
            <h1>Tambah Barang</h1>
        </div>
         <?php if (!empty($_SESSION["message"])): ?>
                <div class="alert alert-success">
                    <?= $_SESSION["message"]; ?>
                </div>
                <?php unset($_SESSION["message"]); ?>
            <?php endif; ?>
        <form class="card-body" action="<?php echo base_url('barang/addbarang'); ?>" method="post">
                    <div class="form-group row mb-3 align-items-center">
                        <label for="kategori" class="col-md-2 col-form-label-lg">Kategori</label>
                        <div class="col-md-9 input-group">
                            <select class="form-control form-control-lg" id="kategori" name="kategori" required>
                                <option value="" disabled selected>Pilih Kategori</option>
                                <?php foreach ($kat_data->message as $kat) : ?>
                                    <option value="<?= $kat->id; ?>"><?= $kat->namakategori; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-1">
                            <button class="btn btn btn-secondary" type="button" data-bs-toggle="modal" data-bs-target="#katModal">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="form-group row mb-3 align-items-center">
                        <label for="nambarang" class="col-md-2 col-form-label-lg">Nama Barang</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control form-control-lg" id="nambarang" name="namabarang" required>
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
                                    <input type="file" class="custom-file-input" id="foto" name="foto" accept="image/*">
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
                        <label for="minorder" class="col-md-2 col-form-label-lg">Min Order</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control form-control-lg" id="minorder" name="minorder" required>
                        </div>
                    </div>
                    <div class="form-group row mb-3 align-items-center">
                        <label for="ukuran" class="col-md-2 col-form-label-lg">Ukuran</label>
                        <div class="col-md-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-p"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control form-control-lg" id="ukuran_p" name="panjang" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-l"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control form-control-lg" id="ukuran_l" name="lebar" required>
                            </div>
                        </div><div class="col-md-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-t"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control form-control-lg" id="ukuran_t" name="tinggi" required>
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
                        <label for="harga" class="col-md-2 col-form-label-lg">Harga</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control form-control-lg" id="harga" name="harga" required>
                        </div>
                    </div>
                    <div class="form-group row mb-3 align-items-center">
                        <label for="addOn" class="col-md-2 col-form-label-lg">Add On</label>
                        <div class="col-md-9">
                       <div id="addonContainer"></div>
                            <button type="button" class="btn btn-link p-0" data-bs-toggle="modal" data-bs-target="#addOnModal">
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
    
    <!-- Start Modal Kategori-->
   <div class="modal fade" id="katModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title">Tambah Kategori</h4>
                    <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                </div>
                <form class="modal-body" action="<?php echo base_url('barang/addbarang'); ?>" method="post">
                    <div class="form-group row mb-3 align-items-center">
                        <label for="kategori" class="col-md-2 col-form-label col-form-label-lg">
                        Kategori</label>
                        <div class="col-md-9 mt-2">
                            <input type="text" class="form-control form-control-lg" id="namakategori" name="namakategori" required>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <button type="button" style="background-color: gray;" class="btn btn-danger" data-bs-dismiss="modal">
                            <i class="fas fa-times"></i> Batal
                        </button>
                        <button type="submit" class="btn btn-primary" style="background-color: #624DE3;">
                            <i class="fas fa-save"></i> Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Modal Kategori-->
   <!-- Addon modal -->
<div class="modal fade" id="addOnModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header text-center">
                <h4 class="modal-title">Tambah Addon</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body text-center">
                <!-- Addon form elements -->
                <div class="mb-3 row">
                    <label for="nama" class="col-md-2 col-form-label">Nama</label>
                    <div class="col-md-10">
                        <select class="form-select form-control-lg" id="addonNama" required>
                        <?php foreach ($addon_data->message as $addon) : ?>
                            <option value="<?= $addon->id; ?>"><p><?= $addon->namaaddon; ?></p></option>
                        <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="jumlah" class="col-md-2 col-form-label">Jumlah</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control form-control-lg" id="addonJumlah" required>
                    </div>
                </div>
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer justify-content-center">
                <button type="button" style="background-color: #624DE3;" class="btn btn-primary" onclick="confirmAddon()">
                    <i class="fas fa-save"></i> Confirm
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    function confirmAddon() {
        // Extract values from the modal
        var addonid = document.getElementById('addonNama').value;
        var addonNama = document.getElementById('addonNama').options[document.getElementById('addonNama').selectedIndex].text;
        var addonJumlah = document.getElementById('addonJumlah').value;

        // Create HTML for the addon
        var addonHTML = `
            <div class="mb-3 row">
                <label class="col-md-2 col-form-label">Addon:</label>
                <div class="col-md-10">
                    <p>Nama: ${addonNama}, Jumlah: ${addonJumlah}</p>
                </div>
            </div>
            <input type="hidden" name="addon[1][id_addon]" value="${addonid}">
            <input type="hidden" name="addon[1][jumlah]" value="${addonJumlah}">
        `;

        // Append the addon to the main form
        document.getElementById('addonContainer').innerHTML += addonHTML;

        // Close the modal
        $('#addOnModal').modal('hide');
    }
</script>
