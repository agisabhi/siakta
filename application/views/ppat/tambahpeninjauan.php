<body class="theme-blue">


    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Tambah Jadwal Peninjauan</h2>
 
                        </div>
                        <div class="body">
                            <form id="form_validation" method="POST" action="">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label>Tanggal</label>
                                        <input type="date" class="form-control" name="tanggal_penjadwalan" required>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label>No Pengajuan</label>
                                        <select name="no_pengajuan" class="form-control show-tick">
                                            <?php foreach ($no_pen as $p) : ?>
                                                <option value="<?= $p['no_pengajuan']; ?>"><?= $p['no_pengajuan']; echo' -- '.$p['nama_penjual'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label>Nama Petugas</label>
                                        <select name="id_petugas" class="form-control show-tick">
                                            <?php foreach ($petugas as $p) : ?>
                                                <option value="<?= $p['id_petugas']; ?>"><?= $p['nama_petugas']; ?></option>
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