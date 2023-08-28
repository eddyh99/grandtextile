<div class="container col-12" style="background: #eaedf7">
    <div class="container col-11 mt-5" style="background: white;border-radius: 15px;padding : 20px">
        <div class="d-flex justify-content-center mb-5">
            <h1>Tambah bahanbaku</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <form action="<?php echo base_url('bahanbaku'); ?>" method="post">
                    <div class="form-group row mb-3 align-items-center">
                        <label for="bahanbaku" class="col-md-2 col-form-label col-form-label-lg">
                        Nama Bahan</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control form-control-lg" id="nbahan" name="nbahan" required>
                        </div>
                    </div>

                    <div class="form-group row mb-3 align-items-center d-flex">
                        <label for="satuan" class="col-md-2 col-form-label-lg">Satuan</label>
                        <div class="col-md-10 input-group">
                            <select class="form-control form-control-lg" id="satuan" name="satuan" required>
                                <option value="" disabled selected>Satuan</option>
                                <option value="1">satu</option>
                                <option value="2">dua</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row mb-3 align-items-center">
                        <label for="konversi" class="col-md-2 col-form-label col-form-label-lg">
                        Konversi</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control form-control-lg" id="konversi" name="konversi" required>
                        </div>
                    </div>

                    <div class="container-fluid">
                        <div class="table-bordered">
                            <table id="table" class="table table-bordered table-hover table-striped">
                                <thead class="sticky-top">
                                    <tr>
                                        <th class="col-2 align-middle"> 
                                            Harga
                                        </th>
                                        <th class="col-2 align-middle"> 
                                            Tanggal
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($bahanbaku_data as $index => $row): ?>
                                        <tr class="mt-1">
                                            <td>
                                                <?php echo $row['harga']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['tanggal']; ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="2" class="text-center">
                                        <button type="button" class="btn btn-link p-0" data-toggle="modal" data-target="#addDataModal">
                                                <img src="<?= base_url('assets/img/plus.png') ?>" alt="Delete" class="img-fluid" />
                                        </button>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                     </div>

                    <div class="d-flex justify-content-end">
                        <a href="<?php echo site_url('bahanbaku'); ?>" class="btn btn-secondary me-2">
                            <i class="fas fa-times"></i> Batal
                        </a>
                        <button type="submit" class="btn btn-primary" style="background-color: #624DE3;">
                            <i class="fas fa-save"></i> Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Add Data Modal -->
<div class="modal fade" id="addDataModal" tabindex="-1" role="dialog" aria-labelledby="addDataModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addDataModalLabel">Add Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Add your form fields here to input data -->
        <form>
          <div class="form-group">
            <label for="hargaInput">Harga</label>
            <input type="text" class="form-control" id="hargaInput" placeholder="masukan harga">
          </div>
          <div class="form-group">
              <label for="tglInput">Tanggal Lahir</label>
                <div class="input-group">
                  <input type="text" class="form-control form-control-lg" id="tglinput" name="tgllahir" placeholder="dd/mm/yyyy"required>
              </div>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary">Tambah</button>
      </div>
    </div>
  </div>
</div>