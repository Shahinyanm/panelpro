<?php echo message_box('success'); ?>
<?php echo message_box('error'); ?>


<div class="row">
    <div class="col-sm-12">
        <div class="nav-tabs-custom">
            <!-- Tabs within a box -->
            <ul class="nav nav-tabs">
                <li class="<?= $active == 1 ? 'active' : '' ?>"><a href="#department_list" data-toggle="tab"><?= lang('department_list')?></a></li>
                <li class="<?= $active == 2 ? 'active' : '' ?>"><a href="#add_department"  data-toggle="tab"><?= lang('add_department')?></a></li>
            </ul>
            <div class="tab-content no-padding">
                <!-- Employee List tab Starts -->
                <div class="tab-pane <?= $active == 1 ? 'active' : '' ?>" id="department_list" style="position: relative;">
                    <div class="box" style="border: none; padding-top: 15px;" data-collapsed="0">                        
                        <div class="box-body">
                            <!-- Table -->

                            <?php if (!empty($all_department_info)): foreach ($all_department_info as $akey => $v_department_info) : ?>                                
                                    <?php if (!empty($v_department_info)): ?>

                                        <div class="box-heading" >
                                            <div class="box-title">
                                                <h4><?php echo $all_dept_info[$akey]->department_name ?>
                                                    <div class="pull-right">
                                                        <?php echo btn_edit('admin/department/department_list/' . $all_dept_info[$akey]->department_id); ?>  
                                                        <a data-original-title="Delete" href="<?php echo base_url() ?>admin/department/delete_department/<?php echo $all_dept_info[$akey]->department_id; ?>" class="btn btn-danger btn-xs" title="" data-toggle="tooltip" data-placement="top" onclick="return confirm('You are about to delete This Department. All Designation Under This Department Will Be Deleted. Are you sure?');"><i class="fa fa-trash-o"></i> Delete</a>
                                                    </div>
                                                </h4>
                                            </div>
                                        </div>

                                        <!-- Table -->                    
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="col-sm-1">SL</th>
                                                    <th><?= lang('designation')?></th>                                            
                                                </tr>
                                            </thead>
                                            <tbody>                                                        
                                                <?php foreach ($v_department_info as $key => $v_department) : ?>

                                                    <tr>
                                                        <td><?php echo $key + 1 ?></td>
                                                        <td><?php echo $v_department->designations ?></td>                                                

                                                    </tr>
                                                    <?php
                                                endforeach;
                                                ?>
                                            <?php endif; ?>                                    
                                        </tbody>
                                    </table> 
                                        <hr style="height: 1px; background-color: #3C8DBC;"/>
                                        <br />
                                    <?php
                                endforeach;
                                ?>
                            <?php else : ?>
                                <div class="panel-body">
                                    <strong><?= lang('nothing_to_display')?></strong>
                                </div>
                            <?php endif; ?>

                        </div>            
                    </div>        
                </div>
                <!-- Employee List tab Ends -->


                <!-- Add Employee tab Starts -->
                <div class="tab-pane <?= $active == 2 ? 'active' : '' ?>" id="add_department" style="position: relative;">
                    <div class="box" style="border: none; padding-top: 15px;" data-collapsed="0">                        
                        <div class="panel-body">
                            <form  id="form_validation" action="<?php echo base_url() ?>admin/department/save_department/<?php
                            if (!empty($department_info->department_id)) {
                                echo $department_info->department_id;
                            }
                            ?>" method="post" class="form-horizontal form-groups-bordered">

                                <div class="form-group">
                                    <label for="field-1" class="col-sm-3 control-label"><?= lang('add_department')?> <span class="required"> *</span></label>

                                    <div class="col-sm-5">                            
                                        <input type="text" name="department_name" value="<?php
                                        if (!empty($department_info->department_name)) {
                                            echo $department_info->department_name;
                                        }
                                        ?>" class="form-control" placeholder="Enter Your Department Name" required/>
                                    </div>                           
                                </div>
                                <div id="add_new" class="margin">
                                    <?php if (!empty($designation_info)): foreach ($designation_info as $v_designation) : ?>
                                            <div class="form-group">
                                                <label for="field-1" class="col-sm-3 control-label"><?= lang('add_desingation')?> <span class="required"> *</span></label>

                                                <div class="col-sm-5">                            
                                                    <input type="text" name="designations[]" value="<?php
                                                    if (!empty($v_designation->designations)) {
                                                        echo $v_designation->designations;
                                                    }
                                                    ?>" class="form-control" placeholder="Enter Your Designations"/>
                                                </div>                                                      
                                                <div class="col-sm-2">                            
                                                    <?php echo btn_delete('admin/department/delete_designation/' . $v_designation->department_id . '/' . $v_designation->designations_id); ?>
                                                </div>
                                            </div>
                                            <input type="hidden" name="designations_id[]" value="<?php
                                            if (!empty($v_designation->designations_id)) {
                                                echo $v_designation->designations_id;
                                            }
                                            ?>" class="form-control" placeholder="Enter Your Designations"/>                                    
                                               <?php endforeach; ?>
                                        <div class="col-sm-offset-8">                            
                                            <strong><a href="javascript:void(0);" id="add_more" class="addCF "><i class="fa fa-plus"></i>&nbsp;<?= lang('add_more')?></a></strong>
                                        </div>
                                    <?php else: ?>
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-3 control-label">Add Designations <span class="required"> *</span></label>

                                            <div class="col-sm-5">                            
                                                <input type="text" name="designations[]" value="" class="form-control" placeholder="Enter Your Designations"/>
                                            </div>                           
                                            <div class="col-sm-2">                            
                                                <strong><a href="javascript:void(0);" id="add_more" class="addCF "><i class="fa fa-plus"></i>&nbsp;<?= lang('add_more')?></a></strong>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group margin">
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
<script type="text/javascript">
    $(document).ready(function () {
        var maxAppend = 0;
        $("#add_more").click(function () {
            if (maxAppend >= 9)
            {
                alert("Maximum 10 File is allowed");
            } else {
                var add_new = $('<div class="form-group">\n\
                <label for="field-1" class="col-sm-3 control-label">Add Designations <span class="required"> *</span></label>\n\
                    <div class="col-sm-5">\n\<input type="text" name="designations[]" value="<?php ?>" class="form-control" placeholder="Enter Your Designations"/>\n\
    </div>\n\
    <div class="col-sm-2">\n\
    <strong><a href="javascript:void(0);" class="remCF"><i class="fa fa-times"></i>&nbsp;<?= lang('remove')?></a></strong>\n\
    </div>');
                maxAppend++;
                $("#add_new").append(add_new);
            }
        });

        $("#add_new").on('click', '.remCF', function () {
            $(this).parent().parent().parent().remove();
        });
    });
</script>



