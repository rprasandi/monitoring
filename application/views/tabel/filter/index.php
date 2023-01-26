<div id="content-wrapper">
    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <!-- <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?= base_url(); ?>">Dashboard</a>
            </li>
            <li class="breadcrumb-item">
                <a href="<?= base_url(); ?>tabel">Tabel</a>
            </li>
            <li class="breadcrumb-item active">Filter</li>
        </ol> -->

        <!-- <?php echo $awal, $akhir; ?> -->
        <?php
        if ($awal == NULL && $wawal == NULL) {
        ?>
            <div class="row">
                <div class="col-5">

                    <div class="card mb-3">
                        <div class="card-header">
                            <div class="row py-1">
                                <div class="col-auto mr-auto my-auto">
                                    <i class="fas fa-fw fa-user"></i>
                                    Filter tabel
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="<?= base_url(); ?>tabel/filter " method="post">
                                <div class="form-row">
                                    <label class="col-md-auto">Tanggal</label>
                                </div>
                                <div class="form-row">
                                    <div class="form-col col-md-auto">
                                        <input type="date" class="form-control" name="awal">
                                    </div>
                                    <div class="form-col col-md-auto">
                                        <input type="date" class="form-control" name="akhir">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label class="col-md-auto">Waktu</label>
                                </div>
                                <div class="form-row">
                                    <div class="form-col col-md-auto">
                                        <input type="time" class="form-control" name="wawal">
                                    </div>
                                    <label class="p-1">></label>
                                    <div class="form-col col-md-auto">
                                        <input type="time" class="form-control" name="wakhir">
                                    </div>
                                </div>
                                <button type="submit" value="filter" class="btn btn-primary mt-3 float-right">Kembali</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>



            <!-- Filter -->
        <?php
        } else {
        ?>
            <div class="row">
                <div class="col">
                    <div class="card mb-3">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-auto mr-auto my-auto">
                                    <i class="fas fa-fw fa-user"></i>
                                    Filter
                                </div>
                                <div class="float-right mx-2">
                                    <a class="btn btn-primary btn-sm" href="<?= base_url(); ?>tabel/cetak" role="button">Cetak</a>
                                </div>
                                <div class="float-right mx-2">
                                    <a class="btn btn-primary btn-sm" href="<?= base_url(); ?>tabel" role="button">Kembali</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="dataTable" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Waktu</th>
                                            <th>Temperatur</th>
                                            <th>Kelembaban</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($konten as $value) : ?>
                                            <tr>
                                                <th scope="row"><?php echo $value->no_id; ?></th>
                                                <td><?php echo $value->tgl; ?></td>
                                                <td><?php echo $value->waktu; ?></td>
                                                <td><?php echo $value->temperature; ?> C</td>
                                                <td><?php echo $value->humid; ?> %</td>
                                                <td><?php echo $value->activity; ?>x</td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>


    </div>
</div>