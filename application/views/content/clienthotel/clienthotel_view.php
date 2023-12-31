<div class="container-fluid mt-5">
    <div class="d-flex justify-content-end mb-3">
        <a href="<?php echo site_url('clienthotel/addclienthotel'); ?>" class="btn btn-primary" style="background-color: #624DE3;">
            <i class="fas fa-plus"></i>
            Add Client Hotel
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
        <div class="table-fluid">
        <table id="clientTable" class="table table-hover table-striped">
            <thead class="sticky-top">
                <tr>
                    <th class="col-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Nama</span>
                        </div>
                    </th>
                    <th class="col-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Kota</span>
                    </th>
                    <th class="col-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Area</span>
                    </th>
                    <th class="col-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Alamat</span>
                    </th>
                    <th class="col-1 text-center align-middle">Action</th>
                </tr>
            </thead>  
            <tbody>
                <?php foreach ($clienthotel_data->message as $index => $row): ?>
                    <tr class="mt-1">
                        <td>
                            <a class="btn btn-link" data-bs-toggle="collapse" href="#collapse-<?php echo $index; ?>" role="button" aria-expanded="false" aria-controls="collapse-<?php echo $index; ?>">
                                <i class="fas fa-chevron-down"></i>
                            </a>
                            <?php echo $row->nama; ?>
                            <div class="collapse" id="collapse-<?php echo $index; ?>">
                               <table class="table table-bordered">
                                <tr>
                                    <th>CP</th>
                                    <td class="col-1">
                                        <?php echo $row->cphotel[0]->nama; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Telp</th>
                                    <td class="col-11">
                                        <?php echo $row->cphotel[0]->telp; ?>
                                    </td>
                                </tr>
                            </table>
                            </div>
                        </td>
                        <td>
                            <?php echo $row->kota; ?>
                        </td>
                        <td>
                            <?php echo $row->area; ?>
                        </td>
                        <td>
                            <?php echo $row->alamat; ?>
                        </td>
                        <td class="text-right">
                            <a href="<?= site_url('clienthotel/editclienthotel/' . ($row->id)); ?>" class="btn btn-link p-0">
                                <img src="<?= base_url('assets/img/edit.png'); ?>" alt="edit" class="img-fluid" />
                            </a>
                            <button
                                type="button"
                                class="btn btn-link p-0 delete-clienthotel-button"
                                data-bs-toggle="modal"
                                data-bs-target="#myModal"
                                data-id="<?= $row->id ?>"
                                data-nama="<?= $row->nama?>"
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
                        <p>Akan Menghapus Client Hotel</p>
                        <span id="selectednama"></span>
                    </div>

                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                        <a id="deleteButton" href="<?= site_url('clienthotel/deleteclienthotel/') . $row->id ?>" class="btn btn-primary" style="background-color: #624DE3;">Hapus</a>
                    </div>
                </div>
            </div>
          </div>

