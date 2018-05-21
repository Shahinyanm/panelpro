<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <title>Install | Successfully</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

            <style type="text/css">                  
                .error {
                    background: #ffd1d1;
                    border: 1px solid #ff5858;
                    padding: 4px;
                }
            </style>
    </head>

    <body style="background: url(../asset/img/login-body-3.jpg)">
        <div class="container" style="margin-top:150px ">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-default">
                        <div class="panel-heading"> <strong class="">HR Lite | Successful Installation</strong>
                            <small class="pull-right">Version 2.1</small>
                        </div>
                        <div class="panel-body">
                            <div class="alert alert-success" role="alert">
                                Bravo !! You Have Successfully Installed Human Resource Lite - Version 2.1 
                            </div>

                            <div class="well">

                                <h4><strong>Admin panel Login Credentials</strong></h4>
                                <hr/>                                
                                <p><strong>Username: </strong>admin</p>
                                <p><strong>Password: </strong> admin</p>
                                <hr />
                                <br />
                                <?php
                                $redir = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
                                $redir .= "://" . $_SERVER['HTTP_HOST'];
                                $redir .= str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']);
                                $redir = str_replace('install/', '', $redir);
                                ?>
                                <center><a href="<?php echo $redir . 'login' ?>" class="btn btn-success btn-block">Take Me To Login Page</a></center>
                            </div>

                            <p class="error"> 
                                <strong>NOTE:</strong> For your own safety. Please <strong>Delete</strong> or rename <strong>Install</strong> folder ! 
                            </p>
                        </div>
                        <div class="panel-footer">
                            <center>
                                Designed & Developed By &copy <a href="http://trescoder.com" target="_blank">  TresCoder</a>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>