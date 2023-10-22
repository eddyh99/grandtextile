<div class="container-fluid mt-5" style:"">
    <div class="d-flex justify-content-end mb-3">
        <a href="<?php echo site_url('retailer/addretailer'); ?>" class="btn btn-primary" style="background-color: #624DE3;">
            <i class="fas fa-plus"></i>
            Add retailer
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
     <table id="retailerTable" class="table table-hover table-striped">
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
                            <span>Telp</span>
                        </div>
                    </th>
                    <th class="col-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Email</span>
                        </div>
                    </th>
                    <th class="col-1 text-center align-middle">Action</th>
                </tr>
            </thead>

            <tbody style="margin-top: 20px;">
                <?php foreach ($retailer_data->message as $index => $row): ?>
                    <tr class="mt-1">
                         <td>
                            <a class="btn btn-link" data-bs-toggle="collapse" href="#collapse-<?php echo $index; ?>" role="button" aria-expanded="false" aria-controls="collapse-<?php echo $index; ?>">
                                <i class="fas fa-chevron-down"></i>
                            </a>
                            <?php echo $row->nama; ?>
                            <div class="collapse" id="collapse-<?php echo $index; ?>">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Alamat</th>
                                        <td>
                                            <?php echo $row->alamat; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Lahir</th>
                                        <td>
                                            <?php echo date('d-m-Y', strtotime($row->tgllahir));?>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </td>
                        <td><?php echo $row->kota; ?></td>
                        <td><?php echo $row->telp; ?></td>
                        <td><?php echo $row->email; ?></td>
                       
                        <td class="text-right">
                            <a href="<?= site_url('retailer/editretailer/' . ($row->email)); ?>" class="btn btn-link p-0">
                                <img src="<?= base_url('assets/img/edit.png'); ?>" alt="edit" class="img-fluid" />
                            </a>
                            <button
                                type="button"
                                class="btn btn-link p-0 delete-retailer-button"
                                data-bs-toggle="modal"
                                data-bs-target="#myModal"
                                data-email="<?= $row->email ?>"
                                data-nama="<?= $row->nama?>"
                                data-href="<?= site_url('retailer/deleteretailer/') . $row->email  ?>"
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
                        <p>Akan Menghapus retailer</p>
                        <span id="selectednama"></span>
                    </div>

                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                        <a id="deleteButton" href="#" class="btn btn-primary" style="background-color: #624DE3;">Hapus</a>
                    </div>
                </div>
            </div>
          </div>

