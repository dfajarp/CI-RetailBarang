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
                                <a href="<?= base_url("crud/vsupplier"); ?>">Supplier</a>
                            </li>
                            <li class="active">Data Supplier</li>
                        </ul><!-- /.breadcrumb -->

                      
                    </div>

                    <div class="page-content">
                        <div class="page-header">
                            <h1>
                                Supplier
                                <small>
                                    <i class="ace-icon fa fa-angle-double-right"></i>
                                    Data Supplier
                                </small>
                            </h1>
                        </div><!-- /.page-header -->

                        <div class="row">
                            <div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->
                                <div class="row">
                                    <div class="col-xs-12">


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
                        <th>Aksi</th> 
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

