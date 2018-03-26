<!DOCTYPE HTML>
<html>
    <head>
        <title>Login Market</title>
        <link href="<?= base_url() ?>/assets/dist/js/jquery.min.js" rel="stylesheet">
        <!-- Custom Theme files -->
        <link href="<?= base_url() ?>/assets/dist/css/style.css" rel="stylesheet">
        <link href="<?= base_url() ?>/assets/css/style.css" rel="stylesheet">
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
        <div class="header " >
            <div class="header-main " >
                <div class="kotak2 warna">
                    <h1>Login Market</h1>
                </div>
                <div class="header-bottom" >
                    <div class="header-right w3agilewarna">
                    <div class="kotak warna">
                    	
                        <div class="header-left-bottom agileinfo ">
                            <form class="" action="<?= base_url("auth/cek_login") ?>" method="post" >
                                <input type="text" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {
                                            this.value = 'Username';
                                        }"/>
                                <input type="password"  name="password" onfocus="this.value = '';" onblur="if (this.value == '') {
                                            this.value = 'password';
                                        }"/>
                                <div class="remember">
                                    <div class="clear"> </div>
                                </div>

                                <input type="submit" value="Login">
                            </form>	
                        
                    </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--header end here-->

        <div class="copyright">
            <p><a href="" target="_blank">© 2018 SoftMarket </a> | Design by SoftMarket </p>
        </div>
    </body>
</html>