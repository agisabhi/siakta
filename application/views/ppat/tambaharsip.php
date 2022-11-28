<body class="theme-blue">
<script type="text/javascript">
function SalinanData() {
            var fileInput = 
                document.getElementById('salinan');
              
            var filePath = fileInput.value;
          var filesize = fileInput.files[0].size;
            // Allowing file type
            var allowedExtensions = 
                    /(\.pdf)$/i;
            
              
            if (!allowedExtensions.exec(filePath)) {
                alert('File Harus PDF');
                fileInput.value = '';
                return false;
            } else if(filesize>2098576){
                alert('Ukuran File Maks. 2 MB');
                fileInput.value = '';
                return false;
            }
            else 
            {
              
                // Image preview
                if (fileInput.files && fileInput.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        document.getElementById(
                            'imagePreview').innerHTML = 
                            '<img src="' + e.target.result
                            + '"/>';
                    };
                      
                    reader.readAsDataURL(fileInput.files[0]);
                }
            }
        }

</script>

    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Tambah Salinan AKta Jual Beli</h2>
                        </div>
                        <div class="body">
                            <form enctype="multipart/form-data" id="form_validation" method="POST" action="">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label>No Pengajuan</label>
                                        <select name="no_pengajuan" class="form-control show-tick">
                                            <?php foreach ($pengajuan as $p) : ?>
                                                <option value="<?= $p['no_pengajuan']; ?>"><?= $p['no_pengajuan']; echo' -- '.$p['nama_penjual'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label>Scan Salinan AJB</label>
                                        <input type="file" name="salinan" id="salinan" class="form-control" onchange="return SalinanData()">
                                    </div>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                                <a href="<?=base_url();?>ppat/arsipajb" class="btn btn-danger">Kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>