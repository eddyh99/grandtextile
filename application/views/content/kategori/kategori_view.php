       <div class="container-fluid mt-5">
            <div class="d-flex justify-content-end">
                <a href="<?php echo site_url('kategori/addkategori'); ?>" class="btn btn-primary" style="background-color: #624DE3;">
                    <i class="fas fa-plus"></i>
                    Add Kategori
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
            <table id="kategoriTable" class="table table-hover table-striped">
                <thead class="sticky-top">
                    <tr>
                        <th class="col-4 text-center align-middle">
                            <div class="d-flex justify-content-between align-items-center">
                                <span>Kategori</span>
                            </div>
                        </th>
                        <th class="col-7 align-middle"> 
                            Barang
                        </th>
                        <th class="col-1 text-center align-middle"> 
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($kategori_data->message as $index => $row): ?>
                        <tr class="mt-1">
                            <td>
                                <?php echo $row->namakategori; ?>
                            </td>
                            <td>
                                <?php echo $row->barang; ?>
                            </td>
                            <td class="text-right">
                            <a href="<?= site_url('kategori/editkategori/' . ($row->id)); ?>" class="btn btn-link p-0">
                                    <img src="<?= base_url('assets/img/edit.png'); ?>" alt="edit" class="img-fluid" />
                                </a>
                                <button
                                type="button"
                                class="btn btn-link p-0 delete-kategori-button"
                                data-bs-toggle="modal"
                                data-bs-target="#myModal"
                                data-namakategori="<?= $row->namakategori ?>"
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
                        <p>Akan Menghapus Kategori</p>
                        <span id="selectedkategori"></span>
                    </div>

                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                        <a id="deleteButton" href="<?= site_url('kategori/deletekategori/') . $row->id ?>" class="btn btn-primary" style="background-color: #624DE3;">Hapus</a>
                    </div>
                </div>
            </div>
          </div>
