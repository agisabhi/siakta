<body background="<?=base_url();?>assets/images/cibiru.jpg">
<style type="text/css">
    #earth{
        position: relative;
        height: 200px;
        width: 200px;
        margin: 0.05em auto;
        background: #888 url(https://images.fineartamerica.com/images/artworkimages/mediumlarge/1/world-map-planet-earth-globe-3d-illustration-elements-of-this-image-furnished-by-nasa-andreas-neubauer.jpg)
        0 0 repeat;
        border-radius: 50%;
        background-size: 500px;
        animation: rotate 10s linear infinite alternate;
        transition: transform 200ms linear ;
        transform-style: preserve-3d;
        box-shadow: inset 20px 0 80px 6px rgb(0,0,0);
        color: #000;
    }

    @keyframes rotate {
        0% {
            background-position: 0 0;
        }
        100% {
            background-position: 630px 0;
        }
        
    }
</style>
<script type="text/javascript">
$(document).ready(function(){
    $('#formpengajuan').validate({

        rules: {
            username:{
                minlength:6
                
            },
            password:{
                minlength:8
            },
            password2: {
                equalTo: "#password",
                minlength:8
            },
            no_hp: {
                digits: true,
                minlength:12
            }
        }, 
        messages:{
            username:{
                minlength: "Minimal 6 Karakter",
                required: "Kolom harus Diisi"
            },
            password:{
                required: "Kolom Harus Diisi",
                minlength: "Password Minimal 8 Karakter"
            },
            password2:{
                equalTo: "Konfirmasi Password Harus sama",
                required: "Kolom Harus Diisi"
            },
            no_hp: {
                digits: "Kolom Harus Angka",
                required: "Kolom Harus Diisi",
                minlength: "No Hp Harus 12 Digit"
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
</script>
<body class="theme-blue">
    <section>
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
                <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                    <ul class="demo-choose-skin">
                        <li data-theme="red">
                            <div class="red"></div>
                            <span>Red</span>
                        </li>
                        <li data-theme="pink">
                            <div class="pink"></div>
                            <span>Pink</span>
                        </li>
                        <li data-theme="purple">
                            <div class="purple"></div>
                            <span>Purple</span>
                        </li>
                        <li data-theme="deep-purple">
                            <div class="deep-purple"></div>
                            <span>Deep Purple</span>
                        </li>
                        <li data-theme="indigo">
                            <div class="indigo"></div>
                            <span>Indigo</span>
                        </li>
                        <li data-theme="blue">
                            <div class="blue"></div>
                            <span>Blue</span>
                        </li>
                        <li data-theme="light-blue">
                            <div class="light-blue"></div>
                            <span>Light Blue</span>
                        </li>
                        <li data-theme="cyan">
                            <div class="cyan"></div>
                            <span>Cyan</span>
                        </li>
                        <li data-theme="teal">
                            <div class="teal"></div>
                            <span>Teal</span>
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                            <span>Green</span>
                        </li>
                        <li data-theme="light-green">
                            <div class="light-green"></div>
                            <span>Light Green</span>
                        </li>
                        <li data-theme="lime">
                            <div class="lime"></div>
                            <span>Lime</span>
                        </li>
                        <li data-theme="yellow">
                            <div class="yellow"></div>
                            <span>Yellow</span>
                        </li>
                        <li data-theme="amber">
                            <div class="amber"></div>
                            <span>Amber</span>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                            <span>Orange</span>
                        </li>
                        <li data-theme="deep-orange">
                            <div class="deep-orange"></div>
                            <span>Deep Orange</span>
                        </li>
                        <li data-theme="brown">
                            <div class="brown"></div>
                            <span>Brown</span>
                        </li>
                        <li data-theme="grey">
                            <div class="grey"></div>
                            <span>Grey</span>
                        </li>
                        <li data-theme="blue-grey">
                            <div class="blue-grey"></div>
                            <span>Blue Grey</span>
                        </li>
                        <li data-theme="black">
                            <div class="black"></div>
                            <span>Black</span>
                        </li>
                    </ul>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="settings">
                    <div class="demo-settings">
                        <p>GENERAL SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Report Panel Usage</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Email Redirect</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>SYSTEM SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Notifications</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Auto Updates</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>ACCOUNT SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Offline</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Location Permission</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-sm-10">
                    <div class="card">
                        <div class="body">

                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
                                <li role="presentation"><a href="#profile_settings" aria-controls="settings" role="tab" data-toggle="tab">Registrasi</a></li>
                                <li role="presentation"><a href="#change_password_settings" aria-controls="settings" role="tab" data-toggle="tab">Login</a></li>
                            </ul>
                            <div><?= $this->session->flashdata('message'); ?>
                        <?=form_error('username','<small class="text-danger pl-3">','</small>')?></div>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="home">
                                    <div class="panel panel-default panel-post">
                                        <div class="panel-heading">
                                            <div class="media">
                                                <div class="media-left">

                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading">
                                                        <a href="#">Pelayanan Pengajuan Akta Jual Beli Tanah</a>
                                                    </h4>
                                                    Shared publicly - 26 Oct 2018
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <div class="post">
                                                <div id="earth">
                                    </div>
                                                <div class="post-heading">
                                                    <p>Kecamatan Cibiru dibentuk berdasarkan PP No. 16 Tahun 1987 tentang Perubahan Batas wilayah Kotamadya Daerah Tingkat II Bandung dan Kabupaten Daerah Tingkat II Bandung dan Peraturan Daerah Kota Bandung Nomor 07 Tahun 2001 tentang pembentukan dan Susunan Organisasi Kecamatan di Lingkungan Pemerintah Kota Bandung. Kecamatan Cibiru merupakan salah satu bagian wilayah Timur Kota Bandung dengan memiliki luas lahan sebesar 652,930 Ha.<br><br>
                                                        <b>Persyaratan yang perlu disiapkan : </b><br>
                                                        1. Scan Foto Ktp Penjual<br>
                                                        2. Scan Foto Npwp Penjual<br>
                                                        3. Scan Foto Ktp Pembeli<br>
                                                        4. Scan Foto Npwp Pembeli<br>
                                                        5. Scan Sertifikat Tanah (SHM)<br>
                                                        6. Scan Kuitansi Jual Beli <br>
                                                    </p>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    
                                    <div class="panel panel-default panel-post">
                                        <div class="panel-heading">
                                            <div class="media">
                                                <div class="media-left">

                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading">
                                                        <a href="#">Prosedur Pengajuan AJB</a>
                                                    </h4>
                                                    Shared publicly - 01 Oct 2018
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <div class="post">
                                                <div class="post-content">
                                                    <img src="<?=base_url();?>assets/images/prosedur.png">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-footer">
                                            

                                            <div class="form-group">
                                                <div class="form-line">
                                                    
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <h4 class="media-heading">
                                                        Lokasi Kantor Kecamatan Cibiru on Google Maps
                                                    </h4>
                                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.677304168187!2d107.71770291411048!3d-6.9291203697483486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68c32bd8a36869%3A0x1f3fd092ba25729a!2sKantor%20Kecamatan%20Cibiru!5e0!3m2!1sid!2sid!4v1622791860083!5m2!1sid!2sid" width="750" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade in" id="profile_settings">


                                    <div class="card">
                                        <div class="body">
                                            <form enctype="multipart/form-data" method="POST" action="<?= base_url() ?>pengajuan/daftarakun" id="formpengajuan">
                                                <h3>Registrasi</h3>
                                                
                                                    <div class="form-group form-float">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" id="username" name="username" required>
                                                            <label class="form-label">Email</label>
                                                            <?=form_error('username','<small class="text-danger pl-3">','</small>')?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group form-float">
                                                        <div class="form-line">
                                                            <input type="password" class="form-control" id="password" name="password" required>
                                                            <label class="form-label">Password</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group form-float">
                                                        <div class="form-line">
                                                            <input type="password" class="form-control" id="password2" name="password2"  required>
                                                            <label class="form-label">Ulangi Password</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group form-float">
                                                        <div class="form-line">
                                                            <input type="text" name="no_hp" id="alamat_penjual" class="form-control" required>
                                                            <label class="form-label">No HP</label>
                                                        </div>
                                                    </div>
                                                <input type="submit" name="" id="" value="Submit" class="btn btn-info">
                                            </form>
                                        </div>
                                    </div>

                                </div>
                                <div role="tabpanel" class="tab-pane fade in" id="change_password_settings">
                                    <form class="form-horizontal" method="post" action="<?= base_url(); ?>login/login">
                                        <div class="form-group">
                                            <label for="OldPassword" class="col-sm-3 control-label">Email</label>
                                            <div class="col-sm-9">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" id="OldPassword" name="username" placeholder="Masukkan Email" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="NewPassword" class="col-sm-3 control-label">Password</label>
                                            <div class="col-sm-9">
                                                <div class="form-line">
                                                    <input type="password" class="form-control" id="Password" name="password" placeholder="Masukkan Password" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-3 col-sm-9">
                                                <button type="submit" class="btn btn-info">Login</button>

                                            </div>


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

    
