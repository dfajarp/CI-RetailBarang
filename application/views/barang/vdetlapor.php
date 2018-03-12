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
                    <a href="#">Detail Barang</a>
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

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Detail Barang
                    </div>
                    <div class="panel-body">
                        <p><a href="<?php echo base_url() ?>laporan/laporbeli" class="btn btn-sm btn-info"><i class="glyphicon glyphicon-repeat"></i> Kembali</a></p>
                        <table class="table table-striped">
                            <tr>
                                <td>Id Pembelian</td>
                                <td><?php echo "TR-" . str_pad($data->id_pembelian, 4, "0", STR_PAD_LEFT) ?></td>
                            </tr>
                            <tr>
                                <td>Supplier</td>
                                <td><?php echo $data->nama_supplier; ?></td>
                            </tr>
                            <tr>
                                <td>Tanggal Beli</td>
                                <td><?php echo $data->tanggal_beli; ?></td>
                            </tr>
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
