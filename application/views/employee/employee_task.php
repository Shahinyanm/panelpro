<?php include_once 'asset/admin-ajax.php'; ?>
<?php echo message_box('success'); ?>
<?php echo message_box('error'); ?>

<style>

</style>
<div class="row">
    <div class="col-sm-12">
        <div class="nav-tabs-custom">
            <!-- Tabs within a box -->
            <ul class="nav nav-tabs">
                <li class="<?= $active == 1 ? 'active' : '' ?>"><a href="#task_list" data-toggle="tab"><?= lang('task_list')?></a></li>
                <li class="<?= $active == 2 ? 'active' : '' ?>"><a href="#assign_task"  data-toggle="tab"><?= lang('assign_task')?></a></li>
            </ul>
            <div class="tab-content no-padding">
                <!-- Stock Category List tab Starts -->
                <div class="tab-pane <?= $active == 1 ? 'active' : '' ?>" id="task_list" style="position: relative;">
                    <div class="box" style="border: none; padding-top: 15px;" data-collapsed="0">
                        <div class="box-body">
                            <!-- Table -->
                            <table class="table table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th><?= lang('task_name')?></th>
                                    <th><?= lang('employee')?></th>
                                    <th><?= lang('created_date')?></th>
                                    <th><?= lang('due_date')?></th>
                                    <th class="col-sm-1"><?= lang('status')?></th>
                                    <th class="col-sm-2"><?= lang('changes/view')?></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php if (!empty($all_task_info)):foreach ($all_task_info as $key => $v_task): ?>
                                    <?php  $all_comment_info = count($this->db->where('task_id', $v_task->task_id)->where('view_status',2)->where('employee_id !=', '(Null)')->get('tbl_task_comment')->result()); ?>


                                    <tr>
                                        <td><a href="<?= base_url() ?>employee/dashboard/view_task_details/<?= $v_task->task_id ?>"><?php echo $v_task->task_name; ?>
                                                <span class="label label-danger" ><?php
                                                    if (!empty($all_comment_info)) {
                                                        echo $all_comment_info;
                                                    } else {
                                                        echo '';
                                                    }
                                                    ?></span></a></td>
                                        <td>
                                            <?php
                                            if (!empty($v_task->assigned_to)) :

                                            //                                                 foreach ($assigned['assigned_to'] as $v_assign) :
                                                $emp_info = $this->db->where(array('employee_id' => $v_task->assigned_to))->get('tbl_employee')->row();

                                                ?>

                                                <a href="<?= base_url() ?>employee/dashboard/view_employee/<?= $emp_info->employee_id ?>"><h6><?= $emp_info->first_name . ' ' . $emp_info->last_name . '<small> (' . $emp_info->employee_id . ') </small>' ?></h6></a>

                                                <!--                                                         --><?php //endforeach ?>
                                            <?php else: ?>
                                        </td>
                                        <td>
                                        </td>
                                        <?php endif ?>
                                        <td><?php echo date('d M,y', strtotime($v_task->task_created_date)); ?></td>
                                        <td><?php echo date('d M,y', strtotime($v_task->due_date)); ?></td>
                                        <td><?php
                                            if ($v_task->task_status == '0') {
                                                echo '<span class="label label-warning"> Pending </span>';
                                            } elseif ($v_task->task_status == '1') {
                                                echo '<span class="label label-info"> Started </span>';
                                            } else {
                                                echo '<span class="label label-success"> Completed </span>';
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <?php echo btn_view('employee/dashboard/view_task_details/' . $v_task->task_id) ?>
                                            <?php echo btn_edit('employee/dashboard/employee_task/' . $v_task->task_id) ?>
                                            <?php echo btn_delete('employee/dashboard/delete_task/' . $v_task->task_id) ?>


                                    </tr>
                                <?php endforeach; ?>
                                <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Add Stock Category tab Starts -->
                <div class="tab-pane <?= $active == 2 ? 'active' : '' ?>" id="assign_task" style="position: relative;">
                    <div class="box" style="border: none; padding-top: 15px;" data-collapsed="0">
                        <div class="panel-body">
                            <form  id="form_validation" action="<?php echo base_url() ?>employee/dashboard/save_task/<?php if (!empty($task_info->task_id)) echo $task_info->task_id; ?>" method="post" class="form-horizontal">

                                <div class="form-group">
                                    <label class="col-sm-3 control-label"><?= lang('task_name')?><span class="required">*</span></label>
                                    <div class="col-sm-5">
                                        <input type="text" name="task_name" required class="form-control" value="<?php if (!empty($task_info->task_name)) echo $task_info->task_name; ?>" />
                                    </div>
                                </div>

                                <div class="form-group" id="border-none" >
                                    <label for="field-1" class="col-sm-3 control-label"><?= lang('assined_to')?> <span class="required">*</span></label>
                                    <div class="col-sm-5">
                                        <select multiple="multiple" required name="assigned_to[]" style="width: 100%" class="select_2_to" >
                                            <option value=""><?= lang('select_employee')?>...</option>
                                            <?php if (!empty($employee_info)): ?>

                                                <?php foreach ($employee_info as $v_employee) : ?>
                                                    <option value="<?php echo $v_employee->employee_id; ?>"
                                                        <?php
                                                        if (!empty($task_info->assigned_to)) {
                                                            $assign_id = $task_info->assigned_to;
//                                                        foreach ($assign_user['assigned_to'] as $assding_id) {
                                                            echo $v_employee->employee_id == $assign_id ? 'selected' : '';
//                                                        }
                                                        }
                                                        ?>><?php echo $v_employee->first_name . ' ' . $v_employee->last_name ?> (<?php echo $v_employee->employee_id ?> )</option>
                                                <?php endforeach; ?>
                                            <?php endif; ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-3" ><?= lang('start_date')?></label>
                                    <div class="input-group col-sm-5">
                                        <input type="text" name="task_start_date" value="<?php
                                        if (!empty($task_info->task_start_date)) {
                                            echo $task_info->task_start_date;
                                        }
                                        ?>" class="form-control datepicker" data-format="yyy-mm-dd">
                                        <div class="input-group-addon">
                                            <a href="#"><i class="entypo-calendar"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" ><?= lang('due_date')?></label>
                                    <div class="input-group col-sm-5">
                                        <input type="text" name="due_date" value="<?php
                                        if (!empty($task_info->due_date)) {
                                            echo $task_info->due_date;
                                        }
                                        ?>" class="form-control datepicker" data-format="yyy-mm-dd">
                                        <div class="input-group-addon">
                                            <a href="#"><i class="entypo-calendar"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label"><?= lang('estimated_hour')?></label>
                                    <div class="col-sm-5">
                                        <input type="text" name="task_hour" required class="form-control" value="<?php if (!empty($task_info->task_hour)) echo $task_info->task_hour; ?>" />
                                        <p class="small"> <?= lang('input_value')?>.</p>
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label for="field-1" class="col-sm-3 control-label"><?= lang('task_description')?> <span class="required">*</span></label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control " name="task_description" id="ck_editor" required><?php if (!empty($task_info->task_description)) echo $task_info->task_description; ?></textarea>
                                        <?php echo display_ckeditor($editor['ckeditor']); ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-3" ><?= lang('progress')?></label>
                                    <div class="input-group col-sm-5">
                                        <input type="text" value="<?php if (!empty($task_info->task_progress)) echo $task_info->task_progress; ?>" name="task_progress" class="slider form-control" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="<?php if (!empty($task_info->task_progress)) echo $task_info->task_progress; ?>" data-slider-orientation="horizontal" data-slider-selection="before" data-slider-tooltip="show" data-slider-tooltip="fixTitle" data-slider-id="blue">
                                    </div>
                                </div>

                                <div class="form-group" id="border-none">
                                    <label for="field-1" class="col-sm-3 control-label"><?= lang('task_status')?> <span class="required">*</span></label>
                                    <div class="col-sm-5">
                                        <select name="task_status" class="form-control" required >
                                            <option value="0" <?php if (!empty($task_info->task_status)) echo $task_info->task_status == 0 ? 'selected' : '' ?>> <?= lang('pending')?> </option>
                                            <option value="1" <?php if (!empty($task_info->task_status)) echo $task_info->task_status == 1 ? 'selected' : '' ?>> <?= lang('started')?></option>
                                            <option value="2" <?php if (!empty($task_info->task_status)) echo $task_info->task_status == 2 ? 'selected' : '' ?>> <?= lang('completed')?></option>
                                        </select>
                                    </div>
                                </div>

                                <div class="">
                                    <div class="col-sm-offset-3 col-sm-5">
                                        <button type="submit" id="sbtn" class="btn btn-primary"><?= lang('save')?></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

