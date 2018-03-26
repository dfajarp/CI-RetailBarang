<!DOCTYPE html>
<html lang="en">

    <title>Aplikasi Retail Barang</title>
    <meta name="description" content="overview &amp; stats" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />



    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/assets/font-awesome/4.5.0/css/font-awesome.min.css" />

    <!-- page specific plugin styles -->

    <!-- text fonts -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/fonts.googleapis.com.css" />

    <!-- ace styles -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

    <!--[if lte IE 9]>
        <link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
    <![endif]-->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/ace-skins.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/ace-rtl.min.css" />

    <!--[if lte IE 9]>
      <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script src="<?= base_url() ?>/assets/js/ace-extra.min.js"></script>

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<<<<<<< HEAD
        <div class="main-container ace-save-state" id="main-container"></div>
            <script type="text/javascript">
                try{ace.settings.loadState('main-container')}catch(e){}
            </script>

            <div id="sidebar" class="sidebar                  responsive                    ace-save-state">
                <script type="text/javascript">
                    try{ace.settings.loadState('sidebar')}catch(e){}
                </script>

                <div class="sidebar-shortcuts" id="sidebar-shortcuts">
                    <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
                        <button class="btn btn-success">
                            <i class="ace-icon fa fa-signal"></i>
                        </button>

                        <button class="btn btn-info">
                            <i class="ace-icon fa fa-pencil"></i>
                        </button>

                        <button class="btn btn-warning">
                            <i class="ace-icon fa fa-users"></i>
                        </button>

                        <button class="btn btn-danger">
                            <i class="ace-icon fa fa-cogs"></i>
                        </button>
                    </div>

                    <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
                        <span class="btn btn-success"></span>

                        <span class="btn btn-info"></span>

                        <span class="btn btn-warning"></span>

                        <span class="btn btn-danger"></span>
                    </div>
                </div><!-- /.sidebar-shortcuts -->

                <ul class="nav nav-list">
                    <li class="<?= (in_array("kasir",$menu_aktif)) ? "active" : "" ?>">
                        <a href="<?= base_url("welcome/kasir"); ?>" class="button">
                            <i class="menu-icon glyphicon glyphicon-home"></i>
                            <span class="menu-text"> Beranda </span>
                        </a>

                        <b class="arrow"></b>
                    </li>

              

                        <li class="<?= (in_array("transaksi",$menu_aktif)) ? "active" : "" ?>">
                        <a href="<?= base_url("transaksi"); ?>" class="button">
                            <i class="menu-icon glyphicon glyphicon-transfer"></i>
                            <span class="menu-text"> Transaksi  </span>
                        </a>

                        <b class="arrow"></b>
                    </li>


                    <li class="<?= (in_array("member",$menu_aktif)) ? "active" : "" ?>">
                        <a href="<?= base_url("member/vmember"); ?>" class="button">
                            <i class="menu-icon glyphicon glyphicon-user"></i>
                            <span class="menu-text"> Member </span>
                        </a>

                        <b class="arrow"></b>
                </li>
                    <li class="<?= (in_array("listpenjualan",$menu_aktif)) ? "active" : "" ?>">
                        <a href="<?= base_url("kasir/listpenjualan"); ?>" class="button">
                            <i class="menu-icon fa fa-list-alt"></i>
                            <span class="menu-text"> List Penjualan  </span>
                        </a>

                        <b class="arrow"></b>
                    </ul>
                </li>


                 
               <!-- /.nav-list -->
                <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
                    <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
                </div>
=======
    <div class="main-container ace-save-state" id="main-container"></div>
    <script type="text/javascript">
        try {
            ace.settings.loadState('main-container')
        } catch (e) {
        }
    </script>

    <div id="sidebar" class="sidebar                  responsive                    ace-save-state">
        <script type="text/javascript">
            try {
                ace.settings.loadState('sidebar')} catch (e) {
            }
        </script>

        <div class="sidebar-shortcuts" id="sidebar-shortcuts">
            <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
                <button class="btn btn-success">
                    <i class="ace-icon fa fa-signal"></i>
                </button>

                <button class="btn btn-info">
                    <i class="ace-icon fa fa-pencil"></i>
                </button>

                <button class="btn btn-warning">
                    <i class="ace-icon fa fa-users"></i>
                </button>

                <button class="btn btn-danger">
                    <i class="ace-icon fa fa-cogs"></i>
                </button>
>>>>>>> 4b1daea9a8ec58ff97eb663442f0eeabe259cd71
            </div>

            <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
                <span class="btn btn-success"></span>

                <span class="btn btn-info"></span>

                <span class="btn btn-warning"></span>

                <span class="btn btn-danger"></span>
            </div>
        </div><!-- /.sidebar-shortcuts -->

        <ul class="nav nav-list">
            <li class="active">
                <a href="<?= base_url("welcome/kasir"); ?>" class="dropdown-toggle">
                    <i class="menu-icon glyphicon glyphicon-home"></i>
                    <span class="menu-text"> Beranda </span>
                </a>

                <b class="arrow"></b>
            </li>



            <li class="">
                <a href="<?= base_url("transaksi"); ?>" class="button">
                    <i class="menu-icon glyphicon glyphicon-transfer"></i>
                    <span class="menu-text"> Transaksi  </span>
                </a>

                <b class="arrow"></b>
            </li>


            <li class="">
                <a href="<?= base_url("member/vmember"); ?>" class="button">
                    <i class="menu-icon glyphicon glyphicon-user"></i>
                    <span class="menu-text"> Member </span>
                </a>

                <b class="arrow"></b>
            </li>
            <li class="">
                <a href="<?= base_url("transaksi"); ?>" class="button">
                    <i class="menu-icon glyphicon glyphicon-transfer"></i>
                    <span class="menu-text"> List Penjualan  </span>
                </a>

                <b class="arrow"></b>
        </ul>
    </li>



    <!-- /.nav-list -->
    <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
        <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
    </div>
</div>


