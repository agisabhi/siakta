<body class="theme-blue">
    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-sm-14">
                    <div class="card">
                        <div class="body">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#jual_beli" aria-controls="home" role="tab" data-toggle="tab">Data Jual Beli</a></li>
                            </ul>
                            <div><?= $this->session->flashdata('message'); ?></div>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="jual_beli">
                                    <div class="card">
                                        <div class="body">

                                            <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
                                                <?php foreach ($penjual as $p) : ?>
                                                    <div class="form-group">
                                                        <label for="OldPassword" class="col-sm-3 control-label">Nomor Pendaftaran</label>
                                                        <div class="col-sm-9">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" id="OldPassword" name="no_pengajuan" value="<?= $p['no_pengajuan']; ?>" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="NewPassword" class="col-sm-3 control-label">Kode Billing</label>
                                                        <div class="col-sm-9">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" id="text" name="billing_pajak" value="<?= $p['billing_pajak']; ?>" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="NewPassword" class="col-sm-3 control-label">Nominal SSP</label>
                                                        <div class="col-sm-9">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" id="text" name="nominal_pajak" value="<?= $p['nominal_pajak']; ?>" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="NewPassword" class="col-sm-3 control-label">Nominal SSB</label>
                                                        <div class="col-sm-9">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" id="text" name="nominal_pajak" value="<?= $p['ssb']; ?>" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="OldPassword" class="col-sm-3 control-label">Bukti Transfer </label>
                                                        <div class="col-sm-9">
                                                            <div class="form-line">
                                                                <input type="hidden" name="file_kui" value="<?= $p['bukti_transfer']; ?>">
                                                                <input type="file" name="bukti_transfer">
                                                                <img src="<?= base_url(); ?>assets/foto/<?= $p['bukti_transfer']; ?>" width="250" height="200">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="col-sm-13" align="right">
                                                            <button type="submit" name="submit" class="btn bg-blue">Edit</button>
                                                            <a href="<?= base_url(); ?>penjual/detail" class="btn bg-red">Cancel</a>
                                                            <br>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>