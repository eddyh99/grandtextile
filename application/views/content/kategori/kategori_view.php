       <div class="container-fluid mt-5">
            <div class="d-flex justify-content-end">
                <a href="<?php echo site_url('kategori/addkategori'); ?>" class="btn btn-primary" style="background-color: #624DE3;">
                    <i class="fas fa-plus"></i>
                    Add Kategori
                </a>
            </div>
       </div>

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
                <!-- Dummby Body-->
                <tbody style="border: none;background-color : white;">
                    <tr>
                      <td class="h-5"></td>
                      <td class="h-5"></td>
                      <td class="h-5"></td>
                    </tr>
                </tbody>
                <tbody>
                    <?php foreach ($kategori_data as $index => $row): ?>
                        <tr class="mt-1">
                            <td>
                                <?php echo $row['kategori']; ?>
                            </td>
                            <td>
                                <?php echo $row['barang']; ?>
                            </td>
                            <td class="text-right">
                                <a href="<?= site_url('kategori/editkategori'); ?>" class="btn btn-link p-0">
                                    <img src="<?= base_url('assets/img/edit.png'); ?>" alt="edit" class="img-fluid" />
                                </a>

                                <button type="button" class="btn btn-link p-0" data-toggle="modal" data-target="#myModal">
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
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body text-center">
            <p>Akan Menghapus Kategori</p>
		    <p>Nama</p>
        </div>
        <div class="modal-footer justify-content-center" >
            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
            <button type="button " style="background-color: #624DE3;" class="btn btn-primary" data-dismiss="modal">Hapus</button>
        </div>
        </div>
    </div>
</div>
