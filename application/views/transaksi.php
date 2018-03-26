<?php $this->load->view('theme/header_kasir'); ?>
<?php $this->load->view('theme/sidebar_kasir'); ?>

<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="<?= base_url("kasir"); ?>">Home</a>
                </li>

                <li>
                    <a href="<?= base_url("manajemen_stok"); ?>">Transaksi</a>
                </li>
                <li class="active">Transaksi Barang</li>
            </ul><!-- /.breadcrumb -->
        </div>

        <div class="page-content">
            <div class="page-header">
                <h1>
                    Transaksi
                    <small>
                        <i class="ace-icon fa fa-angle-double-right"></i>
                        Transaksi Barang
                    </small>
                </h1>
            </div><!-- /.page-header -->

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form class="form-horizontal" id="form_transaksi" role="form">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label col-md-3" 
                                           for="id_barang">Id Barang </label>
                                    <div class="col-md-5">
                                        <input list="list_barang" class="form-control reset" 
                                               placeholder="Isi id..." name="id_barang" id="id_barang" 
                                               autocomplete="off" onchange="showBarang(this.value)">
                                        <datalist id="list_barang">
                                            <?php foreach ($barang as $barang): ?>
                                                <option value="<?= $barang->id_barang ?>"><?= $barang->nama_barang ?></option>
                                            <?php endforeach ?>
                                        </datalist>
                                    </div>
                                    <div class="col-md-1">
                                        <a href="javascript:;" class="btn btn-primary" 
                                           data-toggle="modal" 
                                           data-target="#modal-cari-barang">
                                            <i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                                <div id="barang">
                                    <div class="form-group">
                                        <label class="control-label col-md-3" 
                                               for="nama_barang">Nama</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control reset" 
                                                   name="nama_barang" id="nama_barang" 
                                                   readonly="readonly">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3" 
                                               for="harga_barang">Harga </label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control reset" 
                                                   name="harga_barang" id="harga_barang" 
                                                   readonly="readonly">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3" 
                                               for="qty">Quantity </label>
                                        <div class="col-md-5">
                                            <input type="number" class="form-control reset" 
                                                   autocomplete="off" onchange="subTotal(this.value)" 
                                                   onkeyup="subTotal(this.value)" id="qty" min="0" 
                                                   name="qty" placeholder="Isi qty...">
                                        </div>
                                    </div>
                                </div><!-- end id barang -->
                                <div class="form-group">
                                    <label class="control-label col-md-3" 
                                           for="sub_total">Total</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control reset" 
                                               name="sub_total" id="sub_total" 
                                               readonly="readonly">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-offset-3 col-md-3">
                                        <button type="button" class="btn btn-primary" 
                                                id="tambah" onclick="addbarang()">
                                            <i class="fa fa-cart-plus"></i> Tambah</button>
                                    </div>
                                </div>
                                <!-- </div>
                              </div> --><!-- end panel-->
                            </div><!-- end col-md-8 -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="total" class="besar">Total Pembayaran (Rp) :</label>
                                    <input type="text" class="form-control input-lg" 
                                           name="total" id="total" placeholder="0"
                                           readonly="readonly"  value="<?= number_format(
                                                    $this->cart->total(), 0, '', '.');
                                            ?>">
                                </div>
                                <div class="form-group">
                                    <label for="bayar" class="besar">Bayar (Rp) :</label>
                                    <input type="text" class="form-control input-lg uang" 
                                           name="bayar" placeholder="0" autocomplete="off"
                                           id="bayar" onkeyup="showKembali(this.value)">
                                </div>
                                <div class="form-group">
                                    <label for="kembali" class="besar">Kembali (Rp) :</label>
                                    <input type="text" class="form-control input-lg" 
                                           name="kembali" id="kembali" placeholder="0"
                                           readonly="readonly">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="panel-body">
                                    <form class="form-horizontal" id="form_transaksi" role="form">
                                        <div class="col-md-12">
                                            <div class="panel panel-info">
                                                <div class="panel-heading">
                                                    <b>List Pembelian</b>
                                                </div>
                                                <div class="panel-body">
                                                    <!-- <pre> -->
                                                    <!-- <?php print_r($this->cart->contents()); ?> -->
                                                    <!-- </pre> -->
                                                    <table id="listBarang" class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Nama Barang</th>
                                                                <th>Quantity</th>
                                                                <th>Sub Total</th>
                                                                <th>Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="dataCart">

                                                        </tbody>
                                                    </table>

                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="col-md-offset-10">
                                <button type="button" class="btn btn-primary btn-lg" 
                                        id="selesai" disabled="disabled" 
                                        onclick="alert('Belum ada action untuk save pejualan')">
                                    Selesai <i class="fa fa-angle-double-right"></i></button>
                            </div>
                    </div>
                </div>
                <!-- end col-md-9 -->
                <!-- Modal selesai -->
                <div class="modal fade" id="modal-cari-barang" role="dialog">
                    <div class="modal-dialog modal-lg">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Cari Barang</h4>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <div class="form-group has-primary has-feedback">
                                        <input type="text" class="form-control input-lg" placeholder="Search for...">
                                        <span class="glyphicon glyphicon-search form-control-feedback"></span>
                                    </div>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Barang</th>
                                                <th>Quantity</th>
                                                <th>SubTotal</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody id="dataCart">
                                    </table>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                            </div>
                        </div>

                    </div>
                </div>

                <script type="text/javascript" src="<?php echo base_url('assets/jquery.js'); ?>"></script>
                <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
                <script type="text/javascript" src="<?php echo base_url('assets/sweetalert/sweetalert.min.js'); ?>"></script>

                <script type="text/javascript">

                                            $(function () {
                                                list();
                                            });

                                            function showBarang(str)
                                            {

                                                if (str == "") {
                                                    $('#nama_barang').val('');
                                                    $('#harga_barang').val('');
                                                    $('#qty').val('');
                                                    $('#sub_total').val('');
                                                    $('#reset').hide();
                                                    return;
                                                } else {
                                                    if (window.XMLHttpRequest) {
                                                        // code for IE7+, Firefox, Chrome, Opera, Safari
                                                        xmlhttp = new XMLHttpRequest();
                                                    } else {
                                                        // code for IE6, IE5
                                                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                                                    }
                                                    xmlhttp.onreadystatechange = function () {
                                                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                                            document.getElementById("barang").innerHTML =
                                                                    xmlhttp.responseText;
                                                        }
                                                    }
                                                    xmlhttp.open("GET", "<?= base_url(
                                                   'index.php/transaksi/getbarang')
                                            ?>/" + str, true);
                                                    xmlhttp.send();
                                                }
                                            }

                                            function subTotal(qty)
                                            {

                                                var harga = $('#harga_barang').val().replace(".", "").replace(".", "");

                                                $('#sub_total').val(convertToRupiah(harga * qty));
                                            }

                                            function convertToRupiah(angka)
                                            {

                                                var rupiah = '';
                                                var angkarev = angka.toString().split('').reverse().join('');

                                                for (var i = 0; i < angkarev.length; i++)
                                                    if (i % 3 == 0)
                                                        rupiah += angkarev.substr(i, 3) + '.';

                                                return rupiah.split('', rupiah.length - 1).reverse().join('');

                                            }

                                            // var table;
                                            //    $(document).ready(function() {

                                            //      // showKembali($('#bayar').val());

                                            //       table = $('#table_transaksi').DataTable({ 
                                            //         paging: false,
                                            //         "info": false,
                                            //         "searching": false,
                                            //         "processing": true, //Feature control the processing indicator.
                                            //         "serverSide": true, //Feature control DataTables' 
                                            //         // server-side processing mode.

                                            //         // Load data for the table's content from an Ajax source
                                            //         "ajax": {
                                            //             "url": "<?= site_url('transaksi/ajax_list_transaksi') ?>",
                                            //             "type": "POST"
                                            //         },

                                            //         //Set column definition initialisation properties.
                                            //         "columnDefs": [
                                            //        { 
                                            //           "targets": [ 0,1,2,3,4,5,6 ], //last column
                                            //           "orderable": false, //set not orderable
                                            //         },
                                            //         ],

                                            //       });
                                            //    });

                                            function reload_table()
                                            {

                                                table.ajax.reload(null, false); //reload datatable ajax 

                                            }

                                            function addbarang()
                                            {
                                                var id_barang = $('#id_barang').val();
                                                var qty = $('#qty').val();
                                                if (id_barang == '') {
                                                    $('#id_barang').focus();
                                                } else if (qty == '') {
                                                    $('#qty').focus();
                                                } else {
                                                    // ajax adding data to database
                                                    $.ajax({
                                                        url: "<?= site_url('transaksi/addbarang') ?>",
                                                        type: "POST",
                                                        data: $('#form_transaksi').serialize(),
                                                        dataType: "JSON",
                                                        success: function (data)
                                                        {
                                                            //reload ajax table
                                                            // reload_table();
                                                            $('#dataCart').html();
                                                            list();
                                                        },
                                                        error: function (jqXHR, textStatus, errorThrown)
                                                        {
                                                            alert('Error adding data');
                                                        }
                                                    });

                                                    showTotal();
                                                    showKembali($('#bayar').val());
                                                    //mereset semua value setelah btn tambah ditekan
                                                    $('.reset').val('');
                                                }
                                                ;
                                            }

                                            function list() {
                                                $('#dataCart').load('<?= base_url('transaksi/ajax_list_transaksi') ?>');
                                                $('#listBarang').on("click", '.delete',
                                                        function () {
                                                            // alert("Delete nu ieu " +  $(this).attr("data-id"));
                                                            var id = $(this).attr("data-id");
                                                            swal({
                                                                title: "Hapus List",
                                                                text: "Yakin akan menghapus list ini?",
                                                                type: "warning",
                                                                showCancelButton: true,
                                                                confirmButtonText: "Hapus",
                                                                closeOnConfirm: true,
                                                            },
                                                                    function () {
                                                                        deletebarang(id);
                                                                    });






                                                        });
                                            }


                                            function deletebarang(id) {
                                                $.ajax({
                                                    url: "<?php echo base_url('transaksi/delete') ?>/" + id,
                                                    success: function (data) {
                                                        list();
                                                    }
                                                });
                                            }

                                            function showTotal()
                                            {

                                                var total = $('#total').val().replace(".", "").replace(".", "");

                                                var sub_total = $('#sub_total').val().replace(".", "").replace(".", "");

                                                $('#total').val(convertToRupiah((Number(total) + Number(sub_total))));

                                            }

                                            //  	//maskMoney
                                            // $('.uang').maskMoney({
                                            // 	thousands:'.', 
                                            // 	decimal:',', 
                                            // 	precision:0
                                            // });

                                            function showKembali(str)
                                            {
                                                var total = $('#total').val().replace(".", "").replace(".", "");
                                                var bayar = str.replace(".", "").replace(".", "");
                                                var kembali = bayar - total;

                                                $('#kembali').val(convertToRupiah(kembali));

                                                if (kembali >= 0) {
                                                    $('#selesai').removeAttr("disabled");
                                                } else {
                                                    $('#selesai').attr("disabled", "disabled");
                                                }
                                                ;

                                                if (total == '0') {
                                                    $('#selesai').attr("disabled", "disabled");
                                                }
                                                ;
                                            }

                </script>