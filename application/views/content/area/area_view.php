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
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                    <a style="margin-right: 10px;">Show</a>
                    <select style="margin-right: 10px;" class="form-select-sm" id="entriesPerPage">
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value="50">50</option>
                    </select>
                    <a style="margin-right: 10px;">Entries</a>
                    <div class="search-icon-input">
                        <input type="text" id="searchInput" class="form-control-sm rounded" placeholder="Search" />
                        <span class="search-icon">
                            <i class="fas fa-search"></i>
                        </span>
                    </div>
                </div>
                <a href="<?php echo site_url('area/addarea'); ?>" class="btn btn-primary" style="background-color: #624DE3;">
                    <i class="fas fa-plus"></i>
                    Add Area
                </a>
            </div>
        </div>
 
    <div class="container-fluid mt-5">
         
        <br>
        <div class="table-fluid">
        <table class="table table-hover table-striped ">
            <thead class="sticky-top">
                <tr>
                    <th class="col-3">
                    <div class="d-flex justify-content-between align-items-center">
                            <span>Nama</span>
                            <button class="btn btn-link sort-btn-sml" data-sort="area">
                                <i class="fas fa-sort"></i>
                            </button>
                        </div>
                    </th>
                    <th class="col-3 align-middle">
                    Client Hotel
                    </th>
                    <th class="col-2 align-middle">
                    Sales
                    </th>
                    <th class="col-1 text-center align-middle">Action</th>
                </tr>
            </thead>  
            <tbody>
                <?php foreach ($area_data as $index => $row): ?>
                    <tr class="mt-1">
                       <td>
                        <?php echo $row['area']; ?>
                        </td>
                        <td class="align-middle">
                        <div class="d-flex align-items-center">
                                <img src="<?= base_url('assets/img/hotel.png') ?>" class="img-fluid me-2" />
                                <?php echo $row['client']; ?>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="d-flex align-items-center">
                                <img src="<?= base_url('assets/img/saleso.png') ?>" class="img-fluid me-2" />
                                <?php echo $row['sales']; ?>
                            </div>
                        </td>
                        <td class="text-right">
                            <a href="<?= site_url('area/editarea'); ?>" class="btn btn-link p-0">
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
                  <p>Akan Menghapus Reseller</p>
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