<div class="bg-content-container col-12" >
    <div class="content-container col-11 mt-5 mb-3">
       
        <div class="card-body row justify-content-center">
            <div class="col-md-10">
                <form action="<?php echo base_url('pembayaran'); ?>" method="post">
                     <div class="row">
                        <div class="col-7">
                            <div class="form-group">
                                <label for="idquot">No Invoice</label>
                                <div class="input-group mb-3">
                                  <input type="text" class="form-control" placeholder="No Invoice">
                                  <button class="btn btn-primary" type="submit">Confirm</button>
                                </div>
                            </div>
                        </div>
                     </div>


                    <span>Detail</span>
                    <div>
                    <div class="justify-content-center">hotel novotel</div>
                            <table id="table" class="table table-bordered table-hover table-striped">
                                <thead class="sticky-top">
                                    <tr>
                                        <th class="col-2 align-middle"> 
                                            No Invoice
                                        </th>
                                        <th class="col-2 align-middle"> 
                                            Tanggal
                                        </th>
                                        <th class="col-2 align-middle"> 
                                            Nominal
                                        </th>
                                        <th class="col-2 align-middle"> 
                                            DP
                                        </th>
                                        <th class="col-2 align-middle"> 
                                            Keterangan
                                        </th>
                                        <th class="col-2 align-middle"> 
                                            Nominal Tagihan
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                <td>221313</td>
                                <td>10 agustus</td>
                                <td>20000</td>
                                <td>10000</td>
                                <td>belum lunas</td>
                                <td>10000</td>
                            </table>

                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tdpembayaran">Terima Pembayaran Dari</label>
                                    <input type="text" class="form-control" id="tdpembayaran" name="tdpembayaran" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="noPembayaran">Nominal Pembayaran</label>
                                    <input type="text" class="form-control" id="noPembayaran" name="noPembayaran" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="mdpembayaran">Metode Pembayaran</label>
                                    <input type="text" class="form-control" id="mdpembayaran" name="mdpembayaran" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tglpembayaran">Tanggal</label>
                                    <input type="text" class="form-control" id="tglpembayaran" name="tglpembayaran" required>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="form-group mb-3 align-items-center">
                        <label for="Nama" class="col-lg-2 col-form-label-lg">Keterangan</label>
                        <div class="col-md-12">
                        <textarea class="form-control" rows="5" id="comment" name="text"></textarea> 
                        </div>
                    </div>

                    <div class="d-flex justify-content-end">
                        <a href="<?php echo site_url('pembayaran'); ?>" class="btn btn-secondary me-2">
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
</div>
