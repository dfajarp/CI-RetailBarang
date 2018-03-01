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

							<li>
								<a href="#">Barang</a>
							</li>
							<li>
								<a href="#">Beli Barang</a>
							</li>
							<li>
								<a href="#">Data Barang</a>
							</li>	
							<li class="active">Detail Barang</li>
						</ul><!-- /.breadcrumb -->
                    <div class="page-content">
                    		<div class="page-header">
							<h1>
								Data Barang
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
    	<p><a href="<?php echo base_url() ?>pemesanan/belibarang" class="btn btn-sm btn-info"><i class="glyphicon glyphicon-repeat"></i> Kembali</a></p>
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
