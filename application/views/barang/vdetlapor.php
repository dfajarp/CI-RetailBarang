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
                <li>
                    <a class="active">Detail Barang</a>
                </li> 
            </ul><!-- /.breadcrumb -->
            <div class="page-content">
                <div class="page-header">
                    <h1>
                        Pembelian
                        <small>
                            <i class="ace-icon fa fa-angle-double-right"></i>
                            Detail Barang
                        </small>
                    </h1>
                </div><!-- /.page-header -->







                <div class="row">
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="clearfix">
                                    <div class="pull-right tableTools-container"></div>
                                </div>
                                <div class="table-header">
                                    Data Supplier
                                    <a href="<?php echo base_url() ?>laporan/laporbeli" class="btn btn-sm btn-danger pull-right">
                                        <i class="glyphicon glyphicon-repeat"></i> Kembali</a>
                                </div>
                                <table id="simple-table" class="table  table-bordered table-hover">
                                    <thead>
                                    <th class="center">ID Pembelian</th>
                                    <th class="center">Supplier</th>
                                    <th class="center">Tanggal Beli</th>

                                    </tr>
                                    </thead>

                                    <tbody>

                                    <td class="center"><?php echo "TR-" . str_pad($data_pembelian->id_pembelian, 4, "0", STR_PAD_LEFT) ?></td>

                                    <td class="center"><?php echo $data_pembelian->nama_supplier; ?></td>
                                    <td class="center"><?php echo $data_pembelian->tanggal_beli; ?></td>
                                    </tr>



                                    </tbody>
                                </table>
                            </div><!-- /.span -->
                        </div><!-- /.row -->
                        <div class="hr hr-18 dotted hr-double"></div>
                        <?php
                        foreach ($data_barang as $p) {
                            ?>
                            <div class="col-xs-4">
                                <div class="clearfix">
                                    <div class="pull-right tableTools-container"></div>
                                </div>
                                <center><div class="table-header">
                                        Barang
                                    </div></center>


                                <table id="simple-table" class="table  table-bordered table-hover">
                                    <td colspan="2">
                                        <img src="<?php echo $p->gambar_barang; ?>" width="100%" >
                                    </td>
                                    <tr>
                                        <th class="center"  bgcolor="CCCCCC" width="130">ID Barang</th>
                                        <td class="center"><?php echo $p->id_brg; ?></td>
                                    </tr>
                                    <tr>

                                        <th class="center" bgcolor="CCCCCC" width="130">Kategori</th>
                                        <td class="center"><?php echo $p->nama_kategori; ?></td>
                                    </tr>
                                    <tr>

                                        <th class="center" bgcolor="CCCCCC" width="130">Nama Barang</th>
                                        <td class="center"><?php echo $p->nama_brg; ?></td>
                                    </tr>
                                    <tr>

                                        <th class="center" bgcolor="CCCCCC" width="130">Harga Barang</th>
                                        <td class="center"><?php echo "Rp" . number_format($p->harga_brg, "2", ",", "."); ?></td>
                                    </tr>
                                    <tr>

                                        <th class="center" bgcolor="CCCCCC" width="130">Jumlah Barang</th>
                                        <td class="center"><?php echo $p->jumlah_brg; ?></td>
                                    </tr>
                                    <tr>

                                        <th class="center" bgcolor="CCCCCC" width="130">Deskripsi Barang</th>
                                        <td class="center"><?php echo $p->deskripsi_barang; ?></td>
                                    </tr>
                                </table>




                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>