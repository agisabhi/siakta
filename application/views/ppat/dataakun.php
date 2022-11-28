<body class="theme-blue">
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Data Akun Petugas
                            </h2>

                        </div>

                        <div class="body">

                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>NIP</th>
                                            <th>Nama Petugas</th>
                                            <th>Password</th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php foreach ($akun as $p) : ?>
                                            <tr>
                                                <td><?= $p['username']; ?></td>
                                                <td><?= $p['nama_petugas']; ?></td>
                                                <td><?= $p['password']; ?></td>


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