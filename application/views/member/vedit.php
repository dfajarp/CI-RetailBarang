<?php $this->load->view('theme/header_kasir'); ?>
<?php $this->load->view('theme/sidebar_kasir'); ?>

            <div class="main-content">
                <div class="main-content-inner">
                    <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                        <ul class="breadcrumb">
                            <li>
                                <i class="ace-icon fa fa-home home-icon"></i>
                                <a href="<?= base_url("welcome/home"); ?>">Home</a>
                            </li>

                            <li>
                                <a href="<?= base_url("member/vmember"); ?>">Member</a>
                            </li>
                            <li class="active">Ubah Data</li>
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
                        <div class="ace-settings-container" id="ace-settings-container">
                            <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                                <i class="ace-icon fa fa-cog bigger-130"></i>
                            </div>

                            <div class="ace-settings-box clearfix" id="ace-settings-box">
                                <div class="pull-left width-50">
                                    <div class="ace-settings-item">
                                        <div class="pull-left">
                                            <select id="skin-colorpicker" class="hide">
                                                <option data-skin="no-skin" value="#438EB9">#438EB9</option>
                                                <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                                                <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                                                <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                                            </select>
                                        </div>
                                        <span>&nbsp; Choose Skin</span>
                                    </div>

                                    <div class="ace-settings-item">
                                        <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
                                        <label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
                                    </div>

                                    <div class="ace-settings-item">
                                        <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
                                        <label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
                                    </div>

                                    <div class="ace-settings-item">
                                        <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
                                        <label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
                                    </div>

                                    <div class="ace-settings-item">
                                        <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
                                        <label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
                                    </div>

                                    <div class="ace-settings-item">
                                        <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
                                        <label class="lbl" for="ace-settings-add-container">
                                            Inside
                                            <b>.container</b>
                                        </label>
                                    </div>
                                </div><!-- /.pull-left -->

                                <div class="pull-left width-50">
                                    <div class="ace-settings-item">
                                        <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
                                        <label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
                                    </div>

                                    <div class="ace-settings-item">
                                        <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
                                        <label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
                                    </div>

                                    <div class="ace-settings-item">
                                        <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
                                        <label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
                                    </div>
                                </div><!-- /.pull-left -->
                            </div><!-- /.ace-settings-box -->
                        </div><!-- /.ace-settings-container -->

                        <div class="page-header">
                            <h1>
                                Member
                                <small>
                                    <i class="ace-icon fa fa-angle-double-right"></i>
                                   Ubah Data
                                </small>
                            </h1>
                        </div><!-- /.page-header -->

                        <div class="row">
                            <div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->
                                <div class="row">
                                    <div class="col-xs-12">


                    <h1 class="page-header">Member</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Member
                        </div>
    <div class="panel-body">
            <?php echo $this->session->flashdata('pesan'); ?> 
            <?php foreach($member as $u){ ?>
            <form action="<?= base_url("member/update"); ?>" method="post">
                <table class="table table-striped">
                     <tr> 
                        <td>No. Member</td> 
                        <td> 
                            <div class="col-sm-6"> 
                                <input type="text" name="member_no" class="form-control" value="<?php echo $u->member_no ?>"> 
                            </div>
                        </td>
                    </tr> 
                    <tr> 
                        <td>Nama</td> 
                        <td> 
                            <div class="col-sm-6"> 
                                <input type="text" name="nama" class="form-control" value="<?php echo $u->nama ?>"> 
                            </div>
                        </td>
                    </tr> 
                    <tr>
                    </tr> 

                     <tr> 
                        <td>Email</td> 
                        <td> 
                            <div class="col-sm-4"> 
                                <input type="text" name="email" class="form-control" value="<?php echo $u->email ?>">
                            </div>
                        </td>
                    </tr> 
                    <tr> 

                     <tr> 
                        <td>No. Tlp</td> 
                        <td> 
                            <div class="col-sm-4"> 
                                <input type="text" name="no_telepon" class="form-control" value="<?php echo $u->no_telepon ?>">
                            </div>
                        </td>
                    </tr> 
                    <tr> 
                        <td>Valid Date</td> 
                        <td> 
                            <div class="col-sm-6"> 
                                <input type="address" name="valid_date" class="form-control" value="<?php echo $u->valid_date ?>"> 
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