<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">        
        <link href="<?php echo base_url(); ?>asset/css/main.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>asset/css/employee.css" rel="stylesheet">        
        
        <!-- Date and Time Picker CSS -->   
        <link href="<?php echo base_url(); ?>asset/css/datepicker.css" rel="stylesheet" type="text/css" >       
        <link href="<?php echo base_url(); ?>asset/css/timepicker.css" rel="stylesheet" type="text/css" >
        
        <!-- All Icon  CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/font-icons/entypo/css/entypo.css" >

        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/font-icons/font-awesome/css/font-awesome.min.css" >
        <link rel='stylesheet' href="<?php echo base_url(); ?>asset/fonts/googleapis.css" >
        <link  href="<?php echo base_url(); ?>asset/fonts/glyphicons-halflings-regular.woff2">
        <!-- Data Table  CSS --> 
        <link href="<?php echo base_url(); ?>asset/css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet" type="text/css" /> 
        <link href="<?php echo base_url(); ?>asset/css/plugins/dataTables.bootstrap.css" rel="stylesheet" type="text/css" /> 
        <link href="<?php echo base_url() ?>asset/css/select2.css" rel="stylesheet"/>
        <script src="<?php echo base_url(); ?>asset/js/jquery-1.10.2.min.js"></script>   


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          
        <![endif]-->
        <title><?php echo $title ?></title>

        <script>
            function startTime() {
                var time = new Date();
                var date = time.getDate();
                var month = time.getMonth() + 1;
                var years = time.getFullYear();
                var hr = time.getHours();
                var hour = time.getHours();
                var min = time.getMinutes();
                var minn = time.getMinutes();
                var sec = time.getSeconds();
                var secc = time.getSeconds();
                if (date <= 9) {
                    var dates = "0" + date;
                } else {
                    dates = date;
                }
                if (month <= 9) {
                    var months = "0" + month;
                } else {
                    months = month;
                }
                var ampm = " PM "
                if (hr < 12) {
                    ampm = " AM "
                }
                if (hr > 12) {
                    hr -= 12
                }
                if (hr < 10) {
                    hr = " " + hr
                }
                if (min < 10) {
                    min = "0" + min
                }
                if (sec < 10) {
                    sec = "0" + sec
                }
                document.getElementById('date').value = years + "-" + months + "-" + dates;
                document.getElementById('time').value = hour + ":" + minn + ":" + secc;
                document.getElementById('txt').innerHTML = hr + ":" + min + ":" + sec + ampm;
                var t = setTimeout(function () {
                    startTime();
                }, 500);
            }

            function checkTime(i) {
                if (i < 10) {
                    i = "0" + i;
                }// add zero in front of numbers < 10
                return i;
            }
        </script>
        <script type="text/javascript">
            $(function () {
    $('.datepicker').datepicker({
        autoclose: true,
        format: 'yyyy-mm-dd',
        todayBtn: "linked",
    });
});
$(function () {
    $('.monthyear').datepicker({
        autoclose: true,
        startView: 1,
        format: 'yyyy-mm',
        minViewMode: 1,
    });
});
$(function () {
    $('.years').datepicker({
        startView: 2,
        format: 'yyyy',
        minViewMode: 2,
        autoclose: true,
    });
});
$(function () {
    $('.weeks').datepicker({
        autoclose: true,
        calendarWeeks: true,
    }).on('show', function (e) {

        var tr = $('body').find('.datepicker-days table tbody tr');

        tr.mouseover(function () {
            $(this).addClass('week');
        });

        tr.mouseout(function () {
            $(this).removeClass('week');
        });

        calculate_week_range(e);

    }).on('hide', function (e) {
        console.log('date changed');
        calculate_week_range(e);
    });

    var calculate_week_range = function (e) {

        var input = e.currentTarget;

        // remove all active class
        $('body').find('.datepicker-days table tbody tr').removeClass('week-active');

        // add active class
        var tr = $('body').find('.datepicker-days table tbody tr td.active.day').parent();
        tr.addClass('week-active');

        // find start and end date of the week

        var date = e.date;
        var start_date = new Date(date.getFullYear(), date.getMonth(), date.getDate() - date.getDay());
        var end_date = new Date(date.getFullYear(), date.getMonth(), date.getDate() - date.getDay() + 6);

        // make a friendly string

        var friendly_string = start_date.getFullYear() + '-' + (start_date.getMonth() + 1) + '-' + start_date.getDate() + ' to '
                + end_date.getFullYear() + '-' + (end_date.getMonth() + 1) + '-' + end_date.getDate();

        console.log(friendly_string);

        $(input).val(friendly_string);

    }
});
$(function () {
    $('button[id="checkit"]').click(function () {
        $('#month').css("display", "block").css("margin-top", "20" + "px");
    });
});

        </script>
    </head>    

    