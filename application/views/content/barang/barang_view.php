
        <div class="container-fluid mt-5 " >
            <div class="d-flex justify-content-end mb-3">
                <a href="<?php echo site_url('barang/addbarang'); ?>" class="btn btn-primary" style="background-color: #624DE3;">
                    <i class="fas fa-plus"></i>
                    Add Barang
                </a>
            </div>
        </div>       
       
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
            <!-- Dummby Body-->
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
                <?php foreach ($barang_data as $index => $row): ?>
                    <tr class="mt-1">
                        <td>
                            <a class="btn btn-link" data-toggle="collapse" data-target="#details-<?php echo $index; ?>" aria-expanded="false" aria-controls="details-<?php echo $index; ?>">
                                <i class="fas fa-chevron-down"></i>
                            </a>
                            <?php echo $row['kategori']; ?>
                        </td>
                        <td>
                            <?php echo $row['namabarang']; ?>
                        </td>
                        <td>
                            <?php echo $row['design']; ?>
                        </td>
                        <td>
                            <?php echo $row['quality']; ?>
                        </td>
                        <td>
                            <?php echo $row['color']; ?>
                        </td>
                        <td class="text-right">
                            <a href="<?= site_url('barang/editbarang'); ?>" class="btn btn-link p-0">
                                <img src="<?= base_url('assets/img/edit.png'); ?>" alt="edit" class="img-fluid" />
                            </a>
                            <button type="button" class="btn btn-link p-0" data-toggle="modal" data-target="#myModal">
                                <img src="<?= base_url('assets/img/trash.png') ?>" alt="Delete" class="img-fluid" />
                            </button>
                        </td>

                    </tr>
                    <tr id="details-<?php echo $index; ?>" class="collapse">
                        <td colspan="6">
                            <table class="table table-bordered">
                                <tr>
                                    <th>GSM</th>
                                    <td class="col-1">
                                        <?php echo $row['GSM']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>GR/pcs</th>
                                    <td class="col-11">
                                        <?php echo $row['pcs']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Ukuran</th>
                                    <td class="col-1">
                                        <?php echo $row['ukuran']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Cons</th>
                                    <td class="col-1">
                                        <?php echo $row['cons']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Cons dll</th>
                                    <td class="col-1">
                                        <?php echo $row['consdll']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Add on</th>
                                    <td class="col-1">
                                        <?php echo $row['addOn']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Keterangan</th>
                                    <td class="col-1">
                                        <?php echo $row['keterangan']; ?>
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

    <!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
        <!-- Modal content-->
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Hapus</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body text-center">
            <p>Akan Menghapus Barang</p>
		    <p>Nama</p>
        </div>
        <div class="modal-footer justify-content-center" >
            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
            <button type="button " style="background-color: #624DE3;" class="btn btn-primary" data-dismiss="modal">Hapus</button>
        </div>
        </div>
    </div>
</div>