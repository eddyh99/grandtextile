<div class="container-fluid mt-5">
    <div class="d-flex justify-content-end mb-3">
        <a href="<?php echo site_url('pengguna/addpengguna'); ?>" class="btn btn-primary" style="background-color: #624DE3;">
            <i class="fas fa-plus"></i>
            Add Pengguna
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
        <table id="penggunaTable"class="table table-hover table-striped">
            <thead class="sticky-top">
                <tr>
                    <th class="col-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Nama</span>
                        </div>
                    </th>
                    <th class="col-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Username</span>
                    </th>
                    <th class="col-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Role</span>
                    </th>
                    <th class="col-1 text-center align-middle">Action</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($pengguna_data->message as $index => $row): ?>
                    <tr class="mt-1">
                        <td>
                            <?php echo $row->nama; ?>
                        </td>
                        <td>
                            <?php echo $row->uname; ?>
                        </td>
                        <td>
                            <?php echo $row->role; ?>
                        </td>
                        <td class="text-right">
                            <a href="<?= site_url('pengguna/editpengguna/' . ($row->uname)); ?>" class="btn btn-link p-0">
                                <img src="<?= base_url('assets/img/edit.png'); ?>" alt="edit" class="img-fluid" />
                            </a>
                            <button
                                type="button"
                                class="btn btn-link p-0 delete-pengguna-button"
                                data-bs-toggle="modal"
                                data-bs-target="#myModal"
                                data-nama="<?= $row->nama ?>"
                                data-uname="<?= $row->uname?>"
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
                        <p>Akan Menghapus Pengguna</p>
                        <span id="selectednama"></span>
                    </div>

                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                        <a id="deleteButton" href="<?= site_url('pengguna/deletepengguna/') . $row->uname ?>" class="btn btn-primary" style="background-color: #624DE3;">Hapus</a>
                    </div>
                </div>
            </div>
          </div>