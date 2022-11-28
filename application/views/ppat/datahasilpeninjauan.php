<body class="theme-blue">

    <section class="content">
        <div class="body">
            <div><?= $this->session->flashdata('message'); ?></div>

            <div class="col-lg-6 col-md-4 col-sm-9 col-xs-12">
                <div class="card">
                    <div class="header bg-blue">
                        <h2>
                            Hasil Verifikasi Berkas Fisik
                        </h2>
                        <ul class="header-dropdown m-r-0">
                            <li>
                                <a href="javascript:void(0);">
                                    <i class="material-icons">info_outline</i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <i class="material-icons">help_outline</i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="card profile-card">
                            <div class="profile-footer">
                                <?php foreach ($verifikasi as $p) : ?>
                                    <ul>
                                        <li>
                                            <span>Status KTP Penjual</span>
                                            <span><b><?= $p['status_ktp_penjual']; ?></b></span>
                                        </li>
                                        <li>
                                            <span>Status KTP Pembeli</span>
                                            <span><b><?= $p['status_ktp_pembeli']; ?></b></span>
                                        </li>
                                        <li>
                                            <span>Status NPWP Pembeli</span>
                                            <span><b><?= $p['status_npwp_pembeli']; ?></b></span>
                                        </li>
                                        <li>
                                            <span>Status NPWP Pembeli</span>
                                            <span><b><?= $p['status_npwp_pembeli']; ?></b></span>
                                        </li>
                                        <li>
                                            <span>Status Sertifikat</span>
                                            <span><b><?= $p['status_sertifikat']; ?></b></span>
                                        </li>
                                        <li>
                                            <span>Status Kuitansi</span>
                                            <span><b><?= $p['status_kuitansi']; ?></b></span>
                                        </li>
                                    </ul>

                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-4 col-sm-9 col-xs-12">
                <div class="card">
                    <div class="header bg-indigo">
                        <h2>
                            Hasil Berita Acara
                        </h2>
                        <ul class="header-dropdown m-r-0">
                            <li>
                                <a href="javascript:void(0);">
                                    <i class="material-icons">info_outline</i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <i class="material-icons">help_outline</i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="card profile-card">
                            <div class="profile-footer">
                                <?php foreach ($berita as $p) : ?>
                                    <ul>
                                        <li>
                                            <span>Luas Tanah</span>
                                            <span><b><?= $p['luas_tanah']; ?> m<sup>2</sup></b></span>
                                        </li>
                                        <li>
                                            <span>Batas Utara</span>
                                            <span><b><?= $p['batas_utara']; ?></b></span>
                                        </li>
                                        <li>
                                            <span>Batas Selatan</span>
                                            <span><b><?= $p['batas_selatan']; ?></b></span>
                                        </li>
                                        <li>
                                            <span>Batas Timur</span>
                                            <span><b><?= $p['batas_timur']; ?></b></span>
                                        </li>
                                        <li>
                                            <span>Status Sertifikat</span>
                                            <span><b><?= $p['batas_barat']; ?></b></span>
                                        </li>
                                        <li>
                                            <span>Gambar Kasar</span><br>
                                            <img src="<?= base_url(); ?>assets/foto/<?= $p['gambar_kasar']; ?>" width="250" height="200">
                                        </li>
                                    </ul>

                                    <a href="<?= base_url(); ?>ppat/peninjauan" class="btn btn-danger btn-lg waves-effect btn-block">Back</a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>