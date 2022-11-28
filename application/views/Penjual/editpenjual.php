<body class="theme-blue">

    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-sm-14">
                    <div class="card">
                        <div class="body">

                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#penjual" aria-controls="home" role="tab" data-toggle="tab">Data Penjual</a></li>

                            </ul>
                            <div><?= $this->session->flashdata('message'); ?></div>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="penjual">
                                    <div class="card">
                                        <div class="body">

                                            <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
                                                <?php foreach ($penjual as $p) : ?>
                                                    <div class="form-group">
                                                        <label for="OldPassword" class="col-sm-3 control-label">Nomor Induk Kependudukan</label>
                                                        <div class="col-sm-9">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" id="OldPassword" name="nik_penjual" value="<?= $p['nik_penjual']; ?>" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="NewPassword" class="col-sm-3 control-label">Nama Penjual</label>
                                                        <div class="col-sm-9">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" id="text" name="nama_penjual" value="<?= $p['nama_penjual']; ?>" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="OldPassword" class="col-sm-3 control-label">Alamat </label>
                                                        <div class="col-sm-9">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" id="OldPassword" name="alamat_penjual" value="<?= $p['alamat_penjual']; ?>" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="NewPassword" class="col-sm-3 control-label">No Hp</label>
                                                        <div class="col-sm-9">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" id="text" name="no_telpon" value="<?= $p['no_telpon']; ?>" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="NewPassword" class="col-sm-3 control-label">No NPWP</label>
                                                        <div class="col-sm-9">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" id="text" name="npwp_penjual" value="<?= $p['npwp_penjual']; ?>" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="OldPassword" class="col-sm-3 control-label">Foto KTP </label>
                                                        <div class="col-sm-9">
                                                            <div class="form-line">
                                                                <input type="hidden" name="file_ktp" value="<?= $p['foto_ktp_penjual']; ?>">
                                                                <input type="file" name="foto_ktp_penjual">
                                                                <img src="<?= base_url(); ?>assets/foto/<?= $p['foto_ktp_penjual']; ?>" width="500" height="400">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="NewPassword" class="col-sm-3 control-label">Foto NPWP</label>
                                                        <div class="col-sm-9">
                                                            <div class="form-line">
                                                                <input type="hidden" name="file_npwp" value="<?= $p['foto_npwp_penjual']; ?>">
                                                                <input type="file" name="foto_npwp_penjual">
                                                                <img src="<?= base_url(); ?>assets/foto/<?= $p['foto_npwp_penjual']; ?>" width="500px" height="400px">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-13" align="right">
                                                            <button type="submit" name="submit" class="btn bg-blue">Edit</button>
                                                            <a href="<?= base_url(); ?>penjual" class="btn bg-red">Cancel</a>
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