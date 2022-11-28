<body class="theme-blue">
    <script type="text/javascript">
        $(document).ready(function(){
    var rupiah = document.getElementById('harga_transaksi');
		rupiah.addEventListener('keyup', function(e){
			// tambahkan 'Rp.' pada saat form di ketik
			// gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
			rupiah.value = formatRupiah(this.value);
		});
        function formatRupiah(angka, prefix){
			var number_string = angka.replace(/[^,\d]/gi, '').toString(),
            split    = number_string.split(','),
            sisa     = split[0].length % 3,
            rupiah     = split[0].substr(0, sisa),
            ribuan     = split[0].substr(sisa).match(/\d{3}/gi);
            
        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }
        
        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : rupiah+sisa;

		}
        });
    </script>

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
                                                        <label for="NewPassword" class="col-sm-3 control-label">Harga Transaksi</label>
                                                        <div class="col-sm-9">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" name="harga_transaksi" id="harga_transaksi" value="<?= $p['harga_transaksi']; ?>" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="OldPassword" class="col-sm-3 control-label">Foto Kuitansi </label>
                                                        <div class="col-sm-9">
                                                            <div class="form-line">
                                                                <input type="hidden" name="file_kui" value="<?= $p['foto_kuitansi']; ?>">
                                                                <input type="file" name="foto_kuitansi">
                                                                <img src="<?= base_url(); ?>assets/foto/<?= $p['foto_kuitansi']; ?>" width="500" height="400">
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