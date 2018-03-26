<?php $this->load->view('theme/header_manajemen'); ?>
<?php $this->load->view('theme/sidebar_manajemen'); ?>

<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="<?= base_url("manajemen"); ?>">Home</a>
                </li>

                <li>
                    <a href="#">Laporan</a>
                </li>
                <li>
                    <a href="#">Pembelian</a>
                </li>	
            </ul><!-- /.breadcrumb -->

            <div class="page-content">
                <div class="page-header">
                    <h1>
                        Laporan
                        <small>
                            <i class="ace-icon fa fa-angle-double-right"></i>
                            Pembelian
                        </small>
                    </h1>
                </div><!-- /.page-header -->

                <div class="row">
                    <div class="col-xs-6">
                        <!-- PAGE CONTENT BEGINS -->
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <b>Data Barang Pending</b>
                                    </div>
                                    <div class="panel-body">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Id Pembelian</th>
                                                    <th>Supplier</th>
                                                    <th>Tanggal Beli</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <?php
                                            $no = 1;
                                            foreach ($beli_barang_pending as $p) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $no++ ?></td>
                                                    <td><?php echo "TR-" . str_pad($p->id_pembelian, 4, "0", STR_PAD_LEFT) ?></td>
                                                    <td><?php echo $p->nama_supplier ?></td>
                                                    <td><?php echo $p->tanggal_beli ?></td>
                                                    <td>
                                                        <a href="<?php echo base_url() ?>pemesanan/detail/<?php echo $p->id_pembelian ?>" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-zoom-in"></i></a>
                                                    </td>
                                                </tr>
                                            <?php } ?>

                                        </table>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <!-- PAGE CONTENT BEGINS -->
                        <div class="row">
                            <div class="col-xs-12">

                                <div class="panel panel-success">
                                    <div class="panel-heading">
                                        <b>Data Barang Sukses</b>
                                    </div>
                                    <div class="panel-body">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Id Pembelian</th>
                                                    <th>Supplier</th>
                                                    <th>Tanggal Beli</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <?php
                                            $no = 1;
                                            foreach ($beli_barang_sukses as $p) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $no++ ?></td>
                                                    <td><?php echo "TR-" . str_pad($p->id_pembelian, 4, "0", STR_PAD_LEFT) ?></td>
                                                    <td><?php echo $p->nama_supplier ?></td>
                                                    <td><?php echo $p->tanggal_beli ?></td>
                                                    <td><a href="<?php echo base_url() ?>pemesanan/detail/<?php echo $p->id_pembelian ?>" class="btn btn-success btn-sm""><i class="glyphicon glyphicon-zoom-in                                                                                                                                                                             "></i></a></td>	
                                                </tr>
                                            <?php } ?>

                                        </table>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PAGE CONTENT ENDS -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.page-content -->
</div>
</div><!-- /.main-content -->