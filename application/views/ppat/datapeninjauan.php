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
                            <div>
                                <a href="<?= base_url(); ?>ppat/tambahpeninjauan" class="btn bg-indigo waves-effect">
                                    <i class="material-icons">trending_up</i>
                                    <span>Tambah Data</span>
                                </a>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Tanggal </th>
                                            <th>No Pengajuan</th>
                                            <th>Nama Penjual Tanah</th>
                                            <th>Nama Petugas</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php foreach ($jadwal as $p) : ?>
                                            <tr>
                                                <td><?= $p['tanggal_penjadwalan']; ?></td>
                                                <td><?= $p['no_pengajuan']; ?></td>
                                                <td><?= $p['nama_penjual']; ?> (<?= $p['no_telpon']; ?>) </td>
                                                <td><?= $p['nama_petugas']; ?> (<?= $p['no_hp']; ?>) </td>
                                                <td><a href="<?= base_url(); ?>ppat/editpeninjauan/<?= $p['no_jadwal']; ?>" class="btn bg-red">Edit</a>
                                                    <a href="<?= base_url(); ?>ppat/hasilpeninjauan/<?= $p['no_jadwal']; ?>" class="btn bg-indigo">Hasil Peninjauan</a>
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