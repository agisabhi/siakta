<body class="theme-blue">

    <section class="content">
        <div class="body">
            <div><?= $this->session->flashdata('message'); ?></div>

            <div class="col-lg-6 col-md-4 col-sm-9 col-xs-12">
                <div class="card">
                    <div class="header bg-blue">
                        <h2>
                            Data Pengambil AJB
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
                                <?php foreach ($pengambil as $p) : ?>
                                    <ul>
                                        <li>
                                            <span>No Pengajuan AJB</span>
                                            <span><b><?= $p['no_pengajuan']; ?></b></span>
                                        </li>
                                        <li>
                                            <span>Nama Pengambil</span>
                                            <span><b><?= $p['nama_pengambil']; ?></b></span>
                                        </li>
                                        <li>
                                            <span>No Hp Pengambil</span>
                                            <span><b><?= $p['no_hp_pengambil']; ?></b></span>
                                        </li>
                                        <li>
                                            <span>Foto KTP Pengambil</span><br>
                                            <img src="<?= base_url(); ?>assets/foto/<?= $p['foto_ktp_pengambil']; ?>" alt="" width="410px" height="250px">
                                        </li>
                                    </ul>

                                <?php endforeach; ?>
                                <a href="<?= base_url(); ?>ppat/pengambilan" class="btn btn-danger btn-lg waves-effect btn-block" align="center">Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>