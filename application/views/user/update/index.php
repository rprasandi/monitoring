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
            <li class="breadcrumb-item active">Ubah Pin</li>
        </ol>

        <div class="row">
            <div class="col-4">
                <div class="card mb-3 my-auto">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-auto mr-auto my-auto">
                                <i class="fas fa-fw fa-user"></i>
                                Ubah Pin Admin <?= $this->session->userdata('ses_nama'); ?>
                            </div>
                            <div class="float-right mx-2">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target=".bd-example-modal-sm">Hapus</button>

                                <!-- Modal -->
                                <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                Hapus akun ?
                                            </div>
                                            <div class="modal-footer">
                                                <a class="btn btn-danger btn-sm" href="<?= base_url(); ?>user/delete" role="button">Ya</a>
                                                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                        <?php if (validation_errors()) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?= validation_errors(); ?>
                            </div>
                        <?php endif; ?>
                        <div class="row-horizontal">
                            <div class="col">
                                <form action="<?= base_url(); ?>user/update " method="post">
                                    <div class="form">
                                        <div class="form-group">
                                            <label>Pin Lama</label>
                                            <input type="password" name="pinlama" class="form-control" placeholder="Pin Lama">
                                        </div>

                                        <div class="form-group">
                                            <label>Pin Baru</label>
                                            <input type="password" name="pinbaru" class="form-control" placeholder="Pin Baru">
                                        </div>

                                        <div class="form-group">

                                            <input type="password" name="pinbaru2" class="form-control" placeholder="Retype Pin">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" value="update" class="btn btn-primary float-right">Update</button>
                                    </div>
                                </form>
                            </div>
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
</div>