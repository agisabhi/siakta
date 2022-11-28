<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="image">
            <img src="<?= base_url(); ?>/assets/images/user.png" width="48" height="48" alt="User" />
        </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= $jad['username'] ?></div>

            <div class="btn-group user-helper-dropdown">
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                <ul class="dropdown-menu pull-right">
                    <li><a href="#"><i class="material-icons"></i></a></li>
                    <li><a href="#"><i class="material-icons"></i></a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="<?= base_url(); ?>login/logout"><i class="material-icons">input</i>Sign Out</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active">
                <a href="<?= base_url(); ?>penjual">
                    <i class="material-icons">home</i>
                    <span>Beranda</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url(); ?>penjual/peninjauan">
                    <i class="material-icons">trending_down</i>
                    <span>Jadwal Peninjauan</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url(); ?>penjual/bayarpajak">
                    <i class="material-icons">attach_money</i>
                    <span>Bukti Pembayaran Pajak</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url(); ?>penjual/pengambilan">
                    <i class="material-icons">layers</i>
                    <span>Jadwal Pengambilan</span>
                </a>
            </li>




            <li class="header"></li>

        </ul>
    </div>
    <!-- #Menu -->
    <!-- Footer -->
    <div class="legal">
        <div class="copyright">
            &copy; 2021 <a href="#">Agis Abhi Rafdhi</a>.
        </div>
        <div class="version">
            <b>Version: </b> BETA
        </div>
    </div>
    <!-- #Footer -->
</aside>