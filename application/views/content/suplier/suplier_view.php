<div class="container-fluid mt-5" style:"">
    <div class="d-flex justify-content-end mb-3">
        <a href="<?php echo site_url('suplier/addsuplier'); ?>" class="btn btn-primary" style="background-color: #624DE3;">
            <i class="fas fa-plus"></i>
            Add suplier
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
     <table id="suplierTable" class="table table-hover table-striped">
            <thead class="sticky-top">
                <tr>
                    <th class="col-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Nama</span>
                        </div>
                    </th>
                    <th class="col-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Kota</span>
                        </div>
                    </th>
                    <th class="col-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Telp/WA</span>
                        </div>
                    </th>
                    <th class="col-2 text-center align-middle">Action</th>
                </tr>
            </thead>
            <!-- Dummy Body-->
            <tbody >
                <tr>
                  <td class="h-5"></td>
                  <td class="h-5"></td>
                  <td class="h-5"></td>
                  <td class="h-5"></td>
                </tr>
            </tbody>

            <tbody style="margin-top: 20px;">
                <?php foreach ($suplier_data as $index => $row): ?>
                    <tr class="mt-1">
                        <td>
                            <?php echo $row['namasup']; ?>
                        </td>
                        <td><?php echo $row['alamat']; ?></td>
                        <td><?php echo $row['telp']; ?></td>
                      
                        <td class="text-right">
                            <a href="<?= site_url('suplier/editsuplier/'); ?>" class="btn btn-link p-0">
                                <img src="<?= base_url('assets/img/edit.png'); ?>" alt="edit" class="img-fluid" />
                            </a>
                            <button
                                type="button"
                                class="btn btn-link p-0 delete-suplier-button"
                                data-bs-toggle="modal"
                                data-bs-target="#myModal"
                                data-alamat="<?= $row['alamat'] ?>"
                                data-nama="<?= $row['namasup']?>"
                                data-href="<?= site_url('suplier/deletesuplier/') . $row['alamat'] ?>"
                            >
                                <img src="<?= base_url('assets/img/trash.png') ?>" alt="Delete" class="img-fluid" />
                            </button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
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
                        <p>Akan Menghapus suplier</p>
                        <span id="selectednama"></span>
                    </div>

                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                        <a id="deleteButton" href="#" class="btn btn-primary" style="background-color: #624DE3;">Hapus</a>
                    </div>
                </div>
            </div>
          </div>
