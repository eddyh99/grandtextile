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
     <table id="progressTable" class="display table-striped" style="width:100%">
        <thead>
            <tr>
                <th class="col-2">No Pesanan</th>
                <th class="col-2">Tanggal</th>
                <th class="col-2">Nominal</th>
                <th class="col-2">Keterangan</th>
                <th class="col-2">Progress</th>
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
                        <p>Akan Menghapus pesanan</p>
                        <span id="selectednama"></span>
                    </div>

                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                        <a id="deleteButton" href="#" class="btn btn-primary" style="background-color: #624DE3;">Hapus</a>
                    </div>
                </div>
            </div>
          </div>

