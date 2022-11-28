<body class="theme-blue">

    <section class="content">
        <div class="body">
            <div><?= $this->session->flashdata('message'); ?></div>

            <div class="col-lg-6 col-md-4 col-sm-9 col-xs-12">
                <div class="card">
                    <div class="header bg-indigo">
                        <h2>
                            Validasi Pembayaran Pajak
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
                                <form action="" method="post">

                                    <?php foreach ($pengajuan as $p) : ?>
                                        <ul>
                                            <li>
                                                <span>Nomor Pengajuan</span>
                                                <span><b><?= $p['no_pengajuan']; ?></b></span>
                                            </li>
                                            <li>
                                                <span>Nama Penjual</span>
                                                <span><b><?= $p['nama_penjual']; ?> </b></span>
                                                <input type="hidden" name="no_pengajuan" value="<?= $p['no_pengajuan']; ?>">
                                            </li>
                                            <li>
                                                <span>Billing Pajak</span>
                                                <span><b><?= $p['billing_pajak']; ?></b></span>
                                            </li>
                                            <li>
                                                <span>Nominal SSP</span>
                                                <span><b>Rp. <?= $p['nominal_pajak']; ?></b></span>
                                            </li>
                                            <li>
                                                <span>Nominal SSB</span>
                                                <span><b>Rp. <?= $p['ssb']; ?></b></span>
                                            </li>
                                            <li>
                                                <span>Bukti Transfer</span>
                                                <span><img src="<?= base_url(); ?>assets/foto/<?= $p['bukti_transfer']; ?>" width="250" height="200"> <br></span>

                                            </li>
                                            <br><br><br><br><br><br><br><br> <br><br><br>
                                            <li>
                                                <span>Persetujuan Pajak</span>
                                                <span><select name="status_pengajuan" required>
                                                        <option value="" class="badge bg-green">Pilih</option>
                                                        <option value="Penjadwalan Pengambilan" class="badge bg-green">Accept</option>
                                                        <option value="Pembayaran Pajak Ditolak">Reject</option>
                                                    </select></span>
                                            </li>
                                            <li>
                                                <span>Alasan (optional)</span>
                                                <span><input type="text" name="alasan" class="form-control"></span>
                                            </li>


                                        </ul>
                                        <button type="submit" class="btn btn-success btn-lg waves-effect btn-block">Submit</button>
                                        <a href="<?= base_url(); ?>ppat/pajak" class="btn btn-danger btn-lg waves-effect btn-block">Back</a>
                                    <?php endforeach; ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>