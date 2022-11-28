<body class="theme-blue">


    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Ubah Jadwal Peninjauan</h2>
 
                        </div>
                        <div class="body">
                            <form id="form_validation" method="POST" action="">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label>Tanggal</label>
                                        <input type="date" class="form-control" name="tanggal_penjadwalan" value="<?=$jadwal['tanggal_penjadwalan'];?>" required>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label>No Pengajuan</label>
                                        <input type="text" name="no_pengajuan" class="form form-control" value="<?=$jadwal['no_pengajuan'];?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label>Nama Petugas</label>
                                        <select name="id_petugas" class="form-control show-tick">
                                            <?php foreach ($petugas as $p) : ?>
                                                <?php if($jadwal['id_petugas']==$p['id_petugas']){
                                                    ?>
                                                    <option value="<?= $p['id_petugas']; ?>" selected><?= $p['nama_petugas']; ?></option>
                                                    <?php
                                                }else{
                                                    ?>
                                                <option value="<?= $p['id_petugas']; ?>"><?= $p['nama_petugas']; ?></option>
                                                    <?php
                                                }?>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                                <a href="<?=base_url();?>ppat/peninjauan" class="btn btn-danger">Kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>