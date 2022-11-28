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
                                Data Petugas Peninjauan Lokasi AJB
                            </h2>

                        </div>

                        <div class="body">
                            <div><?= $this->session->flashdata('message'); ?></div>
                            <div>
                                <a href="<?= base_url(); ?>ppat/tambahpetugas" class="btn bg-indigo waves-effect">
                                    <i class="material-icons">trending_up</i>
                                    <span>Tambah Data</span>
                                </a>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>NIP</th>
                                            <th>Nama Petugas</th>
                                            <th>No HP</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php foreach ($pengajuan as $p) : ?>
                                            <tr>
                                                <td><?= $p['id_petugas']; ?></td>
                                                <td><?= $p['nama_petugas']; ?></td>
                                                <td><?= $p['no_hp']; ?></td>
                                                <td><a href="<?= base_url(); ?>ppat/editpetugas/<?= $p['id_petugas']; ?>" class="btn bg-blue">Edit</a>
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