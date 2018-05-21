
<?php echo message_box('success'); ?>
<?php echo message_box('error'); ?>

<div class="row">
    <div class="col-sm-12">
        <div class="nav-tabs-custom">
            <!-- Tabs within a box -->
            <ul class="nav nav-tabs">
                <li class="<?= $active == 1 ? 'active' : '' ?>"><a href="#all_notice" data-toggle="tab"><?= lang('all_notice')?></a></li>
                <li class="<?= $active == 2 ? 'active' : '' ?>"><a href="#create_notice"  data-toggle="tab"><?= lang('new_notice')?></a></li>
            </ul>
            <div class="tab-content no-padding">
                <!-- All Notice tab Starts -->
                <div class="tab-pane <?= $active == 1 ? 'active' : '' ?>" id="all_notice" style="position: relative;">

                    <table class="table" id="dataTables-example">
                        <thead>
                            <tr>
                                <th><?= lang('sl')?></th> 
                                <th class="col-sm-2"><?= lang('created_date')?></th>                                     
                                <th><?= lang('title')?></th>                                     
                                <th class="col-sm-3"><?= lang('short_description')?></th>
                                <th><?= lang('employee')?></th>
                                <th><?= lang('status')?></th>
                                <th class="col-sm-2"><?= lang('action')?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $key = 1; ?>
                            <?php if (!empty($all_notice)): foreach ($all_notice as $v_notice): ?>
                                    <tr>
                                        <td><?php echo $key; ?></td>                        
                                        <td><?php echo date('d-M-Y', strtotime($v_notice->created_date)); ?></td>
                                        <td><?php echo $v_notice->title; ?></td>
                                        <td><?php
                                            $str = strlen($v_notice->short_description);
                                            if ($str > 80) {
                                                $ss = '<strong> ......</strong>';
                                            } else {
                                                $ss = '&nbsp';
                                            } echo substr($v_notice->short_description, 0, 80) . $ss;
                                            ?></td>
                                        <td>

                                                        <?php
                                                        if (!empty($v_notice->assigned_to)) {

                                                            $assign_user = unserialize($v_notice->assigned_to);
                                                            foreach ($assign_user['assigned_to'] as $assding_id) {
                                                                $emp_info = $this->db->where(array('employee_id' => $assding_id))->get('tbl_employee')->row();
                                                                echo $emp_info->first_name . ' ' . $emp_info->last_name .''.($assding_id).' ';
                                                            }
                                                        }else{
                                                            echo "Public";
                                                        }
                                                        ?>
                                        </td>
                                        <td>
                                            <?php if ($v_notice->flag == 0) : ?> 
                                            <span class="label label-danger"><?= lang('unpublished')?></span>
                                            <?php else : ?>                                        
                                                <span class="label label-success">Published</span>                                                                             
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <?php echo btn_view_modal_lg('admin/notice/notice_details/' . $v_notice->notice_id); ?>                                                                
                                            <?php echo btn_edit('admin/notice/index/' . $v_notice->notice_id); ?>                                                                
                                            <?php echo btn_delete('admin/notice/delete_notice/' . $v_notice->notice_id); ?>                                                                
                                        </td>
                                    </tr>
                                    <?php
                                    $key++;
                                endforeach;
                                ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
                <!-- All Notice tab Ends -->

                <!-- Create New Notice tab Starts -->
                <div class="tab-pane <?= $active == 2 ? 'active' : '' ?>" id="create_notice" style="position: relative;">

                    <div class="panel" data-collapsed="0">                                
                        <div class="panel-body">

                            <form role="form" id="form" action="<?php echo base_url(); ?>admin/notice/save_notice/<?php if(!empty($notice)) { echo $notice->notice_id;} ?>" method="post" class="form-horizontal">
                                <div class="form-group">
                                    <label for="field-1" class="col-sm-3 control-label"><?= lang('publication_status')?> <span class="required">*</span></label>

                                    <div class="col-sm-2"><input type="checkbox" class="select_one" name="flag" value="1"
                                        <?php
                                        if (!empty($notice) && $notice->flag == 1) {
                                            ?>
                                                                     checked
                                                                     <?php
                                                                 }
                                                                 ?>> <?= lang('published')?></div>
                                    <div class="col-sm-2"><input type="checkbox" class="select_one" name="flag" value="0"
                                        <?php
                                        if (!empty($notice) && $notice->flag == 0) {
                                            ?>
                                                                     checked
                                                                     <?php
                                                                 }
                                                                 ?>> <?= lang('unpublished')?></div>

                                </div>

                                <div class="form-group">
                                    <label for="field-1" class="col-sm-3 control-label"><?= lang('all_employeers')?> <span ></span></label>
                                    <div class="form-group" id="border-none">
                                        <input type="checkbox" name="all_names" id="all_employeers">
                                    </div>
                                    <div class="form-group" id="assigned_to">
                                        <label for="field-1" class="col-sm-3 control-label"><?= lang('assined_to')?>: <span class="required"></span></label>
                                        <div class="input-group col-sm-5">
                                            <select multiple="multiple" required name="assigned_to[]" style="width: 100%" class="select_2_to" >
                                                <option value=""><?= lang('select_employee')?>...</option>
                                                <?php if (!empty($all_employee_notice)): ?>

                                                    <?php foreach ($all_employee_notice as $v_employee) : ?>

                                                        <option value="<?php echo $v_employee->employee_id; ?>"
                                                            <?php
                                                            if (!empty($notice->assigned_to)) {
                                                                $assign_user = unserialize($notice->assigned_to);
                                                                foreach ($assign_user['assigned_to'] as $assding_id) {
                                                                    echo $v_employee->employee_id == $assding_id ? 'selected' : '';
                                                                }
                                                            }
                                                            ?>><?php
                                                                if(!empty($v_employee->first_name) && !empty($v_employee->last_name)){
                                                            echo $v_employee->first_name . ' ' . $v_employee->last_name ?> (<?php echo $v_employee->employee_id ?>)
                                                                <?php }else{
                                                                    echo $v_employee->employee_id;
                                                                } ?> </option>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>
                                            </select>
                                        </div>
                                    </div>

<!--                                    <label for="field-1" class="col-sm-3 control-label">--><?//= lang('event_name')?><!--: <span class="required"> *</span></label>-->

<!--                                    <div class="col-sm-5">-->
<!--                                        <input type="text" name="event_name"class="form-control"  value="--><?php
//                                        if (!empty($notice->event_name)) {
//                                            echo $notice->event_name;
//                                        }
//                                        ?><!--" id="field-1" placeholder="Enter Your Event Name"/>-->
<!--                                    </div>-->
                                </div>
                                <div class="form-group">
                                    <label for="field-1" class="col-sm-3 control-label"><?= lang('title')?> <span class="required">*</span></label>

                                    <div class="col-sm-8">
                                        <input type="text" name="title" value="<?php if(!empty($notice)) echo $notice->title; ?>" class="form-control" requried placeholder="Enter Notice Title Here"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="field-1" class="col-sm-3 control-label"><?= lang('short_description')?> <span class="required">*</span></label>

                                    <div class="col-sm-8">
                                        <textarea name="short_description" class="form-control" required placeholder="Enter Short Description"><?php if(!empty($notice)) echo $notice->short_description; ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="field-1" class="col-sm-3 control-label"><?= lang('long_description')?><span class="required">*</span></label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control " name="long_description" id="ck_editor" required><?php if(!empty($notice)) echo $notice->long_description; ?></textarea>
                                        <?php echo display_ckeditor($editor['ckeditor']); ?>
                                    </div>
                                </div>

                                <!--hidden input values -->                       

                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-5">
                                        <button type="submit" id="sbtn" class="btn btn-primary"><?= lang('save')?></button>                            
                                    </div>
                                </div>   
                            </form>
                        </div>            
                    </div>                   
                </div>   
            </div>
            <!-- Create New Notice tab Ends -->
        </div>
    </div>
</div>


<script>
    $('#all_employeers').on('change', function (){
        if($(this).prop('checked')==true){
            $('#assigned_to').hide(400)
        }else{
            $('#assigned_to').show(400)
        }
    })

</script>