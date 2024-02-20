<div class="col-md-6 col-12">

    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Tambah User</h4>
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
                                            placeholder="Nama Pelanggan" id="first-name-icon">
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
                            <div class="col-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                <!-- <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button> -->
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</section>