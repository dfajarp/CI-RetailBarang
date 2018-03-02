<!DOCTYPE HTML>
<html>
    <head>
        <title>User Login Of LoveMarket</title>
        <link href="<?= base_url() ?>/assets/dist/js/jquery.min.js" rel="stylesheet">
        <!-- Custom Theme files -->
        <link href="<?= base_url() ?>/assets/dist/css/style.css" rel="stylesheet">
        <!-- for-mobile-apps -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
        <meta name="keywords" content="Classy Login form Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <!-- //for-mobile-apps -->
        <!--Google Fonts-->
        <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <!--header start here-->
        <div class="header">
            <div class="header-main">
                <h1>LoveMarket Login</h1>
                <div class="header-bottom">
                    <div class="header-right w3agile">

                        <div class="header-left-bottom agileinfo">

                            <form action="<?= base_url("auth/cek_login") ?>" method="post">
                                <input type="text"  value="User name" name="username" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                            this.value = 'Username';
                                                        }"/>
                                <input type="password"  value="Password" name="password" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                    this.value = 'password';}"/>
                                <div class="remember">
                                    <span class="checkbox1">
                                        <label class="checkbox"><input type="checkbox" name="" checked=""><i> </i>Remember me</label>
                                    </span>
                                    <div class="forgot">
                                        <h6><a href="#">Forgot Password?</a></h6>
                                    </div>
                                    <div class="clear"> </div>
                                </div>

                                <input type="submit" value="Login">
                            </form>	

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--header end here-->
        <div class="copyright">
            <p>© 2018 LoveMarket Login Form. All rights reserved | Design by <a href="http://w3layouts.com/" target="_blank">  LoveMarket </a></p>
        </div>
        <?php
        if ($this->session->flashdata('pesan') <> '') {
            ?>
            <div class="alert alert-danger">s
                <?php echo $this->session->flashdata('pesan'); ?>
            </div>
            <?php
        }
        ?>
        <!--footer end here-->
    </body>
</html>