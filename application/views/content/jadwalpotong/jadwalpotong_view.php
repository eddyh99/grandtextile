<div class="container-fluid mt-5" style:"">
    <div class="d-flex justify-content-end mb-3">
        <a href="<?php echo site_url('jadwalpotong/addjadwalpotong'); ?>" class="btn btn-primary" style="background-color: #624DE3;">
            <i class="fas fa-plus"></i>
            Add jadwal potong
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
     <table id="jadwalpotongTable" class="table table-hover table-striped">
            <thead class="sticky-top">
                <tr>
                    <th class="col-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>No WO</span>
                        </div>
                    </th>
                    <th class="col-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Tanggal</span>
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
                </tr>
            </tbody>

            <tbody style="margin-top: 20px;">
                <?php foreach ($jadwalpotong_data as $index => $row): ?>
                    <tr class="mt-1">
                        <td><?php echo $row['NoWo']; ?></td>
                        <td><?php echo $row['tgl']; ?></td>
                      
                        <td class="text-right">
                            <a href="<?= site_url('jadwalpotong/editjadwalpotong/'); ?>" class="btn btn-link p-0">
                                <img src="<?= base_url('assets/img/edit.png'); ?>" alt="edit" class="img-fluid" />
                            </a>
                            <button
                                type="button"
                                class="btn btn-link p-0 delete-jadwalpotong-button"
                                data-bs-toggle="modal"
                                data-bs-target="#myModal"
                                data-tgl="<?= $row['tgl'] ?>"
                                data-nama="<?= $row['NoWo']?>"
                                data-href="<?= site_url('jadwalpotong/deletejadwalpotong/') . $row['NoWo'] ?>"
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
                        <p>Akan Menghapus jadwalpotong</p>
                        <span id="selectednama"></span>
                    </div>

                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                        <a id="deleteButton" href="#" class="btn btn-primary" style="background-color: #624DE3;">Hapus</a>
                    </div>
                </div>
            </div>
          </div>

