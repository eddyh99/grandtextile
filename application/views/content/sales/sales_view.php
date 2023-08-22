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
        <div class="container-fluid mt-5">
            <div class="d-flex justify-content-end mb-3">
                <a href="<?php echo site_url('sales/addsales'); ?>" class="btn btn-primary" style="background-color: #624DE3;">
                    <i class="fas fa-plus"></i>
                    Add Sales
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
            <div class="table-fluid" style="background-color:#F7F6FE">
        <table class="table table-hover ">
            <thead class="sticky-top">
                <tr>
                    <th class="col-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Nama</span>
                            <button class="btn btn-link sort-btn-sml" data-sort="nama">
                                <i class="fas fa-sort"></i>
                            </button>
                        </div>
                    </th>
                    <th class="col-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Kota</span>
                            <button class="btn btn-link sort-btn-sml" data-sort="kota">
                                <i class="fas fa-sort"></i>
                            </button>
                        </div>
                    </th>
                    <th class="col-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Telp</span>
                            <button class="btn btn-link sort-btn-sml" data-sort="telp">
                                <i class="fas fa-sort"></i>
                            </button>
                        </div>
                    </th>
                    <th class="col-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Area</span>
                            <button class="btn btn-link sort-btn-sml" data-sort="area">
                                <i class="fas fa-sort"></i>
                            </button>
                        </div>
                    </th>
                    <th class="col-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Komisi</span>
                            <button class="btn btn-link sort-btn-sml" data-sort="komisi">
                                <i class="fas fa-sort"></i>
                            </button>
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
                <?php foreach ($sales_data as $index => $row): ?>
                    <tr class="mt-1">
                        <td>
                            <a class="btn btn-link" data-toggle="collapse" data-target="#details-<?php echo $index; ?>" aria-expanded="false" aria-controls="details-<?php echo $index; ?>">
                                <i class="fas fa-chevron-down"></i>
                            </a>
                            <?php echo $row['nama']; ?>
                        </td>
                        <td>
                            <?php echo $row['kota']; ?>
                        </td>
                        <td>
                            <?php echo $row['hp']; ?>
                        </td>
                        <td>
                            <?php echo $row['area']; ?>
                        </td>
                        <td>
                            <?php echo $row['komisi']; ?>
                        </td>
                        <td class="text-right">
                            <a href="<?= site_url('sales/editsales'); ?>" class="btn btn-link p-0">
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
                                    <th>Alamat</th>
                                    <td class="col-1">
                                        <?php echo $row['alamat']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Tanggal Lahir</th>
                                    <td class="col-11">
                                        <?php echo $row['tanggal_lahir']; ?>
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
                            previous
                                <span aria-hidden="true">&laquo;</span>
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
                  <p>Akan Menghapus Sales</p>
		          <p>Nama</p>
                </div>
                <div class="modal-footer justify-content-center" >
                  <button type="button" style="background-color: gray;" class="btn btn-danger" data-dismiss="modal">Batal</button>
                  <button type="button " style="background-color: #624DE3;" class="btn btn-primary" data-dismiss="modal">Hapus</button>
                </div>
              </div>
            </div>
          </div>
</body>
