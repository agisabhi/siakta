<body class="theme-blue">
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Data Jadwal Peninjauan Lokasi AJB
                            </h2>

                        </div>

                        <div class="body">
                            <div><?= $this->session->flashdata('message'); ?></div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Tanggal </th>
                                            <th>No Pengajuan</th>
                                            <th>Nama Penjual Tanah</th>
                                            <th>Kontak Penjual</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php foreach ($jadwal as $p) : ?>
                                            <tr>
                                                <td><?= $p['tanggal_penjadwalan']; ?></td>
                                                <td><?= $p['no_pengajuan']; ?></td>
                                                <td><?= $p['nama_penjual']; ?> </td>
                                                <td><?= $p['no_telpon']; ?> </td>
                                                <td>
                                                    <?php
                                                    if ($p['status_pengajuan']=="Peninjauan") {
                                                        ?>
                                                    <a href="<?= base_url(); ?>peninjau/verifikasi2/<?= $p['no_jadwal']; ?>" class="btn bg-blue">Verif Berkas Fisik</a><br><br>
                                                    <?php } elseif ($p['status_pengajuan']=="Verifikasi Berkas Berhasil") {
                                                        
                                                    
                                                    ?><a href="<?= base_url(); ?>peninjau/beritaacara/<?= $p['no_jadwal']; ?>" class="btn bg-indigo">Berita Acara</a><br><br>
                                                    <?php
                                                    }else{
                                                        ?>
                                                    <a href="<?= base_url(); ?>peninjau/hasilpeninjauan/<?= $p['no_jadwal']; ?>" class="btn bg-green">Hasil Peninjauan</a>
                                                    <?php
                                                    }
                                                    ?>
                                                </td>

                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>