<div id="content-wrapper">
    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?= base_url(); ?>">Dashboard</a>
            </li>
            <li class="breadcrumb-item">
                <a href="<?= base_url(); ?>user">User</a>
            </li>
            <li class="breadcrumb-item active">Tambah</li>
        </ol>

        <div class="row">
            <div class="col-6">
                <div class="card mb-3 my-auto">
                    <div class="card-header">
                        <div class="row py-1">
                            <div class="col-auto mr-auto my-auto">
                                <i class="fas fa-fw fa-user"></i>
                                Daftar Admin Baru
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url(); ?>user/create " method="post">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Nama</label>
                                    <input type="text" name="nama" class="form-control" placeholder="Nama">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Pin</label>
                                    <input type="password" name="pin" class="form-control" placeholder="4 Angka">
                                </div>
                            </div>
                            <button type="submit" value="daftar" class="btn btn-primary float-right">Daftar</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <?php if (validation_errors()) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors(); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>

    </div>
</div>