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
							<li class="active">Beli Barang</li>
						</ul><!-- /.breadcrumb -->
                    </div>

                    <div class="page-content">
                        <div class="ace-settings-container" id="ace-settings-container">
                            <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                                <i class="ace-icon fa fa-cog bigger-130"></i>
                            </div>
<?php $this->load->view('theme/setting'); ?>
                        </div><!-- /.ace-settings-container -->

                        <div class="page-header">
                            <h1>
                                Data Barang
                                <small>
                                    <i class="ace-icon fa fa-angle-double-right"></i>
                                    Beli Barang
                                </small>
                            </h1>
                        </div><!-- /.page-header -->

                        <div class="row">
                            <div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->
                                <div class="row">
                                    <div class="col-xs-12">


                   <h1 class="page-header">Beli Barang</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Beli barang
                        </div>
    <div class="panel-body">
            <?php echo $this->session->flashdata('pesan'); ?> 
            <form action="<?= base_url("pemesanan/tambah_aksi"); ?>" method="post">
                <table class="table table-striped">
                     <tr> 
                        <td>Id Pembelian</td> 
                        <td> 
                            <div class="col-sm-6"> 
                                <input type="text" name="id_pembelian" class="form-control" value=""> 
                            </div>
                        </td>
                    </tr> 
                    <tr> 
                        <td>Nama Supplier</td> 
                        <td> 
                            <div class="col-sm-6"> 
                                <input type="text" name="id_supplier" class="form-control" value=""> 
                            </div>
                        </td>
                    </tr> 
                    <tr>
                    </tr> 
                      <tr> 
                        <td>Tanggal Beli</td> 
                        <td> 
                            <div class="col-sm-4"> 
                                <input type="text" name="tanggal_beli" class="form-control" value="">
                            </div>
                        </td>
                    </tr> 
                    <tr> 
                        <td>Username</td> 
                        <td> 
                            <div class="col-sm-6"> 
                                <input type="text" name="username" class="form-control" value=""> 
                            </div> 
                        </td>
                    </tr> 
                    <tr> 
                        <td colspan="2">
                            <input type="submit" class="btn btn-success" value="Simpan"> 
                            <button type="reset" class="btn btn-default">Reset</button> 
                        </td> 
                    </tr> 
                </table> 
            </form> 
        </div> 
    </div> 
    <!-- /panel --> 
</div>
