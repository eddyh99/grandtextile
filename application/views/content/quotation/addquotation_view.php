<div class="bg-content-container col-12" >
    <div class="content-container col-11 mt-5 mb-3">
        <div class="card-header bg-white d-flex justify-content-center">
            <h1>Tambah Quotation</h1>
        </div>
         <?php if (!empty($_SESSION["message"])): ?>
                <div class="alert alert-success">
                    <?= $_SESSION["message"]; ?>
                </div>
                <?php unset($_SESSION["message"]); ?>
            <?php endif; ?>
        <div class="card-body row justify-content-center">
            <div class="col-md-10">
                <form action="<?php echo base_url('quotation'); ?>" method="post">
                    <div class="row row-cols-3">
                        <div class="col">
                            <div class="form-group">
                                <label for="namaHotel">Nama Hotel</label>
                                <input type="text" class="form-control" id="namaHotel" name="namahotel">
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
                            <table id="table" class="table table-bordered table-hover table-striped">
                                <thead class="sticky-top">
                                    <tr>
                                        <th class="col-2 align-middle"> 
                                            Kategori
                                        </th>
                                        <th class="col-2 align-middle"> 
                                            Nama Barang
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
                                <tfoot>
                                    <tr>
                                        <td colspan="5" class="text-center">
                                        <button type="button" class="btn btn-link p-0" data-bs-toggle="modal" data-bs-target="#addOnModal">
                                                <img src="<?= base_url('assets/img/plus.png') ?>" alt="Delete" class="img-fluid" />
                                        </button>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        <div class="container">
                            <div class="d-flex justify-content-between">
                                <span>Total</span>
                                <span>Rp</span>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mt-2">
                        <a href="<?php echo site_url('quotation'); ?>" class="btn btn-secondary me-2">
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

<!-- Start Modal-->
    <div class="modal fade" id="addOnModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title">Tambah Barang Quotation</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <div class="mb-3 row">
                        <label for="kategori" class="col-md-2 col-form-label">Kategori</label>
                        <div class="col-md-9">
                            <select class="form-control form-control-lg" id="kat" name="kategori" required>
                                <option value="" disabled selected>Kategori</option>
                                <option value="1">nama 1</option>
                                <option value="2">nama 2</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama" class="col-md-2 col-form-label">Nama Barang</label>
                        <div class="col-md-9">
                            <select class="form-control form-control-lg" id="namabarang" name="nambarang" required>
                                <option value="" disabled selected>Nama Barang</option>
                                <option value="1">nama 1</option>
                                <option value="2">nama 2</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="harga" class="col-md-2 col-form-label">Add On</label>
                        <div class="col-md-9">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Bahan</th>
                                        <th>Jumlah</th>
                                        <th>Satuan</th>
                                        <th>Harga</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>bahan1</td>
                                        <td>bahan1</td>
                                        <td>bahan1</td>
                                        <td>bahan1</td>
                                    </tr>
                                    <tr>
                                        <td>bahan2</td>
                                        <td>bahan2</td>
                                        <td>bahan2</td>
                                        <td>bahan2</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="harga" class="col-md-2 col-form-label">Detail</label>
                        <div class="col-md-9">
                            <table class="table table-bordered">
                                <tr>
                                    <th>Jumlah</th>
                                    <td class="col-3">
                                    <input type="text" class="form-control" id="jumlah" name="jumlah">
                                    </td>
                                    <th>Komisi</th>
                                    <td class="col-3">
                                    <input type="text" class="form-control" id="komisi" name="komisi">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Desain</th>
                                    <td class="col-3">
                                    <input type="text" class="form-control" id="desain" name="desain">
                                    </td>
                                    <th>Kain</th>
                                    <td class="col-3">
                                    <input type="text" class="form-control" id="kain" name="kain">
                                    </td>
                                </tr>
                                <tr>
                                <th>Ukuran P/L/T</th>
                                    <td class="col-5">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-text">P</i></span>
                                            </div>
                                            <input type="text" class="form-control" value="">
                                            <span class="input-group-text"><i class="fas fa-text">L</i></span>
                                            <input type="text" class="form-control" value="">
                                            <span class="input-group-text"><i class="fas fa-text">T</i></span>
                                            <input type="text" class="form-control" value="">
                                        </div>
                                    </td>
                                    <th>Warna</th>
                                    <td class="col-3">
                                    <input type="text" class="form-control" id="warna" name="warna">
                                    </td>
                                </tr>
                                <tr>
                                    <th>GR/pcs</th>
                                    <td class="col-3">
                                    <input type="text" class="form-control" id="gr" name="gr">
                                    </td>
                                    <th>GR/pcs</th>
                                    <td class="col-3">
                                    <input type="text" class="form-control" id="pcs" name="pcs">
                                    </td>
                                </tr>

                                <tr>
                                    <th>Cons</th>
                                    <td class="col-3">
                                    <input type="text" class="form-control" id="cons" name="cons">
                                    </td>
                                    <th>Cons dll</th>
                                    <td class="col-3">
                                    <input type="text" class="form-control" id="consdll" name="consdll">
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" style="background-color: gray;" class="btn btn-danger" data-bs-dismiss="modal">
                        <i class="fas fa-times"></i> Batal
                    </button>
                    <button type="button" style="background-color: #624DE3;" class="btn btn-primary" data-bs-dismiss="modal">
                        <i class="fas fa-save"></i> Simpan
                    </button>
                </div>
            </div>
        </div>
    </div>