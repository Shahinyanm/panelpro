<style>
    .stages{

        border-radius: 30px;
        color: white;
        height: 60px;
        font-weight: bold;
        width: 60px;
        display: table;
        margin: 0px 10px 10px 40px;

    }
    .stage_text{
        vertical-align: middle;
        display: table-cell;
    }

    .block {
        /*border: 1px dashed #8dba60;*/
        text-align: center;
        vertical-align: middle;
    }
</style>
<div class="col-sm-12">
    <?php if($all_stages_info): foreach($all_stages_info as $stage_info): ?>
    <div class="col-sm-2 stage_info"  data-id="<?php if(!empty($stage_info->stage_id)){echo $stage_info->stage_id;}?>">
        <?php
        $employee_stage = $this->stage_model->check_by(array('stage_id' => $stage_info->stage_id, 'status'=>1, 'employee_id'=>$_SESSION['employee_id'] ),'tbl_employee_stages');
        if(!empty($employee_stage)):
        ?>
        <div class="col-sm-12 stages block"  style="background:#8dba60 ;"><span class="stage_text"><?php if(!empty($stage_info->name)){echo $stage_info->name;}?></span></div>
        <div class="col-sm-12 block"> <span><?php if(!empty($stage_info->description)){echo $stage_info->description;}?></span></div>
    </div>

    <?php
    else:
    ?>
    <div class="col-sm-12 stages block" style="background:#d9534f "><span class="stage_text"><?php if(!empty($stage_info->name)){echo $stage_info->name;}?></span></div>
    <div class="col-sm-12 block"> <span><?php if(!empty($stage_info->description)){echo $stage_info->description;}?></span></div>
</div>
<?php
endif;?>

<?php
endforeach;
endif;
?>