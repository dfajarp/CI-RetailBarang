<?php $this->load->view('theme/header'); ?>
<?php $this->load->view('theme/sidebar'); ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Forms</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Basic Form Elements
                        </div>
	<div class="panel-body">
            <?php echo $this->session->flashdata('pesan'); ?> 
            <?php foreach($supplier as $u){ ?>
            <form action="<?= base_url("crud/update"); ?>" method="post">
                <table class="table table-striped">
                     <tr> 
                        <td>ID Supplier</td> 
                        <td> 
                            <div class="col-sm-6"> 
                                <input type="text" name="id_supplier" class="form-control" value="<?php echo $u->id_supplier ?>"> 
                            </div>
                        </td>
                    </tr> 
                    <tr> 
                        <td>Nama Supplier</td> 
                        <td> 
                            <div class="col-sm-6"> 
                                <input type="text" name="nama_supplier" class="form-control" value="<?php echo $u->nama_supplier ?>"> 
                            </div>
                        </td>
                    </tr> 
                    <tr>
                    </tr> 
                    <tr> 
                        <td>Alamat</td> 
                        <td> 
                            <div class="col-sm-4"> 
                                <input type="text" name="alamat" class="form-control" value="<?php echo $u->alamat ?>"> 
                            </div> 
                        </td>
                    </tr> 
                    <tr> 
                        <td>No. Tlp</td> 
                        <td> 
                            <div class="col-sm-4"> 
                                <input type="text" name="no_telepon" class="form-control" value="<?php echo $u->no_telepon ?>">
                            </div>
                        </td>
                    </tr> 
                    <tr> 
                        <td colspan="2">
                            <input type="submit" class="btn btn-success" value="Simpan"> 
                            
                        </td> 
                    </tr> 
                </table> 
            </form> 
            <?php } ?>
        </div> 
    </div> 
    <!-- /panel --> 
</div>