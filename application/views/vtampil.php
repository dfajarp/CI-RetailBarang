<!DOCTYPE html>
<html>
<head>
	<title>form</title>
</head>
<body>
	<center><h1>Dikdik</h1></center>

	<center><?php echo anchor('crud/tambah','Tambah Data'); ?></center>
	<table style="margin:20px auto;" border="1">
                   <tr> 
                        <th>No</th> 
                        <th>ID Supplier</th> 
                        <th>Nama Supplier</th> 
                        <th>Alamat</th> 
                        <th>No.Tlp</th> 
                        <th></th> 
                    </tr> 
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
			      <?php echo anchor('crud/edit/'.$u->id_supplier,'Edit'); ?>
                              <?php echo anchor('crud/hapus/'.$u->id_supplier,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>