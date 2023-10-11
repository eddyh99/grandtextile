<div class="container-fluid mt-5" style:"">
    <div class="d-flex justify-content-end mb-3">
        <a href="<?php echo site_url('workorder/addworkorder'); ?>" class="btn btn-primary" style="background-color: #624DE3;">
            <i class="fas fa-plus"></i>
            Add workorder
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
     <table id="workorderTable" class="table table-hover table-striped">
            <thead class="sticky-top">
                <tr>
                    <th class="col-1">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Invoice</span>
                        </div>
                    </th>
                    <th class="col-1">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Penjahit</span>
                        </div>
                    </th>
                    <th class="col-1">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>No WO</span>
                        </div>
                    </th>
                    <th class="col-1">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Jenis</span>
                        </div>
                    </th>
                    <th class="col-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Add Cost</span>
                        </div>
                    </th>
                    <th class="col-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Tanggal</span>
                        </div>
                    </th>
                    <th class="col-1">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Bahan</span>
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
                  <td class="h-5"></td>
                  <td class="h-5"></td>
                  <td class="h-5"></td>
                  <td class="h-5"></td>
                </tr>
            </tbody>

            <tbody style="margin-top: 20px;">
                <?php foreach ($workorder_data as $index => $row): ?>
                    <tr>
                        <td>
                            <a class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#details-<?php echo $index; ?>" aria-expanded="false" aria-controls="details-<?php echo $index; ?>">
                                <i class="fas fa-chevron-down"></i>
                            </a>
                            <?php echo $row['invoice']; ?>
                        </td>
                        <td><?php echo $row['penjahit']; ?></td>
                        <td><?php echo $row['NoWo']; ?></td>
                        <td><?php echo $row['jenis']; ?></td>
                        <td><?php echo $row['addcost']; ?></td>
                        <td><?php echo $row['tgl']; ?></td>
                        <td><?php echo $row['bahan']; ?></td>
                      
                        <td class="text-right">
                            <a href="<?= site_url('workorder/editworkorder/'); ?>" class="btn btn-link p-0">
                                <img src="<?= base_url('assets/img/edit.png'); ?>" alt="edit" class="img-fluid" />
                            </a>
                            <button
                                type="button"
                                class="btn btn-link p-0 delete-workorder-button"
                                data-bs-toggle="modal"
                                data-bs-target="#myModal"
                                data-tgl="<?= $row['tgl'] ?>"
                                data-nama="<?= $row['invoice']?>"
                                data-href="<?= site_url('workorder/deleteworkorder/') . $row['tgl'] ?>"
                            >
                                <img src="<?= base_url('assets/img/trash.png') ?>" alt="Delete" class="img-fluid" />
                            </button>
                        </td>
                    </tr>
                    <tr id="details-<?php echo $index; ?>" class="collapse">
                        <td colspan="8">
                            <strong>Keterangan: </strong>
                            <?php echo $row['keterangan']; ?>
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
                        <p>Akan Menghapus workorder</p>
                        <span id="selectednama"></span>
                    </div>

                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                        <a id="deleteButton" href="#" class="btn btn-primary" style="background-color: #624DE3;">Hapus</a>
                    </div>
                </div>
            </div>
          </div>

