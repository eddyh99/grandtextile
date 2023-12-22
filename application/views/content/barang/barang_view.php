
        <div class="container-fluid mt-5 " >
            <div class="d-flex justify-content-end mb-3">
                <a href="<?php echo site_url('barang/addbarang'); ?>" class="btn btn-primary" style="background-color: #624DE3;">
                    <i class="fas fa-plus"></i>
                    Add Barang
                </a>
            </div>
        </div>       
       <?php if (!empty($_SESSION["message"])): ?>
                <div class="alert alert-success">
                    <?= $_SESSION["message"]; ?>
                </div>
                <?php unset($_SESSION["message"]); ?>
            <?php endif; ?>
<div class="container-fluid">
    <div class="table">
        <table id="barangTable"class="table table-hover table-striped">
            <thead class="sticky-top">
                <tr>
                    <th class="col-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Kategori</span>
                        </div>
                    </th>
                    <th class="col-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Nama Barang</span>
                        </div>
                    </th>
                    <th class="col-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Design</span>
                        </div>
                    </th>
                    <th class="col-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Quality</span>
                        </div>
                    </th>
                    <th class="col-1">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Color</span>
                        </div>
                    </th>
                    <th class="col-1 text-center align-middle">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($barang_data->message as $index => $row): ?>
                    <tr class="mt-1">
                        <td>
                            <a class="btn btn-link" data-bs-toggle="collapse" href="#collapse-<?php echo $index; ?>" role="button" aria-expanded="false" aria-controls="collapse-<?php echo $index; ?>">
                                <i class="fas fa-chevron-down"></i>
                            </a>
                            <?php echo $row->kategori_id; ?>
                            <div class="collapse" id="collapse-<?php echo $index; ?>">
                                <table class="table table-bordered">
                                <tr>
                                    <th>GSM</th>
                                    <td class="col-1">
                                        <?php echo $row->gsm; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>GR/pcs</th>
                                    <td class="col-11">
                                        <?php echo $row->gr; ?>
                                    </td>
                                </tr>
                                <tr>
                                   <th>Ukuran</th>
                                    <td class="col-4">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-text">P</i></span>
                                            </div>
                                            <input type="text" class="form-control" value="<?php echo $row->pjg; ?>" readonly>
                                            <span class="input-group-text"><i class="fas fa-text">L</i></span>
                                            <input type="text" class="form-control" value="<?php echo $row->lbr; ?>" readonly>
                                            <span class="input-group-text"><i class="fas fa-text">T</i></span>
                                            <input type="text" class="form-control" value="<?php echo $row->tgi; ?>" readonly>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Cons</th>
                                    <td class="col-1">
                                        <?php echo $row->minorder; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Cons dll</th>
                                    <td class="col-1">
                                        <?php echo $row->minorder; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Add on</th>
                                    <td class="col-1">
                                        <?php echo $row->addon; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Keterangan</th>
                                    <td class="col-1">
                                        <?php echo $row->keterangan; ?>
                                    </td>
                                </tr>
                            </table>
                            </div>
                        </td>
                        <td>
                            <?php echo $row->namabarang; ?>
                        </td>
                        <td>
                            <?php echo $row->design; ?>
                        </td>
                        <td>
                            <?php echo $row->quality; ?>
                        </td>
                        <td>
                            <?php echo $row->color; ?>
                        </td>
                        <td class="text-right">
                            <a href="<?= site_url('barang/editbarang/' . ($row->id)); ?>" class="btn btn-link p-0">
                                <img src="<?= base_url('assets/img/edit.png'); ?>" alt="edit" class="img-fluid" />
                            </a>
                            <button
                                type="button"
                                class="btn btn-link p-0 delete-barang-button"
                                data-bs-toggle="modal"
                                data-bs-target="#myModal"
                                data-barang="<?= $row->namabarang ?>"
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
                <p>Akan Menghapus Barang</p>
                <span id="selectedbarang"></span>
            </div>

            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                <a id="deleteButton" href="<?= site_url('barang/deletebarang/') . $row->id ?>" class="btn btn-primary" style="background-color: #624DE3;">Hapus</a>
            </div>
        </div>
    </div>
</div>