<?php echo message_box('success'); ?>
<?php echo message_box('error'); ?>


<div class="row">
    <div class="col-sm-12">
        <div class="nav-tabs-custom">
            <!-- Tabs within a box -->
            <ul class="nav nav-tabs">
            </ul>
            <div class="tab-content no-padding">
                <!-- Employee List tab Starts -->
                <div class="box" style="border: none;" data-collapsed="0">
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-2"></div>
                        <div class="col-sm-2"></div>
                        <div class="col-sm-2"></div>
                        <div class="col-sm-2"></div>
                        <div class="col-sm-2"></div>
                    </div>
                    <!-- ************************ Stages Information  Start ************************-->

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
                                        <div class="col-sm-6">
                                            <div class="box-heading with-border">
                                                <h4 class="box-title"><?= lang('stage_1') ?></h4>
                                            </div>
                                            <div class="box-body ">
                                                <div class="">
                                                    <label class="control-label"><?= lang('name') ?> <span
                                                                class="required">
                                                                        *</span></label>
                                                    <input type="text" name="name1" value="<?php
                                                    if (!empty($stage->name1)) {
                                                        echo $stage->name1;
                                                    }
                                                    ?>" class="form-control" required>
                                                </div>

                                                <div class="">
                                                    <label class="control-label"><?= lang('description') ?> <span
                                                                class="required"> *</span></label>
                                                    <input type="text" name="description1" value="<?php
                                                    if (!empty($stage->description1)) {
                                                        echo $stage->description1;
                                                    }
                                                    ?>" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ************************ Stage   2    ************************-->
                                        <div class="col-sm-6">
                                            <div class="box-heading with-border">
                                                <h4 class="box-title"><?= lang('stage_2') ?></h4>
                                            </div>
                                            <div class="box-body ">
                                                <div class="">
                                                    <label class="control-label"><?= lang('name') ?> <span
                                                                class="required">
                                                                    *</span></label>
                                                    <input type="text" name="name2" value="<?php
                                                    if (!empty($stage->name2)) {
                                                        echo $stage->name2;
                                                    }
                                                    ?>" class="form-control" required>
                                                </div>

                                                <div class="">
                                                    <label class="control-label"><?= lang('description') ?> <span
                                                                class="required"> *</span></label>
                                                    <input type="text" name="description2" value="<?php
                                                    if (!empty($stage->description2)) {
                                                        echo $stage->description2;
                                                    }
                                                    ?>" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- ************************ Stage   3     ************************-->
                                        <div class="col-sm-6">
                                            <div class="box-heading with-border">
                                                <h4 class="box-title"><?= lang('stage_3') ?></h4>
                                            </div>
                                            <div class="box-body ">
                                                <div class="">
                                                    <label class="control-label"><?= lang('name') ?>
                                                        <span class="required"> *</span></label>
                                                    <input type="text" name="name3" value="<?php
                                                    if (!empty($stage->name3)) {
                                                        echo $stage->name3;
                                                    }
                                                    ?>" class="form-control" required>
                                                </div>

                                                <div class="">
                                                    <label class="control-label"><?= lang('description') ?> <span
                                                                class="required"> *</span></label>
                                                    <input type="text" name="description3" value="<?php
                                                    if (!empty($stage->description3)) {
                                                        echo $stage->description3;
                                                    }
                                                    ?>" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ************************ Stage   4    ************************-->
                                        <div class="col-sm-6">
                                            <div class="box-heading with-border">
                                                <h4 class="box-title"><?= lang('stage_4') ?></h4>
                                            </div>
                                            <div class="box-body ">
                                                <div class="">
                                                    <label class="control-label"><?= lang('name') ?> <span
                                                                class="required">
                                                                    *</span></label>
                                                    <input type="text" name="name4" value="<?php
                                                    if (!empty($stage->name4)) {
                                                        echo $stage->name4;
                                                    }
                                                    ?>" class="form-control" required>
                                                </div>

                                                <div class="">
                                                    <label class="control-label"><?= lang('description') ?> <span
                                                                class="required"> *</span></label>
                                                    <input type="text" name="description4" value="<?php
                                                    if (!empty($stage->description4)) {
                                                        echo $stage->description4;
                                                    }
                                                    ?>" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- ************************ Stage   5     ************************-->
                                        <div class="col-sm-6">
                                            <div class="box-heading with-border">
                                                <h4 class="box-title"><?= lang('stage_5') ?></h4>
                                            </div>
                                            <div class="box-body ">
                                                <div class="">
                                                    <label class="control-label"><?= lang('name') ?>
                                                        <span class="required"> *</span></label>
                                                    <input type="text" name="name5" value="<?php
                                                    if (!empty($stage->name5)) {
                                                        echo $stage->name5;
                                                    }
                                                    ?>" class="form-control" required>
                                                </div>

                                                <div class="">
                                                    <label class="control-label"><?= lang('description') ?> <span
                                                                class="required"> *</span></label>
                                                    <input type="text" name="description5" value="<?php
                                                    if (!empty($stage->description5)) {
                                                        echo $stage->description5;
                                                    }
                                                    ?>" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ************************ Stage   6    ************************-->
                                        <div class="col-sm-6">
                                            <div class="box-heading with-border">
                                                <h4 class="box-title"><?= lang('stage_6') ?></h4>
                                            </div>
                                            <div class="box-body ">
                                                <div class="">
                                                    <label class="control-label"><?= lang('name') ?> <span
                                                                class="required">
                                                                    *</span></label>
                                                    <input type="text" name="name6" value="<?php
                                                    if (!empty($stage->name6)) {
                                                        echo $stage->name6;
                                                    }
                                                    ?>" class="form-control" required>
                                                </div>

                                                <div class="">
                                                    <label class="control-label"><?= lang('description') ?> <span
                                                                class="required"> *</span></label>
                                                    <input type="text" name="description6" value="<?php
                                                    if (!empty($stage->description6)) {
                                                        echo $stage->description6;
                                                    }
                                                    ?>" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
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
    </div>
</div>

