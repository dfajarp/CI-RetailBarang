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
							<li class="active">Katalog</li>
						</ul><!-- /.breadcrumb -->

					<div class="page-content">
						<div class="page-header">
							<h1>
								Katalog
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Data Katalog
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
		Katalog Harga
<a href="<?= base_url("pemesanan/vtambah"); ?>" class="btn btn-sm btn-primary pull-right" >
		<i class="glyphicon glyphicon-shopping-cart"></i> Beli Barang</a>
	</div>
<div class="panel-body">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>No</th>
					<th>Id Katalog</th>
					<th>Id Barang</th>
					<th>Harga Jual</th>
					<th>Status</th>
				</tr>
			</thead>
		<?php
		$no = 1;
		foreach ($katalog_pending as $p){
			?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $p->id_katalog ?></td>
				<td><?php echo $p->id_brg ?></td>
				<td><?php echo $p->harga_jual ?></td>
				<td><?php echo $p->status ?></td>
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
		Harga Jual
	</div>
<div class="panel-body">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>No</th>
					<th>Id Katalog</th>
					<th>Id Barang</th>
					<th>Harga Jual</th>
					<th>Status</th>
				</tr>
			</thead>
		<?php
		$no = 1;
		foreach ($katalog_sukses as $p){
			?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $p->id_katalog ?></td>
				<td><?php echo $p->id_brg ?></td>
				<td><?php echo $p->harga_jual ?></td>
				<td><?php echo $p->status ?></td>
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
