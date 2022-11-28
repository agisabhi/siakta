<script type="text/javascript">

$(document).ready(function(){
    var rupiah = document.getElementById('harga_transaksi');
		rupiah.addEventListener('keyup', function(e){
			// tambahkan 'Rp.' pada saat form di ketik
			// gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
			rupiah.value = formatRupiah(this.value, );
		});
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
    $('#formpengajuan').validate({

        rules: {
            nik_penjual : {
                digits: true,
                minlength:16,
                maxlength:16
            },
            nik_pembeli : {
                digits: true,
                minlength:16,
                maxlength:16
            },
            no_sertifikat : {
                digits : true,
                minlength:14,
                maxlength:14
            },
            npwp_pembeli: {
                digits : true,
                minlength:15,
                maxlength:15
            },
            npwp_penjual: {
                digits : true,
                minlength:15,
                maxlength:15
            },
            no_telpon:{
                digits:true,
                minlength:12,
                maxlength:12
                
            }  
        }, 
        messages:{
            no_telpon:{
                digits: "Hanya Boleh Angka",
                required: "Harus Diisi",
                minlength: "Minimal 12 Digit"
            },
            nik_penjual:{
                digits: "Kolom Harus Angka",
                required: "Kolom Harus Diisi",
                minlength: "Kolom NIK Harus 16 Digit",
                maxlength: "Kolom NIK Harus 16 Digits"
            },
            nik_pembeli: {
                digits: "Kolom Harus Angka",
                required: "Kolom NIK Harus Diisi",
                minlength: "Kolom NIK Harus 16 Digit",
                maxlength: "Kolom NIK Harus 16 Digit"
            },
            npwp_pembeli: {
                digits: "Kolom Harus Angka",
                required: "Kolom Harus Diisi",
                minlength: "Kolom NPWP Harus 15 Digit",
                maxlength: "Kolom NPWP Harus 15 Digit"
            },
            npwp_penjual: {
                digits: "Kolom harus Angka",
                required: "Kolom Harus Diisi",
                minlength: "Kolom NPWP Harus 15 Digit",
                maxlength: "Kolom NPWP Harus 15 Digit"
            },
            no_sertifikat: {
                digits: "Kolom Harus Angka",
                required: "Kolom Harus Diisi",
                minlength: "Kolom No Sertifikat Harus 14 Digit",
                maxlength: "Kolom No Sertifikat Harus 14 Digit"
            }
        }
    });
});

//Cek Upload Images ktp penjual
function ktpPenjualValidation() {
            var fileInput = 
                document.getElementById('ktp_penjual');
              
            var filePath = fileInput.value;
          var filesize = fileInput.files[0].size;
            // Allowing file type
            var allowedExtensions = 
                    /(\.jpg|\.jpeg|\.png|\.gif)$/i;
            
              
            if (!allowedExtensions.exec(filePath)) {
                alert('File Harus JPG/PNG');
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
function ktpPembeliValidation() {
            var fileInput = 
                document.getElementById('ktp_pembeli');
              
            var filePath = fileInput.value;
          var filesize = fileInput.files[0].size;
            // Allowing file type
            var allowedExtensions = 
                    /(\.jpg|\.jpeg|\.png|\.gif)$/i;
            
              
            if (!allowedExtensions.exec(filePath)) {
                alert('File Harus JPG/PNG');
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
function npwpPenjualValidation() {
            var fileInput = 
                document.getElementById('foto_npwp_penjual');
              
            var filePath = fileInput.value;
          var filesize = fileInput.files[0].size;
            // Allowing file type
            var allowedExtensions = 
                    /(\.jpg|\.jpeg|\.png|\.gif)$/i;
            
              
            if (!allowedExtensions.exec(filePath)) {
                alert('File Harus JPG/PNG');
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
function npwpPembeliValidation() {
            var fileInput = 
                document.getElementById('foto_npwp_pembeli');
              
            var filePath = fileInput.value;
          var filesize = fileInput.files[0].size;
            // Allowing file type
            var allowedExtensions = 
                    /(\.jpg|\.jpeg|\.png|\.gif)$/i;
            
              
            if (!allowedExtensions.exec(filePath)) {
                alert('File Harus JPG/PNG');
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
function SertifikatValidation() {
            var fileInput = 
                document.getElementById('foto_sertifikat');
              
            var filePath = fileInput.value;
          var filesize = fileInput.files[0].size;
            // Allowing file type
            var allowedExtensions = 
                    /(\.jpg|\.jpeg|\.png|\.gif)$/i;
            
              
            if (!allowedExtensions.exec(filePath)) {
                alert('File Harus JPG/PNG');
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
function KuitansiValidation() {
            var fileInput = 
                document.getElementById('foto_kuitansi');
              
            var filePath = fileInput.value;
          var filesize = fileInput.files[0].size;
            // Allowing file type
            var allowedExtensions = 
                    /(\.jpg|\.jpeg|\.png|\.gif)$/i;
            
              
            if (!allowedExtensions.exec(filePath)) {
                alert('File Harus JPG/PNG');
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
$(document).ready(function(){
 
 
 $('#smartwizard').smartWizard();
 $('#smartwizard').smartWizard({
  selected: 0, // Initial selected step, 0 = first step
  theme: 'default', // theme for the wizard, related css need to include for other than default theme
  justified: true, // Nav menu justification. true/false
  darkMode:true, // Enable/disable Dark Mode if the theme supports. true/false
  autoAdjustHeight: true, // Automatically adjust content height
  cycleSteps: false, // Allows to cycle the navigation of steps
  backButtonSupport: true, // Enable the back button support
  enableURLhash: true, // Enable selection of the step based on url hash
  transition: {
      animation: 'none', // Effect on navigation, none/fade/slide-horizontal/slide-vertical/slide-swing
      speed: '400', // Transion animation speed
      easing:'' // Transition animation easing. Not supported without a jQuery easing plugin
  },
  toolbarSettings: {
      toolbarPosition: 'bottom', // none, top, bottom, both
      toolbarButtonPosition: 'right', // left, right, center
      showNextButton: true, // show/hide a Next button
      showPreviousButton: true, // show/hide a Previous button
      toolbarExtraButtons: [] // Extra buttons to show on toolbar, array of jQuery input/buttons elements
  },
  anchorSettings: {
      anchorClickable: true, // Enable/Disable anchor navigation
      enableAllAnchors: false, // Activates all anchors clickable all times
      markDoneStep: true, // Add done state on navigation
      markAllPreviousStepsAsDone: true, // When a step selected by url hash, all previous steps are marked done
      removeDoneStepOnNavigateBack: false, // While navigate back done step after active step will be cleared
      enableAnchorOnDoneStep: true // Enable/Disable the done steps navigation
  },
  keyboardSettings: {
      keyNavigation: true, // Enable/Disable keyboard navigation(left and right keys are used if enabled)
      keyLeft: [37], // Left key code
      keyRight: [39] // Right key code
  },
  lang: { // Language variables for button
      next: 'Next',
      previous: 'Previous'
  },
  disabledSteps: [], // Array Steps disabled
  errorSteps: [], // Highlight step with errors
  hiddenSteps: [] // Hidden steps
});

 
});

$('#smartwizard').smartWizard({
  transition: {
      animation: 'none', // Effect on navigation, none/fade/slide-horizontal/slide-vertical/slide-swing
      speed: '400', // Transion animation speed
      easing:'' // Transition animation easing. Not supported without a jQuery easing plugin
  }
});

$('#smartwizard').smartWizard({
  toolbarSettings: {
      toolbarPosition: 'bottom', // none, top, bottom, both
      toolbarButtonPosition: 'right', // left, right, center
      showNextButton: true, // show/hide a Next button
      showPreviousButton: true, // show/hide a Previous button
      toolbarExtraButtons: [] // Extra buttons to show on toolbar, array of jQuery input/buttons elements
  }
});
// Disable step
$('#smartwizard').smartWizard("stepState", [1,3], "disable");
 
// Hide step
$('#smartwizard').smartWizard("stepState", [2], "hide");

// Get current step index
var stepIndex = $('#smartwizard').smartWizard("getStepIndex");

// Show the loader
$('#smartwizard').smartWizard("loader", "show");
 
// Hide the loader
$('#smartwizard').smartWizard("loader", "hide");

// Change theme
var options = {
  theme: 'dark'
};
$('#smartwizard').smartWizard("setOptions", options);
 
// Change animation
var options = {
  transition: {
      animation: 'slide-h'
  },
};
$('#smartwizard').smartWizard("setOptions", options);
</script>
<body class="theme-blue">
    <section class="content">
    <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-sm-10">
                    <div class="card">
                        <div class="body">
                            <div id="smartwizard">
                                
                                <ul class="nav">
                                        <li>
                                            <a class="nav-link" href="#step-1">
                                                Data Pihak yang Mengalihkan
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="#step-2">
                                                Data Pihak yang Menerima
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="#step-3">
                                                Data Sertifikat
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="#step-4">
                                                Data Jual Beli
                                            </a>
                                        </li>
                                    </ul>

                                    <form enctype="multipart/form-data" method="POST" action="<?= base_url() ?>pengajuan/pendaftaran" id="formpengajuan">
                                        <div class="tab-content">
                                        <div id="step-1" class="tab-pane" role="tabpanel">
                                                <h3>Data Pihak yang Mengalihkan</h3>
                                                
                                                    <div class="form-group form-float">
                                                        <div class="form-line">
                                                            <input type="number" class="form-control" id="nik_penjual" name="nik_penjual" required>
                                                            <label class="form-label">Nomor Induk Kependudukan</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group form-float">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" id="nama_penjual" name="nama_penjual" id="password" required>
                                                            <label class="form-label">Nama Lengkap</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group form-float">
                                                        <div class="form-line">
                                                            <textarea name="alamat_penjual" rows="5" id="alamat_penjual" class="form-control" required></textarea>
                                                            <label class="form-label">Alamat Lengkap</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group form-float">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" id="no_telpon" name="no_telpon" required>
                                                            <label class="form-label">No HP</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group form-float">
                                                        <div class="form-line">
                                                            <input type="number" class="form-control" id="npwp_penjual" name="npwp_penjual" required>
                                                            <label class="form-label">Nomor NPWP</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group form-float">
                                                        <div class="form-line">
                                                            <input type="file" class="form-control" name="foto_ktp_penjual" onchange="return ktpPenjualValidation()" id="ktp_penjual" required>
                                                            <label>Foto KTP (Maks. 2 MB)</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group form-float">
                                                        <div class="form-line">
                                                            <input type="file" class="form-control" name="foto_npwp_penjual" onchange="return npwpPenjualValidation()" id="foto_npwp_penjual" required>
                                                            <label>Foto NPWP (Maks. 2 MB)</label>
                                                        </div>
                                                    </div>
                                                
                                        </div>
                                        <div id="step-2" class="tab-pane" role="tabpanel">
                                        <h3>Data Pihak yang Menerima</h3>
                                                
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                        <input type="text" name="nik_pembeli" id="nik_pembeli" class="form-control" required>
                                                        <label class="form-label">Nomor Induk Kependudukan</label>
                                                    </div>
                                                </div>
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                        <input type="text" name="nama_pembeli" id="nama_pembeli" class="form-control" required>
                                                        <label class="form-label">Nama Pembeli</label>
                                                    </div>
                                                </div>
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                        <textarea name="alamat_pembeli" rows="5" id="alamat_pembeli" class="form-control" required></textarea>
                                                        <label class="form-label">Alamat Lengkap</label>
                                                    </div>
                                                </div>
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                        <input type="text" name="npwp_pembeli" id="npwp_pembeli" class="form-control" required>
                                                        <label class="form-label">Nomor NPWP</label>
                                                    </div>
                                                </div>
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                        <input type="file" class="form-control" name="foto_ktp_pembeli" id="ktp_pembeli" onchange="return ktpPembeliValidation()" required>
                                                        <label>Foto KTP (Maks. 2 MB)</label>
                                                    </div>
                                                </div>
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                        <input type="file" class="form-control" name="foto_npwp_pembeli" id="foto_npwp_pembeli" onchange="return npwpPembeliValidation()" required>
                                                        <label>Foto NPWP (Maks. 2 MB)</label>
                                                    </div>
                                                </div>
                                        </div>
                                        <div id="step-3" class="tab-pane" role="tabpanel">
                                        <h3>Data Sertifikat</h3>
                                                
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                        <input type="text" name="no_sertifikat" id="no_sertifikat" class="form-control" required>
                                                        <label class="form-label">Nomor Sertifikat</label>
                                                    </div>
                                                </div>
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                        <input type="text" name="nama_pemilik" id="nama_pemilik" class="form-control" required>
                                                        <label class="form-label">Nama Pemilik</label>
                                                    </div>
                                                </div>
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                        <textarea name="alamat_tanah" rows="5" id="alamat_tanah" class="form-control" required></textarea>
                                                        <label class="form-label">Alamat Tanah</label>
                                                    </div>
                                                </div>
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                        <input type="number" name="luas_tanah" id="luas_tanah" class="form-control" required>
                                                        <label class="form-label">Luas Tanah</label>
                                                    </div>
                                                </div>
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                        <input type="file" class="form-control" name="foto_sertifikat" id="foto_sertifikat" onchange="return SertifikatValidation()" required>
                                                        <label>Foto Sertifikat (Maks. 2 MB)</label>
                                                    </div>
                                                </div>
                                        </div>
                                        <div id="step-4" class="tab-pane" role="tabpanel">
                                        <h3>Data Jual Beli</h3>
                                                
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                        <input type="text" name="harga_transaksi" align="right" id="harga_transaksi" class="form-control" required>
                                                        <label class="form-label">Harga Transaksi</label>
                                                    </div>
                                                </div>
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                        <input type="file" name="foto_kuitansi" class="form-control" id="foto_kuitansi" onchange="return KuitansiValidation()" required>
                                                        <label>Foto Kuitansi</label>
                                                    </div>
                                                </div>
                                                <input type="submit" name="" id="" value="Submit" class="btn btn-info">
                                            </div>
                                        </form>
                                        </div>
                            </div>
                                        </div>
                                    </div>
            </div>
        </div>
    </div>
    </section>