<div class="container-fluid mt-5" style:"">
    <div class="d-flex justify-content-end mb-3">
        <a href="<?php echo site_url('kompenjahit/addkompenjahit'); ?>" class="btn btn-primary" style="background-color: #624DE3;">
            <i class="fas fa-plus"></i>
            Add Komisi
        </a>
    </div>
</div>
        <!-- Start Data Table-->
 <div class="container-fluid">
     <table id="kompenjahitTable" class="table table-hover table-striped">
            <thead class="sticky-top">
                <tr>
                    <th class="col-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Jenis kompenjahit</span>
                        </div>
                    </th>
                    <th class="col-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Kategori Barang</span>
                        </div>
                    </th>
                    <th class="col-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Fee</span>
                        </div>
                    </th>
                    <th class="col-1 text-center align-middle">Action</th>
                </tr>
            </thead>

            <tbody style="margin-top: 20px;">
                <?php foreach ($kompenjahit_data->message as $index => $row): ?>
                    <tr class="mt-1">
                        <td>
                            <?php echo $row->jenis; ?>
                        </td>
                        <td>
                            <?php echo $row->id_kategori; ?>
                        </td>
                        <td>
                            <?php echo $row->fee; ?>
                        </td>
                        <td class="text-right">
                            <a href="<?= site_url('kompenjahit/editkompenjahit/' . $row->jenis . '/' . $row->id_kategori); ?>" class="btn btn-link p-0">
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
                  <p>Akan Menghapus kompenjahit</p>
		          <p>Nama</p>
                </div>
                <div class="modal-footer justify-content-center" >
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                  <button type="button " style="background-color: #624DE3;" class="btn btn-primary" data-dismiss="modal">Hapus</button>
                </div>
              </div>
            </div>
          </div>
