<body class="theme-blue">
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h1>Pembayaran Pajak </h1>
            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <div><?= $this->session->flashdata('message'); ?></div>
                            <div>
                                <a href="<?= base_url(); ?>penjual/tambahpajak" class="btn bg-indigo waves-effect">
                                    <i class="material-icons">trending_up</i>
                                    <span>Tambah Data</span>
                                </a>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Waktu</th>
                                            <th>No Pendaftaran</th>
                                            <th>Kode Billing</th>
                                            <th>Nominal SSP</th>
                                            <th>Nominal SSB</th>
                                            <th>Bukti Pembayaran</th>
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
                                                <td><img src="<?= base_url(); ?>assets/foto/<?= $p['bukti_transfer']; ?>" width="100" height="100"></td>
                                                <td>
                                                    <?php if($p['status_pengajuan']=="Menunggu Verifikasi Pajak"){
                                                        ?><a href="<?= base_url(); ?>penjual/editpajak/<?= $p['id_pajak']; ?>" class="btn bg-cyan">Edit</a><?php
                                                    }
                                                    ?>
                                                    
                                                </td>

                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>

                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>