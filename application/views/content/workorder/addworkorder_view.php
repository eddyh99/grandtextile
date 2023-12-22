<div class="bg-content-container col-12" >
    <div class="content-container col-11 mt-5 mb-3">
        <div class="card-header bg-white d-flex justify-content-center">
            <h1>Create Work Order</h1>
        </div>
                <div class="card-body row justify-content-center">
                    <div class="col-md-10">
                        <form action="<?php echo base_url('workorder'); ?>" method="post">
                            <div class="row row-cols-3">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="invoice">Pilih Invoice</label>
                                        <input type="text" class="form-control" id="invoice" name="invoice">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="tanggal">Tanggal</label>
                                        <input type="text" class="form-control" id="tanggal" name="tanggal">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="jenis">Jenis</label>
                                        <div class="form-group">
                                            <select class="form-control form-control-md" id="jenis" name="jenis" required>
                                                <option value="" disabled selected>Pilih Jenis</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row row-cols-3">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="namapenjahit">Nama Penjahit</label>
                                        <div class="form-group">
                                            <select class="form-control form-control-md" id="namapenjahit" name="namapenjahit" required>
                                                <option value="" disabled selected>Pilih Penjahit</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="addcost">Additional Cost</label>
                                        <input type="text" class="form-control" id="addcost"name="addcost">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="noWo">No WO</label>
                                        <input type="text" class="form-control" id="noWo" name="noWo" readonly>
                                    </div>
                                </div>
                            </div>
                            <span>Barang</span>
                                <div class="table-bordered">
                 <table id="table" class="table table-bordered table-hover">
                    <thead class="sticky-top">
                        <tr>
                            <th class="col-2 align-middle"> 
                                Kategori
                            </th>
                            <th class="col-2 align-middle"> 
                                Nama Barang
                            </th>
                            <th class-"col-2 align-middle">
                                min order
                            </th>
                            <th class="col-2 align-middle"> 
                                Jumlah
                            </th>
                            <th class="col-2 align-middle"> 
                                Diskon
                            </th>
                            <th class="col-2 align-middle"> 
                                Harga
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($barang_data as $index => $row): ?>
                            <tr class="mt-1">
                                <td>
                                    <a class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#details-<?php echo $index; ?>" aria-expanded="false" aria-controls="details-<?php echo $index; ?>">
                                        <i class="fas fa-chevron-down"></i>
                                    </a>
                                    <?php echo $row['kategori']; ?>
                                </td>
                                <td>
                                    <?php echo $row['namabarang']; ?>
                                </td>
                                <td>
                                    <?php echo $row['minorder']; ?>
                                </td>
                                <td>
                                    <?php echo $row['jumlah']; ?>
                                </td>
                                <td>
                                    <?php echo $row['diskon']; ?>
                                </td>
                                <td>
                                <?php echo $row['harga']; ?>
                                </td>

                            </tr>
                            <tr id="details-<?php echo $index; ?>" class="collapse">
                                <td colspan="6">
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>Desain</th>
                                            <td class="col-3">
                                                <?php echo $row['desain']; ?>
                                            </td>
                                            <th>Kain</th>
                                            <td class="col-3">
                                                <?php echo $row['kain']; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                        <th>Ukuran P/L/T</th>
                                            <td class="col-4">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-text">P</i></span>
                                                    </div>
                                                    <input type="text" class="form-control" value="<?php echo $row['ukuran_p']; ?>" >
                                                    <span class="input-group-text"><i class="fas fa-text">L</i></span>
                                                    <input type="text" class="form-control" value="<?php echo $row['ukuran_l']; ?>" >
                                                    <span class="input-group-text"><i class="fas fa-text">T</i></span>
                                                    <input type="text" class="form-control" value="<?php echo $row['ukuran_t']; ?>" >
                                                </div>
                                            </td>
                                            <th>Warna</th>
                                            <td class="col-3">
                                                <?php echo $row['warna']; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>GR/pcs</th>
                                            <td class="col-3">
                                                <?php echo $row['pcs']; ?>
                                            </td>
                                            <th>GR/pcs</th>
                                            <td class="col-3">
                                                <?php echo $row['pcs']; ?>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>Cons</th>
                                            <td class="col-3">
                                                <?php echo $row['cons']; ?>
                                            </td>
                                            <th>Cons dll</th>
                                            <td class="col-3">
                                                <?php echo $row['consdll']; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Add on</th>
                                            <td colspan="3">
                                                <?php echo $row['addOn']; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Keterangan</th>
                                            <td colspan="3">
                                                <?php echo $row['keterangan']; ?>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    </table>
                </div>
                    <div class="row">
                        <div class="row">
                            <div class="col-md-12">
                                <div id="form-asli" class="mb-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="bahan">Bahan yang digunakan</label>
                                                <div class="form-group">
                                                    <select class="form-control form-control-md" id="bahan" name="bahan" required>
                                                        <option value="" disabled selected>Pilih Jenis</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="supplier">Supplier</label>
                                                <div class="form-group">
                                                    <select class="form-control form-control-md" id="supplier" name="supplier" required>
                                                        <option value="" disabled selected>Pilih Jenis</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="jumlah">Jumlah</label>
                                                <input type="text" class="form-control" id="jumlah" name="jumlah">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div id="form-dinamis"></div>
                            </div>
                            <div class="col-md-12 text-center">
                                <div id="form-dinamis"></div>
                                <button type="button" class="btn btn-primary mt-3 col-2" onclick="copyForm()">Tambah Form</button>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="keterangan">Keterangan</label>
                                <input type="text" class="form-control" id="keterangan" name="keterangan">
                            </div>
                        </div>
                    </div>
                            

                <div class="d-flex justify-content-end mt-2">
                    <a href="<?php echo site_url('workorder'); ?>" class="btn btn-secondary me-2">
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
