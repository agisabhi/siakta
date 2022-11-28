<body class="theme-blue">


    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Berita Acara Peninjauan</h2>

                        </div>
                        <div class="body">
                            <div><?= $this->session->flashdata('message'); ?></div>
                            <form id="form_validation" method="POST" action="" enctype="multipart/form-data">
                                <?php foreach ($berita as $p) : ?>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <label class="form-label">Luas Tanah</label>
                                            <input type="text" class="form-control" name="luas_tanah" value="<?= $p['luas_tanah']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <label class="form-label">Batas Utara</label>
                                            <input type="text" name="batas_utara" value="<?= $p['batas_utara']; ?>" required class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <label class="form-label">Batas Selatan</label>
                                            <input type="text" name="batas_selatan" value="<?= $p['batas_selatan']; ?>" required class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <label class="form-label">Batas Timur</label>
                                            <input type="text" name="batas_timur" value="<?= $p['batas_timur']; ?>" required class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <label class="form-label">Batas Barat</label>
                                            <input type="text" name="batas_barat" required class="form-control" value="<?= $p['batas_barat']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <label>Gambar Kasar</label>
                                            <input type="file" name="gambar_kasar" class="form-control">
                                            <img src="<?= base_url(); ?>assets/foto/<?= $p['gambar_kasar']; ?>" width="250" height="200">
                                        </div>
                                    </div>

                                    <input type="hidden" name="gambar" value="<?= $p['gambar_kasar']; ?>">
                                <?php endforeach; ?>
                                <button class="btn btn-primary waves-effect" type="submit" name="submit">SUBMIT</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>