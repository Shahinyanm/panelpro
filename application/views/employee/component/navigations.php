<div id="main-header" class="clearfix">
    <header id="header" class="clearfix">                        
        <div class="row main">
            <nav class="navbar navbar-custom" id="header_menu" role="navigation">   

                <div class="menu-bg">                        
                    <nav class="main-menu navbar navbar-collapse menu-bg" role="navigation">
                        <div class="container">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header menu-bg">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="main-menu collapse navbar-collapse menu-bg" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li class="<?php
                                    if (!empty($menu['index'])) {
                                        echo $menu['index'] == 1 ? 'active' : '';
                                    }
                                    ?>">
                                    <a href="<?php echo base_url() ?>employee/dashboard"><?= lang('home')?></a>
                                </li>                                    
                                <li class="dropdown <?php
                                if (!empty($menu['mailbox'])) {
                                    echo $menu['mailbox'] == 1 ? 'active' : '';
                                }
                                ?>">

                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?= lang('mailbox')?><b class="caret"></b> </a>
                                <ul class="dropdown-menu">
                                    <li class="<?php
                                    if (!empty($menu['inbox'])) {
                                        echo $menu['inbox'] == 1 ? 'active' : '';
                                    }
                                    ?>"><a href="<?php echo base_url() ?>employee/dashboard/inbox"><?= lang('inbox')?></a></li>
                                    <li class="<?php
                                    if (!empty($menu['sent'])) {
                                        echo $menu['sent'] == 1 ? 'active' : '';
                                    }
                                    ?>"><a  href="<?php echo base_url() ?>employee/dashboard/sent"><?= lang('sent')?></a></li>                                            
                                    <li class="<?php
                                    if (!empty($menu['draft'])) {
                                        echo $menu['draft'] == 1 ? 'active' : '';
                                    }
                                    ?>"><a  href="<?php echo base_url() ?>employee/dashboard/draft"><?= lang('draft')?></a></li>                                            
                                    <li class="<?php
                                    if (!empty($menu['trash'])) {
                                        echo $menu['trash'] == 1 ? 'active' : '';
                                    }
                                    ?>"><a  href="<?php echo base_url() ?>employee/dashboard/trash"><?= lang('trash')?></a></li>                                            
                                </ul>
                            </li>                                        
                            <li class="<?php
                            if (!empty($menu['leave_application'])) {
                                echo $menu['leave_application'] == 1 ? 'active' : '';
                            }
                            ?>"><a href="<?php echo base_url() ?>employee/dashboard/leave_application"><?= lang('leave_application')?></a></li>

                            <li class="<?php
                            if (!empty($menu['my_time'])) {
                                echo $menu['my_time'] == 1 ? 'active' : '';
                            }
                            ?>"><a href="<?php echo base_url() ?>employee/dashboard/my_time"><?= lang('my_time')?></a></li>
                            <li class="<?php
                            if (!empty($menu['payslip'])) {
                                echo $menu['payslip'] == 1 ? 'active' : '';
                            }
                            ?>"><a href="<?php echo base_url() ?>employee/dashboard/payslip"><?= lang('paylsip')?></a></li>
                            <li class="<?php
                            if (!empty($menu['expense'])) {
                                echo $menu['expense'] == 1 ? 'active' : '';
                            }
                            ?>"><a href="<?php echo base_url() ?>employee/dashboard/expense"><?= lang('my_expense')?></a></li>
                            <li class="<?php
                            if (!empty($menu['my_task'])) {
                                echo $menu['my_task'] == 1 ? 'active' : '';
                            }
                            ?>">
                                <?php $total_task_request = $_SESSION['notify']['total_task_request']; ?>
                                <?php $total_task_contact_request = $_SESSION['notify']['total_task_contact_request']; ?>
                                <?php $total_comment_request = $_SESSION['notify']['total_comment_request']; ?>
                                  <?php $total_contact_comment_request = $_SESSION['notify']['total_contact_comment_request']; ?>

                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?= lang('tasks')?><b class="caret"></b> 
                                    <?php if (!empty($total_comment_request) || !empty($total_contact_comment_request)) {
                                                    echo "<span class='label label-danger'>*</span>";
                                         }else{
                                            echo "";
                                         } ?>
                                <?php if (!empty($total_task_request) || !empty($total_task_contact_request)) {
                                    echo "<span class='label label-success'>*</span>";
                                }else{
                                    echo "";
                                } ?> </a>
                                <ul class="dropdown-menu">
                                    <li class="<?php
                                    if (!empty($menu['task'])) {
                                        echo $menu['task'] == 1 ? 'active' : '';
                                    }
                                    ?>"><a href="<?php echo base_url() ?>employee/dashboard/my_task"><?= lang('task')?> <span class="label label-success"><?php
                                                if (!empty($total_task_request)) {
                                                    echo $total_task_request;
                                                } else {
                                                    echo '';
                                                }
                                                ?></span>
                                            <span class="label label-danger"><?php
                                                if (!empty($total_comment_request)) {
                                                    echo $total_comment_request;
                                                } else {
                                                    echo '';
                                                }
                                                ?></span></a>
                                    <li class="<?php
                                    if (!empty($menu['task_contact'])) {
                                        echo $menu['task_contact'] == 1 ? 'active' : '';
                                    }
                                    ?>"><a href="<?php echo base_url() ?>employee/dashboard/my_task_contact"><?= lang('task_contact')?> <span class="label label-success"><?php
                                                if (!empty($total_task_contact_request)) {
                                                    echo $total_task_contact_request;
                                                } else {
                                                    echo '';
                                                }
                                                ?></span>
                                            <span class="label label-danger"><?php
                                                if (!empty($total_contact_comment_request)) {
                                                    echo $total_contact_comment_request;
                                                } else {
                                                    echo '';
                                                }
                                                ?></span></a>
                                </ul>
                               </li>
                            <li class="<?php
                            if (!empty($menu['notice'])) {
                                echo $menu['notice'] == 1 ? 'active' : '';
                            }
                            ?>">
                                <?php $total_notice_request = $_SESSION['notify']['total_user_notice_notification'] ?>
                                <a href="<?php echo base_url() ?>employee/dashboard/all_notice"><?= lang('notice')?><span class="label label-success"><?php
                                    if (!empty($total_notice_request)) {
                                        echo $total_notice_request;
                                    } else {
                                        echo '';
                                    }
                                    ?></span></a></li>
                            <li class="<?php
                            if (!empty($menu['events'])) {
                                echo $menu['events'] == 1 ? 'active' : '';
                            }
                            ?>">
                                <?php $total_user_events_notification = $_SESSION['notify']['total_user_events_notification']; ?>
                                <a href="<?php echo base_url() ?>employee/dashboard/all_events"><?= lang('events')?> <span class="label label-success"><?php
                                        if (!empty($total_user_events_notification)) {
                                            echo $total_user_events_notification;
                                        } else {
                                            echo '';
                                        }
                                        ?></span></a></li>
                            <li class="<?php
                            if (!empty($menu['awards'])) {
                                echo $menu['awards'] == 1 ? 'active' : '';
                            }
                            ?>">
                                <?php $total_award_request = $_SESSION['notify']['total_award_request'] ?>
                                <a href="<?php echo base_url() ?>employee/dashboard/all_award"><?= lang('award')?> <span class="label label-success"><?php
                                        if (!empty($total_award_request)) {
                                            echo $total_award_request;
                                        } else {
                                            echo '';
                                        }
                                        ?></span></a></li>



                        </ul>
                        <ul class="main-menu nav navbar-nav navbar-right">
                            <li class="dropdown <?php
                            if (!empty($menu['language'])) {
                                echo $menu['language'] == 1 ? 'active' : '';
                            }
                            ?>">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-language">&nbsp;</i><?= lang('languages')?><b class="caret"></b></a>                                        
                            <ul class="dropdown-menu">

                                <?php
                                $languages = $this->db->order_by('name', 'ASC')->get('tbl_languages')->result();

                                foreach ($languages as $lang) : if ($lang->active == 1) :
                                    ?>
                                    <li>
                                        <a href="<?= base_url() ?>employee/dashboard/set_language/<?= $lang->name ?>" title="<?= ucwords(str_replace("_", " ", $lang->name)) ?>">
                                            <img src="<?= base_url() ?>asset/images/flags/<?= $lang->icon ?>.gif" alt="<?= ucwords(str_replace("_", " ", $lang->name)) ?>"  /> <?= ucwords(str_replace("_", " ", $lang->name)) ?>
                                        </a>
                                    </li>
                                    <?php
                                endif;
                            endforeach;
                            ?>
                        </ul>
                                <?php $total_email_notification = $_SESSION['notify']['total_user_email_notification']; ?>
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope-o"></i>
                                <span class="label label-success"><?php
                                if (!empty($total_email_notification)) {
                                    echo $total_email_notification;
                                } else {
                                    echo '0';
                                }
                                ?></span>
                            </a>

                            <ul class="dropdown-menu">
                                <li class="header"><?= lang('you_have') ?> <?php
                                if (!empty($total_email_notification)) {
                                    echo $total_email_notification;
                                } else {
                                    echo '0';
                                }
                                ?> <?= lang('messages') ?></li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <?php
                                        $email_notification = $_SESSION['notify']['user_email_notification'];
                                        if (!empty($email_notification)):
                                            foreach ($email_notification as $v_email_info) :
                                                ?>
                                                <li><!-- start message -->
                                                    <a href="<?php echo base_url() ?>employee/dashboard/read_inbox_mail/<?php echo $v_email_info->inbox_id ?>">
                                                        <h6>
                                                            <?php echo (strlen($v_email_info->subject) > 30) ? substr($v_email_info->subject, 0, 20) . '...' : $v_email_info->subject; ?>
                                                            <small><i class="fa fa-clock-o"></i> <?php
                                                                //$oldTime = date('h:i:s', strtotime($v_inbox_msg->send_time));
                                                                // Past time as MySQL DATETIME value
                                                                $oldtime = date('Y-m-d H:i:s', strtotime($v_email_info->message_time));

                                                                // Current time as MySQL DATETIME value
                                                                $csqltime = date('Y-m-d H:i:s');
                                                                // Current time as Unix timestamp
                                                                $ptime = strtotime($oldtime);
                                                                $ctime = strtotime($csqltime);

                                                                //Now calc the difference between the two
                                                                $timeDiff = floor(abs($ctime - $ptime) / 60);

                                                                //Now we need find out whether or not the time difference needs to be in
                                                                //minutes, hours, or days
                                                                if ($timeDiff < 2) {
                                                                    $timeDiff = "Just now";
                                                                } elseif ($timeDiff > 2 && $timeDiff < 60) {
                                                                    $timeDiff = floor(abs($timeDiff)) . lang('min') . lang('ago');
                                                                } elseif ($timeDiff > 60 && $timeDiff < 120) {
                                                                    $timeDiff = floor(abs($timeDiff / 60)) . lang('hour') . lang('ago');
                                                                } elseif ($timeDiff < 1440) {
                                                                    $timeDiff = floor(abs($timeDiff / 60)) . lang('hours') . lang('ago');
                                                                } elseif ($timeDiff > 1440 && $timeDiff < 2880) {
                                                                    $timeDiff = floor(abs($timeDiff / 1440)) . lang('day') . lang('ago');
                                                                } elseif ($timeDiff > 2880) {
                                                                    $timeDiff = floor(abs($timeDiff / 1440)) . lang('days') . lang('ago');
                                                                }
                                                                echo $timeDiff;
                                                                ?></small>
                                                        </h6>
                                                        <p><?php echo (strlen($v_email_info->from) > 30) ? substr($v_email_info->from, 0, 20) . '...' : $v_email_info->from; ?></p>
                                                    </a>
                                                </li><!-- end message -->
                                            <?php endforeach; ?>
                                        <?php else: ?>
                                            <li class="text-center">
                                                <h>
                                                    <?= lang('nothing_to_display') ?>
                                                </h>
                                            </li>
                                        <?php endif; ?>
                                    </ul>
                                </li>
                                <li class="footer"><a href="<?php echo base_url() ?>employee/dashboard/inbox"><?= lang('view_all') ?> <?= lang('messages') ?></a></li>
                            </ul>
                        </li>


                            <?php $total_leave = $_SESSION['notify']['total_leave_notifation']; ?>
                            <li class="dropdown messages-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-flag-o"></i>
                                    <span class="label label-danger"><?php
                                        if (!empty($total_leave)) {
                                            echo $total_leave;
                                        } else {
                                            echo '0';
                                        }
                                        ?></span>
                                </a>
                                <ul class="dropdown-menu ">
                                    <li class="header"><?= lang('you_have') ?> <?php
                                        if (!empty($total_leave)) {
                                            echo $total_leave;
                                        } else {
                                            echo '0';
                                        }
                                        ?> <?= lang('application') ?></li>
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu">
                                            <?php
                                            $leave_notification = $_SESSION['notify']['leave_notification'];
                                            if (!empty($leave_notification)):
                                                foreach ($leave_notification as $v_leave_info) :
                                                    ?>
                                                    <li><!-- start message -->
                                                        <a href="<?php echo base_url() ?>employee/dashboard/view_application/<?php echo $v_leave_info->application_list_id ?>">
                                                            <div class="pull-left">
                                                                <img  src="<?php echo base_url() . $v_leave_info->photo; ?>" class="img-circle" style="width:40px; height: 40px" alt="User Image"/>
                                                            </div>
                                                            <h6>
                                                                <?php echo $v_leave_info->first_name . ' ' . $v_leave_info->last_name ?>
                                                                <small><i class="fa fa-clock-o"></i>
                                                                    <?php
                                                                    //$oldTime = date('h:i:s', strtotime($v_inbox_msg->send_time));
                                                                    // Past time as MySQL DATETIME value
                                                                    $oldtime = date('Y-m-d H:i:s', strtotime($v_leave_info->application_date));

                                                                    // Current time as MySQL DATETIME value
                                                                    $csqltime = date('Y-m-d H:i:s');
                                                                    // Current time as Unix timestamp
                                                                    $ptime = strtotime($oldtime);
                                                                    $ctime = strtotime($csqltime);

                                                                    //Now calc the difference between the two
                                                                    $timeDiff = floor(abs($ctime - $ptime) / 60);

                                                                    //Now we need find out whether or not the time difference needs to be in
                                                                    //minutes, hours, or days
                                                                    if ($timeDiff < 2) {
                                                                        $timeDiff = "Just now";
                                                                    } elseif ($timeDiff > 2 && $timeDiff < 60) {
                                                                        $timeDiff = floor(abs($timeDiff)) . " min ago";
                                                                    } elseif ($timeDiff > 60 && $timeDiff < 120) {
                                                                        $timeDiff = floor(abs($timeDiff / 60)) . " hour ago";
                                                                    } elseif ($timeDiff < 1440) {
                                                                        $timeDiff = floor(abs($timeDiff / 60)) . " hours ago";
                                                                    } elseif ($timeDiff > 1440 && $timeDiff < 2880) {
                                                                        $timeDiff = floor(abs($timeDiff / 1440)) . " day ago";
                                                                    } elseif ($timeDiff > 2880) {
                                                                        $timeDiff = floor(abs($timeDiff / 1440)) . " days ago";
                                                                    }
                                                                    echo $timeDiff;
                                                                    ?>
                                                                </small>
                                                            </h6>
                                                            <p style="font-size: 10px;"><?php
                                                                $str = strlen($v_leave_info->reason);
                                                                if ($str > 40) {
                                                                    $ss = '<strong> ......</strong>';
                                                                } else {
                                                                    $ss = '&nbsp';
                                                                } echo substr($v_leave_info->reason, 0, 40) . $ss;
                                                                ?></p>
                                                        </a>
                                                    </li><!-- end message -->
                                                <?php endforeach; ?>
                                            <?php else: ?>
                                                <li class="text-center"><p>
                                                        <strong><?= lang('nothing_to_display') ?>        </strong>
                                                    </p>
                                                </li>
                                            <?php endif; ?>
                                        </ul>
                                    </li>
                                    <li class="footer">
                                        <a href="<?= base_url()?>/employee/dashboard/leave_application"><?= lang('view_all') ?> <?= lang('application') ?></a>
                                    </li>
                                </ul>
                            </li>
                    <!-- Tasks: style can be found in dropdown.less -->
                    <?php $total_change_rqst = $_SESSION['notify']['total_time_change_request']; ?>
                    <li class="dropdown messages-menu">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-clock-o"></i>
                            <span class="label label-danger"><?php
                            if (!empty($total_change_rqst)) {
                                echo $total_change_rqst;
                            } else {
                                echo '0';
                            }
                            ?></span>
                        </a>
                        <ul class="dropdown-menu ">
                            <li class="header"><?= lang('you_have') ?> <?php
                            if (!empty($total_change_rqst)) {
                                echo $total_change_rqst;
                            } else {
                                echo '0';
                            }
                            ?> <?= lang('time_changes_request') ?></li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <?php
                                    $time_change_request = $_SESSION['notify']['time_change_request'];
                                    if (!empty($time_change_request)):
                                        foreach ($time_change_request as $v_change_rqst) :
                                            ?>
                                            <li><!-- start message -->
                                                <a href="<?= base_url() ?>admin/attendance/view_timerequest/<?= $v_change_rqst->clock_history_id ?>" data-toggle="modal" data-placement="top" data-target="#myModal_lg">                                                
                                                    <div class="pull-left">
                                                        <img  src="<?php echo base_url() . $v_change_rqst->photo; ?>" class="img-circle" alt="User Image"/>
                                                    </div>
                                                    <h4>
                                                        <?php echo $v_change_rqst->first_name . ' ' . $v_change_rqst->last_name ?>
                                                        <small><i class="fa fa-clock-o"></i> 
                                                            <?php
                                                        //$oldTime = date('h:i:s', strtotime($v_inbox_msg->send_time));
                                                        // Past time as MySQL DATETIME value
                                                            $oldtime = date('Y-m-d H:i:s', strtotime($v_change_rqst->request_date));

                                                        // Current time as MySQL DATETIME value
                                                            $csqltime = date('Y-m-d H:i:s');
                                                        // Current time as Unix timestamp
                                                            $ptime = strtotime($oldtime);
                                                            $ctime = strtotime($csqltime);

                                                        //Now calc the difference between the two
                                                            $timeDiff = floor(abs($ctime - $ptime) / 60);

                                                        //Now we need find out whether or not the time difference needs to be in
                                                        //minutes, hours, or days
                                                            if ($timeDiff < 2) {
                                                                $timeDiff = "Just now";
                                                            } elseif ($timeDiff > 2 && $timeDiff < 60) {
                                                                $timeDiff = floor(abs($timeDiff)) . " min ago";
                                                            } elseif ($timeDiff > 60 && $timeDiff < 120) {
                                                                $timeDiff = floor(abs($timeDiff / 60)) . " hour ago";
                                                            } elseif ($timeDiff < 1440) {
                                                                $timeDiff = floor(abs($timeDiff / 60)) . " hours ago";
                                                            } elseif ($timeDiff > 1440 && $timeDiff < 2880) {
                                                                $timeDiff = floor(abs($timeDiff / 1440)) . " day ago";
                                                            } elseif ($timeDiff > 2880) {
                                                                $timeDiff = floor(abs($timeDiff / 1440)) . " days ago";
                                                            }
                                                            echo $timeDiff;
                                                            ?>
                                                        </small>
                                                    </h4>
                                                    <p ><?php
                                                    $str = strlen($v_change_rqst->reason);
                                                    if ($str > 40) {
                                                        $ss = '<strong> ......</strong>';
                                                    } else {
                                                        $ss = '&nbsp';
                                                    } echo substr($v_change_rqst->reason, 0, 40) . $ss;
                                                    ?></p>
                                                </a>
                                            </li><!-- end message -->                       
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <li class="text-center"><p>
                                            <strong><?= lang('nothing_to_display') ?></strong>  
                                        </p>
                                    </li>
                                <?php endif; ?>                                                       
                            </ul>
                        </li>
                    </ul>
                </li>
                

                
                <li class="dropdown <?php
                if (!empty($menu['profile'])) {
                    echo $menu['profile'] == 1 ? 'active' : '';
                }
                ?>">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user">&nbsp;</i><?= lang('profile')?><b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li class="<?php
                    if (!empty($menu['change_password'])) {
                        echo $menu['change_password'] == 1 ? 'active' : '';
                    }
                    ?>"><a href="<?php echo base_url() ?>employee/dashboard/change_password"><?= lang('changes_password')?></a>
                </li>   

                <li>
                    <a href="<?php echo base_url() ?>employee/dashboard/settings">Settings</a>
                </li>                                          
                <li>
                    <a href="<?php echo base_url() ?>login/logout"><?= lang('logout')?></a>
                </li>   
            </ul>
        </li>
    </ul>
</div><!-- /.navbar-collapse -->
</div>
</nav>
</div>  
</nav>  
</div>                                            
</header>   
</div>
<input type="hidden" value = <?= base_url()?> id="base">
<script>
    // $('.award_row').on('click', function(){
    //     $.ajax ({
    //         type: 'post',
    //         url: $('#base').val()+"employee/dashboard/update_award_view",
    //         data:{id: $(this).data('id')},
    //         dataType:'json',
    //         success:r=>{
    //                 if(r==1){
    //                     console.log($(this).hide())
    //                 }
    //         }
    //     })
    // })
</script>


