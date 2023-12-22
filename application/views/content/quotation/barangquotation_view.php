<div class="bg-content-container col-12" >
    <div class="content-container col-11 mt-5 mb-3">
        <div class="card-header bg-white d-flex justify-content-center">
            <h1>Tambah Barang Quotation</h1>
        </div>
        <div class="card-body row justify-content-center">
            <div class="col-md-10">
                <form action="<?php echo base_url('area'); ?>" method="post">
                    <div class="row row-cols-3">
                        <div class="col">
                            <div class="form-group">
                                <label for="namaHotel">Nama Hotel</label>
                                <input type="text" class="form-control" id="namaHotel">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="tanggal">Tanggal</label>
                                <input type="text" class="form-control" id="tanggal" readonly>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="noQuotation">No Quotation</label>
                                <input type="text" class="form-control" id="noQuotation" readonly>
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
                                            <input type="text" class="form-control" value="<?php echo $row['ukuran_p']; ?>" readonly>
                                            <span class="input-group-text"><i class="fas fa-text">L</i></span>
                                            <input type="text" class="form-control" value="<?php echo $row['ukuran_l']; ?>" readonly>
                                            <span class="input-group-text"><i class="fas fa-text">T</i></span>
                                            <input type="text" class="form-control" value="<?php echo $row['ukuran_t']; ?>" readonly>
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
                        <div class="container">
                            <div class="d-flex justify-content-between">
                                <span>Total</span>
                                <span>Rp</span>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mt-2">
                        <a href="<?php echo site_url('quotation/addquotation'); ?>" class="btn btn-secondary me-2">
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

