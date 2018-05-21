
<div class="modal-header ">
    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?= lang('close')?></span></button>
    <h4 class="modal-title" id="myModalLabel"><?= lang('notice_details')?></h4>
</div>
<div class="modal-body wrap-modal wrap">
    <?php

    if (!empty($full_notice_details)){
        if(!empty($full_notice_details->assigned_to)){
            $assigned = unserialize($full_notice_details->assigned_to);
        }
    }
    ?>

    <form role="form" id="form" action="" method="" class="form-horizontal form-groups-bordered">

        <div class="form-group">
            <label for="field-1" class="col-sm-offset-1 col-sm-3 control-label">Assigned to: </label>
            <div class="col-sm-7">
                <table class="table table-bordered" style="background-color: #EEE;"id="dataTables-example">
                    <tbody>
                    <?php
                    if (!empty($assigned['assigned_to'])) :
                        foreach ($assigned['assigned_to'] as $v_assign) :
                            $emp_info = $this->db->where(array('employee_id' => $v_assign))->get('tbl_employee')->row();
                            ?>
                            <tr>
                                <td> <?php echo ($emp_info->first_name .'  '.$emp_info->last_name) ?></td>
                            </tr>
                        <?php
                        endforeach;
                    endif;
                    ?>
                    </tbody>
                </table>
            </div>
        <div class="form-group">
            <label for="field-1" class="col-sm-offset-1 col-sm-3 control-label"><?= lang('title')?>: </label>
            <div class="col-sm-7">
                <p class="col-sm-12" style="text-align: justify;"><?php if (!empty($full_notice_details->notice_id)) echo $full_notice_details->title; ?></p>                                
            </div>
        </div>

        <div class="form-group">
            <label for="field-1" class="col-sm-offset-1 col-sm-3 control-label"><?= lang('short_description')?>: </label>
            <div class="col-sm-7">
                <p class="col-sm-12" style="text-align: justify;"><?php if (!empty($full_notice_details->notice_id)) echo $full_notice_details->short_description; ?></p>                
            </div>
        </div>
        
        <div class="form-group">
            <label for="field-1" class="col-sm-offset-1 col-sm-3 control-label"><?= lang('long_description')?>: </label>
            <div class="col-sm-7">
                <p class="col-sm-12" style="text-align: justify;"><?php if (!empty($full_notice_details->notice_id)) echo nl2br ($full_notice_details->long_description); ?></p>
                             
            </div>
        </div>
        
        <div class="form-group">
            <label for="field-1" class=" col-sm-offset-1 col-sm-3 control-label"><?= lang('published_date')?>:</label>
            <div class="col-sm-7">                         
                <p class="col-sm-12" style="text-align: justify;"><?php if (!empty($full_notice_details->notice_id)) echo date('d M Y', strtotime($full_notice_details->created_date)); ?></p>                                                
            </div>
        </div>
             

        <div class="modal-footer" >
            <button type="button" class="btn btn-default" data-dismiss="modal"><?= lang('close')?></button>
        </div>
    </form>
</div>

