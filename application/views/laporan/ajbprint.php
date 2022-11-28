<html>
    <body>
            <style type="text/css">
                table {
                    border-collapse:collapse;
                    table-layout:fixed;width: 600px;
                    
                }
                table th { 
                    word-wrap:break-word;
          width: 25%;
        }
        
    </style>
    
    <div class="container-fluid">
        
        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h3>
                            <?=$ket;?>
                        </h3>
                        
                    </div>
                    
                    <div class="body">
                        
                        <div class="font-15">
                            <table border="1" width="100%" class="font-15">
                                <thead>
                                    <tr align="center">
                                        <td>No</td>
                                        <th>Tanggal</th>
                                        <th width="10%">No Pengajuan</th>
                                        <th width="20%">Data Pihak yang Mengalihkan</th>
                                        <th width="20%">Data Pihak yang Menerima</th>
                                        <th width="30%">Data Sertifikat</th>
                                        <th width="20%">Data Pajak</th>
                                        <th width="30%">Data Transaksi</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    <?php if( ! empty($transaksi)){
                                        $no = 1;
                                        foreach ($transaksi as $p) : ?>
                                        <?php $tgl = date('d-m-Y', strtotime($p['tanggal_pendaftaran']));?>
                                        <tr>
                                            <td align="center"><?= $no++; ?></td>
                                            <td><?= $tgl; ?></td>
                                            <td><?= $p['no_pengajuan']; ?></td>
                                            <td width="40%">NIK : <?= $p['nik_penjual']; ?><br>
                                            Nama : <?= $p['nama_penjual']; ?><br>
                                            Alamat : <?= $p['alamat_penjual']; ?><br>
                                            No HP : <?= $p['no_telpon']; ?><br>
                                            NPWP : <?= $p['npwp_penjual']; ?><br>
                                        </td>
                                        <td width="30%">NIK : <?= $p['nik_pembeli']; ?><br>
                                            Nama : <?= $p['nama_pembeli']; ?><br>
                                            Alamat : <?= $p['alamat_pembeli']; ?><br>
                                            NPWP : <?= $p['npwp_pembeli']; ?><br>
                                        </td>
                                        <td width="35%">No Sertifikat : <?= $p['no_sertifikat']; ?><br>
                                        Nama Pemilik : <?= $p['nama_pemilik']; ?><br>
                                        Alamat Tanah : <?= $p['alamat_tanah']; ?><br>
                                        Luas Tanah : <?= $p['luas_tanah']; ?><br>
                                        
                                        </td>
                                        <td width="40%">
                                            Kode Billing : <?= $p['billing_pajak']; ?><br>
                                            Besaran Pajak Penjual (SSP) : Rp. <?= $p['nominal_pajak']; ?><br>
                                            Besaran Pajak Pembagian Hak (SSB) : Rp. <?= $p['ssb']; ?><br>
                                        </td>
                                        <td width="35%">
                                            Harga Transaksi : Rp. <?=$p['harga_transaksi'];?><br>
                                        </td>
                                        
                                        
                                    </tr>
                                    <?php endforeach; }?>
                                </tbody>
                            </table>
                            <br><br>
                    
                        <table class="font-15" width="100%">
                        <tr>
                            <th width="100%" align="left" colspan="2">
                                Bandung, <?=date('d-m-Y');?>
                            </th>
                        </tr>
                        <tr>
                            <th width="100%" align="left" colspan="2">
                                Mengetahui,
                            </th>
                        </tr>
                        <tr>
                            <th width="100%" align="left">
                                Petugas PPAT Kec. Cibiru,
                                </th>
                                <th width="100%" align="right">
                                    CAMAT CIBIRU,
                                </th>
                            </tr>
                            <tr>
                                <th width="100%" align="left">
                                Uwes<br><br><br><br><br><br><br><br>
                                </th>
                                <th width="100%" align="right">
                                Drs. Didin Dikayuana, M. Kesos<br><br><br><br><br><br><br><br>           
                                </th>
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                            <tr>
                                <th width="50%" align="left">
                                    NIP. 19661027 199301 1 002
                                </th>
                                <th width="50%" align="right">
                                NIP. 19601228 200403 2 010
                                </th>
                            </tr>
                            </table>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
            </div>
        </div>
        
        
    </body>
</html>