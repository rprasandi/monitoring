<div id="content-wrapper">
  <div class="container-fluid">
    <h1>INI HALAMAN TEST</h1>

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="<?= base_url(); ?>">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Test</li>
    </ol>


    <div class="row align-items-center">
      <div class="col">
      <form action="<?= base_url(); ?>test/status" method="post"> 
      <input type="radio" name="stat" value="1">ON
      
      <input type="radio" name="stat" value="0">OFF
      <input type="submit" value="GO">
      </form>
        <div class="float-right">
          <div class="float-right">
            <a class="btn btn-danger btn-sm" href="Device/Status/0" role="button">OFF</a>
          </div>
          <div class="float-right mx-2">
            <a class="btn btn-success btn-sm" href="Device/Status/1" role="button">ON</a>
          </div>
        </div>

        <?php
        foreach ($showdummy as $stat) :
          echo $stat->pertama;
          echo $stat->kedua; 
        endforeach

        ?>

      </div>

    </div>
    <script>
    var ctx = document.getElementById("chartTemp").getContext('2d');

    </script>

      <div class="card">
        <div class="card-header">
            <i class="fas fa-chart-area"></i>
            Dummy Chart
        </div>
        <!-- card header end -->
        <div class="card-body">
          <canvas id="chartDummy"></canvas>
        </div>
        <!-- card body end -->
        <div class="card-footer small text-muted">
          Updated yesterday at 11:59 PM
        </div>
        <!-- card footer end -->
      </div>
      <!-- card end -->


  </div>