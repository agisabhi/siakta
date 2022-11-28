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
                                Data Laporan Akta Jual Beli
                            </h2>

                        </div>

                        <div class="body">
                            <form method="get" action="">
                                    <label>Filter Berdasarkan</label><br>
                                    <select name="filter" id="filter" class="form-control show-tick">
                                        <option value="">Pilih</option>
                                        <option value="2">Per Bulan</option>
                                        <option value="3">Per Tahun</option>
                                    </select>
                                    <br /><br/>
                                    <div id="form-bulan">
                                        <label>Bulan</label><br>
                                        <select name="bulan" class="form-control show-tick">
                                            <option value="">Pilih</option>
                                            <option value="1">Januari</option>
                                            <option value="2">Februari</option>
                                            <option value="3">Maret</option>
                                            <option value="4">April</option>
                                            <option value="5">Mei</option>
                                            <option value="6">Juni</option>
                                            <option value="7">Juli</option>
                                            <option value="8">Agustus</option>
                                            <option value="9">September</option>
                                            <option value="10">Oktober</option>
                                            <option value="11">November</option>
                                            <option value="12">Desember</option>
                                        </select>
                                        <br /><br />
                                    </div>
                                    <div id="form-tahun">
                                        <label>Tahun</label><br>
                                        <select name="tahun" class="form-control show-tick">
                                            <option value="">Pilih</option>
                                            <?php
                                            foreach($option_tahun as $data) : ?> 
                                                <option value="<?=$data['tahun'];?>"><?=$data['tahun'];?></option>;
                                            <?php endforeach; ?>
                                            ?>
                                        </select>
                                        <br /><br />
                                    </div>
                                    <button type="submit" class="btn btn-primary">Tampilkan</button>
                                    <a href="<?php echo base_url('laporan/ajb'); ?>" class="btn btn-default">Reset Filter</a>
                                </form>
    <br><a href="<?php echo $url_cetak; ?>" class="btn btn-success">CETAK PDF</a><br /><br />
<br><p align="center"><b><?php echo $ket; ?></b></p>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>No Pengajuan</th>
                                            <th>Pihak yang Mengalihkan</th>
                                            <th>Pihak yang Menerima</th>
                                            <th>Luas Tanah</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php if( ! empty($transaksi)){
                                        $no = 1;
                                        foreach ($transaksi as $p) : ?>
                                        <?php $tgl = date('d-m-Y', strtotime($p['tanggal_pendaftaran']));?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $tgl; ?></td>
                                                <td><?= $p['no_pengajuan']; ?></td>
                                                <td><?= $p['nama_penjual']; ?></td>
                                                <td><?= $p['nama_pembeli']; ?></td>
                                                <td><?= $p['luas_tanah']; ?></td>


                                            </tr>
                                        <?php endforeach; }?>
                                    </tbody>
                                </table>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <script src="<?=base_url(); ?>assets/jquery-ui/jquery-ui.min.js"></script> <!-- Load file plugin js jquery-ui -->
    <script type="text/javascript">
    $(document).ready(function(){ // Ketika halaman selesai di load
        $('.input-tanggal').datepicker({
            dateFormat: 'yy-mm-dd' // Set format tanggalnya jadi yyyy-mm-dd
        });
        $('#form-tanggal, #form-bulan, #form-tahun').hide(); // Sebagai default kita sembunyikan form filter tanggal, bulan & tahunnya
        $('#filter').change(function(){ // Ketika user memilih filter
            if($(this).val() == '1'){ // Jika filter nya 1 (per tanggal)
                $('#form-bulan, #form-tahun').hide(); // Sembunyikan form bulan dan tahun
                $('#form-tanggal').show(); // Tampilkan form tanggal
            }else if($(this).val() == '2'){ // Jika filter nya 2 (per bulan)
                $('#form-tanggal').hide(); // Sembunyikan form tanggal
                $('#form-bulan, #form-tahun').show(); // Tampilkan form bulan dan tahun
            }else{ // Jika filternya 3 (per tahun)
                $('#form-tanggal, #form-bulan').hide(); // Sembunyikan form tanggal dan bulan
                $('#form-tahun').show(); // Tampilkan form tahun
            }
            $('#form-tanggal input, #form-bulan select, #form-tahun select').val(''); // Clear data pada textbox tanggal, combobox bulan & tahun
        })
    })
    </script> 
    </section>
    