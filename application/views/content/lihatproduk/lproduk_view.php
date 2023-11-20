<div class="container-fluid mt-5" style:"">
</div>
            <?php if (!empty($_SESSION["message"])): ?>
                <div class="alert alert-success">
                    <?= $_SESSION["message"]; ?>
                </div>
                <?php unset($_SESSION["message"]); ?>
            <?php endif; ?>

        <!-- Start Data Table-->
 <div class="container-fluid">
     <table id="produkTable" class="display table-hover table-striped">
            <thead class="sticky-top">
                <tr>
                    <th class="col-1">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Kategory</span>
                        </div>
                    </th>
                    <th class="col-1">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Nama Barang</span>
                        </div>
                    </th>
                    <th class="col-1">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Design</span>
                        </div>
                    </th>
                    <th class="col-1">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Quality</span>
                        </div>
                    </th>
                    <th class="col-1">Color</th>
                    <th class="col-1"></th>
                </tr>
            </thead>
    </table>
</div>
             <!-- Modal -->
         <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Hapus</h4>
                        <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body text-center">
                        <p>Akan Menghapus produk</p>
                        <span id="selectednama"></span>
                    </div>

                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                        <a id="deleteButton" href="#" class="btn btn-primary" style="background-color: #624DE3;">Hapus</a>
                    </div>
                </div>
            </div>
          </div>

