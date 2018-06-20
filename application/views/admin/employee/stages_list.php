
<?php echo message_box('success'); ?>
<?php echo message_box('error'); ?>


<div class="row">
    <div class="col-sm-12">
        <div class="nav-tabs-custom">
            <!-- Tabs within a box -->

            <div class="tab-content no-padding">
                <!-- Stages List tab Starts -->
                    <div class="box" style="border: none;" data-collapsed="0">
                        <div class="box-body">

                            <table class="table table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th class="col-sm-1"><?= lang('id') ?></th>
                                        <th><?= lang('stages_name') ?></th>
                                        <th><?= lang('description') ?></th>
                                        <th class="col-sm-1 hidden-print"><?= lang('view_details') ?></th>                                             
                                        <th class="col-sm-2 hidden-print"><?= lang('action') ?></th>
                                    </tr>
                                </thead>
                                <tbody>                    



                            </tbody>
                        </table>  
                    </div>            
            </div>
            <!-- Stages List tab Ends -->
            </div>
        </div>
    </div>
</div>

