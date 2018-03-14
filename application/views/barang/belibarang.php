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
                <li class="active">Data Barang</li>
            </ul><!-- /.breadcrumb -->

            <div class="page-content">
                <div class="page-header">
                    <h1>
                        Beli Barang
                        <small>
                            <i class="ace-icon fa fa-angle-double-right"></i>
                            Data Barang
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
                                        <b>Data Barang Pending</b>
                                        <a href="<?= base_url("pemesanan/vtambah"); ?>" class="btn btn-sm btn-primary pull-right" >
                                            <i class="glyphicon glyphicon-shopping-cart"></i> Beli Barang</a>
                                    </div>
                                    <div class="panel-body">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Id Pembelian</th>
                                                    <th>Supplier</th>
                                                    <th>Tanggal Beli</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <?php
                                            $no = 1;
                                            foreach ($beli_barang_pending as $p) {
                                                ?>
                                                <tr >
                                                    <td><?php echo $no++ ?></td>
                                                    <td><?php echo "TR-" . str_pad($p->id_pembelian, 4, "0", STR_PAD_LEFT) ?></td>
                                                    <td><?php echo $p->nama_supplier ?></td>
                                                    <td><?php echo $p->tanggal_beli ?></td>
                                                    <td>

                                                        <a class="btn btn-primary btn-sm pindahkan" data-id='<?php echo $p->id_pembelian; ?>'><i class="glyphicon glyphicon-ok" ></i></a>

                                                        <a href="<?php echo base_url() ?>pemesanan/detail/<?php echo $p->id_pembelian ?>" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-zoom-in"></i></a>
                                                        
                                                        <a class='btn btn-danger btn-sm  hapus-member' data-id='<?php echo $p->id_pembelian; ?>'><i class='glyphicon glyphicon-trash'></i></a>
                                                        
                                                    </td>
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
                                        <b>Data Barang Sukses</b>
                                    </div>
                                    <div class="panel-body">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Id Pembelian</th>
                                                    <th>Supplier</th>
                                                    <th>Tanggal Beli</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <?php
                                            $no = 1;
                                            foreach ($beli_barang_sukses as $p) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $no++ ?></td>
                                                    <td><?php echo "TR-" . str_pad($p->id_pembelian, 4, "0", STR_PAD_LEFT) ?></td>
                                                    <td><?php echo $p->nama_supplier ?></td>
                                                    <td><?php echo $p->tanggal_beli ?></td>
                                                    <td><a href="<?php echo base_url() ?>pemesanan/detail/<?php echo $p->id_pembelian ?>" class="btn btn-success btn-sm""><i class="glyphicon glyphicon-zoom-in
                                                                                                                                                                             "></i></a></td>	
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

<script type="text/javascript" src="<?php echo base_url('assets/jquery.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/sweetalert/sweetalert.min.js'); ?>"></script>

<script type="text/javascript">
    
    function pad (str, max) {
        str = str.toString();
        return str.length < max ? pad("0" + str, max) : str;
    }

    $(function(){

        $(document).on("click",".hapus-member",function(){
    var id_pembelian=$(this).attr("data-id");
    swal({
        title:"Hapus Pesanan",
        text:"Yakin akan membatalkan pesanan?",
        type: "warning",
        showCancelButton: true,
        confirmButtonText: "Hapus",
        closeOnConfirm: true,
    },
        function(){
            window.location.href= '<?php echo base_url('pemesanan/hapus/'); ?>' + id_pembelian;
        });
    });

    $(document).on("click",".pindahkan",function(){

        

    var id_pembelian=$(this).attr("data-id");
    swal({
        title:"Aktifkan Barang",
        text:"Apakah Anda Yakin Akan Mengaktifkan Barang Dengan Id_Pembelian : TR-"+ pad(id_pembelian, 4) +" ?",
        type: "warning",
        showCancelButton: true,
        confirmButtonText: "Aktifkan",
        closeOnConfirm: true,
    },
        function(){
            window.location.href= '<?php echo base_url('pemesanan/activebarang/'); ?>' + id_pembelian;
        });
    });


});
</script>