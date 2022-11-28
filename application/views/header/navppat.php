<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="image">
            <img src="<?= base_url(); ?>/assets/images/user.png" width="48" height="48" alt="User" />
        </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= $pen['username']; ?></div>
            <div class="email">john.doe@example.com</div>
            <div class="btn-group user-helper-dropdown">
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                <ul class="dropdown-menu pull-right">

                    <li><a href="javascript:void(0);"><i class="material-icons"></i></a></li>
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
                <a href="<?= base_url(); ?>ppat">
                    <i class="material-icons">home</i>
                    <span>Beranda</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url(); ?>ppat/pendaftaran">
                    <i class="material-icons">assignment</i>
                    <span>Pendaftaran</span>
                </a>
            </li>

            <li>
                <a href="<?= base_url(); ?>ppat/peninjauan" class="menu-toggle">
                    <i class="material-icons">widgets</i>
                    <span>Penjadwalan Peninjauan </span>
                </a>

            </li>
            <li>
                <a href="<?= base_url(); ?>ppat/pajak" class="menu-toggle">
                    <i class="material-icons">assignment</i>
                    <span>Pembayaran Pajak </span>
                </a>

            </li>
            <li>
                <a href="<?= base_url(); ?>ppat/pengambilan" class="menu-toggle">
                    <i class="material-icons">assignment</i>
                    <span>Pengambilan AJB</span>
                </a>

            </li>
            <li>
                <a href="<?= base_url(); ?>ppat/arsipajb" class="menu-toggle">
                    <i class="material-icons">assignment</i>
                    <span>Salinan AJB</span>
                </a>

            </li>
            <li>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">layers</i>
                    <span>Petugas</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="<?= base_url(); ?>ppat/datapetugas">Data Petugas</a>
                    </li>
                    <li>
                        <a href="<?= base_url(); ?>ppat/dataakun">Data Akun Petugas</a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">layers</i>
                    <span>Laporan</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="<?= base_url(); ?>laporan/ajb">Pengajuan AJB</a>
                    </li>
                    

                </ul>
            </li>

        </ul>
    </div>
    <!-- #Menu -->
    <!-- Footer -->
    <div class="legal">
        <div class="copyright">
            &copy; 2021 <a href="javascript:void(0);">Agis Abhi Rafdhi</a>.
        </div>
        <div class="version">
            <b>Version: </b> BETA
        </div>
    </div>
    <!-- #Footer -->
</aside>