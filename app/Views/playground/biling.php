<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabel Billing</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">

</head>
<body>

<div id="main-content">
  <div class="page-heading">
    <div class="page-title">
      <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
          <h3>Tabel Billing</h3>
          <p class="text-subtitle text-muted">Data-data billing</p>
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

          <div class="table-responsive">
            <table class="table mb-0 table-lg">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Anak</th>
                  <th>Mulai Jam</th>
                  <th>Selesai Jam</th>
                
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($vuser as $k) {
                  if ($k->status == 1){
                ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $k->nama_pelanggan?></td>
                  <td><?php echo $k->mulai_jam ?></td>
                  <td><?php echo $k->selesai_jam ?></td>
        
                </tr>
                <?php
                  }
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <div class="col-md-5 col-12">
        <div class="card">
          <div class="card-header bg-primary">
            <h4 class="card-title text-white d-flex justify-content-center align-items-center">Selesai Bermain</h4>
          </div>

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
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $k->nama_pelanggan?></td>
                </tr>
                <?php
                  }
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

