<div class="bg-content-container col-12" >
    <div class="content-container col-11 mt-5 mb-3">
        <div class="card-header bg-white d-flex justify-content-center">
            <h1>Edit Pesanan</h1>
        </div>
        <div class="card-body row justify-content-center">
            <div class="col-md-10">
                <form action="<?php echo base_url('pesananreseller'); ?>" method="post">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nama">Nama Reseller</label>
                                <div class="form-group">
                                    <select class="form-control form-control-md" id="nama" name="nama" required>
                                        <option value="" disabled selected>Pilih Reseller</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="tanggal">Tanggal</label>
                                <input type="text" class="form-control" id="tanggal" readonly>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nopesananreseller">No Pesanan</label>
                                <input type="text" class="form-control" id="nopesananreseller" readonly>
                            </div>
                        </div>
                    </div>

                    <span>Barang</span>
                        <div class="table-bordered">
                            <table id="table" class="table table-hover table-striped">
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
                                            Harga
                                        </th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <td colspan="5" class="text-center">
                                        <a href="<?php echo site_url('pesananreseller/addpesananreseller'); ?>" type="button" class="btn btn-link p-0">
                                                <img src="<?= base_url('assets/img/plus.png') ?>" alt="plus" class="img-fluid" />
                                        </a>
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
                        <a href="<?php echo site_url('pesananreseller'); ?>" class="btn btn-secondary me-2">
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
