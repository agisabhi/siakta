<body class="theme-blue">


    <div class="body">





        <img src="<?= base_url(); ?>assets/images/logo.png" align="left" style="float: left; height: 60px">
        <div style="margin-left: 1px">

            <h3>
                Jadwal Pengambilan Akta Jual Beli
            </h3>
        </div>

    </div>
    <br>
    
    <div class="body">
        <div class="card profile-card">
            <div class="profile-footer">
                <?php foreach ($pengambilan as $p) : ?>
                    <ul>
                        <li>
                            <span>Tanggal Pengambilan</span>
                            <span><b><?= date('d-m-Y', strtotime($p['tanggal_pengambilan'])); ?></b></span>
                        </li>
                        <li>
                            <span>No Pendaftaran</span>
                            <span><?= $p['no_pengajuan']; ?></span>
                        </li>
                        <li>
                            <span>Nama Penjual Tanah</span>
                            <span><?= $p['nama_penjual']; ?></span>
                        </li>
                        <li>
                            <span>No Sertifikat</span>
                            <span><?= $p['no_sertifikat']; ?></span>
                        </li>
                        <li>
                            <span>Luas Tanah</span>
                            <span><?= $p['luas_tanah']; ?> m<sup>2</sup></span>
                        </li>
                    </ul>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
    </div>

    </div>

    <script type="text/javascript">
        window.print();
    </script>