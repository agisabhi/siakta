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
                                Data Pengambilan Akta Jual Beli Tanah
                            </h2>

                        </div>

                        <div class="body">
                            <div><?= $this->session->flashdata('message'); ?></div>
                            <div>
                                <a href="<?= base_url(); ?>ppat/tambahpengambilan" class="btn bg-indigo waves-effect">
                                    <i class="material-icons">trending_up</i>
                                    <span>Tambah Data</span>
                                </a>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Tanggal Pengambilan</th>
                                            <th>No Pengajuan</th>
                                            <th>Nama Penjual Tanah</th>
                                            <th>Luas Tanah</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php foreach ($pengambilan as $p) : ?>
                                            <tr>
                                                <td><?= $p['tanggal_pengambilan']; ?></td>
                                                <td><?= $p['no_pengajuan']; ?></td>
                                                <td><?= $p['nama_penjual']; ?> </td>
                                                <td><?= $p['luas_tanah']; ?> </td>
                                                <td><a href="<?= base_url(); ?>ppat/pengambil/<?= $p['no_pengambilan']; ?>" class="btn bg-red">Ambil</a>
                                                    <a href="<?= base_url(); ?>ppat/datapengambil/<?= $p['no_pengambilan']; ?>" class="btn bg-green">Data <br> Pengambil</a>
                                                </td>
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