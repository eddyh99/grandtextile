       <div class="container-fluid mt-5">
            <div class="d-flex justify-content-end">
                <a href="<?php echo site_url('bahanbaku/addbahanbaku'); ?>" class="btn btn-primary" style="background-color: #624DE3;">
                    <i class="fas fa-plus"></i>
                    Add Bahan Baku
                </a>
            </div>
       </div>

    <div class="container-fluid">
        <div class="table">
            <table id="bahanbakuTable" class="table table-hover table-striped">
                <thead class="sticky-top">
                    <tr>
                        <th class="col-2 align-middle">
                            Nama Bahan
                        </th>
                        <th class="col-2 align-middle"> 
                            Satuan
                        </th>
                        <th class="col-2 align-middle"> 
                            Harga
                        </th>
                        <th class="col-1 text-center align-middle"> 
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($bahanbaku_data->message as $index => $row): ?>
                        <tr class="mt-1">
                            <td>
                                <?php echo $row->namabahan; ?>
                            </td>
                            <td>
                                <?php echo $row->satuan; ?>
                            </td>
                            <td>
                                <?php echo $row->harga; ?>
                            </td>
                             <td class="text-right">
                            <a href="<?= site_url('bahanbaku/editbahanbaku/' . ($row->id)); ?>" class="btn btn-link p-0">
                                <img src="<?= base_url('assets/img/edit.png'); ?>" alt="edit" class="img-fluid" />
                            </a>
                            <button
                                type="button"
                                class="btn btn-link p-0 delete-bahanbaku-button"
                                data-bs-toggle="modal"
                                data-bs-target="#myModal"
                                data-id="<?= $row->id ?>"
                                data-nama="<?= $row->namabahan?>"
                                data-href="<?= site_url('bahanbaku/deletebahanbaku/') . $row->id ?>"
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
                        <p>Akan Menghapus Bahan Baku</p>
                        <span id="selectednama"></span>
                    </div>

                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                        <a id="deleteButton" href="#" class="btn btn-primary" style="background-color: #624DE3;">Hapus</a>
                    </div>
                </div>
            </div>
          </div>


