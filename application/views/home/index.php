<div id="content-wrapper">

  <div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="<?= base_url(); ?>">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Overview</li>
    </ol>

    <!-- Icon Cards-->

    <div class="row">
      <div class="col-xl-4 col-sm-6 mb-3">
        <div class="card text-white bg-primary o-hidden h-100">
          <div class="card-body">
            <div class="mr-5">Suhu Tertinggi : <?php echo $tempavg; ?> C</div>
          </div>
          <!-- card body end -->
        </div>
        <!-- card end -->
      </div>
      <!-- col end -->
      <div class="col-xl-4 col-sm-6 mb-3">
        <div class="card text-white bg-warning o-hidden h-100">
          <div class="card-body">
            <div class="mr-5">Kelembaban Tertinggi : <?php echo $humiavg; ?> %</div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-sm-6 mb-3">
        <div class="card text-white bg-success o-hidden h-100">
          <div class="card-body">
            <div class="mr-5">Total Aktivitas : <?php echo $actisum; ?>x</div>
          </div>
        </div>
      </div>
    </div>
    <!-- row end -->

    <div class="row">
      <div class="col-xl-6 col-sm-6 mb-3">
        <div class="card">
          
        <div class="card">
          <div class="card-header">
            <i class="fas fa-chart-area"></i>
            Jumlah Deteksi Tertinggi Grup by Suhu
          </div>
          <!-- card header end -->
          <div class="card-body">
            <div class="table-responsive">
            <table class="table" id="" width="100%" cellspacing="0">
              <thead class="thead-dark">
                <tr>
                  <th>Jumlah</th>
                  <th>Suhu (C)</th>
                </tr>
              </thead>
              <tbody>
              <?php
                $no = 1;
                foreach ($actibysuhu as $value) : ?>
                  <tr>
                    <td><?php echo $value->totalacti; ?></td>
                    <td><?php echo $value->temp; ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            </div>
          </div>
          
          <!-- <div class="card-footer small text-muted">
            Tanggal <?php echo date("d-M-Y") ?>
          </div> -->
        </div>
        
        </div>
        
      </div>

      <div class="col-xl-6 col-sm-6 mb-3">
        <div class="card">
          
        <div class="card">
          <div class="card-header">
            <i class="fas fa-chart-area"></i>
            Jumlah Deteksi Terendah Grup by Suhu
          </div>
          <!-- card header end -->
          <div class="card-body">
            <div class="table-responsive">
            <table class="table" id="" width="100%" cellspacing="0">
              <thead class="thead-dark">
                <tr>
                  <th>Jumlah</th>
                  <th>Suhu (C)</th>
                </tr>
              </thead>
              <tbody>
              <?php
                $no = 1;
                foreach ($actibysuhulow as $value) : ?>
                  <tr>
                    <td><?php echo $value->totalacti; ?></td>
                    <td><?php echo $value->temp; ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            </div>
          </div>
          
          <!-- <div class="card-footer small text-muted">
            Tanggal <?php echo date("d-M-Y") ?>
          </div> -->
        </div>
        
        </div>
        
      </div>

    </div>


    <div class="row">
      <div class="col-xl-4 col-sm-6 mb-3">
        <div class="card">
          <div class="card-header">
            <i class="fas fa-chart-area"></i>
            Data suhu hari ini
          </div>
          <!-- card header end -->
          <div class="card-body">
            <table class="table-bordered" id="" width="100%" cellspacing="0">
              <thead class="thead-dark">
                <tr>
                  <th>No</th>
                  <th>Pukul</th>
                  <th>Rata Rata</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($suhuhari as $value) : ?>
                  <tr>
                    <th scope="row"><?php echo $no++; ?></th>
                    <td><?php echo $value->jam; ?></td>
                    <td><?php echo $value->ratasuhu; ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
          <!-- <div class="card-footer small text-muted">
            Tanggal <?php echo date("d-M-Y") ?>
          </div> -->
        </div>
        <!-- card end -->
      </div>
      <!-- col end -->

      

      <div class="col-xl-4 col-sm-6 mb-3">
        <div class="card">
          <div class="card-header">
            <i class="fas fa-chart-area"></i>
            Data kelembaban hari ini
          </div>
          <!-- card header end -->
          <div class="card-body">
            <table class="table-bordered" id="" width="100%" cellspacing="0">
              <thead class="thead-dark">
                <tr>
                  <th>No</th>
                  <th>Pukul</th>
                  <th>Rata Rata</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($humidhari as $value) : ?>
                  <tr>
                    <th scope="row"><?php echo $no++; ?></th>
                    <td><?php echo $value->jam; ?></td>
                    <td><?php echo $value->ratahumid; ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
          <!-- <div class="card-footer small text-muted">
            Tanggal <?php echo date("d-M-Y") ?>
          </div> -->
        </div>
        <!-- card end -->
      </div>
      <!-- col end -->

      <div class="col-xl-4 col-sm-6 mb-3">
        <div class="card">
          <div class="card-header">
            <i class="fas fa-chart-area"></i>
            Total sensor hari ini
          </div>
          <!-- card header end -->
          <div class="card-body">
            <table class="table-bordered" id="" width="100%" cellspacing="0">
              <thead class="thead-dark">
                <tr>
                  <th>No</th>
                  <th>Pukul</th>
                  <th>Jumlah</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($sensorhari as $value) : ?>
                  <tr>
                    <th scope="row"><?php echo $no++; ?></th>
                    <td><?php echo $value->jam; ?></td>
                    <td><?php echo $value->totalsensor; ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>

          
          <!-- <div class="card-footer small text-muted">
            Tanggal <?php echo date("d-M-Y") ?>
          </div> -->
        </div>
        <!-- card end -->
        
        
      </div>
      <!-- col end -->
    
    </div>
    <!-- row end -->

    <div>
      
      


    </div>

    <!-- /.container-fluid -->