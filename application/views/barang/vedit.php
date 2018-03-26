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

                <li>
                    <a href="<?= base_url("crud/vsupplier"); ?>">Data Barang</a>
                </li>

                <li class="active">Ubah Data Barang</li>
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
                    Data Barang
                    <small>
                        <i class="ace-icon fa fa-angle-double-right"></i>
                        Ubah Data Barang
                    </small>
                </h1>
            </div><!-- /.page-header -->

            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->
                    <div class="row">
                        <div class="col-xs-12">


                            <h1 class="page-header">Ubah Data Barang</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Ubah Data Barang
                                </div>
                                <div class="panel-body">
                                    <?php echo $this->session->flashdata('pesan'); ?> 
                                    <?php foreach ($barang as $b) { ?>
                                        <form action="<?= base_url("stok/update"); ?>" method="post" enctype="multipart/form-data">
                                            <table class="table table-striped">
                                                <tr> 
                                                    <td>Nama Barang</td> 
                                                    <td> 
                                                        <div class="col-sm-6"> 
                                                            <input type="hidden" name="id_barang" value="<?php echo $b->id_barang ?>">
                                                            <input type="text" name="nama_brg" class="form-control" value="<?php echo $b->nama_brg ?>"> 
                                                        </div>
                                                    </td>
                                                </tr> 
                                                <tr> 
                                                    <td>Deskripsi</td> 
                                                    <td> 
                                                        <div class="col-sm-6"> 
                                                            <input type="text" name="deskripsi_barang" class="form-control" value="<?php echo $b->deskripsi_barang ?>"> 
                                                        </div>
                                                    </td>
                                                </tr> 
                                                <tr>
                                                </tr> 

                                                <tr> 
                                                    <td>Gambar Barang</td> 
                                                    <td> 
                                                        <div class="col-sm-6"> 
                                                            <input type="file" name="gambar_barang" class="id-input-file-2" value="<?php echo $b->gambar_barang ?>">
                                                        </div>
                                                    </td>
                                                </tr> 

                                                <tr> 
                                                    <td colspan="2">
                                                        <input type="submit" class="btn btn-success" value="Simpan"> 
                                                        <a href="<?php echo base_url() ?>stok/vbarang" class="btn btn-danger">Kembali</a>
                                                    </td>
                                                </tr> 
                                            </table> 
                                        </form> 
                                    <?php } ?>
                                </div> 
                            </div> 
                            <!-- /panel --> 
                        </div>
                        <script>
                            $(function () {

                                $('.id-input-file-2').ace_file_input({
                                    no_file: 'No File ...',
                                    btn_choose: 'Choose',
                                    btn_change: 'Change',
                                    droppable: false,
                                    onchange: null,
                                    thumbnail: false //| true | large
                                            //whitelist:'gif|png|jpg|jpeg'
                                            //blacklist:'exe|php'
                                            //onchange:''
                                            //
                                });

                                $('.close-btn').on("click", function () {
                                    $(this).parent().parent().parent().parent().hide();
                                });

                            });


                        </script>