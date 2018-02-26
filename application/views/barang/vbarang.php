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
                                <a href="<?= base_url("stok/vbarang"); ?>">Barang</a>
                            </li>
                            <li>
                                <a href="<?= base_url("stok/vbarang"); ?>">Stok Barang</a>
                            </li>
                            <li class="active">Data Stok</li>
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
                                Stok Barang
                                <small>
                                    <i class="ace-icon fa fa-angle-double-right"></i>
                                    Data Stok
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
                            Data Barang
                        </div>
    <div class="panel-body">
        <table class="table table-striped">
        <thead>
                   <tr> 
                        <th>No</th> 
                        <th>Id Barang</th> 
                        <th>Kategori</th> 
                        <th>Deskripsi Barang</th>
                        <th>Gambar Barang</th>
                    </tr> 
                </thead>
        <?php 
        $no = 1;
        foreach ($barang as $b){ 
        ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $b->id_barang ?></td>
            <td><?php echo $b->nama_kategori ?></td>
            <td><?php echo nl2br($b->deskripsi_barang) ?></td>
            <td><?php echo $b->gambar_barang ?></td>
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
<?php $this->load->view('theme/setting_down'); ?>