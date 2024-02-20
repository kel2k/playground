<div id="main-content">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Tabel Billing</h3>
                    <p class="text-subtitle text-muted">Data-data billing</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                </div>
            </div>
        </div>
    </div>

    <section>
        <div class="row match-height">
            <div class="col-md-5 col-12">
                <div class="card">
                  
                        <div class="card-header bg-primary">
                            <h4 class="card-title text-white d-flex justify-content-center align-items-center">Masih Bermain</h4>
                        </div>

                        <!-- Table with no outer spacing -->
                        <div class="table-responsive">
                            <table class="table mb-0 table-lg">
                                <thead>
                                    <tr>
                                    <th>No</th>
                                <th>Nama Anak</th>
                                <th>Durasi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                        $no = 1;
                        foreach ($vuser as $k) {
                          if ($k->status == 1){
                            ?>
                            <tr>
                                <td>
                                    <?php echo $no++ ?>
                                </td>
                                <td>
                                    <?php echo $k->nama_pelanggan?>
                                </td>
                                <td>
                                    <?php echo $k->mulai_jam ?>
                                </td>
                            </tr>
                            <?php
                        }
                      }
                        ?>
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-md-5 col-12">
                <div class="card">
                   
                        <div class="card-header bg-primary">
                            <h4 class="card-title text-white d-flex justify-content-center align-items-center">Selesai Bermain</h4>
                        </div>

                        <!-- Table with no outer spacing -->
                        <div class="table-responsive">
                            <table class="table mb-0 table-lg">
                                <thead>
                                    <tr>
                                    <th>No</th>
                                <th>Nama Anak</th>
                                <th>Durasi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                        $no = 1;
                        foreach ($vuser as $k) {
                          if ($k->status == 2){
                            ?>
                            <tr>
                                <td>
                                    <?php echo $no++ ?>
                                </td>
                                <td>
                                    <?php echo $k->nama_pelanggan?>
                                </td>
                                <td>
                                    <?php echo $k->selesai_jam ?>
                                </td>
                            </tr>
                            <?php
                        }
                      }
                        ?>
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
