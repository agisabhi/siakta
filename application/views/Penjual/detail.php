<body class="theme-blue">
 
    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-sm-14">
                    <div class="card">
                        <div class="body">

                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#penjual" aria-controls="home" role="tab" data-toggle="tab">Data Penjual</a></li>
                                <li role="presentation"><a href="#pembeli" aria-controls="settings" role="tab" data-toggle="tab">Data Pembeli</a></li>
                                <li role="presentation"><a href="#sertifikat" aria-controls="settings" role="tab" data-toggle="tab">Data Sertifikat</a></li>
                                <li role="presentation"><a href="#jual_beli" aria-controls="settings" role="tab" data-toggle="tab">Data Jual Beli</a></li>
                            </ul>
                            <div><?= $this->session->flashdata('message'); ?></div>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="penjual">
                                    <div class="card">
                                        <div class="body">

                                            <form class="form-horizontal" method="post" action="<?= base_url(); ?>login/login">
                                                <?php foreach ($pengajuan as $p) : ?>
                                                    <div class="form-group">
                                                        <label for="OldPassword" class="col-sm-3 control-label">Nomor Induk Kependudukan</label>
                                                        <div class="col-sm-9">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" id="OldPassword" name="username" value="<?= $p['nik_penjual']; ?>" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="NewPassword" class="col-sm-3 control-label">Nama Penjual</label>
                                                        <div class="col-sm-9">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" id="text" name="password" value="<?= $p['nama_penjual']; ?>" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="OldPassword" class="col-sm-3 control-label">Alamat </label>
                                                        <div class="col-sm-9">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" id="OldPassword" name="username" value="<?= $p['alamat_penjual']; ?>" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="NewPassword" class="col-sm-3 control-label">No Hp</label>
                                                        <div class="col-sm-9">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" id="text" name="password" value="<?= $p['no_telpon']; ?>" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="NewPassword" class="col-sm-3 control-label">No NPWP</label>
                                                        <div class="col-sm-9">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" id="text" name="password" value="<?= $p['npwp_penjual']; ?>" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="OldPassword" class="col-sm-3 control-label">Foto KTP </label>
                                                        <div class="col-sm-9">
                                                            <div class="form-line">
                                                                <img src="<?= base_url(); ?>assets/foto/<?= $p['foto_ktp_penjual']; ?>" width="500" height="400">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="NewPassword" class="col-sm-3 control-label">Foto NPWP</label>
                                                        <div class="col-sm-9">
                                                            <div class="form-line">
                                                                <img src="<?= base_url(); ?>assets/foto/<?= $p['foto_npwp_penjual']; ?>" width="500px" height="400px">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-13" align="right">
                                                            <a href="<?= base_url(); ?>penjual/editpenjual/<?= $p['nik_penjual']; ?>/<?=$p['no_pengajuan'];?>" class="btn bg-green">Ubah Data</a>
                                                            <a href="<?= base_url(); ?>penjual" class="btn bg-red">Back</a>
                                                            <br>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade in" id="pembeli">
                                    <div class="card">
                                        <div class="body">
                                            <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
                                                <?php foreach ($pengajuan as $p) : ?>
                                                    <div class="form-group">
                                                        <label for="OldPassword" class="col-sm-3 control-label">Nomor Induk Kependudukan</label>
                                                        <div class="col-sm-9">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" id="OldPassword" name="username" value="<?= $p['nik_pembeli']; ?>" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="NewPassword" class="col-sm-3 control-label">Nama Lengkap Pembeli</label>
                                                        <div class="col-sm-9">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" id="text" name="password" value="<?= $p['nama_pembeli']; ?>" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="OldPassword" class="col-sm-3 control-label">Alamat </label>
                                                        <div class="col-sm-9">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" id="OldPassword" name="username" value="<?= $p['alamat_pembeli']; ?>" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="NewPassword" class="col-sm-3 control-label">No NPWP</label>
                                                        <div class="col-sm-9">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" id="text" name="password" value="<?= $p['npwp_pembeli']; ?>" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="OldPassword" class="col-sm-3 control-label">Foto KTP </label>
                                                        <div class="col-sm-9">
                                                            <div class="form-line">
                                                                <img src="<?= base_url(); ?>assets/foto/<?= $p['foto_ktp_pembeli']; ?>" width="500" height="400">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="NewPassword" class="col-sm-3 control-label">Foto NPWP</label>
                                                        <div class="col-sm-9">
                                                            <div class="form-line">
                                                                <img src="<?= base_url(); ?>assets/foto/<?= $p['foto_npwp_pembeli']; ?>" width="500px" height="400px">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-13" align="right">
                                                            <a href="<?= base_url(); ?>penjual/editpembeli/<?= $p['nik_pembeli'] ?>/<?=$p['no_pengajuan'];?>" class="btn bg-green">Ubah Data</a>
                                                            <a href="<?= base_url(); ?>penjual" class="btn bg-red">Back</a>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                                <div role="tabpanel" class="tab-pane fade in" id="sertifikat">
                                    <form class="form-horizontal" method="post" action="<?= base_url(); ?>login/login">
                                        <?php foreach ($pengajuan as $p) : ?>
                                            <div class="form-group">
                                                <label for="OldPassword" class="col-sm-3 control-label">Nomor Sertifikat</label>
                                                <div class="col-sm-9">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" id="OldPassword" name="username" value="<?= $p['no_sertifikat']; ?>" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="NewPassword" class="col-sm-3 control-label">Nama Pemilik</label>
                                                <div class="col-sm-9">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" id="Password" name="password" value="<?= $p['nama_pemilik']; ?>" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="OldPassword" class="col-sm-3 control-label">Luas Tanah</label>
                                                <div class="col-sm-9">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" id="OldPassword" name="username" value="<?= $p['luas_tanah']; ?>" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="NewPassword" class="col-sm-3 control-label">Alamat Tanah</label>
                                                <div class="col-sm-9">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" id="Password" name="password" value="<?= $p['alamat_tanah']; ?>" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="NewPassword" class="col-sm-3 control-label">Foto Sertifikat</label>
                                                <div class="col-sm-9">
                                                    <div class="form-line">
                                                        <img src="<?= base_url(); ?>assets/foto/<?= $p['foto_sertifikat']; ?>" width="500px" height="400px">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-13" align="right">
                                                    <a href="<?= base_url(); ?>penjual/editsertifikat/<?= $p['no_sertifikat'] ?>/<?=$p['no_pengajuan'];?>" class="btn bg-green">Ubah Data</a>
                                                    <a href="<?= base_url(); ?>penjual" class="btn bg-red">Back</a>
                                                </div>
                                            </div>

                                        <?php endforeach; ?>
                                    </form>
                                </div>
                                <div role="tabpanel" class="tab-pane fade in" id="jual_beli">
                                    <form class="form-horizontal" method="post" action="<?= base_url(); ?>login/login">
                                        <?php foreach ($pengajuan as $p) : ?>
                                            <div class="form-group">
                                                <label for="OldPassword" class="col-sm-3 control-label">Harga_Transaksi</label>
                                                <div class="col-sm-9">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" id="OldPassword" name="username" value="<?= $p['harga_transaksi']; ?>" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="NewPassword" class="col-sm-3 control-label">Foto Kuitansi</label>
                                                <div class="col-sm-9">
                                                    <div class="form-line">
                                                        <img src="<?= base_url(); ?>assets/foto/<?= $p['foto_kuitansi']; ?>/<?=$p['no_pengajuan'];?>" width="500px" height="400px">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-13" align="right">
                                                    <a href="<?= base_url(); ?>penjual/editjualbeli/<?= $p['no_pengajuan'] ?>" class="btn bg-green">Ubah Data</a>
                                                    <a href="<?= base_url(); ?>penjual" class="btn bg-red">Back</a>
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

    </section>