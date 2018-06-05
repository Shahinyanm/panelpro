
<?php echo message_box('success'); ?>
<?php echo message_box('error'); ?>


<div class="row">
    <div class="col-sm-12">
        <div class="nav-tabs-custom">
            <!-- Tabs within a box -->
            <ul class="nav nav-tabs">
                <li class="<?= $active == 1 ? 'active' : '' ?>"><a href="#employee_list" data-toggle="tab"><?= lang('employee_list') ?></a>
                </li>
            </ul>
            <div class="tab-content no-padding">
                <!-- Employee List tab Starts -->
                <div class="tab-pane <?= $active == 1 ? 'active' : '' ?>" id="employee_list" style="position: relative;">
                    <div class="box" style="border: none;" data-collapsed="0">                                                
                        <div class="box-body">
                            <div class="pull-right hidden-print" style="padding-top: 0px;padding-bottom: 8px">                                                                      
                                <span><?php echo btn_pdf('admin/employee/employee_list_pdf'); ?></span>                                
                            </div>
                            <table class="table table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th class="col-sm-1"><?= lang('id') ?></th>
                                        <th><?= lang('employee') ?></th>
                                        <th><?= lang('dept_desingation') ?></th>                                        
                                        <th><?= lang('mobile') ?></th>
                                        <th><?= lang('status') ?></th>
                                        <th class="col-sm-1 hidden-print"><?= lang('view_details') ?></th>                                             
<!--                                        <th class="col-sm-2 hidden-print">--><?//= lang('action') ?><!--</th>-->
                                    </tr>
                                </thead>
                                <tbody>                    
                                    <?php
                                    if (!empty($all_employee_info)): foreach ($all_employee_info as $v_employee) :
//                                        echo "<pre>";
//                                    var_dump($v_employee);
//                                    die();
                                        if($v_employee->designations_id =="0"):
                                        $designation_info = $this->employee_model->check_by(array('designations_id' => $v_employee->designations_id),'tbl_designations');
                                        $department = $this->employee_model->check_by(array('department_id' => $designation_info['department_id']), 'tbl_department');

                                        ?>

                                        <tr>
                                            <td><?php echo $v_employee->employee_id ?></td>

                                            <td><?php echo "$v_employee->first_name " . "$v_employee->last_name"; ?></td>

                                            <td> <?php if(!empty($department)){
                                                echo $department['department_name'] . ' > ' . $designation_info['designations'];
                                                } ?></td>
                                            <td><?php echo $v_employee->mobile ?></td>
                                            <td><?php
                                            if ($v_employee->status == 1) {
                                                echo '<span class="label label-success">Active</span>';
                                            } else {
                                                echo '<span class="label label-danger">Deactive</span>';
                                            }
                                            ?></td>
                                            <td ><?php echo btn_view('employee/dashboard/view_employee/' . $v_employee->employee_id); ?></td>
<!--                                            <td >-->
<!--                                                --><?php //echo btn_edit('admin/employee/employees/' . $v_employee->employee_id); ?>
<!--                                                --><?php //echo btn_delete('admin/employee/delete_employee/' . $v_employee->employee_id ); ?>
<!--                                            </td>-->
                                        </tr>
                                        <?php
                                        else:
                                            $designation_info = $this->employee_model->check_by(array('designations_id' => $v_employee->designations_id),'tbl_designations');
                                           if($designation_info !=''):
                                            $department = $this->employee_model->check_by(array('department_id' => $designation_info->department_id), 'tbl_department');
                                           endif;
                                            ?>

                                            <tr>
                                                <td><?php echo $v_employee->employee_id ?></td>

                                                <td><?php echo "$v_employee->first_name " . "$v_employee->last_name"; ?></td>

                                                <td><?php if(!empty($department)){
                                                    echo $department->department_name . ' > ' . $designation_info->designations;
                                                    } ?></td>

                                                <td><?php echo $v_employee->mobile ?></td>
                                                <td><?php
                                                    if ($v_employee->status == 1) {
                                                        echo '<span class="label label-success">Active</span>';
                                                    } else {
                                                        echo '<span class="label label-danger">Deactive</span>';
                                                    }
                                                    ?></td>
                                                <td ><?php echo btn_view('employee/dashboard/view_employee/' . $v_employee->employee_id); ?></td>
<!--                                                <td >-->
<!--                                                    --><?php //echo btn_edit('admin/employee/employees/' . $v_employee->employee_id); ?>
<!--                                                    --><?php //echo btn_delete('admin/employee/delete_employee/' . $v_employee->employee_id ); ?>
<!--                                                </td>-->
                                            </tr>
                                            <?php
                                        endif;
                                    endforeach;

                                 else: ?>
                                    <td colspan="3">
                                        <strong><?= lang('nothing_to_display') ?></strong>
                                    </td>
                                <?php endif; ?>
                            </tbody>
                        </table>  
                    </div>            
                </div>        
            </div>
            <!-- Employee List tab Ends -->
            </div>
        </div>
    </div>
</div>

