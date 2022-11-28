<body class="theme-blue">

    <section class="content">
        <div class="body">


        <?php foreach ($jadwal as $p) : ?>
            <div class="col-lg-6 col-md-4 col-sm-9 col-xs-12">
                <div class="card">
                    <div class="header bg-green">
                        <h2>
                            Jadwal Peninjauan Lokasi
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
                                    <ul>
                                        <li>
                                            <span>Tanggal Peninjauan</span>
                                            <span><b><?= date('d-m-Y', strtotime($p['tanggal_penjadwalan'])); ?></b></span>
                                        </li>
                                        <li>
                                            <span>No Pendaftaran</span>
                                            <span><?= $p['no_pengajuan']; ?></span>
                                        </li>
                                        <li>
                                            <span>Petugas Peninjau</span>
                                            <span><?= $p['nama_petugas']; ?></span>
                                        </li>
                                        <li>
                                            <span>Kontak Petugas</span>
                                            <span><?= $p['no_hp']; ?></span>
                                        </li>
                                    </ul>
                                <a href="<?= base_url(); ?>penjual" class="btn btn-danger btn-lg waves-effect btn-block">Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                                <?php endforeach; ?>
        </div>
    </section>