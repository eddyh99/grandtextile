    <div class="container-fluid mt-5" style:"">
        <div class="d-flex justify-content-end mb-3">
            <a href="<?php echo site_url('delivery/adddelivery'); ?>" class="btn btn-primary" style="background-color: #624DE3;">
                <i class="fas fa-plus"></i>
                Add delivery
            </a>
        </div>
    </div>
                <?php if (!empty($_SESSION["message"])): ?>
                    <div class="alert alert-success">
                        <?= $_SESSION["message"]; ?>
                    </div>
                    <?php unset($_SESSION["message"]); ?>
                <?php endif; ?>

            <!-- Start Data Table-->
     <div class="container-fluid">
     <table id="deliveryTable" class="display table-striped" style="width:100%">
        <thead>
            <tr>
                <th class="col-1"></th>
                <th class="col-2">No Invoice</th>
                <th class="col-2">No DO</th>
                <th class="col-2">Tanggal</th>
                <th class="col-2">Penanggung Jawab</th>
                <th class="col-2">Pengirim</th>
                <th class="col-1">Action</th>
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
                            <p>Akan Menghapus delivery</p>
                            No Invoice: <span id="selectednama"></span>
                        </div>

                        <div class="modal-footer justify-content-center">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                            <a id="deleteButton" href="" class="btn btn-primary" style="background-color: #624DE3;">Hapus</a>
                        </div>
                    </div>
                </div>
              </div>

