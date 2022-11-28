<body class="theme-blue">


    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>BASIC VALIDATION</h2>

                        </div>
                        <div class="body">
                            <form id="form_validation" method="POST" action="">
                                <?php foreach ($petugas as $p) : ?>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="number" class="form-control" name="id_petugas" value="<?= $p['id_petugas']; ?>" readonly>
                                            <label class="form-label">NIP</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="nama_petugas" value="<?= $p['nama_petugas']; ?>" required>
                                            <label class="form-label">Nama Lengkap</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="no_telpon" value="<?= $p['no_hp']; ?>" required>
                                            <label class="form-label">No HP</label>
                                        </div>
                                    </div>
                                <?php endforeach; ?>

                                <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
