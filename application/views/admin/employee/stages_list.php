
<?php echo message_box('success'); ?>
<?php echo message_box('error'); ?>


<div class="row">
    <div class="col-sm-12">
        <div class="nav-tabs-custom">
            <!-- Tabs within a box -->
            <ul class="nav nav-tabs">
                <li class="<?= $active == 1 ? 'active' : '' ?>"><a href="#stages_list" data-toggle="tab"><?= lang('stages_list') ?></a>
                </li>
                <li class="<?= $active == 2 ? 'active' : '' ?>"><a href="#add_stages"  data-toggle="tab"><?= lang('add_stages') ?></a></li>
            </ul>
            <div class="tab-content no-padding">
                <!-- Stages List tab Starts -->
                <div class="tab-pane <?= $active == 1 ? 'active' : '' ?>" id="stages_list" style="position: relative;">

                    <div class="box" style="border: none;" data-collapsed="0">
                        <div class="box-body">

                            <table class="table table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th class="col-sm-1"><?= lang('id') ?></th>
                                        <th><?= lang('stages_name') ?></th>
                                        <th><?= lang('description') ?></th>
                                        <th><?= lang('status') ?></th>
                                        <th class="col-sm-2 hidden-print"><?= lang('action') ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    if (!empty($all_stage_info)): foreach ($all_stage_info as $stage) : ?>
                                <tr>
                                    <td><?php echo $stage->stage_id ?> </td>
                                    <td><?php echo $stage->name ?> </td>
                                    <td><?php echo $stage->description ?> </td>
                                    <td><?=$stage->status==1? '<span class="label label-success" >active </span>' : '<span class="label label-danger" >inactive </span>' ;?> </td>
                                    <td >
                                        <?php echo btn_edit('admin/employee/stages/' . $stage->stage_id); ?>
                                        <?php echo btn_delete('admin/employee/delete_stage/' . $stage->stage_id ); ?>
                                    </td>
                                </tr>
                                <?php
                                endforeach;
                                endif;
                                ?>

                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>

                <div class="tab-pane <?= $active == 2 ? 'active' : '' ?>" id="add_stages" style="position: relative;">

                    <div class="box" style="border: none;" data-collapsed="0">
                        <div class="box-body">
                            <div class="row">
                                <form role="form" id="employee-form" enctype="multipart/form-data"
                                      action="<?php echo base_url()?>admin/employee/save_stages/<?php
                                      if (!empty($stage_info->stage_id)) {
                                          echo $stage_info->stage_id;
                                      }
                                      ?>" method="post" class="form-horizontal form-groups-bordered">
                                    <div class="col-sm-12">
                                        <div class="box box-primary">
                                            <div class="row">
                                                <!-- ************************ Stage   1     ************************-->
                                                <div class="col-sm-8">
                                                    <div class="box-heading with-border">
                                                        <h4 class="box-title"><?= lang('stage_1') ?></h4>
                                                    </div>
                                                    <div class="box-body ">
                                                        <div class="">
                                                            <label class="control-label"><?= lang('name') ?> <span
                                                                        class="required">
                                                                        *</span></label>
                                                            <input type="text" name="name" value="<?php
                                                            if (!empty($stage_info->name)) {
                                                                echo $stage_info->name;
                                                            }
                                                            ?>" class="form-control" required>
                                                        </div>

                                                        <div class="">
                                                            <label class="control-label"><?= lang('description') ?> <span
                                                                        class="required"> *</span></label>
                                                            <input type="text" name="description" value="<?php
                                                            if (!empty($stage_info->description)) {
                                                                echo $stage_info->description;
                                                            }
                                                            ?>" class="form-control" required>
                                                        </div>

                                                        <div class="col-sm-2">
                                                            <label class="control-label"><?= lang('status') ?> <span
                                                                        class="required"> *</span></label>
                                                            <input type="checkbox" name="status" <?php
                                                            if (!empty($stage_info->description) && ($stage_info->status == 1)) {
                                                                echo 'checked';
                                                            }
                                                            ?> class="form-control" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- ************************ Stage   2    ************************-->
                                            </div>
                                            <!-- ************************ PStages Information End ************************-->
                                            <div class="col-sm-12 margin pull-right">
                                                <button id="btn_emp" type="submit"
                                                        class="btn btn-primary btn-block"><?= lang('save') ?> </button>
                                            </div>

                                        </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            <!-- Stages List tab Ends -->
            </div>
        </div>
    </div>
</div>

