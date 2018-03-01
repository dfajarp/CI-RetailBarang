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
                                <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-calendar bigger-110"></i>
                                </span>
                                <input type="date" name="valid_date" class="form-control" id="id-date-range-picker-1"> 
                            </div> 
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