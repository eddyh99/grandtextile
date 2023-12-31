<div class="bg-content-container col-12" >
    <div class="content-container col-11 mt-5 mb-3">
        <div class="card-header bg-white d-flex justify-content-center">
            <h1>Tambah invoice</h1>
        </div>

        <div class="container mt-5">
        <div class="text-center">
            <button class="btn btn-primary" id="baruBtn">Baru</button>
            <button class="btn btn-primary" id="quotationBtn">Dari Quotation</button>
        </div>
        <div id="baruContent" class="mt-3">
            <div class="card-body row justify-content-center">
            <div class="col-md-10">
                <form action="<?php echo base_url('invoice'); ?>" method="post">
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
                                <label for="noinvoice">No invoice</label>
                                <input type="text" class="form-control" id="noinvoice" readonly>
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
                                        <button type="button" class="btn btn-link p-0" data-toggle="modal" data-target="#addDataModal">
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
                    <div class="form-group row mt-3 align-items-center">
                        <label for="Nama" class="col-lg-2 col-form-label-md">Down Payment</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control form-control-md" id="dp" name="dp" required>
                        </div>
                    </div>
                    <div class="form-group row mb-3 align-items-center">
                        <label for="Nama" class="col-lg-2 col-form-label-lg">Keterangan</label>
                        <div class="col-md-9">
                        <textarea class="form-control" rows="5" id="comment" name="text"></textarea> 
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
        <div id="quotationContent" class="mt-3" style="display: none;">
            <div class="card-body row justify-content-center">
            <div class="col-md-10">
                <form action="<?php echo base_url('area'); ?>" method="post">
                     <div class="row">
                        <div class="col-7">
                            <div class="form-group">
                                <label for="idquot">Masukkan Nomor Quotation</label>
                                <div class="input-group mb-3">
                                  <input type="text" class="form-control" placeholder="No Quotation">
                                  <button class="btn btn-primary" type="submit">Confirm</button>
                                </div>
                            </div>
                        </div>
                        </div>


                    <span>Barang</span>
                        <div class="table-bordered">
                            <table id="table" class="table table-bordered table-hover table-striped">
                                <thead class="sticky-top">
                                    <tr>
                                        <th class="col-2 align-middle"> 
                                            Kategori quotation
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
                                        <td colspan="5" class="text-center bg-gray">
                                        <button type="button" class="btn btn-link p-0" data-toggle="modal" data-target="#addDataModal">
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
                    <div class="form-group row mt-3 align-items-center">
                        <label for="Nama" class="col-lg-2 col-form-label-md">Down Payment</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control form-control-md" id="dp" name="dp" required>
                        </div>
                    </div>
                    <div class="form-group row mb-3 align-items-center">
                        <label for="Nama" class="col-lg-2 col-form-label-lg">Keterangan</label>
                        <div class="col-md-9">
                        <textarea class="form-control" rows="5" id="comment" name="text"></textarea> 
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
        </div>
    </div>

        
    </div>
</div>
