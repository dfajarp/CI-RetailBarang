<?php $this->load->view('theme/header'); ?>
<?php $this->load->view('theme/sidebar'); ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Supplier</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Supplier
                        </div>
	<div class="panel-body">
	<a href="<?= base_url("crud/vtambah"); ?>" class="btn btn-sm btn-primary">
    	<i class="glyphicon glyphicon-plus"></i> Tambah</a>
	<table class="table table-striped">
		<thead>
                   <tr> 
                        <th>No</th> 
                        <th>ID Supplier</th> 
                        <th>Nama Supplier</th> 
                        <th>Alamat</th> 
                        <th>No.Tlp</th> 
                        <th></th> 
                    </tr> 
                </thead>
		<?php 
		$no = 1;
		foreach ($supplier as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->id_supplier ?></td>
			<td><?php echo $u->nama_supplier ?></td>
			<td><?php echo $u->alamat ?></td>
			<td><?php echo $u->no_telepon ?></td>
			<td>
			      <a href="<?php echo base_url('crud/edit/'.$u->id_supplier); ?>" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-pencil"></i></a>

			     <a href="<?php echo base_url() ?>barang/detail/" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-search"></i></a>
			      
                 <a href="<?php echo base_url('crud/hapus/'.$u->id_supplier); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda Yakin menghapus data ini?')"><i class="glyphicon glyphicon-trash"></i></a>
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
</body>
</html>