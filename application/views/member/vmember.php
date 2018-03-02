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
                    <a href="<?= base_url("crud/vsupplier"); ?>">Member</a>
                </li>
                <li class="active">Data Member</li>
            </ul><!-- /.breadcrumb -->


        </div>

        <div class="page-content">
            <div class="page-header">
                <h1>
                    Member
                    <small>
                        <i class="ace-icon fa fa-angle-double-right"></i>
                        Data Member
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
                                    Data Member
                                </div>
                                <div class="panel-body">
                                    <a href="<?= base_url("member/vtambah"); ?>" class="btn btn-sm btn-primary">
                                        <i class="glyphicon glyphicon-plus"></i> Tambah</a>
                                    <table class="table table-striped">
                                        <thead>
                                            <tr> 
                                                <th>No</th> 
                                                <th>No. Member</th> 
                                                <th>Nama</th> 
                                                <th>No.Tlp</th> 
                                                <th>Email</th> 
                                                <th>Valid date</th> 
                                                <th>Aksi</th>
                                            </tr> 
                                        </thead>
                                        <?php
                                        $no = 1;
                                        foreach ($member as $u) {
                                            ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $u->member_no ?></td>
                                                <td><?php echo $u->nama ?></td>
                                                <td><?php echo $u->no_telepon ?></td>
                                                <td><?php echo $u->email ?></td>
                                                <td><?php echo $u->valid_date ?></td>
                                                <td>
                                                    <a href="<?php echo base_url('member/edit/' . $u->member_no); ?>" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-pencil"></i></a>

                                                    <a href="<?php echo base_url('member/hapus/' . $u->member_no); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda Yakin menghapus data ini?')"><i class="glyphicon glyphicon-trash"></i></a>
                                                </td>
                                            </tr>
                                        <?php } ?>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

