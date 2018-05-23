<?php echo message_box('success'); ?>
<?php echo message_box('error'); ?>
<div class="row">
    <div class="col-sm-3">
        <div class="box box-primary" data-collapsed="0">
            <div class="box-header with-border">
                <h3 class="box-title"><?= lang('task_initials') ?></h3>
            </div>
            <form id="form_validation" action="<?php echo base_url() ?>admin/task/update_project_status/<?php if (!empty($task_details->task_contact_id)) echo $task_details->task_contact_id; ?>" method="post">
                <div class="box-body">
                    <div class="form-group" id="border-none">                    
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="control-label" ><?= lang('start_date') ?></label>                           
                                <input type="text" value="<?php
                                if (!empty($task_details->task_contact_start_date)) {
                                    echo $task_details->task_contact_start_date;
                                }
                                ?>" class="form-control" data-format="yyy-mm-dd" readonly >                                                   
                            </div>
                        </div>
                    </div>
                    <div class="form-group" id="border-none">                    
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="control-label" ><?= lang('due_date') ?></label>                           
                                <input type="text" value="<?php
                                if (!empty($task_details->due_date)) {
                                    echo $task_details->due_date;
                                }
                                ?>" class="form-control" data-format="yyy-mm-dd" readonly >                                                    
                            </div>
                        </div>
                    </div>
                    <div class="form-group" id="border-none">                    
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="control-label" ><?= lang('estimated_hour') ?></label>
                                <input type="text" value="<?php
                                if (!empty($task_details->task_contact_hour)) {
                                    echo $task_details->task_contact_hour;
                                }
                                ?>" class="form-control" data-format="yyy-mm-dd" readonly >                        
                            </div>
                        </div>
                    </div>
                    <div class="form-group">                    
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="control-label" ><?= lang('progress') ?></label>                               
                                <input type="text" readonly name="task_contact_progress"
                                       class="slider form-control" data-slider-min="0" data-slider-max="100" 
                                       data-slider-step="1" data-slider-value="<?php
                                       if (!empty($task_details->task_contact_progress))
                                           echo $task_details->task_contact_progress;
                                       ?>" data-slider-orientation="horizontal" 
                                       data-slider-selection="before" data-slider-tooltip="show" 
                                       data-slider-tooltip="fixTitle" data-slider-id="blue">                                                                                              
                            </div>
                        </div>
                    </div>
                    <div class="form-group" id="border-none">                    
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="control-label"><?= lang('task_status') ?></label>

                                <select name="task_contact_status" class="form-control" required >
                                    <option value="0" <?php echo $task_details->task_contact_status == 0 ? 'selected' : '' ?>> <?= lang('pending') ?> </option>
                                    <option value="1" <?php echo $task_details->task_contact_status == 1 ? 'selected' : '' ?>> <?= lang('started') ?> </option>
                                    <option value="2" <?php echo $task_details->task_contact_status == 2 ? 'selected' : '' ?>> <?= lang('completed') ?> </option>
                                </select>

                            </div>
                        </div>
                    </div>
                    <div class="form-group" id="border-none">                    
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="">
                                    <div class="pull-right">
                                        <button type="submit" id="sbtn" class="btn btn-primary"><?= lang('update') ?></button>                            
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div> 
            </form>
        </div>
    </div>
    <div class="col-sm-9">
        <div class="nav-tabs-custom">
            <!-- Tabs within a box -->
            <ul class="nav nav-tabs">
                <li class="<?= $active == 1 ? 'active' : '' ?>"><a href="#task_details" data-toggle="tab"><?= lang('details') ?></a></li>
                <li class="<?= $active == 2 ? 'active' : '' ?>"><a href="#task_contact_comments"  data-toggle="tab"><?= lang('comments') ?></a></li>
                <li class="<?= $active == 3 ? 'active' : '' ?>"><a href="#task_contact_attachments"  data-toggle="tab"><?= lang('attachment') ?></a></li>
                <li class="<?= $active == 4 ? 'active' : '' ?>"><a href="#links"  data-toggle="tab"><?= lang('links') ?></a></li>

            </ul>
            <div class="tab-content no-padding">
                <!-- Task Details tab Starts -->
                <div class="tab-pane <?= $active == 1 ? 'active' : '' ?>" id="task_details" style="position: relative;">
                    <div class="box" style="border: none; padding-top: 15px;" data-collapsed="0">                         
                        <div class="box-body">
                            
                            <div class="form-group col-sm-12">
                                    <label class="col-sm-3 control-label"><?= lang('project_name') ?> </label>
                                    <div class="col-sm-7">
                                        <input type="text"  readonly class="form-control" value="<?php if (!empty($task_details->project_name)) echo $task_details->project_name; ?>" />
                                    </div>
                            </div>
                            <div class="form-group col-sm-12">
                                <label class="col-sm-3 control-label"><?= lang('web') ?> </label>
                                <div class="col-sm-7">
                                    <input type="text"  readonly class="form-control" value="<?php if (!empty($task_details->web)) echo $task_details->web; ?>" />
                                </div>
                            </div>
                            
                            <div class="form-group col-sm-12">
                                <label class="col-sm-3 control-label"><?= lang('project_details') ?></label>
                                <div class="col-sm-7" style="overflow:scroll">
                                    <blockquote style="font-size: 12px; height: 200px;"><?php if (!empty($task_details->project_details)) echo $task_details->project_details; ?></blockquote>
                                </div>
                            </div>

                            <div class="form-group col-sm-12" id="border-none">
                                <label class="col-sm-3 control-label"><?= lang('assined_to') ?></label>
                                <div class="col-sm-7">
                                    <table class="table table-bordered" style="background-color: #EEE;"id="dataTables-example">

                                        <tbody>
                                            <?php
                                            if (!empty($task_details->assigned_to)) :
                                                    $emp_info = $this->db->where(array('employee_id' => $task_details->assigned_to))->get('tbl_employee')->row();
                                                    ?>
                                                    <tr>
                                                        <td style="width: 75px; border: 0px;">
                                                            <?php if (!empty($emp_info->photo)) { ?>
                                                                <img style="width: 40px;height: 40px" src="<?php echo base_url() . $emp_info->photo ?>" alt="" class="img-circle"/>
                                                            <?php } else { ?>
                                                                <img style="width: 40px;height: 40px" src="<?php echo base_url() ?>img/admin.png" alt="" class="img-circle"/>
                                                            <?php } ?>
                                                        </td>
                                                        <td>
                                                            <a href="<?= base_url() ?>admin/employee/view_employee/<?= $emp_info->employee_id ?>"><h4><?= $emp_info->first_name . ' ' . $emp_info->last_name . '<small> (' . $emp_info->employment_id . ') </small>' ?></h4></a>                                                            
                                                        </td>                                                        
                                                    </tr>
                                                    <?php
                                            endif;
                                            ?>
                                        </tbody>
                                    </table>                                    
                                </div>
                            </div>

                        </div>                         

                    </div>        
                </div>
                <!-- Task Details tab Ends -->


                <!-- Task Comments Panel Starts --->
                <div class="tab-pane <?= $active == 2 ? 'active' : '' ?>" id="task_contact_comments" style="position: relative;">
                    <div class="box" style="border: none; padding-top: 15px;" data-collapsed="0">                        
                        <div class="box-body chat" id="chat-box">

                            <form id="form_validation" action="<?php echo base_url() ?>admin/task/save_contact_comments" method="post" class="form-horizontal">
                                <input type="hidden" name="task_contact_id" value="<?php
                                if (!empty($task_details->task_contact_id)) {
                                    echo $task_details->task_contact_id;
                                }
                                ?>" class="form-control"   >  
                                <div class="form-group"> 
                                    <div class="col-sm-12">
                                        <textarea class="form-control col-sm-12" name="comment" style="height: 70px;" required ></textarea>
                                    </div>
                                </div>                                
                                <div class="form-group">                    
                                    <div class="col-sm-12">
                                        <div class="pull-right">
                                            <button type="submit" id="sbtn" class="btn btn-primary"><?= lang('post_comment') ?></button>                            
                                        </div>
                                    </div>
                                </div>                                
                            </form> 
                            <hr />
                            <?php if (!empty($comment_details)):foreach ($comment_details as $key => $v_comment): ?>

                                    <div class="col-sm-12 item ">
                                        <?php if (!empty($v_comment->photo)) { ?>
                                            <img src="<?php echo base_url() . $v_comment->photo ?>" alt="user image" class="img-circle"/>
                                        <?php } else { ?>
                                            <img src="<?php echo base_url() ?>img/admin.png" alt="user image" class="img-circle"/>
                                        <?php } ?>                                        

                                        <p class="message">
                                            <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> <?= date('d M Y - G:ia', strtotime($v_comment->comment_datetime)); ?></small>
                                            <a href="#" class="name">
                                                <?php
                                                if (!empty($v_comment->employee_id)) {
                                                    ?>
                                                    <a href="<?= base_url() ?>admin/employee/view_employee/<?= $v_comment->employee_id ?>" class="name">                                            
                                                        <?= $v_comment->first_name . ' ' . $v_comment->last_name . '<small class="label label-success" style="padding:2px">'. $v_comment->employment_id . '</small>' ?>
                                                    </a>
                                                    <?php
                                                } else {
                                                    $user_info = $this->db->where(array('user_id' => $v_comment->user_id))->get('tbl_user')->row();
                                                    ?>
                                                    <a href="<?= base_url() ?>admin/employee/view_employee/<?= $v_comment->employee_id ?>" class="name">
                                                        <?php if ($user_info->flag == 1): ?>
                                                        <?= $user_info->first_name . ' ' . $user_info->last_name . ' <small class="label label-danger" style="padding:2px"> admin </small>' ?>
                                                    <?php else: ?>
                                                        <?= $user_info->first_name . ' ' . $user_info->last_name . ' <small class="label label-danger" style="padding:2px"> support </small>' ?>
                                                    <?php endif;?>
                                                    </a>
                                                <?php } ?>
                                            </a>
                                            <?php if (!empty($v_comment->comment)) echo $v_comment->comment; ?>
                                        </p>
                                    </div><!-- /.item -->
                                <?php endforeach; ?>
                            <?php endif; ?>

                        </div>      
                    </div>   
                </div> 
                <!-- Task Comments Panel Ends--->

                <!-- Task Attachment Panel Starts --->
                <div class="tab-pane <?= $active == 3 ? 'active' : '' ?>" id="task_contact_attachments" style="position: relative;">
                    <div class="box" style="border: none; padding-top: 15px;" data-collapsed="0">                        
                        <div class="panel-body">

                            <form action="<?= base_url() ?>admin/task/save_task_attachment/<?php
                            if (!empty($add_files_info)) {
                                echo $add_files_info->task_contact_attachment_id;
                            }
                            ?>" enctype="multipart/form-data" method="post" id="form" class="form-horizontal">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label"><?= lang('file_title') ?> <span class="text-danger">*</span></label>
                                    <div class="col-lg-6">
                                        <input name="title" class="form-control" value="<?php
                                        if (!empty($add_files_info)) {
                                            echo $add_files_info->title;
                                        }
                                        ?>" required placeholder="<?= lang('file_title') ?>"/>
                                    </div>
                                </div>                                
                                <div class="form-group">
                                    <label class="col-lg-3 control-label"><?= lang('description') ?></label>
                                    <div class="col-lg-6">
                                        <textarea name="description" class="form-control" placeholder="<?= lang('description') ?>" ><?php
                                            if (!empty($add_files_info)) {
                                                echo $add_files_info->description;
                                            }
                                            ?></textarea>
                                    </div>
                                </div>
                                <?php if (empty($add_files_info)) { ?>
                                    <div id="add_new" >
                                        <div class="form-group" style="margin-bottom: 0px">
                                            <label for="field-1" class="col-sm-3 control-label"><?= lang('upload_file') ?></label>                        
                                            <div class="col-sm-6">
                                                <div class="fileinput fileinput-new"  data-provides="fileinput">
                                                    <?php if (!empty($project_files)):foreach ($project_files as $v_files_image): ?>
                                                            <span class="btn btn-default btn-file"><span class="fileinput-new" style="display: none" >Select file</span>
                                                                <span class="fileinput-exists" style="display: block"><?= lang('change') ?></span>
                                                                <input type="hidden" name="task_files[]" value="<?php echo $v_files_image->files ?>">                                                                                                    
                                                                <input type="file" name="task_files[]" >
                                                            </span>                                    
                                                            <span class="fileinput-filename"> <?php echo $v_files_image->file_name ?></span>                                          
                                                        <?php endforeach; ?>
                                                    <?php else: ?>
                                                        <span class="btn btn-default btn-file"><span class="fileinput-new" ><?= lang('select_file') ?></span>
                                                            <span class="fileinput-exists" ><?= lang('change') ?></span>                                            
                                                            <input type="file" name="task_files[]" >
                                                        </span> 
                                                        <span class="fileinput-filename"></span>                                        
                                                        <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none;">&times;</a>                                                                                                            
                                                    <?php endif; ?>
                                                </div>  
                                                <div id="msg_pdf" style="color: #e11221"></div>                        
                                            </div>
                                            <div class="col-sm-2">                            
                                                <strong><a href="javascript:void(0);" id="add_more" class="addCF "><i class="fa fa-plus"></i>&nbsp;<?= lang('add_more') ?></a></strong>
                                            </div>
                                        </div>                    
                                    </div>  
                                <?php } ?>
                                <br/>
                                <input type="hidden" name="task_id" value="<?php
                                if (!empty($task_details->task_contact_id)) {
                                    echo $task_details->task_contact_id;
                                }
                                ?>" class="form-control"   >  
                                <div class="form-group">
                                    <div class="col-sm-3">
                                    </div>
                                    <div class="col-sm-3">
                                        <button type="submit" class="btn btn-primary"><?= lang('upload_file') ?></button>                
                                    </div>
                                </div>
                            </form>

                        </div>      
                    </div>   
                    <div class="box box-success">
                        <div class="box-header">                            
                            <h5><?= lang('attach_file_list') ?></h5>                            
                        </div>
                        <div class="box-body">
                            <?php
                            $this->load->helper('file');

                            if (!empty($project_files_info)) {
                                foreach ($project_files_info as $key => $v_files_info) {
                                    ?>
                                    <div class="panel-group" id="accordion" style="margin:8px 5px" role="tablist" aria-multiselectable="true">
                                        <div class="box box-info" style="border-radius: 0px ">
                                            <div class="panel-heading"  role="tab" id="headingOne">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#<?php echo $key ?>" aria-expanded="true" aria-controls="collapseOne">
                                                        <strong><?php echo $files_info[$key]->title; ?> </strong>
                                                    </a>                                                   
                                                </h4>
                                            </div>
                                            <div id="<?php echo $key ?>" class="panel-collapse collapse <?php
                                            if (!empty($in) && $files_info[$key]->files_id == $in) {
                                                echo 'in';
                                            }
                                            ?>" role="tabpanel" aria-labelledby="headingOne">
                                                <div class="content">
                                                    <div class="table-responsive">
                                                        <table id="table-files" class="table table-striped ">
                                                            <thead>
                                                                <tr>
                                                                    <th width="45%"><?= lang('files') ?></th>
                                                                    <th class=""><?= lang('size') ?></th>
                                                                    <th ><?= lang('date') ?></th>
                                                                    <th ><?= lang('uploaded_by') ?></th>
                                                                    <th><?= lang('action') ?></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                $this->load->helper('file');

                                                                if (!empty($v_files_info)) {
                                                                    foreach ($v_files_info as $v_files) {
                                                                        ?>
                                                                        <tr class="file-item">
                                                                            <td>
                                                                                <?php if ($v_files->is_image == 1) : ?>                                                           
                                                                                    <div class="file-icon"><a href="<?= base_url() . $v_files->files ?>" >
                                                                                            <img style="width: 50px;border-radius: 5px;" src="<?= base_url() . $v_files->files ?>" /></a></div>
                                                                                <?php else : ?>
                                                                                    <div class="file-icon"><i class="fa fa-file-o"></i>
                                                                                        <a href="<?= base_url() . $v_files->files ?>" ><?= $v_files->file_name ?></a>
                                                                                    </div>
                                                                                <?php endif; ?>

                                                                                <a data-toggle="tooltip" data-placement="top" data-original-title="<?= $files_info[$key]->description ?>" class="text-info" href="<?= base_url() ?>admin/task/download_files/<?= $files_info[$key]->task_id ?>/<?= $v_files->uploaded_files_id ?>">
                                                                                    <?= $files_info[$key]->title ?>
                                                                                    <?php if ($v_files->is_image == 1) : ?>
                                                                                        <em><?= $v_files->image_width . "x" . $v_files->image_height ?></em>
                                                                                    <?php endif; ?>
                                                                                </a>
                                                                                <p class="file-text"><?= $files_info[$key]->description ?></p>
                                                                            </td>
                                                                            <td class=""><?= $v_files->size ?> Kb</td>
                                                                            <td class="col-date"><?= date('Y-m-d' . "<br/> h:m A", strtotime($files_info[$key]->upload_time)); ?></td>
                                                                            <td>
                                                                                <a class="pull-left recect_task">                                                            
                                                                                    <?php
                                                                                    if (!empty($files_info[$key]->employee_id)) {
                                                                                        $employee_info = $this->db->where(array('employee_id' => $files_info[$key]->employee_id))->get('tbl_employee')->row();
                                                                                        ?>
                                                                                        <a href="<?= base_url() ?>admin/employee/view_employee/<?= $files_info[$key]->employee_id ?>" class="name">                                            
                                                                                            <?= $employee_info->first_name . ' ' . $employee_info->last_name . '<small> (' . $employee_info->employment_id . ') </small>' ?>
                                                                                        </a>
                                                                                        <?php
                                                                                    } else {
                                                                                        $user_info = $this->db->where(array('user_id' => $files_info[$key]->user_id))->get('tbl_user')->row();
                                                                                        ?>
                                                                                        <a href="<?= base_url() ?>admin/settings/update_profile" class="name">                                            
                                                                                            <?= $user_info->first_name . ' ' . $user_info->last_name . ' <small class="label label-danger"> admin </small>' ?>
                                                                                        </a>
                                                                                    <?php } ?>
                                                                                </a>
                                                                            </td>
                                                                            <td >                                                                               
                                                                                <a class="btn btn-xs btn-dark" data-toggle="tooltip" data-placement="top" title="Download" href="<?= base_url() ?>admin/task/download_files/<?= $files_info[$key]->task_id ?>/<?= $v_files->uploaded_files_id ?>"><i class="fa fa-download"></i></a>
                                                                            </td>

                                                                        </tr>
                                                                        <?php
                                                                    }
                                                                } else {
                                                                    ?>
                                                                    <tr><td colspan="5">
                                                                            <?= lang('nothing_to_display') ?>
                                                                        </td></tr>
                                                                <?php } ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>  
                                        </div>
                                    </div>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>  
                <!-- Task Attachment Panel Ends --->

                <div class="tab-pane <?= $active == 4 ? 'active' : '' ?>" id="links" style="position: relative;">
                    <div class="box" style="border: none; padding-top: 15px;" data-collapsed="0">
                        <div class="box-body">
                            <ul class="nav nav-tabs">
                                <li class="<?= $active == 1 ? 'active' : '' ?>"><a href="#team" data-toggle="tab"><?= lang('team') ?></a></li>
                                <li class="<?= $active == 2 ? 'active' : '' ?>"><a href="#advisors"  data-toggle="tab"><?= lang('advisors') ?></a></li>
                                <li class="<?= $active == 3 ? 'active' : '' ?>"><a href="#partners"  data-toggle="tab"><?= lang('partners') ?></a></li>
                            </ul>
                            <div class="tab-content no-padding">
                                <div class="tab-pane <?= $active == 1 ? 'active' : '' ?>" id="team" style="position: relative; margin-top:10px;">
                                    <form  action="<?php echo base_url() ?>admin/task/save_team_links/<?php if (!empty($task_details->task_contact_id)) {
                                        echo $task_details->task_contact_id;
                                    }?>" method="post" class="form-horizontal">
                                        <div class="col-sm-12 link_box" >
                                            <div class="col-sm-11" style="background:#83c583; border: none; padding-top: 5px;">
                                                <input type="hidden" value ="<?php if (!empty($task_details->task_contact_id)) {
                                                    echo $task_details->task_contact_id;
                                                }?>" >
                                                <input type="hidden" class ="summ"  name="sum" >

                                            </div>
                                            <div class="col-sm-1">
                                                <strong><a class="btn btn-success btn-xs add_new_link"  href="javascript:void(0)"> <i class="fa fa-plus"></i>&nbsp;<?= lang('add') ?></a></strong>
                                            </div>
                                            <?php if (!empty($task_team_details)): ?>
                                                <?php  foreach ($task_team_details as $team): ?>
                                                    <div class="col-sm-11 sum" style="border:1px solid #EFEFEF;; padding-top: 15px;" >
                                                        <input type="hidden" name ="team_id[]" value ="<?php if (!empty($team->team_id)) {
                                                            echo $team->team_id;
                                                        }?>" >
                                                        <?php  echo  '<div class="col-sm-12" style="padding:3px"><div class="col-sm-4" style="background:#83c583; border: none; padding-top: 5px;"> <span><strong>' . lang('full_name') . '</strong></span></div>'; ?>
                                                        <div class="col-sm-7"><input type="text" readonly class="fullname form-control" name="full_name[]" placeholder="profile link" value="<?php if(!empty($team->full_name)){ echo $team->full_name; } ?> " > </span></div>
                                                        <div class="col-sm-1"> <a href ="<?= base_url() ?>admin/task/delete_team_link/<?= $team->team_id ?>/<?= $task_details->task_contact_id?>" class="btn btn-danger btn-xs delete" style="margin:5px">  &nbsp;X </a></div></div>

                                            <?php if(!empty($team->fb)) {
                                                            echo  '<div class="col-sm-12" style="padding:3px"><div class="col-sm-4 fbs" style="background:#83c583; border: none; padding-top: 5px;"> <span>' . lang('fb') . '</span></div>';
                                                            echo '<div class="col-sm-8 fbs"> <input type="checkbox" checked  style="display:none" name="fb_check" class="fb_check hid ">  <input readonly type="text" class="fb form-control" name="fb[]" placeholder="profile link" value ="' . $team->fb . '"> </div></div>';
                                                        }else{
                                                            echo  '<div class="col-sm-12" style="padding:3px"><div class="col-sm-4 fbs" style=" background:#83c583; border: none; padding-top: 5px;"> <span >' . lang('fb') . '</span></div>';
                                                            echo '<div class="col-sm-8 fbs" style="display:none"> <input type="checkbox"  name="fb_check" class="fb_check hid">  <input type="text" class="fb form-control" name="fb[]" placeholder="profile link" style="display:none"></div></div>';
                                                        } ?>
                                                        <?php if(!empty($team->twiter)) {
                                                            echo  '<div class="col-sm-12" style="padding:3px"><div class="col-sm-4 twiter" style="background:#83c583; border: none; padding-top: 5px;"> <span>' . lang('twiter') . '</span></div>';
                                                            echo '<div class="col-sm-8 twiter"> <input type="checkbox" checked  style="display:none"  name="twiter_check" class="twiter_check hid ">   <input type="text" readonly class="twiter form-control" name="twiter[]" placeholder="profile link" value ="' . $team->twiter . '"></div></div>';
                                                        }else{
                                                            echo  '<div class="col-sm-12" style="padding:3px"><div class="col-sm-4 twiter fbs" style="background:#83c583;  border: none; padding-top: 5px;"> <span>' . lang('twiter') . '</span></div>';
                                                            echo '<div class="col-sm-8 twiter" > <input type="checkbox" style="display:none" name="twiter_check" class="twiter_check hid">  <input type="text" class="twiter form-control" name="twiter[]" placeholder="profile link" style="display:none"></div></div>';
                                                        } ?>
                                                        <?php if(!empty($team->linkidn)) {
                                                            echo  '<div class="col-sm-12" style="padding:3px"><div class="col-sm-4" style="background:#83c583; border: none; padding-top: 5px;"> <span>' . lang('linkidn') . '</span></div>';
                                                            echo '<div class="col-sm-8"> <input type="checkbox" checked style="display:none"  name="linkidn_check" class="linkidn_check hid ">  <input type="text"  readonly class="linkidn form-control" name="linkidn[]" placeholder="profile link" value ="' . $team->linkidn . '"></div></div>';
                                                        }else{
                                                            echo  '<div class="col-sm-12" style="padding:3px"><div class="col-sm-4 linkidn fbs" style="background:#83c583;   border: none; padding-top: 5px;"> <span>' . lang('linkidn') . '</span></div>';
                                                            echo '<div class="col-sm-8 linkidn"> <input type="checkbox" style="display:none" name="linkidn_check" class="linkidn_check hid">  <input type="text" class="linkidn form-control" name="linkidn[]" placeholder="profile link" style="display:none"></div></div>';
                                                        } ?>
                                                    </div>
                                                    <div class="col-sm-1"> <button class="btn btn-success btn-xs edit" style="margin:5px" data-id="<?php $team->team_id ?>"> &nbsp;Edit</button>
                                                        <button class="btn btn-success btn-xs save_edit" style="margin:5px; display:none"  data-id="<?php $team->team_id ?>"> &nbsp;save</button></div>
                                                <?php endforeach; ?>
                                            <?php else: ?>
                                                <div class="col-sm-11 links sum" style="border:1px solid #dff6e0; padding-top: 15px;" >
                                                    <div class="col-sm-12" style="padding:3px">
                                                        <div class="col-sm-4 " style="background:#83c583; border: none; padding-top: 5px;"> <span><strong><?php echo  lang('full_name') ?></strong></span></div>
                                                        <div class="col-sm-8"> <input type="text" class="fullname form-control" name="full_name[]" placeholder="Full Name" > </span></div>
                                                    </div>
                                                    <div class="col-sm-12" style="padding:3px">
                                                        <div class="col-sm-4 fbs" style="background:#83c583; border: none; padding-top: 5px;"> <span><?php echo  lang('fb') ?></span></div>
                                                        <div class="col-sm-8 fbs"> <input type="checkbox"  name="fb_check" class="fb_check hid">  <input type="text" class="fb form-control" name="fb[]" placeholder="profile link" style="display:none"></div>
                                                    </div>
                                                    <div class="col-sm-12" style="padding:3px">
                                                        <div class="col-sm-4 twiter" style="background:#83c583; border: none; padding-top: 5px;"> <span><?php echo  lang('twiter') ?></span></div>
                                                        <div class="col-sm-8 twiter"> <input type="checkbox"  name="twiter_check" class="twiter_check hid">  <input type="text" class="twiter form-control" name="twiter[]" placeholder="profile link" style="display:none"></div>
                                                    </div>
                                                    <div class="col-sm-12" style="padding:3px">
                                                        <div class="col-sm-4 linkidn" style="background:#83c583; border: none; padding-top: 5px;"> <span><?php echo  lang('linkidn') ?></span></div>
                                                        <div class="col-sm-8 linkidn"> <input type="checkbox" name="linkidn_check" class="linkidn_check hid">  <input type="text" class="linkidn form-control" name="linkidn[]" placeholder="profile link" style="display:none"></div>
                                                    </div>

                                                </div>

                                            <?php endif; ?>
                                        </div>
                                        <button class="btn save" style="margin: 20px"> Save</button>
                                    </form>
                            </div>

                            <div class="tab-pane <?= $active == 2 ? 'active' : '' ?>" id="advisors" style="position: relative; margin-top:10px;">
                                    <form  action="<?php echo base_url() ?>admin/task/save_advisor_links/<?php if (!empty($task_details->task_contact_id)) {
                                        echo $task_details->task_contact_id;
                                    }?>" method="post" class="form-horizontal">
                                        <div class="col-sm-12 link_box" >
                                            <div class="col-sm-11" style="background:#83c583; border: none; padding-top: 5px;">
                                                <input type="hidden" value ="<?php if (!empty($task_details->task_contact_id)) {
                                                    echo $task_details->task_contact_id;
                                                }?>" >
                                                <input type="hidden" class ="summ"  name="sum" >

                                            </div>
                                            <div class="col-sm-1">
                                                <strong><a class="btn btn-success btn-xs add_new_link"  href="javascript:void(0)"> <i class="fa fa-plus"></i>&nbsp;<?= lang('add') ?></a></strong>
                                            </div>
                                            <?php if (!empty($task_advisor_details)): ?>
                                            <?php  foreach ($task_advisor_details as $advisor): ?>
                                            <div class="col-sm-11 sum" style="border:1px solid #EFFFEF;; padding-top: 15px;" >
                                                <input type="hidden" name ="advisor_id[]" value ="<?php if (!empty($advisor->advisor_id)) {
                                                    echo $advisor->advisor_id;
                                                }?>" >
                                                <?php  echo  '<div class="col-sm-12" style="padding:3px"><div class="col-sm-4" style="background:#83c583; border: none; padding-top: 5px;"> <span><strong>' . lang('full_name') . '</strong></span></div>'; ?>
                                                <div class="col-sm-7"><input type="text" readonly class="fullname form-control" name="full_name[]" placeholder="profile link" value="<?php if(!empty($advisor->full_name)){ echo $advisor->full_name; } ?> " > </span></div>
                                                <div class="col-sm-1"> <a href ="<?= base_url() ?>admin/task/delete_advisor_link/<?= $advisor->advisor_id ?>/<?= $task_details->task_contact_id?>" class="btn btn-danger btn-xs delete" style="margin:5px">  &nbsp;X </a></div></div>

                                            <?php if(!empty($advisor->fb)) {
                                                echo  '<div class="col-sm-12" style="padding:3px"><div class="col-sm-4 fbs" style="background:#83c583; border: none; padding-top: 5px;"> <span>' . lang('fb') . '</span></div>';
                                                echo '<div class="col-sm-8 fbs"> <input type="checkbox" checked  style="display:none" name="fb_check" class="fb_check hid ">  <input readonly type="text" class="fb form-control" name="fb[]" placeholder="profile link" value ="' . $advisor->fb . '"> </div></div>';
                                            }else{
                                                echo  '<div class="col-sm-12" style="padding:3px"><div class="col-sm-4 fbs" style=" background:#83c583; border: none; padding-top: 5px;"> <span >' . lang('fb') . '</span></div>';
                                                echo '<div class="col-sm-8 fbs" style="display:none"> <input type="checkbox"  name="fb_check" class="fb_check hid">  <input type="text" class="fb form-control" name="fb[]" placeholder="profile link" style="display:none"></div></div>';
                                            } ?>
                                            <?php if(!empty($advisor->twiter)) {
                                                echo  '<div class="col-sm-12" style="padding:3px"><div class="col-sm-4 twiter" style="background:#83c583; border: none; padding-top: 5px;"> <span>' . lang('twiter') . '</span></div>';
                                                echo '<div class="col-sm-8 twiter"> <input type="checkbox" checked  style="display:none"  name="twiter_check" class="twiter_check hid ">   <input type="text" readonly class="twiter form-control" name="twiter[]" placeholder="profile link" value ="' . $advisor->twiter . '"></div></div>';
                                            }else{
                                                echo  '<div class="col-sm-12" style="padding:3px"><div class="col-sm-4 twiter fbs" style="background:#83c583;  border: none; padding-top: 5px;"> <span>' . lang('twiter') . '</span></div>';
                                                echo '<div class="col-sm-8 twiter" > <input type="checkbox" style="display:none" name="twiter_check" class="twiter_check hid">  <input type="text" class="twiter form-control" name="twiter[]" placeholder="profile link" style="display:none"></div></div>';
                                            } ?>
                                            <?php if(!empty($advisor->linkidn)) {
                                                echo  '<div class="col-sm-12" style="padding:3px"><div class="col-sm-4" style="background:#83c583; border: none; padding-top: 5px;"> <span>' . lang('linkidn') . '</span></div>';
                                                echo '<div class="col-sm-8"> <input type="checkbox" checked style="display:none"  name="linkidn_check" class="linkidn_check hid ">  <input type="text"  readonly class="linkidn form-control" name="linkidn[]" placeholder="profile link" value ="' . $advisor->linkidn . '"></div></div>';
                                            }else{
                                                echo  '<div class="col-sm-12" style="padding:3px"><div class="col-sm-4 linkidn fbs" style="background:#83c583;   border: none; padding-top: 5px;"> <span>' . lang('linkidn') . '</span></div>';
                                                echo '<div class="col-sm-8 linkidn"> <input type="checkbox" style="display:none" name="linkidn_check" class="linkidn_check hid">  <input type="text" class="linkidn form-control" name="linkidn[]" placeholder="profile link" style="display:none"></div></div>';
                                            } ?>
                                        </div>
                                        <div class="col-sm-1"> <button class="btn btn-success btn-xs edit" style="margin:5px" data-id="<?php $advisor->advisor_id ?>"> &nbsp;Edit</button>

                                            <button class="btn btn-success btn-xs save_edit" style="margin:5px; display:none"  data-id="<?php $advisor->advisor_id ?>"> &nbsp;save</button></div>
                                        <?php endforeach; ?>
                                        <?php else: ?>
                                            <div class="col-sm-11 links sum" style="border:1px solid #dff6e0; padding-top: 15px;" >
                                                <div class="col-sm-12" style="padding:3px">
                                                    <div class="col-sm-4 " style="background:#83c583; border: none; padding-top: 5px;"> <span><strong><?php echo  lang('full_name') ?></strong></span></div>
                                                    <div class="col-sm-8"> <input type="text" class="fullname form-control" name="full_name[]" placeholder="Full Name" > </span></div>
                                                </div>
                                                <div class="col-sm-12" style="padding:3px">
                                                    <div class="col-sm-4 fbs" style="background:#83c583; border: none; padding-top: 5px;"> <span><?php echo  lang('fb') ?></span></div>
                                                    <div class="col-sm-8 fbs"> <input type="checkbox"  name="fb_check" class="fb_check hid">  <input type="text" class="fb form-control" name="fb[]" placeholder="profile link" style="display:none"></div>
                                                </div>
                                                <div class="col-sm-12" style="padding:3px">
                                                    <div class="col-sm-4 twiter" style="background:#83c583; border: none; padding-top: 5px;"> <span><?php echo  lang('twiter') ?></span></div>
                                                    <div class="col-sm-8 twiter"> <input type="checkbox"  name="twiter_check" class="twiter_check hid">  <input type="text" class="twiter form-control" name="twiter[]" placeholder="profile link" style="display:none"></div>
                                                </div>
                                                <div class="col-sm-12" style="padding:3px">
                                                    <div class="col-sm-4 linkidn" style="background:#83c583; border: none; padding-top: 5px;"> <span><?php echo  lang('linkidn') ?></span></div>
                                                    <div class="col-sm-8 linkidn"> <input type="checkbox" name="linkidn_check" class="linkidn_check hid">  <input type="text" class="linkidn form-control" name="linkidn[]" placeholder="profile link" style="display:none"></div>
                                                </div>

                                            </div>

                                        <?php endif; ?>
                                </div>
                            <button class="btn save" style="margin: 20px"> Save</button>
                            </form>
                        </div>


                        <div class="tab-pane <?= $active == 3? 'active' : '' ?>" id="partners" style="position: relative; margin-top:10px;">
                            <form  action="<?php echo base_url() ?>admin/task/save_partner_links/<?php if (!empty($task_details->task_contact_id)) {
                                echo $task_details->task_contact_id;
                            }?>" method="post" class="form-horizontal">
                                <div class="col-sm-12 link_box" >
                                    <div class="col-sm-11" style="background:#83c583; border: none; padding-top: 5px;">
                                        <input type="hidden" value ="<?php if (!empty($task_details->task_contact_id)) {
                                            echo $task_details->task_contact_id;
                                        }?>" >
                                        <input type="hidden" class ="summ"  name="sum" >

                                    </div>
                                    <div class="col-sm-1">
                                        <strong><a class="btn btn-success btn-xs add_new_link"  href="javascript:void(0)"> <i class="fa fa-plus"></i>&nbsp;<?= lang('add') ?></a></strong>
                                    </div>
                                    <?php if (!empty($task_partner_details)): ?>
                                    <?php  foreach ($task_partner_details as $partner): ?>
                                    <div class="col-sm-11 sum" style="border:1px solid #EFEFEF;; padding-top: 15px;" >
                                        <input type="hidden" name ="partner_id[]" value ="<?php if (!empty($partner->partner_id)) {
                                            echo $partner->partner_id;
                                        }?>" >
                                        <?php  echo  '<div class="col-sm-12" style="padding:3px"><div class="col-sm-4" style="background:#83c583; border: none; padding-top: 5px;"> <span><strong>' . lang('full_name') . '</strong></span></div>'; ?>
                                        <div class="col-sm-7"><input type="text" readonly class="fullname form-control" name="full_name[]" placeholder="profile link" value="<?php if(!empty($partner->full_name)){ echo $partner->full_name; } ?> " > </span></div>
                                        <div class="col-sm-1"> <a href ="<?= base_url() ?>admin/task/delete_partner_link/<?= $partner->partner_id ?>/<?= $task_details->task_contact_id?>" class="btn btn-danger btn-xs delete" style="margin:5px">  &nbsp;X </a></div></div>

                                    <?php if(!empty($partner->fb)) {
                                        echo  '<div class="col-sm-12" style="padding:3px"><div class="col-sm-4 fbs" style="background:#83c583; border: none; padding-top: 5px;"> <span>' . lang('fb') . '</span></div>';
                                        echo '<div class="col-sm-8 fbs"> <input type="checkbox" checked  style="display:none" name="fb_check" class="fb_check hid ">  <input readonly type="text" class="fb form-control" name="fb[]" placeholder="profile link" value ="' . $partner->fb . '"> </div></div>';
                                    }else{
                                        echo  '<div class="col-sm-12" style="padding:3px"><div class="col-sm-4 fbs" style=" background:#83c583; border: none; padding-top: 5px;"> <span >' . lang('fb') . '</span></div>';
                                        echo '<div class="col-sm-8 fbs" style="display:none"> <input type="checkbox"  name="fb_check" class="fb_check hid">  <input type="text" class="fb form-control" name="fb[]" placeholder="profile link" style="display:none"></div></div>';
                                    } ?>
                                    <?php if(!empty($partner->twiter)) {
                                        echo  '<div class="col-sm-12" style="padding:3px"><div class="col-sm-4 twiter" style="background:#83c583; border: none; padding-top: 5px;"> <span>' . lang('twiter') . '</span></div>';
                                        echo '<div class="col-sm-8 twiter"> <input type="checkbox" checked  style="display:none"  name="twiter_check" class="twiter_check hid ">   <input type="text" readonly class="twiter form-control" name="twiter[]" placeholder="profile link" value ="' . $partner->twiter . '"></div></div>';
                                    }else{
                                        echo  '<div class="col-sm-12" style="padding:3px"><div class="col-sm-4 twiter fbs" style="background:#83c583;  border: none; padding-top: 5px;"> <span>' . lang('twiter') . '</span></div>';
                                        echo '<div class="col-sm-8 twiter" > <input type="checkbox" style="display:none" name="twiter_check" class="twiter_check hid">  <input type="text" class="twiter form-control" name="twiter[]" placeholder="profile link" style="display:none"></div></div>';
                                    } ?>
                                    <?php if(!empty($partner->linkidn)) {
                                        echo  '<div class="col-sm-12" style="padding:3px"><div class="col-sm-4" style="background:#83c583; border: none; padding-top: 5px;"> <span>' . lang('linkidn') . '</span></div>';
                                        echo '<div class="col-sm-8"> <input type="checkbox" checked style="display:none"  name="linkidn_check" class="linkidn_check hid ">  <input type="text"  readonly class="linkidn form-control" name="linkidn[]" placeholder="profile link" value ="' . $partner->linkidn . '"></div></div>';
                                    }else{
                                        echo  '<div class="col-sm-12" style="padding:3px"><div class="col-sm-4 linkidn fbs" style="background:#83c583;   border: none; padding-top: 5px;"> <span>' . lang('linkidn') . '</span></div>';
                                        echo '<div class="col-sm-8 linkidn"> <input type="checkbox" style="display:none" name="linkidn_check" class="linkidn_check hid">  <input type="text" class="linkidn form-control" name="linkidn[]" placeholder="profile link" style="display:none"></div></div>';
                                    } ?>
                                </div>
                                <div class="col-sm-1"> <button class="btn btn-success btn-xs edit" style="margin:5px" data-id="<?php $partner->partner_id ?>"> &nbsp;Edit</button>
                                    <button class="btn btn-success btn-xs save_edit" style="margin:5px; display:none"  data-id="<?php $partner->partner_id ?>"> &nbsp;save</button></div>
                                <?php endforeach; ?>
                                <?php else: ?>
                                    <div class="col-sm-11 links sum" style="border:1px solid #dff6e0; padding-top: 15px;" >
                                        <div class="col-sm-12" style="padding:3px">
                                            <div class="col-sm-4 " style="background:#83c583; border: none; padding-top: 5px;"> <span><strong><?php echo  lang('full_name') ?></strong></span></div>
                                            <div class="col-sm-8"> <input type="text" class="fullname form-control" name="full_name[]" placeholder="Full Name" > </span></div>
                                        </div>
                                        <div class="col-sm-12" style="padding:3px">
                                            <div class="col-sm-4 fbs" style="background:#83c583; border: none; padding-top: 5px;"> <span><?php echo  lang('fb') ?></span></div>
                                            <div class="col-sm-8 fbs"> <input type="checkbox"  name="fb_check" class="fb_check hid">  <input type="text" class="fb form-control" name="fb[]" placeholder="profile link" style="display:none"></div>
                                        </div>
                                        <div class="col-sm-12" style="padding:3px">
                                            <div class="col-sm-4 twiter" style="background:#83c583; border: none; padding-top: 5px;"> <span><?php echo  lang('twiter') ?></span></div>
                                            <div class="col-sm-8 twiter"> <input type="checkbox"  name="twiter_check" class="twiter_check hid">  <input type="text" class="twiter form-control" name="twiter[]" placeholder="profile link" style="display:none"></div>
                                        </div>
                                        <div class="col-sm-12" style="padding:3px">
                                            <div class="col-sm-4 linkidn" style="background:#83c583; border: none; padding-top: 5px;"> <span><?php echo  lang('linkidn') ?></span></div>
                                            <div class="col-sm-8 linkidn"> <input type="checkbox" name="linkidn_check" class="linkidn_check hid">  <input type="text" class="linkidn form-control" name="linkidn[]" placeholder="profile link" style="display:none"></div>
                                        </div>

                                    </div>

                                <?php endif; ?>
                        </div>
                        <button class="btn save" style="margin: 20px"> Save</button>
                        </form>
                    </div>

                </div>



                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        var maxAppend = 0;
        $("#add_more").click(function () {
            if (maxAppend >= 4)
            {
                alert("Maximum 5 File is allowed");
            } else {
                var add_new = $('<div class="form-group" style="margin-bottom: 0px">\n\
                    <label for="field-1" class="col-sm-3 control-label"><?= lang('upload_file') ?></label>\n\
            <div class="col-sm-5">\n\
            <div class="fileinput fileinput-new" data-provides="fileinput">\n\
<span class="btn btn-default btn-file"><span class="fileinput-new" >Select file</span><span class="fileinput-exists" >Change</span><input type="file" name="task_files[]" ></span> <span class="fileinput-filename"></span><a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none;">&times;</a></div></div>\n\<div class="col-sm-2">\n\<strong>\n\
<a href="javascript:void(0);" class="remCF"><i class="fa fa-times"></i>&nbsp;Remove</a></strong></div>');
                maxAppend++;
                $("#add_new").append(add_new);
            }
        });

        $("#add_new").on('click', '.remCF', function () {
            $(this).parent().parent().parent().remove();
        });

        $("#add_new_att").on('click', '.remCF_att', function () {
            $(this).parent().parent().parent().remove();
        });


        $(".add_new_link").click(function (){
            var maxAppend2 = $(this).parents().prev().find('.summ').val();
            console.log(maxAppend2)
            if (maxAppend2 >= 10)
            {
                alert("Maximum 10 links is allowed");
            } else {
                var add_new = $('<div class="col-sm-11 links sum" style="border:1px solid #dff6e0; padding-top: 15px;" >\n\
                                                 <div class="col-sm-12" style="padding:3px">\n\
                                                        <div class="col-sm-4 " style="background:#83c583; border: none; padding-top: 5px;"> <span><strong><?php echo  lang('full_name') ?></strong></span></div> \n\
                                                        <div class="col-sm-7"> <input type="text" class="fullname form-control" name="full_name[]" placeholder="Full Name" > </span></div> \n\
                                                     <div class="col-sm-1"> <button class="btn btn-danger btn-xs remove" > </i>&nbsp;X</button> </div>\n\
                                                    </div>\n\
                                                    <div class="col-sm-12" style="padding:3px">\n\
                                                        <div class="col-sm-4 fbs" style="background:#83c583; border: none; padding-top: 5px;"> <span><?php echo  lang('fb') ?></span></div>\n\
                                                        <div class="col-sm-8 fbs"> <input type="checkbox"  name="fb_check" class="fb_check hid">  <input type="text" class="fb form-control" name="fb[]" placeholder="profile link" style="display:none"></div>\n\
                                                    </div>\n\
                                                    <div class="col-sm-12" style="padding:3px">\n\
                                                        <div class="col-sm-4 twiter" style="background:#83c583; border: none; padding-top: 5px;"> <span><?php echo  lang('twiter') ?></span></div>\n\
                                                        <div class="col-sm-8 twiter"> <input type="checkbox"  name="twiter_check" class="twiter_check hid">  <input type="text" class="twiter form-control" name="twiter[]" placeholder="profile link" style="display:none"></div>\n\
                                                    </div>\n\
                                                    <div class="col-sm-12" style="padding:3px">\n\
                                                        <div class="col-sm-4 linkidn" style="background:#83c583; border: none; padding-top: 5px;"> <span><?php echo  lang('linkidn') ?></span></div>\n\
                                                        <div class="col-sm-8 linkidn"> <input type="checkbox" name="linkidn_check" class="linkidn_check hid">  <input type="text" class="linkidn form-control" name="linkidn[]" placeholder="profile link" style="display:none"></div>\n\
                                                    </div></div');

                maxAppend2++;
                $(this).parents(".link_box").append(add_new);
                $(this).parents()
                // console.log($(this).parents(.col))
                $(this).parents('.link_box').find('.summ').val(maxAppend2+1)
            }
        });





        $('body').on('change','.fb_check', function (){
            console.log('a')
            if($(this).is(':checked')){
                $(this).parent().find('.fb').show()
            }else{
                $(this).parent().find('.fb').val('')
                $(this).parent().find('.fb').hide(1000)
            }
        })

        $('body').on('change','.twiter_check', function (){
            if($(this).is(':checked')){
                $(this).parent().find('.twiter').show()
            }else{
                $(this).parent().find('.twiter').val('')
                $(this).parent().find('.twiter').hide(1000)
            }
        })

        $('body').on('change','.linkidn_check', function (){
            if($(this).is(':checked')){
                $(this).parent().find('.linkidn').show()
            }else{
                $(this).parent().find('.linkidn').val('')
                $(this).parent().find('.linkidn').hide(1000)
            }
        })
        $('body').on('click', '.remove', function(){
            console.log('a')
            $(this).parents('.links').remove();
            $(this).parent().remove()
        })

        $('.edit').on('click',function(e){

            e.preventDefault()

            $(this).parent().prev('.sum').find('.hid').show();
            $(this).parent().prev('.sum').find('.hid').addClass('act');
            $(this).parent().prev('.sum').find('input').prop("readonly", false);
            $(this).toggle();
            $(this).next().show();
            $(this).parents().find('.fbs').show();

            // $(this).parent().remove()
        })

        $('body').on('click', '.save_edit', function(e){
            e.preventDefault()
            if( $(this).parent().prev('.sum').find('.hid').hasClass('act')){
                $(this).parent().prev('.sum').find('.hid').hide();
                $(this).parent().prev('.sum').find('.hid').removeClass('act')
                $(this).parent().prev('.sum').find('input').prop("readonly", true);
                $(this).hide()
                $(this).prev().show()
            }
        })


        $('.save').on('click', function(e){

            var i = 0;
            $(this).prev().find('.sum').each(function(){

                i++
            })
            console.log($(this).prev().find('.summ').val(i))
            $(this).prev().find('.summ').val(i)
        })
    });
</script>