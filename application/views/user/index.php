<div id="content-wrapper">
    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?= base_url(); ?>">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">User</li>
        </ol>

        <!-- CONTENT -->
        <div class="row">

            <!-- Card 1 -->
            
            <div class="col">
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="row py-1">
                            <div class="col-auto mr-auto my-auto">
                                <i class="fas fa-fw fa-user"></i>
                                    List Admin
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table " id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                            <th>Nama</th>
                                            <!-- <th>Pin</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($konten as $value) : ?>
                                        <tr>
                                            <th scope="row"><?php echo $value->id_admin; ?></th>
                                            <td><?php echo $value->nama_admin; ?></td>
                                            <!-- <td><?php echo $value->no_pin; ?></td> -->
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        <!-- Card 2 -->
            <div class="col">
                <div class="card mb-3 my-auto">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-auto mr-auto my-auto">
                                <i class="fas fa-fw fa-user"></i>
                                Admin
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <?php
                        if ($this->session->userdata('akses') == '1') {
                        ?>

                            <div class="row">
                                <div class="col">
                                    Selamat datang admin, <?php echo $this->session->userdata('ses_nama'); ?> !
                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="float-right">
                                        <a class="btn btn-danger btn-sm" href="<?= base_url(); ?>user/logout" role="button">Logout</a>
                                    </div>
                                    <div class="float-right mx-2">
                                        <a class="btn btn-success btn-sm s" href="<?= base_url(); ?>user/update" role="button">Edit</a>
                                    </div>
                                </div>
                            </div>

                        <?php
                        } else {
                        ?>
                            <form action="<?= base_url(); ?>user/login" method="post">
                                <div class="form-horizontal">
                                    <div class="form-group">
                                        <label class="sr-only">Nama</label>
                                        <input type="text" name="username" class="form-control" placeholder="Nama">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only">Pin</label>
                                        <input type="password" name="pin" class="form-control" placeholder="Pin">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-sm btn-primary float-right">Login</button>
                            </form>

                                <div class="float-right mx-2">
                                    <a class="btn btn-primary btn-sm" href="<?= base_url(); ?>user/create" role="button">Daftar</a>
                                </div>

                            <?php
                            }
                            ?>
                    </div>
                </div>

                <div class="mb-3 my-auto">
                    <div class="row my-2">
                        <div class="col">
                            <?php if ($this->session->userdata('akses' == 1)) { ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    Admin baru
                                    <strong>berhasil</strong>
                                    <?= $this->session->flashdata('flash'); ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <?php } elseif ($this->session->flashdata()) { ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <?= $this->session->flashdata('flash'); ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            
            

           <!-- Card 3 -->
                <?php if ($this->session->userdata('akses') == '1') { ?>
                    <div class="card mb-3 my-auto">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-auto mr-auto my-auto">
                                    <i class="fas fa-fw fa-rocket"></i>
                                    Kontrol Alat
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">
                                Power
                                </div>
                                <div class="col">
                                    <div class="float-right">
                                        <?php foreach ($laststat as $value) :
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
                            <div class="row align-items-center">
                                <div class="col">
                                    Ubah terakhir
                                    <?php foreach ($laststat as $value) : ?>
                                        <div class="float-right mb-2">
                                            <?php echo $value->lastupdate; ?>
                                        </div>
                                    <?php endforeach; ?>
                                </div>    
                            </div>
                            <div class="row align-items-center">
                                <div class="col">
                                    <div class="float-right">
                                        <div class="float-right">
                                            <a class="btn btn-danger btn-sm" href="Device/Status/0" role="button">OFF</a>
                                        </div>
                                        <div class="float-right mx-2">
                                            <a class="btn btn-success btn-sm" href="Device/Status/1" role="button">ON</a>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                            </div>

                                                   
                                                
                        </div>
                    </div>
                <?php } ?>
                
                </div>
            </div>
        </div>  

    </div>
</div>
