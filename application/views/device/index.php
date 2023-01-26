<div id="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?= base_url(); ?>">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Monitoring Device</li>
        </ol>

        <div class="row">
            <div class="col-4">
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fas fa-fw fa-rocket"></i>
                        Kontrol Alat
                    </div>
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">
                            Power
                            </div>
                            <div class="col">
                                <div class="float-right">
                                    <?php foreach ($status as $value) :
                                        if ($value->kondisi == '1') { ?>                                            
                                            ON
                                        <?php } elseif ($value->kondisi == '0') { ?>
                                            OFF
                                    <?php }
                                    endforeach;
                                     ?>
                                </div>
                            </div>

                        </div>
                        <div class="row my-2">
                            <div class="col">
                                <div class="float-right">
                                    <div class="float-right">
                                        <a class="btn btn-success btn-sm" href="Device/upStatus?status=1" role="button">ON</a>
                                    </div>
                                    <div class="float-right mx-2">
                                        <a class="btn btn-danger btn-sm" href="Device/upStatus?status=0" role="button">OFF</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </div>
</div>