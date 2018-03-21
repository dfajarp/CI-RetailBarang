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
                                <a href="<?= base_url("crud/vsupplier"); ?>">Barang</a>
                            </li>
                            <li class="active">Tambah Katalog</li>
                        </ul><!-- /.breadcrumb -->

                        <div class="nav-search" id="nav-search">
                            <form class="form-search">
                                <span class="input-icon">
                                    <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
                                    <i class="ace-icon fa fa-search nav-search-icon"></i>
                                </span>
                            </form>
                        </div><!-- /.nav-search -->
                    </div>

                    <div class="page-content">
                        <div class="page-header">
                            <h1>
                                Katalog
                                <small>
                                    <i class="ace-icon fa fa-angle-double-right"></i>
                                    Tambah Katalog
                                </small>
                            </h1>
                        </div><!-- /.page-header -->

                        <div class="row">
                            <div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->
                                <div class="row">
                                    <div class="col-xs-12">


                   <h1 class="page-header">Katalog</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                         Tambah katalog
                        </div>
    <div class="panel-body">
            <?php echo $this->session->flashdata('pesan'); ?> 
            <form action="<?= base_url("katalog/tambah_aksi"); ?>" method="post">
                <table class="table table-striped">
                     <tr> 
                        <td>ID Barang</td> 
                        <td> 
                            <div class="col-sm-6"> 
                                <input type="text" name="id_barang" class="form-control" value=""> 
                            </div>
                        </td>
                    </tr> 
                    <tr> 
                        <td>Harga Jual</td> 
                        <td> 
                            <div class="col-sm-6"> 
                                <input type="text" name="harga_jual" class="form-control" value=""> 
                            </div>
                        </td>
                    </tr> 
                    <tr>
                    </tr> 
                      <tr> 
                        <td>Status</td> 
                        <td> 
                            <div class="col-sm-4"> 
                                <input type="text" name="status" class="form-control" value="">
                            </div>
                        </td>
                    </tr> 
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
