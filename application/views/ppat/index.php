<body class="theme-blue">
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a href="<?=base_url();?>ppat/pendaftaran">
                    <div class="info-box bg-blue hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                            <div class="text">Pendaftaran Baru</div>
                            <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"><?=$jad;?></div>
                        
            
                        </div>
                    </div>
                </a>
                </div>
                
            
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a href="<?=base_url();?>ppat/pajak">
                    <div class="info-box bg-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                            <div class="text">Validasi Pajak Baru</div>
                            <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"><?=$val;?></div>
                        
            
                        </div>
                    </div>
                </a>
                </div>
                
            </div>
            <!-- #END# Widgets -->
            <!-- CPU Usage -->
            

            
        </div>
    </section>