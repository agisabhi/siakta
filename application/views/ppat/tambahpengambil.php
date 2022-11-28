<script>
    $(document).ready(function() {
        $('#form').validate({

            rules: {
                no_hp_pengambil: {
                    digits: true,
                    minlength: 12,
                }
            },
            messages: {
                no_hp_pengambil: {
                    digits: "Hanya Boleh Angka",
                    required: "Harus Diisi",
                    minlength: "Minimal 12 Digit"
                }
            }
        });
    });

    function ktpValidation() {
        var fileInput =
            document.getElementById('foto_ktp_pengambil');

        var filePath = fileInput.value;
        var filesize = fileInput.files[0].size;
        // Allowing file type
        var allowedExtensions =
            /(\.jpg|\.jpeg|\.png|\.gif)$/i;


        if (!allowedExtensions.exec(filePath)) {
            alert('File Harus JPG/PNG');
            fileInput.value = '';
            return false;
        } else if (filesize > 2098576) {
            alert('Ukuran File Maks. 2 MB');
            fileInput.value = '';
            return false;
        } else {

            // Image preview
            if (fileInput.files && fileInput.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById(
                            'imagePreview').innerHTML =
                        '<img src="' + e.target.result +
                        '"/>';
                };

                reader.readAsDataURL(fileInput.files[0]);
            }
        }
    }
</script>

<body class="theme-blue">


    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div><?= $this->session->flashdata('message'); ?></div>
                        <div class="header">
                            <h2>Data Pengambilan Akta Jual Beli </h2>

                        </div>
                        <div class="body">
                            <form id="form" method="POST" action="" enctype="multipart/form-data">
                                <?php foreach ($pengambilan as $p) : ?>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <label>No Pengajuan</label>
                                            <input type="text" class="form-control" value="<?= $p['no_pengajuan']; ?>" name="no_pengajuan" readonly>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label>Nama Pengambil</label>
                                        <input type="text" class="form-control" name="nama_pengambil" required>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label>No HP</label>
                                        <input type="text" class="form-control" name="no_hp_pengambil" id="no_hp_pengambil" required>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="file" class="form-control" name="foto" id="foto_ktp_pengambil" onchange="return ktpValidation()" required>
                                        <label>Foto KTP maks. 2MB</label>
                                    </div>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit">Tambah</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>