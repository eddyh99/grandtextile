
    <div class="container-fluid mt-5">
    
        <div class="d-flex justify-content-end align-items-center">
            <a href="<?php echo site_url('area/addarea'); ?>" class="btn btn-primary" style="background-color: #624DE3;">
                <i class="fas fa-plus"></i>
                Add Area
            </a>
        </div>

            <?php if (!empty($_SESSION["message"])): ?>
                <div class="alert alert-success">
                    <?= $_SESSION["message"]; ?>
                </div>
                <?php unset($_SESSION["message"]); ?>
            <?php endif; ?>

        <br>
        <div class="table-fluid">
        <table id="areaTable" class="table table-hover table-striped">
            <thead class="sticky-top">
                <tr>
                    <th class="col-3">
                    Nama
                    </th>
                    <th class="col-3 align-middle">
                    Client Hotel
                    </th>
                    <th class="col-2 align-middle">
                    Sales
                    </th>
                    <th class="col-1 text-center align-middle">Action</th>
                </tr>
            </thead>  
            <tbody>
                <?php foreach ($area_data->message as $index => $row): ?>
                    <tr class="mt-1">
                       <td>
                        <?php echo $row->area; ?>
                        </td>
                        <td class="align-middle">
                        <div class="d-flex align-items-center">
                                <img src="<?= base_url('assets/img/hotel.png') ?>" class="img-fluid me-2" />
                                <?php echo $row->hotel; ?>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="d-flex align-items-center">
                                <img src="<?= base_url('assets/img/saleso.png') ?>" class="img-fluid me-2" />
                                <?php echo $row->sales; ?>
                            </div>
                        </td>
                        <td class="text-right">
                            <a href="<?= site_url('area/editarea/' . ($row->id)); ?>" class="btn btn-link p-0">
                                <img src="<?= base_url('assets/img/edit.png'); ?>" alt="edit" class="img-fluid" />
                            </a>
                            <button
                                type="button"
                                class="btn btn-link p-0 delete-area-button"
                                data-bs-toggle="modal"
                                data-bs-target="#myModal"
                                data-area="<?= $row->area ?>"
                                data-id="<?= $row->id?>"
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
                        <p>Akan Menghapus Area</p>
                        <span id="selectedarea"></span>
                    </div>

                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                        <a id="deleteButton" href="<?= site_url('area/deletearea/') . $row->id ?>" class="btn btn-primary" style="background-color: #624DE3;">Hapus</a>
                    </div>
                </div>
            </div>
          </div>