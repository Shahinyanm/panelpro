
<?php echo message_box('success'); ?>
<?php echo message_box('error'); ?>


<div class="row">
    <div class="col-sm-12">
        <div class="nav-tabs-custom">
            <!-- Tabs within a box -->
            <ul class="nav nav-tabs">
                <li class="<?= $active == 1 ? 'active' : '' ?>"><a href="#clients_list" data-toggle="tab"><?= lang('clients_list') ?></a>
                </li>
                <li class="<?= $active == 2 ? 'active' : '' ?>"><a href="#add_client"  data-toggle="tab"><?= lang('add_client') ?></a></li>
                <li class="<?= $active == 3 ? 'active' : '' ?>"><a href="#add_employee"  data-toggle="tab"><?= lang('add_employee') ?></a></li>
            </ul>
            <div class="tab-content no-padding">
                <!-- Employee List tab Starts -->
                <div class="tab-pane <?= $active == 1 ? 'active' : '' ?>" id="clients_list" style="position: relative;">
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
                                        <th class="col-sm-2 hidden-print"><?= lang('action') ?></th>
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
                                            <td ><?php echo btn_view('admin/employee/view_clients/' . $v_employee->employee_id); ?></td>
                                            <td >
                                                <?php echo btn_add('admin/employee/clients/' . $v_employee->employee_id. 'add' ); ?>
<!--                                                --><?php //echo btn_edit('admin/employee/clients/' . $v_employee->employee_id); ?>
                                                <?php echo btn_delete('admin/employee/delete_employee/' . $v_employee->employee_id ); ?>
                                            </td>
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
                                                <td ><?php echo btn_view('admin/employee/view_clients/' . $v_employee->employee_id); ?></td>
                                                <td >
                                                    <?php echo btn_add('admin/employee/clients/' . $v_employee->employee_id. '/add' ); ?>
<!--                                                    --><?php //echo btn_edit('admin/employee/clients/' . $v_employee->employee_id); ?>
                                                    <?php echo btn_delete('admin/employee/delete_employee/' . $v_employee->employee_id ); ?>

                                                </td>
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


            <!-- Add Employee tab Starts -->
                <div class="tab-pane <?= $active == 2 ? 'active' : '' ?>" id="add_client" style="position: relative;">
                    <div class="box" style="border: none; padding-top: 15px;" data-collapsed="0">
                        <div class="box-body">
                            <form role="form" id="employee-form" enctype="multipart/form-data" action="<?php echo base_url() ?>admin/employee/save_client/<?php
                            if (!empty($emp_info->employee_id)) {
                                echo $emp_info->employee_id;
                            }
                            ?>" method="post" class="form-horizontal form-groups-bordered">
                                <div class="row">
                            <div class="col-sm-12">

                                <!-- ************************ Personal Information Panel Start ************************-->
                                <div class="col-sm-6">
                                    <div class="box box-primary">
                                        <div class="box-heading with-border">                                                
                                            <h4 class="box-title"><?= lang('personal_details') ?></h4>
                                        </div>
                                        <div class="box-body ">
                                            <div class="">
                                                <label class="control-label" ><?= lang('email') ?> <span class="required"> *</span></label>
                                                <input type="text" name="email" value="<?php
                                                if (!empty($employee_info->email)) {
                                                    echo $employee_info->email;
                                                }
                                                ?>"  class="form-control" required>
                                            </div>
                                            <div class="">
                                                <label class="control-label" ><?= lang('password') ?> <span class="required"> </span></label>
                                                <input type="password" name="password" value="<?php
                                                if (!empty($employee_info->password)) {
                                                    echo $employee_info->password;
                                                }
                                                ?>"  class="form-control" required>
                                            </div>
                                        </div> <!-- ************************ Personal Information Panel End ************************-->
                                        <div class="col-sm-6 margin pull-right">
                                            <button id="btn_emp" type="submit" class="btn btn-primary btn-block"><?= lang('save') ?></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            </form>
                        </div>
                    </div>
                </div>
<!-- Add Employee tab Ends -->
                <div class="tab-pane <?= $active == 3 ? 'active' : '' ?>" id="add_employee" style="position: relative;">
                    <div class="box" style="border: none; padding-top: 15px;" data-collapsed="0">
                        <div class="box-body">

                                <div class="row">
                                    <div class="col-sm-12">

                                        <!-- ************************ Personal Information Panel Start ************************-->
                                        <div class="col-sm-6">
                                            <form role="form" id="employee-form" enctype="multipart/form-data" action="<?php echo base_url() ?>admin/employee/save_clients_employee/<?php
                                            if (!empty($emp_info->employee_id)) {
                                                echo $emp_info->employee_id;
                                            }
                                            ?>" method="post" class="form-horizontal form-groups-bordered">
                                            <div class="box box-primary">
                                                <div class="box-heading with-border">
                                                    <h4 class="box-title"><?= lang('add_employee') ?></h4>
                                                </div>
                                                <div class="box-body ">
                                                    <div class="col-sm-12">
                                                        <select multiple="multiple" required name="employers[]" style="width: 100%" class="select_2_to" >
                                                            <option value=""><?= lang('select_employee')?>...</option>
                                                            <?php if (!empty($all_employee)): ?>

                                                                <?php foreach ($all_employee as $v_employee) : ?>
                                                                    <option value="<?php echo $v_employee->employee_id; ?>"
                                                                     ><?php echo $v_employee->first_name . ' ' . $v_employee->last_name ?> (<?php echo $v_employee->employee_id ?> )</option>
                                                                <?php endforeach; ?>
                                                            <?php endif; ?>
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>
                                            <button id="btn_emp" type="submit" class="btn btn-primary btn-block" ><?= lang('save') ?></button>
                                            </form>

                                        </div>
                                        <div class="col-sm-6">
                                            <div class="box box-primary">
                                                <div class="box-heading with-border">
                                                    <h4 class="box-title"><?= lang('employee_details') ?></h4>
                                                </div>
                                                <div class="box-body ">
                                                <?php if(!empty($clients_employee)): ?>
                                                    <?php foreach ($clients_employee as $c_emp): ?>
                                                   <div class="col-sm-12">
                                                       <div class="col-sm-8" style="padding:10px">
                                                       <span style="font-size:12px" class="label label-success"><?php
                                                           echo $c_emp->first_name .' ' .$c_emp->last_name.'('.$c_emp->employee_id.')';
                                                           ?></span></div>
                                                       <div class="col-sm-4">
                                                       <?php echo btn_delete_disable_employee('admin/employee/delete_clients_employee/' . $c_emp->employee_id .'/'.$emp_info->employee_id); ?>
                                                       </div>

                                                   </div>
                                                    <?php endforeach;?>
                                                <?php endif;?>
                                                </div>

                                            </div>
                                        </div>


                                    </div>


                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

