<body class="theme-blue">
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>ARSIP</h2>
            </div> 
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Data Arsip Akta Jual Beli
                            </h2>

                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <div><?= $this->session->flashdata('message'); ?></div>
                                <div>
                                <a href="<?= base_url(); ?>ppat/tambaharsip" class="btn bg-indigo waves-effect">
                                    <i class="material-icons">trending_up</i>
                                    <span>Tambah Data</span>
                                </a>
                            </div>
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>No Pendaftaran</th>
                                            <th>Nama Penjual</th>
                                            <th>Nama Pembeli</th>
                                            <th>File</th>
                                            
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php foreach ($pengajuan as $p) : ?>
                                            <tr>
                                                <td><?= $p['no_pengajuan']; ?></td>
                                                <td><?= $p['nama_penjual']; ?></td>
                                                <td><?= $p['nama_pembeli']; ?></td>
                                                <td><a href="<?=base_url();?>ppat/downloadajb/<?= $p['salinan']; ?>"><?= $p['no_pengajuan']; ?>.pdf</a></td>
                                                
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>