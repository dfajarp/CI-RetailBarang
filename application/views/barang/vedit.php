<?php $this->load->view('theme/header'); ?>
<?php $this->load->view('theme/sidebar'); ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Stok Barang</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Stok Barang
                        </div>
	<div class="panel-body">
            <?php echo $this->session->flashdata('pesan'); ?> 
            <?php foreach($barang as $b){ ?>
            <form action="<?= base_url("stok/update"); ?>" method="post">
                <table class="table table-striped">
                     <tr> 
                        <td>ID Barang</td> 
                        <td> 
                            <div class="col-sm-6"> 
                                <input type="text" name="id_barang" class="form-control" value="<?php echo $b->id_barang ?>"> 
                            </div>
                        </td>
                    </tr> 
                    <tr> 
                        <td>Kategori</td> 
                        <td> 
                            <div class="col-sm-6"> 
                                <input type="text" name="nama_kategori" class="form-control" value="<?php echo $b->nama_kategori ?>"> 
                            </div>
                        </td>
                    </tr> 
                    <tr>
                    </tr> 
                    <tr> 
                        <td>Deskripsi Barang</td> 
                        <td> 
                            <div class="col-sm-4"> 
                                <input type="text" name="deskripsi_barang" class="form-control" value="<?php echo $b->deskripsi_barang ?>"> 
                            </div> 
                        </td>
                    </tr> 
                    <tr> 
                        <td>Gambar Barang</td> 
                        <td> 
                            <div class="col-sm-4"> 
                                <input type="text" name="gambar_barang" class="form-control" value="<?php echo $b->gambar_barang ?>">
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