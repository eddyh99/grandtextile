        <div class="container-fluid mt-5">
            <div class="d-flex justify-content-end mb-3">
                <a href="<?php echo site_url('cphotel/addcphotel'); ?>" class="btn btn-primary" style="background-color: #624DE3;">
                    <i class="fas fa-plus"></i>
                    Add CP Hotel
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
        <table id="cphotelTable"class="table table-hover table-striped">
            <thead class="sticky-top">
                <tr>
                    <th class="col-3">
                        <div class="d-flex justify-content-between align-items-center">
                        <span>Nama</span>
                        </div>
                    </th>
                    <th class="col-3">
                        <div class="d-flex justify-content-between align-items-center">
                        <span>   Tanggal Lahir </span>
                        </div>
                    </th>
                    <th class="col-3">
                        <div class="d-flex justify-content-between align-items-center">
                        <span>Telp</span>
                        </div>
                    </th>
                    <th class="col-2">
                        <div class="d-flex justify-content-between align-items-center">
                        <span>   Komisi </span>
                        </div>
                    </th>
                    <th class="col-1 text-center">Action</th>
                </tr>
            </thead> 
            <tbody>
                <?php foreach ($cphotel_data->message as $index => $row): ?>
                    <tr class="mt-1">
                        <td>
                            <?php echo $row->nama; ?>
                        </td>
                        <td>
                            <?php echo date('d-m-Y', strtotime($row->tgllahir));?>
                        </td>
                        <td>
                            <?php echo $row->telp; ?>
                        </td>
                        <td>
                            <?php echo $row->komisi; ?>
                        </td>
                        <td class="text-right">
                                <a href="<?= site_url('cphotel/editcphotel/' . ($row->id)); ?>" class="btn btn-link p-0">
                                <img src="<?= base_url('assets/img/edit.png'); ?>" alt="edit" class="img-fluid" />
                            </a>
                            <button
                                type="button"
                                class="btn btn-link p-0 delete-cp-button"
                                data-bs-toggle="modal"
                                data-bs-target="#myModal"
                                data-nama="<?= $row->nama ?>"
                                data-id="<?= $row->id?>"
                                data-href="<?= site_url('cphotel/deletecphotel/') . $row->id ?>"
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
                        <p>Akan Menghapus CP Hotel</p>
                        <span id="selectednama"></span>
                    </div>

                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                        <a id="deleteButton" href="#" class="btn btn-primary" style="background-color: #624DE3;">Hapus</a>
                    </div>
                </div>
            </div>
          </div>