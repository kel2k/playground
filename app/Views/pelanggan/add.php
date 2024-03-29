
<div class="col-md-6 col-12">

  <div class="card">
    <div class="card-header">
      <h4 class="card-title">Tambah Pelanggan</h4>
    </div>
    <div class="card-content">
      <div class="card-body">
        <form action="<?= base_url('pelanggan/aksi_adduser') ?>" method="post">
          <div class="form-body">
            <div class="row">
              <div class="col-12">
                <div class="form-group has-icon-left">
                  <label for="first-name-icon">Nama Pelanggan</label>
                  <div class="position-relative">
                    <input type="text" required name="nama_pelanggan" class="form-control"
                      placeholder="Nama Pelanggan" id="nama_pelanggan">
                    <div class="form-control-icon">
                      <i class="bi bi-person"></i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group has-icon-left">
                  <label for="password-id-icon">Alamat</label>
                  <div class="position-relative">
                    <input type="text" class="form-control" required name="alamat"
                      placeholder="Alamat" id="password-id-icon">
                    <div class="form-control-icon">
                      <i class="bi bi-envelope"></i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12">

                <div class="form-group has-icon-left">
                  <label for="email-id-icon">No Telpon</label>
                  <div class="position-relative">
                    <input type="number" class="form-control" required name="no_telpon"
                      placeholder="No Telepon" id="email-id-icon">
                    <div class="form-control-icon">
                      <i class="bi bi-telephone"></i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12">

                <div class="form-group has-icon-left">
                  <label for="email-id-icon">Nama Orangtua</label>
                  <div class="position-relative">
                    <input type="text" class="form-control" required name="nama_orangtua"
                      placeholder="Nama Orang Tua" id="email-id-icon">
                    <div class="form-control-icon">
                      <i class="bi bi-person"></i>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="col-12">

                <div class="form-group has-icon-left">
                  <label for="email-id-icon">Nama Permainan</label>
                  <select name="permainan" class="form-control" required>
                  <?php
                foreach ($k as $data) {
                ?>
                    <option value="<?= $data->permainan ?>" selected hidden>---Choose---</option>
                    <option value="Ayunan">Ayunan</option>
                    <option value="Seluncuran">Seluncuran</option>
                  <?php }?>
                  </select>
                </div>
              </div>

              <div class="col-12">
                <div class="form-group has-icon-left">
                  <label for="email-id-icon">Biaya</label>
                  <select name="biaya" class="form-control" required>
                  <?php
                foreach ($k as $data) {
                ?>
                    <option value="<?= $data->biaya ?>" selected hidden>---Choose---</option>
                    <option value="10000">10000</option>
                    <option value="20000">20000</option>
                    <option value="30000">30000</option>
                    <?php }?>
                  </select>

                </div>
              </div>
              <div class="col-12 d-flex justify-content-end">
                <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
              </div>
            </div>
          </div>
        </form>
</div>
    </div>
  </div>
</div>

