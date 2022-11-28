<body class="theme-blue">

    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-sm-14">
                    <div class="card">
                        <div class="body">

                            <ul class="nav nav-tabs" role="tablist">

                                <li role="presentation" class="active"><a href="#pembeli" aria-controls="settings" role="tab" data-toggle="tab">Data Pembeli</a></li>

                            </ul>
                            <div><?= $this->session->flashdata('message'); ?></div>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="pembeli">
                                    <div class="card">
                                        <div class="body">

                                            <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
                                                <?php foreach ($penjual as $p) : ?>
                                                    <div class="form-group">
                                                        <label for="OldPassword" class="col-sm-3 control-label">Nomor Induk Kependudukan</label>
                                                        <div class="col-sm-9">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" id="OldPassword" name="nik_pembeli" value="<?= $p['nik_pembeli']; ?>" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="NewPassword" class="col-sm-3 control-label">Nama Pembeli</label>
                                                        <div class="col-sm-9">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" id="text" name="nama_pembeli" value="<?= $p['nama_pembeli']; ?>" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="OldPassword" class="col-sm-3 control-label">Alamat </label>
                                                        <div class="col-sm-9">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" id="OldPassword" name="alamat_pembeli" value="<?= $p['alamat_pembeli']; ?>" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="NewPassword" class="col-sm-3 control-label">No NPWP</label>
                                                        <div class="col-sm-9">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" id="text" name="npwp_pembeli" value="<?= $p['npwp_pembeli']; ?>" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="OldPassword" class="col-sm-3 control-label">Foto KTP </label>
                                                        <div class="col-sm-9">
                                                            <div class="form-line">
                                                                <input type="hidden" name="file_ktp" value="<?= $p['foto_ktp_pembeli']; ?>">
                                                                <input type="file" name="foto_ktp_pembeli">
                                                                <img src="<?= base_url(); ?>assets/foto/<?= $p['foto_ktp_pembeli']; ?>" width="500" height="400">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="NewPassword" class="col-sm-3 control-label">Foto NPWP</label>
                                                        <div class="col-sm-9">
                                                            <div class="form-line">
                                                                <input type="hidden" name="file_npwp" value="<?= $p['foto_npwp_pembeli']; ?>">
                                                                <input type="file" name="foto_npwp_pembeli">
                                                                <img src="<?= base_url(); ?>assets/foto/<?= $p['foto_npwp_pembeli']; ?>" width="500px" height="400px">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-13" align="right">
                                                            <button type="submit" name="submit" class="btn bg-blue">Edit</button>
                                                            <a href="<?= base_url(); ?>penjual/detail" class="btn bg-red">Cancel</a>
                                                            <br>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>