<body class="theme-blue">

    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-sm-14">
                    <div class="card">
                        <div class="body">

                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#sertifikat" aria-controls="home" role="tab" data-toggle="tab">Data Sertifikat</a></li>

                            </ul>
                            <div><?= $this->session->flashdata('message'); ?></div>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="sertifikat">
                                    <div class="card">
                                        <div class="body">

                                            <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
                                                <?php foreach ($penjual as $p) : ?>
                                                    <div class="form-group">
                                                        <label for="OldPassword" class="col-sm-3 control-label">Nomor Sertifikat</label>
                                                        <div class="col-sm-9">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" id="OldPassword" name="no_sertifikat" value="<?= $p['no_sertifikat']; ?>" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="NewPassword" class="col-sm-3 control-label">Nama Pemilik</label>
                                                        <div class="col-sm-9">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" id="text" name="nama_pemilik" value="<?= $p['nama_pemilik']; ?>" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="OldPassword" class="col-sm-3 control-label">Alamat Tanah</label>
                                                        <div class="col-sm-9">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" id="OldPassword" name="alamat_tanah" value="<?= $p['alamat_tanah']; ?>" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="NewPassword" class="col-sm-3 control-label">Luas Tanah</label>
                                                        <div class="col-sm-9">
                                                            <div class="form-line">
                                                                <input type="number" class="form-control" id="text" name="luas_tanah" value="<?= $p['luas_tanah']; ?>" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="OldPassword" class="col-sm-3 control-label">Foto Sertifikat </label>
                                                        <div class="col-sm-9">
                                                            <div class="form-line">
                                                                <input type="hidden" name="file_ser" value="<?= $p['foto_sertifikat']; ?>">
                                                                <input type="file" name="foto_sertifikat">
                                                                <img src="<?= base_url(); ?>assets/foto/<?= $p['foto_sertifikat']; ?>" width="500" height="400">
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