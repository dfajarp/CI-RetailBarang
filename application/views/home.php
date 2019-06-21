<?php $this->load->view('theme/header'); ?>
<?php $this->load->view('theme/sidebar'); ?>


<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="<?= base_url("welcome/home"); ?>">Home</a>
                </li>
                <li class="active">Dashboard</li>
            </ul><!-- /.breadcrumb -->


        </div>

        <div class="page-content">
            <div class="page-header">
                <h1>
                    Dashboard
                    <small>
                        <i class="ace-icon fa fa-angle-double-right"></i>
                        Data &amp; Statistik
                    </small>
                </h1>
            </div><!-- /.page-header -->

            <!-- PAGE CONTENT BEGINS -->
            <div class="row">
                <div class="space-6"></div>

                <section class="content">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>
                                        <?php
                                        $this->db->from('barang');
                                        echo $this->db->count_all_results();
                                        ?>
                                    </h3>

                                    <p>Produk</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a class="small-box-footer">info <i class="fa fa-arrow-circle-up"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3><?php
                                        $this->db->from('supplier');
                                        echo $this->db->count_all_results();
                                        ?></h3>

                                    <p>Supplier</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-android-car"></i>
                                </div>
                                <a class="small-box-footer">info <i class="fa fa-arrow-circle-up"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3><?php
                                        $this->db->from('member');
                                        echo $this->db->count_all_results();
                                        ?></h3>

                                    <p>Member</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a class="small-box-footer">info <i class="fa fa-arrow-circle-up"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3><?php
                                        $this->db->from('jual_brg');
                                        echo $this->db->count_all_results();
                                        ?></h3>

                                    <p>Barang yang Terjual</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a class="small-box-footer">info <i class="fa fa-arrow-circle-up"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                    </div>
                    <!-- /.row -->
                    <!-- Main row -->
                    <div class="row">
                        <!-- Left col -->
                        <section class="col-lg-7 connectedSortable">
                             <div class="box box-primary" style="border: 1px solid #ddd;">
                                <div class="box-header">
                                    Data Penjualan
                                </div>
                                <div class="box-body">
                                    <div class="chart tab-pane active" id="penjualan-chart" style="position: relative; height: 300px;"></div>
                                </div>
                            </div>

                        </section>
                        <!-- /.Left col -->
                        <!-- right col (We are only adding the ID to make the widgets sortable)-->
                        <section class="col-lg-5 connectedSortable">
                                <div class="box box-primary" style="border: 1px solid #ddd;">
                                <div class="box-header">
                                     Data Pembelian Barang
                                </div>
                                <div class="box-body">
                                    <div class="chart tab-pane active" id="pembelian_barang" style="position: relative; height: 300px;"></div>
                                </div>
                            </div>
                        </section>
                                <div class="col-lg-12 connectedSortable">
                            <div class="box box-primary" style="border: 1px solid #ddd;">
                                <div class="box-header">
                                    Nilai Penjualan
                                </div>
                                <div class="box-body">
                                    <div class="chart tab-pane active" id="nilai_penjualan" style="position: relative; height: 300px;"></div>
                                </div>
                            </div>
                            </div>
                    </div>
                    <!-- /.row (main row) -->

                </section>

            </div><!-- /.page-content -->
        </div>


        
        <!-- jQuery 3 -->
        <script src="<?= base_url() ?>/assets/bower_components/jquery/dist/jquery.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="<?= base_url() ?>/assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button);
        </script>
        <!-- Bootstrap 3.3.7 -->
        <script src="<?= base_url() ?>/assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- Morris.js charts -->
        <script src="<?= base_url() ?>/assets/bower_components/raphael/raphael.min.js"></script>
        <script src="<?= base_url() ?>/assets/bower_components/morris.js/morris.min.js"></script>
        <!-- Sparkline -->
        <script src="<?= base_url() ?>/assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
        <!-- jvectormap -->
        <script src="<?= base_url() ?>/assets/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="<?= base_url() ?>/assets/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="<?= base_url() ?>/assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
        <!-- daterangepicker -->
        <script src="<?= base_url() ?>/assets/bower_components/moment/min/moment.min.js"></script>
        <script src="<?= base_url() ?>/assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
        <!-- datepicker -->
        <script src="<?= base_url() ?>/assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="<?= base_url() ?>/assets/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
        <!-- Slimscroll -->
        <script src="<?= base_url() ?>/assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="<?= base_url() ?>/assets/bower_components/fastclick/lib/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="<?= base_url() ?>/assets/dist/js/adminlte.min.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <!-- <script src="<?= base_url() ?>/assets/dist/js/pages/dashboard.js"></script> -->
        <!-- AdminLTE for demo purposes -->
        <script src="<?= base_url() ?>/assets/dist/js/demo.js"></script>

        <script src="<?= base_url() ?>/assets/bower_components/jquery/dist/jquery.min.js"></script>
    </div>
</div>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url() ?>/assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?= base_url() ?>/assets/bower_components/raphael/raphael.min.js"></script>
<script src="<?= base_url() ?>/assets/bower_components/morris.js/morris.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url() ?>/assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>/assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url() ?>/assets/dist/js/demo.js"></script>

        <script type="text/javascript">
            $(function(){

                var area = new Morris.Area({
                    element   : 'penjualan-chart',
                    resize    : true,
                    data      : <?= $statistik_penjualan ?>,
                    xkey      : 'tgl',
                    ykeys     : ['jml'],
                    labels    : ['Total Transaksi'],
                    lineColors: ['#45ad9c'],
                    hideHover : 'auto'
                  });
                    
                var data = new Morris.Area({
                    element   : 'nilai_penjualan',
                    resize    : true,
                    data      : <?= $nilai_transaksi ?>,
                    xkey      : 'tgl',
                    ykeys     : ['jml'],
                    labels    : ['Total Pendapatan'],
                    lineColors: ['#20B2AA'],
                    hideHover : 'auto'
                });

                var bar = new Morris.Bar({
                    element: 'pembelian_barang',
                    resize: true,
                    data: <?= $pembelian_barang ?>,
                    xkey: 'tanggal_beli',
                    ykeys: ['jml'],
                    labels: ['Total Pembelian Barang'],
                    barColors: ['#800000'],
                    hideHover: 'auto'
                });

                var pms = new Morris.Donut({
                  element: 'pms',
                  resize: true,
                  colors: ["#3c8dbc", "#f56954"],
                  data: <?= $pms ?>,
                  hideHover: 'auto'
                });
            });
        </script>

        </body>
        </html>