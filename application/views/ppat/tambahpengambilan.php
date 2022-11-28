<body class="theme-blue">


    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Tambah Data Pengambilan Akta Jual Beli </h2>

                        </div>
                        <div class="body">
                            <form id="form_validation" method="POST" action="">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label>Tanggal Pengambilan</label>
                                        <input type="date" class="form-control" name="tanggal_pengambilan" required>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label>No Pengajuan</label>
                                        <select name="no_pengajuan" class="form-control show-tick">
                                            <?php foreach ($pengajuan as $p) : ?>
                                                <option value="<?= $p['no_pengajuan']; ?>"><?= $p['no_pengajuan']; echo' -- '.$p['nama_penjual']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>