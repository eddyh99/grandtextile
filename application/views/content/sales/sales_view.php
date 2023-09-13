    <!--start button-->
        <div class="container mt-5">
            <div class="d-flex justify-content-end mb-3">
                <a href="<?php echo site_url('sales/addsales'); ?>" class="btn btn-primary" style="background-color: #624DE3;">
                    <i class="fas fa-plus"></i>
                    Add Sales
                </a>
            </div>
        </div>   
    <!-- End Button-->
            <?php if (!empty($_SESSION["message"])): ?>
                <div class="alert alert-success">
                    <?= $_SESSION["message"]; ?>
                </div>
                <?php unset($_SESSION["message"]); ?>
            <?php endif; ?>
    <!-- Start Datatable-->
    <div class="container-fluid">
        <div class="table">
            <table id="salesTable" class="table table-hover table-striped">
                <thead class="sticky-top">
                    <tr>
                        <th class="col-3">
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
                                <span>Area</span>
                            </div>
                        </th>
                        <th class="col-2">
                            <div class="d-flex justify-content-between align-items-center">
                                <span>Komisi</span>
                            </div>
                        </th>
                        <th class="col-1 text-center align-middle">Action</th>
                    </tr>
                </thead>
                    <!-- Dummy Body-->
                    <tbody style="border: none;background-color : white;">
                        <tr>
                            <td class="h-5"></td>
                            <td class="h-5"></td>
                            <td class="h-5"></td>
                            <td class="h-5"></td>
                            <td class="h-5"></td>
                            <td class="h-5"></td>
                        </tr>
                    </tbody>
                    <tbody>
                        <?php foreach ($sales_data->message as $index => $row): ?>

                        <tr class="mt-1">

                            <td>
                            <a class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#details-<?php echo $index; ?>" aria-expanded="false" aria-controls="details-<?php echo $index; ?>">
                                <i class="fas fa-chevron-down"></i>
                            </a>
                            <?php echo $row->nama; ?></td>

                            <td><?php echo $row->kota; ?></td>

                            <td> <?php echo $row->telp; ?> </td>

                            <td> <?php echo $row->area; ?></td>

                            <td> <?php echo $row->komisi; ?></td>

                            <td class="text-right">
                                <a href="<?= site_url('sales/editsales/' . ($row->id)); ?>" class="btn btn-link p-0">
                                    <img src="<?= base_url('assets/img/edit.png'); ?>" alt="edit" class="img-fluid" />
                                </a>
                               <button
                                type="button"
                                class="btn btn-link p-0 delete-sales-button"
                                data-bs-toggle="modal"
                                data-bs-target="#myModal"
                                data-nama="<?= $row->nama ?>"
                                data-id="<?= $row->id?>"
                                data-href="<?= site_url('sales/deletesales/') . $row->id ?>"
                            >
                                <img src="<?= base_url('assets/img/trash.png') ?>" alt="Delete" class="img-fluid" />
                            </button>
                            </td>

                        </tr>

                        <tr id="details-<?php echo $index; ?>" class="collapse">
                            <td colspan="6">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Alamat</th>
                                        <td class="col-1">
                                            <?php echo $row->alamat; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Lahir</th>
                                        <td class="col-11">
                                            <?php echo date('d-m-Y', strtotime($row->tgllahir));?>
                                        </td>

                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <?php endforeach; ?>
                    </tbody>
            </table>
        </div>
    </div>
    <!-- End Datatable-->
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
                        <p>Akan Menghapus Sales</p>
                        <span id="selectedsales"></span>
                    </div>

                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                        <a id="deleteButton" href="#" class="btn btn-primary" style="background-color: #624DE3;">Hapus</a>
                    </div>
                </div>
            </div>
          </div>
