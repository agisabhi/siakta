<body class="theme-blue">
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Pembayaran Pajak</h2>
            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Data Pembayaran pajak AJB
                            </h2>

                        </div>

                        <div class="body">
                            <div><?= $this->session->flashdata('message'); ?></div>
                            <div>
                                <a href="<?= base_url(); ?>ppat/tambahpajak" class="btn bg-indigo waves-effect">
                                    <i class="material-icons">trending_up</i>
                                    <span>Tambah Data</span>
                                </a>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Waktu</th>
                                            <th>Nomor Pendaftaran</th>
                                            <th>Kode Billing</th>
                                            <th>Nominal SSP</th>
                                            <th>Nominal SSB</th>
                                            <th>Nama Penjual Tanah</th>
                                            <th>Bukti Transfer</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php foreach ($pajak as $p) : ?>
                                            <tr>
                                                <td><?= $p['waktu']; ?></td>
                                                <td><?= $p['no_pengajuan']; ?></td>
                                                <td><?= $p['billing_pajak']; ?></td>
                                                <td>Rp. <?= $p['nominal_pajak']; ?></td>
                                                <td>Rp. <?= $p['ssb']; ?></td>
                                                <td><?= $p['nama_penjual']; ?> </td>
                                                <td><img src="<?= base_url(); ?>assets/foto/<?= $p['bukti_transfer']; ?>" width="180" height="150"> </td>
                                                <td><a href="<?= base_url(); ?>ppat/validasipajak/<?= $p['no_pengajuan']; ?>" class="btn bg-blue">Validasi</a>
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
