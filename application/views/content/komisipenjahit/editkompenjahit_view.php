<div class="bg-content-container col-12">
    <div class="content-container col-11 mt-5">
        <div class="card-header bg-white d-flex justify-content-center">
            <h3>Edit Komisi</h3>
        </div>

        <form class="card-body" class="card-body" action="<?php echo base_url('kompenjahit/editkompenjahit/' . $kompenjahit_data->message->jenis . '/' . $kompenjahit_data->message->id_kategori); ?>" method="post">
        
            <div class="form-group row mb-3 align-items-center">
                <label for="fee" class="col-md-2 col-form-label-lg">Jenis</label>
                <div class="col-md-9">
                    <input type="text" class="form-control form-control-lg" id="jenis" name="jenis" readonly value="<?php echo htmlspecialchars($kompenjahit_data->message->jenis); ?>">
                </div>
            </div>

           <div class="form-group row mb-3 align-items-center">
                <label for="fee" class="col-md-2 col-form-label-lg">Kategori</label>
                <div class="col-md-9">
                    <input type="text" class="form-control form-control-lg" id="id_kategori" name="id_kategori" value="<?php echo $katbarang->message[0]->namakategori; ?>" readonly>
                </div>
           </div>
                    

            <div class="form-group row mb-3 align-items-center">
                <label for="fee" class="col-md-2 col-form-label-lg">Fee</label>
                <div class="col-md-9">
                    <input type="text" class="form-control form-control-lg" id="fee" name="fee" required value="<?php echo htmlspecialchars($kompenjahit_data->message->fee); ?>">
                </div>
            </div>
    
            <div class="row mb-3">
                <div class="col-md-11 d-flex justify-content-end">
                    <a href="<?php echo site_url('kompenjahit'); ?>" class="btn btn-secondary me-2">
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