
<script type="text/javascript">	
$(document).ready(function(){
		var rupiah = document.getElementById('rupiah');
		var rupiah2 = document.getElementById('rupiah2');
		rupiah.addEventListener('keyup', function(e){
			// tambahkan 'Rp.' pada saat form di ketik
			// gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
			rupiah.value = formatRupiah(this.value, );
		});
		rupiah2.addEventListener('keyup', function(e){
			// tambahkan 'Rp.' pada saat form di ketik
			// gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
			rupiah2.value = formatRupiah(this.value, );
		});
 
		/* Fungsi formatRupiah */
		function formatRupiah(angka, prefix){
			var number_string = angka.replace(/[^,\d]/g, '').toString(),
			split   		= number_string.split(','),
			sisa     		= split[0].length % 3,
			rupiah     		= split[0].substr(0, sisa),
			ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);
 
			// tambahkan titik jika yang di input sudah menjadi angka ribuan
			if(ribuan){
				separator = sisa ? '.' : '';
				rupiah += separator + ribuan.join('.');
			}
 
			rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
			return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
		}
});
    </script>

<body class="theme-blue">


    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Bukti Pembayaran Pajak</h2>

                        </div>
                        <div class="body">
                            <div><?= $this->session->flashdata('message'); ?></div>
                            <form id="form_validation" method="POST" action="" enctype="multipart/form-data">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label>Kode Billing Pajak</label>
                                        <input type="text" class="form-control" name="billing_pajak" required>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label>Nominal SSP</label>
                                        <input type="text" name="nominal_pajak" id="rupiah" align="right" required class="form-control">
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label>Nominal SSB</label>
                                        <input type="text" name="ssb" id="rupiah2" align="right" required class="form-control">
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label>No Pengajuan</label>
                                        <select name="no_pengajuan" required class="form-control">
                                        <?php foreach ($pajak as $p ): ?>
                                            <option value="<?=$p['no_pengajuan'];?>"><?=$p['no_pengajuan']; echo ' -- '.$p['nama_penjual'];?></option>
                                      <?php  endforeach;?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label>Bukti Bayar Pajak</label>
                                        <input type="file" name="bukti_transfer" class="form-control">
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
