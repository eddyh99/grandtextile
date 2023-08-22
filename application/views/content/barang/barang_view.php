<body>

    <style>
 
    /* tombol kaca pembesar di search bar*/
    .search-icon-input {
        position: relative;
    }
    
    .search-icon-input input[type="text"] {
        padding-left: 25px;
    }

    .search-icon-input .search-icon {
        position: absolute;
        left: 5px;
        top: 50%;
        transform: translateY(-50%);
    }
    </style>
        <div class="container-fluid mt-5 " >
            <div class="d-flex justify-content-end mb-3">
                <a href="<?php echo site_url('barang/addbarang'); ?>" class="btn btn-primary" style="background-color: #624DE3;">
                    <i class="fas fa-plus"></i>
                    Add Barang
                </a>
            </div>
        </div>       
       
    <div class="container-fluid mt-5">
         <div class="me-2" style="display: flex; align-items: center;">
            <a style="margin-right: 10px;">Show<a/>
            <select style="margin-right: 10px;" class="form-select-sm" id="entriesPerPage">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="50">50</option>
            </select>
            <a style="margin-right: 10px;">Entries<a/>
            <div class="search-icon-input">
                <input type="text" id="searchInput" class="form-control-sm rounded" placeholder="Search" />
                <span class="search-icon">
                    <i class="fas fa-search"></i>
                </span>
            </div>
        </div>
        <br>
            <div class="table-fluid">
        <table class="table table-hover" style="background-color:#F7F6FE">
            <thead class="sticky-top">
                <tr>
                    <th class="col-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Kategori</span>
                            <button class="btn btn-link sort-btn-sml" data-sort="kat">
                                <i class="fas fa-sort"></i>
                            </button>
                        </div>
                    </th>
                    <th class="col-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Nama Barang</span>
                            <button class="btn btn-link sort-btn-sml" data-sort="nambarang">
                                <i class="fas fa-sort"></i>
                            </button>
                        </div>
                    </th>
                    <th class="col-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Design</span>
                            <button class="btn btn-link sort-btn-sml" data-sort="design">
                                <i class="fas fa-sort"></i>
                            </button>
                        </div>
                    </th>
                    <th class="col-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Quality</span>
                            <button class="btn btn-link sort-btn-sml" data-sort="quality">
                                <i class="fas fa-sort"></i>
                            </button>
                        </div>
                    </th>
                    <th class="col-1">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Color</span>
                            <button class="btn btn-link sort-btn-sml" data-sort="color">
                                <i class="fas fa-sort"></i>
                            </button>
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

                <!-- pagination-->
                <div class="d-flex justify-content-center mt-3">
                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            <?php
                        // Define a dummy total pages value
                        $total_pages = 10;
                        $current_page= 3;
                        ?>
                        <li class="page-item <?php echo ($current_page <= 1) ? 'disabled' : ''; ?>">
                            <a class="page-link" href="?page=<?php echo ($current_page - 1); ?>" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            previous
                            </a>
                        </li>
                        <?php
                        for ($i = 1; $i <= $total_pages; $i++): ?>
                            <li class="page-item <?php echo ($i == $current_page) ? 'active' : ''; ?>">
                                <a class="page-link <?php echo ($i == $current_page) ? 'bg-624DE3 text-white' : ''; ?>" href="?page=<?php echo $i; ?>">
                                    <?php echo $i; ?>
                                </a>
                            </li>
                        <?php endfor;?>
                        <li class="page-item <?php echo ($current_page >= $total_pages) ? 'disabled' : ''; ?>">
                            <a class="page-link" href="?page=<?php echo ($current_page + 1); ?>" aria-label="Next">
                                next
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                        </ul>
                    </nav>
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
</body>
