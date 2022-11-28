<body class="theme-blue">


    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>EDIT DATA VERIFIKASI BERKAS</h2>
 
                        </div>
                        <div class="body">
                            <div><?= $this->session->flashdata('message'); ?></div>
                            <form id="form_validation" method="POST" action="">
                                <?php foreach ($jadwal as $p) : ?>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                        
                                            <label>KTP Penjual</label>
                                            <select name="status_ktp_penjual" class="form-control show-tick">
                                                <?php if($p['status_ktp_penjual'] == "yes"):?>
                                                <option value="yes" selected>Yes</option>
                                                <option value="no">No</option>
                                                <?php else: ?>
                                                <option value="yes">Yes</option>
                                                <option value="no" selected>No</option>
                                                <?php endif; ?>
                                            </select>
                                            <div>
                                                <img src="<?= base_url(); ?>assets/foto/<?= $p['foto_ktp_penjual']; ?>" height="300" width="350">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <label>KTP Pembeli</label>
                                            <select name="status_ktp_pembeli" class="form-control show-tick">
                                                <?php if($p['status_ktp_pembeli'] == "yes"):?>
                                                <option value="yes" selected>Yes</option>
                                                <option value="no">No</option>
                                                <?php else: ?>
                                                <option value="yes">Yes</option>
                                                <option value="no" selected>No</option>
                                                <?php endif; ?>
                                            </select>
                                            <div>
                                                <img src="<?= base_url(); ?>assets/foto/<?= $p['foto_ktp_pembeli']; ?>" height="300" width="350">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <label>NPWP Penjual</label>
                                            <select name="status_npwp_penjual" class="form-control show-tick">
                                                <?php if($p['status_npwp_penjual'] == "yes"):?>
                                                <option value="yes" selected>Yes</option>
                                                <option value="no">No</option>
                                                <?php else: ?>
                                                <option value="yes">Yes</option>
                                                <option value="no" selected>No</option>
                                                <?php endif; ?>
                                            </select>
                                            <div>
                                                <img src="<?= base_url(); ?>assets/foto/<?= $p['foto_npwp_penjual']; ?>" height="300" width="350">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <label>NPWP Pembeli</label>
                                            <select name="status_npwp_pembeli" class="form-control show-tick">
                                                <?php if($p['status_npwp_pembeli'] == "yes"):?>
                                                <option value="yes" selected>Yes</option>
                                                <option value="no">No</option>
                                                <?php else: ?>
                                                <option value="yes">Yes</option>
                                                <option value="no" selected>No</option>
                                                <?php endif; ?>
                                            </select>
                                            <div>
                                                <img src="<?= base_url(); ?>assets/foto/<?= $p['foto_npwp_pembeli']; ?>" height="300" width="350">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <label>Sertifikat</label>
                                            <select name="status_sertifikat" class="form-control show-tick">
                                                <?php if($p['status_sertifikat'] == "yes"):?>
                                                <option value="yes" selected>Yes</option>
                                                <option value="no">No</option>
                                                <?php else: ?>
                                                <option value="yes">Yes</option>
                                                <option value="no" selected>No</option>
                                                <?php endif; ?>
                                            </select>
                                            <div>
                                                <img src="<?= base_url(); ?>assets/foto/<?= $p['foto_sertifikat']; ?>" height="300" width="350">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <label>Kuitansi</label>
                                            <select name="status_kuitansi" class="form-control show-tick">
                                                <?php if($p['status_kuitansi'] == "yes"):?>
                                                <option value="yes" selected>Yes</option>
                                                <option value="no">No</option>
                                                <?php else: ?>
                                                <option value="yes">Yes</option>
                                                <option value="no" selected>No</option>
                                                <?php endif; ?>
                                            </select>
                                            <div>
                                                <img src="<?= base_url(); ?>assets/foto/<?= $p['foto_kuitansi']; ?>" height="300" width="350">
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="no_verifikasi" value="<?= $p['no_verifikasi']; ?>">
                                    <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                                <?php endforeach; ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>