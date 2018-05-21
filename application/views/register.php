<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>HR Lite | Registration</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="<?php echo base_url();?>asset/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo base_url();?>asset/css/font-icons/font-awesome/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="<?php echo base_url();?>asset/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo base_url();?>/asset/css/AdminLTE.min.css">
        <!-- login.css -->
        <link href="<?php echo base_url(); ?>asset/css/login.css" rel="stylesheet" type="text/css" />
        
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <?php
                $genaral_info = $this->session->userdata('genaral_info');
                if (!empty($genaral_info)) {
                    foreach ($genaral_info as $info) {
                        ?>
                        <img src="<?php echo base_url() . $info->logo ?>" alt="" class="img-responsive"/>
                        <?php
                    }
                } else {
                    ?>
                    <img class="img-responsive" alt="school-logo" src="<?php echo base_url(); ?>img/logo.png">                            
                    <?php
                }
                ?>

                <?php if (isset($msg)){ echo "<div class=row'><div class='alert alert-success'>".$msg."</div></div>";}?>
            </div><!-- /.login-logo -->
            <div class="login-box-body ">
                <p class="login-box-msg">Welcome | Please Register to Start</p>                
                <form action="<?php echo base_url('register/registration') ?>" method="post">
                    <div class="error_login" style="color: red;">
                        <?php echo validation_errors(); ?>

                    </div>
                    <div class="form-group has-feedback">
                        <input type="text" name="email" class="form-control" placeholder="E-mail address">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" name="password" id="exampleInputPassword1" class="form-control" placeholder="Password">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" name="confirm_password" id="confPassword" class="form-control" placeholder="Confirm Password">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-6">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign up</button>
                        </div><!-- /.col -->
                        <div class="col-xs-6">
                            <a href="<?php echo base_url() .'login'?>"  class="btn btn-success btn-block btn-flat">Sign in </a>
                        </div>
                    </div>
                </form>                             
            </div><!-- /.login-box-body -->
        </div><!-- /.login-box -->

        <!-- jQuery 2.1.4 -->
        <script src="<?php echo base_url();?>asset/js/jquery-1.10.2.min.js"></script>
        <!-- Bootstrap 3.3.5 -->
        <script src="<?php echo base_url();?>asset/js/bootstrap.min.js"></script>
        <!-- iCheck -->
        <script src="<?php echo base_url();?>asset/js/icheck.min.js"></script>
        <script>
            $(function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' // optional
                });
            });
        </script>
    </body>
</html>
