<div class="bg-content-container col-12">
    <div class="content-container col-11 mt-5">
        <div class="card-header bg-white d-flex justify-content-center mt-5 mb-5">
            <h1>Edit CP Hotel</h1>
        </div>

        <?php if (!empty($_SESSION["message"])): ?>
            <div class="alert alert-success">
                <?= $_SESSION["message"]; ?>
            </div>
            <?php unset($_SESSION["message"]); ?>
        <?php endif; ?>

        <form class="card-body" action="<?php echo base_url('cphotel/editcphotel/' . ($cphotel_data->message->id)); ?>" method="post">
                <div class="form-group row mb-3 align-items-center">
                    <label for="nama" class="col-md-2 col-form-label-lg">Nama</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control form-control-lg" id="nama" name="nama" value="<?php echo htmlspecialchars($cphotel_data->message->nama); ?>" required>
                    </div>
                </div>
                <div class="form-group row mb-3 align-items-center">
                    <label for="telp" class="col-md-2 col-form-label-lg">Telp/WA</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control form-control-lg" id="telp" name="telp" value="<?php echo htmlspecialchars($cphotel_data->message->telp); ?>"equired>
                    </div>
                </div>
                <div class="form-group row mb-3 align-items-center">
                  <label for="tgllahir" class="col-md-2 col-form-label-lg">Tanggal Lahir</label>
                  <div class="col-md-9">
                    <div class="input-group">
                      <input type="text" class="form-control form-control-lg" id="tgllahir" name="tgllahir" placeholder="dd/mm/yyyy"value="<?php echo htmlspecialchars($cphotel_data->message->tgllahir); ?>"required>
                    </div>
                  </div>
                </div>
                <div class="form-group row mb-3 align-items-center">
                    <label for="komisi" class="col-md-2 col-form-label-lg">Komisi</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control form-control-lg" id="komisi" name="komisi" value="<?php echo htmlspecialchars($cphotel_data->message->komisi); ?>"required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-11 d-flex justify-content-end">
                        <a href="<?php echo site_url('cphotel'); ?>" class="btn btn-secondary me-2">
                            <i class="fas fa-times"></i> Batal
                        </a>
                        <button type="submit" class="btn btn-primary" style="background-color: #624DE3;">
                            <i class="fas fa-save"></i> Simpan
                        </button>
                    </div>
                </div>
        </form>
    </div>
</div>