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
                                Data Pengajuan Akta Jual Beli
                            </h2>

                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <div><?= $this->session->flashdata('message'); ?></div>
                                <div>
                                <a href="<?= base_url(); ?>ppat/tambahpendaftaran" class="btn bg-indigo waves-effect">
                                    <i class="material-icons">trending_up</i>
                                    <span>Tambah Data</span>
                                </a>
                                <form action="<?=base_url();?>ppat/pendaftaran2" method="post">
                                    <select name="status_pengajuan">
                                        <option value="Selesai">Selesai</option>
                                        <option value="Peninjauan">Peninjauan</option>
                                    </select>
                                    <input type="submit" value="cari" class="btn btn-success">
</form>
                            </div>
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>No Pendaftaran</th>
                                            <th>Tanggal</th>
                                            <th>Pihak yang Mengalihkan</th>
                                            <th>Pihak yang Menerima</th>
                                            <th>No Sertifikat</th>
                                            <th>Status Pengajuan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody> 
                                        <?php foreach ($pengajuan as $p) : ?>
                                            <tr>
                                                <td><?= $p['no_pengajuan']; ?></td>
                                                <td><?= $p['tanggal_pendaftaran']; ?></td>
                                                <td><?= $p['nama_penjual']; ?></td>
                                                <td><?= $p['nama_pembeli']; ?></td>
                                                <td><?= $p['no_sertifikat']; ?></td>
                                                <td><?php if ($p['status_pengajuan'] == "Menunggu Respon") {
                                                    ?> <span class="badge bg-orange">Menunggu Respon</span><?php
                                                                                                        } elseif ($p['status_pengajuan'] == "Selesai") { ?>
                                                        <span class="badge bg-green">SELESAI</span>
                                                    <?php
                                                                                                        }elseif ($p['status_pengajuan'] == "Penjadwalan Pengambilan") { ?>
                                                        <span class="badge bg-green">Penjadwalan Pengambilan</span>
                                                    <?php
                                                                                                        } elseif ($p['status_pengajuan'] == "Berkas Terverifikasi") {
                                                    ?>
                                                        <span class="badge bg-green">Berkas Terverifikasi</span><?php
                                                                                                            } elseif ($p['status_pengajuan'] == "Ditolak") {
                                                                                                                ?><span class="badge bg-red">Ditolak</span><?php
                                                                                                                                                        } elseif ($p['status_pengajuan'] == "Menunggu Verifikasi Pajak") {
                                                                                                                                                            ?><span class="badge bg-cyan">Menunggu Verifikasi Pajak</span><?php
                                                                                                                                                                                                                        } elseif ($p['status_pengajuan'] == "Peninjauan") {
                                                                                                                                                                                                                            ?><span class="badge bg-pink">Peninjauan</span><?php
                                                                                                                                                                                                                                                                        } elseif ($p['status_pengajuan'] == "Pembayaran Pajak") {
                                                                                                                                                                                                                                                                            ?><span class="badge bg-purple">Pembayaran Pajak</span><?php
                                                                                                                                                                                                                                                                                                                                } elseif ($p['status_pengajuan'] == "Penjadwalan Pengambilan") {
                                                                                                                                                                                                                                                                                                                                    ?><span class="badge bg-green">Sukses, Jadwal Pengambilan</span><?php
                                                                                                                                                                                                                                                                                                                                                                                                } else if ($p['status_pengajuan'] == "Pembayaran Pajak Ditolak") {
                                                                                                                                                                                                                                                                                                                                                                                                    ?><span class="badge bg-red">Pembayaran Pajak Ditolak</span><?php
                                                                                                                                                                                                                                                                                                                                                                                                                                                            }else if ($p['status_pengajuan'] == "Proses Pembuatan AJB") {
                                                                                                                                                                                                                                                                                                                                                                                                    ?><span class="badge bg-green">Proses Pembuatan AJB</span><?php
                                                                                                                                                                                                                                                                                                                                                                                                                                                            }else if ($p['status_pengajuan'] == "Pengajuan AJB Selesai") {
                                                                                                                                                                                                                                                                                                                                                                                                    ?><span class="badge bg-green">Pengajuan AJB Selesai</span><?php
                                                                                                                                                                                                                                                                                                                                                                                                                                                            }  ?></td>
                                                <td><a href="<?= base_url(); ?>ppat/detail/<?= $p['no_pengajuan']; ?>" class="btn bg-blue"><i class="material-icons">remove_red_eye</i> Detail</a></td>
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