<?php $this->load->view('theme/header_manajemen'); ?>
<?php $this->load->view('theme/sidebar_manajemen'); ?>

<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="<?= base_url("welcome/manajemen"); ?>">Home</a>
              
                <li>
                    <a href="<?= base_url("crud/vsupplier"); ?>">User</a>
                </li>
                <li class="active">Data User</li>
            </ul><!-- /.breadcrumb -->


        </div>

        <div class="page-content">
            <div class="page-header">
                <h1>
                    User
                    <small>
                        <i class="ace-icon fa fa-angle-double-right"></i>
                        Data User
                    </small>
                </h1>
            </div><!-- /.page-header -->

            <div class="row">
                <div class="col-xs-12">


                    <div class="clearfix">
                        <div class="pull-right tableTools-container"></div>
                    </div>
                    <div class="table-header">
                        Results for "Data User"
                        <a href="<?= base_url("datauser/vtambah"); ?>" class="btn btn-sm btn-warning pull-right">
                            <i class="glyphicon glyphicon-plus"></i> Tambah</a>
                    </div>

                    <!-- div.table-responsive -->

                    <!-- div.dataTables_borderWrap -->
                    <div>
                        <table id="dynamic-table" class="table table-striped table-bordered table-hover">


                            <thead>
                                <tr>
                                    <th><center>No</center></th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Nama Lengkap</th>
                                    <th>Alamat</th>
                                    <th>Email</th>
                                    <th><center>Aksi</center></th>


                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($user as $u) {
                                    ?>
                                    <tr>
                                        <td><center><?php echo $no++ ?></center></td>
                                        <td><?php echo $u->username ?></td>
                                        <td><?php echo $u->password ?></td>
                                        <td><?php echo $u->nama_lengkap ?></td>
                                        <td><?php echo $u->alamat ?></td>
                                        <td><?php echo $u->email ?></td>

                                        <td><center>
                                         <div class="<?= (in_array("edit",$menu_aktif)) ? "active" : "" ?>">
                                            <div class="hidden-sm hidden-xs action-buttons">
                                                <a class="green" href="<?php echo base_url('laporan/edit/' . $u->username); ?>">
                                                    <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                </a>

                                                <a class='red  hapus-data' data-id='<?php echo $u->username; ?>'><i class='ace-icon fa fa-trash-o bigger-130'></i></a>

                                                </a>
                                            </div>
                                         </div>

                                            <div class="hidden-md hidden-lg">
                                                <div class="inline pos-rel">
                                                    <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                        <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                    </button>

                                                    <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                        <li>
                                                            <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                <span class="blue">
                                                                    <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                </span>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                <span class="green">
                                                                    <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                </span>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                <span class="red">
                                                                    <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                </span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </center>
                                      </td>
                                   </tr>
                               <?php } ?>
                           </tbody>
                       </table>

                    </div>
                </div>
            </div>





 <script type="text/javascript" src="<?php echo base_url('assets/jquery.js'); ?>"></script>
            <script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
            <script type="text/javascript" src="<?php echo base_url('assets/sweetalert/sweetalert.min.js'); ?>"></script>

            <!--[if IE]>
    <script src="<?= base_url() ?>/assets/js/jquery-1.11.3.min.js"></script>
    <![endif]-->
            <script type="text/javascript">
                if ('ontouchstart' in document.documentElement)
                    document.write("<script src='<?= base_url() ?>/assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
            </script>
            <script src="<?= base_url() ?>/assets/js/bootstrap.min.js"></script>

            <!-- page specific plugin scripts -->
            <script src="<?= base_url() ?>/assets/js/jquery.dataTables.min.js"></script>
            <script src="<?= base_url() ?>/assets/js/jquery.dataTables.bootstrap.min.js"></script>
            <script src="<?= base_url() ?>/assets/js/dataTables.buttons.min.js"></script>
            <script src="<?= base_url() ?>/assets/js/buttons.flash.min.js"></script>
            <script src="<?= base_url() ?>/assets/js/buttons.html5.min.js"></script>
            <script src="<?= base_url() ?>/assets/js/buttons.print.min.js"></script>
            <script src="<?= base_url() ?>/assets/js/buttons.colVis.min.js"></script>
            <script src="<?= base_url() ?>/assets/js/dataTables.select.min.js"></script>

            <!-- ace scripts -->
            <script src="<?= base_url() ?>/assets/js/ace-elements.min.js"></script>

            <script type="text/javascript">
                            $(function () {
                                $(document).on("click", ".hapus-data",
                                        function () {
                                            var username = $(this).attr("data-id");
                                            swal({
                                                title: "Hapus User",
                                                text: "Yakin akan menghapus data user?",
                                                type: "warning",
                                                showCancelButton: true,
                                                confirmButtonText: "Hapus",
                                                closeOnConfirm: true,
                                            },
                                                    function () {
                                                        window.location.href = '<?php echo base_url('crud/hapus/'); ?>' + username;
                                                    });
                                        });
                            });
            </script>


            <!-- inline scripts related to this page -->
            <script type="text/javascript">
                jQuery(function ($) {
                    //initiate dataTables plugin
                    var myTable =
                            $('#dynamic-table')
                            //.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
                            .DataTable({
                                bAutoWidth: false,
                                "aoColumns": [
                                    {"bSortable": false},
                                    null, null, null, null, null,
                                    {"bSortable": false}
                                ],
                                "aaSorting": [],

                                //"bProcessing": true,
                                //"bServerSide": true,
                                //"sAjaxSource": "http://127.0.0.1/table.php"   ,

                                //,
                                //"sScrollY": "200px",
                                //"bPaginate": false,

                                //"sScrollX": "100%",
                                //"sScrollXInner": "120%",
                                //"bScrollCollapse": true,
                                //Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
                                //you may want to wrap the table inside a "div.dataTables_borderWrap" element

                                //"iDisplayLength": 50


                                select: {
                                    style: 'multi'
                                }
                            });



                    $.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';

                    new $.fn.dataTable.Buttons(myTable, {
                        buttons: [
                            {
                                "extend": "colvis",
                                "text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
                                "className": "btn btn-white btn-primary btn-bold",
                                columns: ':not(:first):not(:last)'
                            },
                            {
                                "extend": "copy",
                                "text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
                                "className": "btn btn-white btn-primary btn-bold"
                            },
                            {
                                "extend": "csv",
                                "text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
                                "className": "btn btn-white btn-primary btn-bold"
                            },
                            {
                                "extend": "excel",
                                "text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
                                "className": "btn btn-white btn-primary btn-bold"
                            },
                            {
                                "extend": "pdf",
                                "text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
                                "className": "btn btn-white btn-primary btn-bold"
                            },
                            {
                                "extend": "print",
                                "text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
                                "className": "btn btn-white btn-primary btn-bold",
                                autoPrint: false,
                                message: 'This print was produced using the Print button for DataTables'
                            }
                        ]
                    });
                    myTable.buttons().container().appendTo($('.tableTools-container'));

                    //style the message box
                    var defaultCopyAction = myTable.button(1).action();
                    myTable.button(1).action(function (e, dt, button, config) {
                        defaultCopyAction(e, dt, button, config);
                        $('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
                    });


                    var defaultColvisAction = myTable.button(0).action();
                    myTable.button(0).action(function (e, dt, button, config) {

                        defaultColvisAction(e, dt, button, config);


                        if ($('.dt-button-collection > .dropdown-menu').length == 0) {
                            $('.dt-button-collection')
                                    .wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
                                    .find('a').attr('href', '#').wrap("<li />")
                        }
                        $('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')
                    });

                    ////

                    setTimeout(function () {
                        $($('.tableTools-container')).find('a.dt-button').each(function () {
                            var div = $(this).find(' > div').first();
                            if (div.length == 1)
                                div.tooltip({container: 'body', title: div.parent().text()});
                            else
                                $(this).tooltip({container: 'body', title: $(this).text()});
                        });
                    }, 500);





                    myTable.on('select', function (e, dt, type, index) {
                        if (type === 'row') {
                            $(myTable.row(index).node()).find('input:checkbox').prop('checked', true);
                        }
                    });
                    myTable.on('deselect', function (e, dt, type, index) {
                        if (type === 'row') {
                            $(myTable.row(index).node()).find('input:checkbox').prop('checked', false);
                        }
                    });




                    /////////////////////////////////
                    //table checkboxes
                    $('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);

                    //select/deselect all rows according to table header checkbox
                    $('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function () {
                        var th_checked = this.checked;//checkbox inside "TH" table header

                        $('#dynamic-table').find('tbody > tr').each(function () {
                            var row = this;
                            if (th_checked)
                                myTable.row(row).select();
                            else
                                myTable.row(row).deselect();
                        });
                    });

                    //select/deselect a row when the checkbox is checked/unchecked
                    $('#dynamic-table').on('click', 'td input[type=checkbox]', function () {
                        var row = $(this).closest('tr').get(0);
                        if (this.checked)
                            myTable.row(row).deselect();
                        else
                            myTable.row(row).select();
                    });



                    $(document).on('click', '#dynamic-table .dropdown-toggle', function (e) {
                        e.stopImmediatePropagation();
                        e.stopPropagation();
                        e.preventDefault();
                    });



                    //And for the first simple table, which doesn't have TableTools or dataTables
                    //select/deselect all rows according to table header checkbox
                    var active_class = 'active';
                    $('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function () {
                        var th_checked = this.checked;//checkbox inside "TH" table header

                        $(this).closest('table').find('tbody > tr').each(function () {
                            var row = this;
                            if (th_checked)
                                $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
                            else
                                $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
                        });
                    });

                    //select/deselect a row when the checkbox is checked/unchecked
                    $('#simple-table').on('click', 'td input[type=checkbox]', function () {
                        var $row = $(this).closest('tr');
                        if ($row.is('.detail-row '))
                            return;
                        if (this.checked)
                            $row.addClass(active_class);
                        else
                            $row.removeClass(active_class);
                    });



                    /********************************/
                    //add tooltip for small view action buttons in dropdown menu
                    $('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});

                    //tooltip placement on right or left
                    function tooltip_placement(context, source) {
                        var $source = $(source);
                        var $parent = $source.closest('table')
                        var off1 = $parent.offset();
                        var w1 = $parent.width();

                        var off2 = $source.offset();
                        //var w2 = $source.width();

                        if (parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2))
                            return 'right';
                        return 'left';
                    }




                    /***************/
                    $('.show-details-btn').on('click', function (e) {
                        e.preventDefault();
                        $(this).closest('tr').next().toggleClass('open');
                        $(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
                    });
                    /***************/



                })
            </script>
