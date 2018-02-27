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
							<li class="active">Data Barang</li>
						</ul><!-- /.breadcrumb -->

					<div class="page-content">
						<div class="page-header">
							<h1>
								Beli Barang
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Data Barang
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
		Data Barang
	</div>
<div class="panel-body">
	<a href="<?= base_url("pemesanan/vtambah"); ?>" class="btn btn-sm btn-primary">
		<i class="glyphicon glyphicon-plus"></i> Tambah</a>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>No</th>
					<th>Id Pembelian</th>
					<th>Supplier</th>
					<th>Tanggal Beli</th>
					<th>Username</th>
					<th>Status</th>
				</tr>
			</thead>
		<?php
		$no = 1;
		foreach ($beli_barang as $p){
			?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $p->id_pembelian ?></td>
				<td><?php echo $p->id_supplier ?></td>
				<td><?php echo $p->tanggal_beli ?></td>
				<td><?php echo $p->username ?></td>
				<td><?php echo $p->status ?></td>
				<td>
					<a href="<?php echo base_url('pemesanan/edit/'.$p->id_pembelian); ?>" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-pencil"></i></a>

					 <a href="<?php echo base_url('pemesanan/hapus/'.$p->id_pembelian); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda Yakin menghapus data ini?')"><i class="glyphicon glyphicon-trash"></i></a>
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

<div class="panel panel-default">
	<div class="panel-heading">
		Data Barang
	</div>
<div class="panel-body">
	<a href="<?= base_url("pemesanan/vtambah"); ?>" class="btn btn-sm btn-primary">
		<i class="glyphicon glyphicon-plus"></i> Tambah</a>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>No</th>
					<th>Id Pembelian</th>
					<th>Supplier</th>
					<th>Tanggal Beli</th>
					<th>Username</th>
					<th>Status</th>
				</tr>
			</thead>
		<?php
		$no = 1;
		foreach ($beli_barang as $p){
			?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $p->id_pembelian ?></td>
				<td><?php echo $p->id_supplier ?></td>
				<td><?php echo $p->tanggal_beli ?></td>
				<td><?php echo $p->username ?></td>
				<td><?php echo $p->status ?></td>
				<td>
					<a href="<?php echo base_url('pemesanan/edit/'.$p->id_pembelian); ?>" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-pencil"></i></a>

					 <a href="<?php echo base_url('pemesanan/hapus/'.$p->id_pembelian); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda Yakin menghapus data ini?')"><i class="glyphicon glyphicon-trash"></i></a>
					</td>
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