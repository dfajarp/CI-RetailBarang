<?php $this->load->view('theme/header'); ?>
<?php $this->load->view('theme/sidebar'); ?>

<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="<?php echo base_url("welcome/home"); ?>">Home</a>
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
                    <!-- /.row -->
                    <div class="row">
                        <!-- PAGE CONTENT BEGINS -->

                        <form action="<?php echo base_url("pemesanan/tambah_aksi"); ?>" method="post" class="form-horizontal" role="form" id="box">
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nama Barang </label>

                                <div class="col-sm-9">
                                    <input type="text" id="form-field-1"  class="col-xs-10 col-sm-5" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Harga Barang </label>

                                <div class="col-sm-9">
                                    <input type="text" id="form-field-1"  class="col-xs-10 col-sm-5" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Jumlah Barang </label>

                                <div class="col-sm-9">
                                    <input type="text" id="form-field-1"  class="col-xs-10 col-sm-5" />
                                </div>
                            </div>

                            <div class="hr hr-24"></div>
                        </form>

                    </div>
                    <div class="clearfix form-actions">
                        <div class="col-md-offset-3 col-md-9">
                            <button class="btn btn-info" type="button">
                                <i class="ace-icon fa fa-check bigger-110"></i>
                                Submit
                            </button>

                            &nbsp; &nbsp; &nbsp;
                            <button class="btn" type="reset">
                                <i class="ace-icon fa fa-undo bigger-110"></i>
                                Reset
                            </button>

                            &nbsp; &nbsp; &nbsp;
                            <button class="btn btn-default" id="tombol_app">Tambah</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>





<script>

    $(document).ready(function () {
        var frm = 1;
        $("#tombol_app").click(function () {
            $("#box").append("<div class='frm_barang" + frm + "'></div>");
            $(".frm_barang" + frm).load('<?php echo base_url("pemesanan/add_barang"); ?>');
            frm++;
        });

        // $('#id-input-file-1 , #id-input-file-2').ace_file_input({
        //     no_file:'No File ...',
        //     btn_choose:'Choose',
        //     btn_change:'Change',
        //     droppable:false,
        //     onchange:null,
        //     thumbnail:false //| true | large
        //     //whitelist:'gif|png|jpg|jpeg'
        //     //blacklist:'exe|php'
        //     //onchange:''
        //     //
        // });
    });
</script>



