<div class="row">
    <div class="col-sm-12" data-spy="scroll" data-offset="0">                            
        <div class="box">            
            <!-- main content -->
            <div class="box-header with-border">
                <h3 class="box-title">Employee Detail</h3>
<<<<<<< HEAD
                <div class="pull-right">                               
<!--                    <span>--><?php //echo btn_edit('admin/employee/employees/' . $employee_info->employee_id); ?><!--</span>-->
<!--                    <span>--><?php //echo btn_pdf('admin/employee/make_pdf/' . $employee_info->employee_id); ?><!--</span>-->
<!--                    <button class="margin btn-print" type="button" data-toggle="tooltip" title="Print" onclick="printDiv('printableArea')">--><?php //echo btn_print(); ?><!--</button>                                                              -->
                </div>
=======
<!--                <div class="pull-right">                               -->
<!--                    <span>--><?php //echo btn_edit('admin/employee/employees/' . $employee_info->employee_id); ?><!--</span>-->
<!--                    <span>--><?php //echo btn_pdf('admin/employee/make_pdf/' . $employee_info->employee_id); ?><!--</span>-->
<!--                    <button class="margin btn-print" type="button" data-toggle="tooltip" title="Print" onclick="printDiv('printableArea')">--><?php //echo btn_print(); ?><!--</button>                                                              -->
<!--                </div>-->
>>>>>>> d522a2ae3b8306981ad2adf03ccd7ea8545d88c2
            </div><!-- /.box-header -->

            <div id="printableArea"> 
                <div class="show_print" style="width: 100%; border-bottom: 2px solid black;">
                    <table style="width: 100%; vertical-align: middle;">
                        <tr>
                            <?php
                            $genaral_info = $this->session->userdata('genaral_info');
                            if (!empty($genaral_info)) {
                                foreach ($genaral_info as $info) {
                                    ?>
                                    <td style="width: 75px; border: 0px;">
                                        <img style="width: 50px;height: 50px" src="<?php echo base_url() . $info->logo ?>" alt="" class="img-circle"/>
                                    </td>
                                    <td style="border: 0px;">
                                        <p style="margin-left: 10px; font: 14px lighter;"><?php echo $info->name ?></p>
                                    </td>
                                    <?php
                                }
                            } else {
                                ?>
                                <td style="width: 75px; border: 0px;">
                                    <img style="width: 50px;height: 50px" src="<?php echo base_url() ?>img/logo.png" alt="Logo" class="img-circle"/>
                                </td>
                                <td style="border: 0px;">
                                    <p style="margin-left: 10px; font: 14px lighter;">Human Resource Lite</p>
                                </td>
                                <?php
                            }
                            ?>
                        </tr>
                    </table>
                </div><!--show when print start-->
                <br/>
                <div class="col-lg-12">
                    <div class="row">                            
                        <div class="col-lg-3 col-sm-3">

                            <div class="panel-body">
                                <?php if ($employee_info->photo): ?>
                                    <img src="<?php echo base_url() . $employee_info->photo; ?>" style="height: 170px; width: 210px;"  class="img-responsive center-block" />
                                <?php else: ?>
                                    <img src="<?php echo base_url() ?>/asset/img/user.jpg" style="height: 180px; width: 210px; "  class="img-responsive center-block" alt="Employee_Image" />
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-lg-1 col-sm-1">
                            &nbsp;
                        </div>
                        <div class="col-lg-8 col-sm-8 ">
                            <div>
                                <div style="margin-left: 20px;">                                        
<!--                                    <h3>--><?php //echo "$employee_info->first_name " . "$employee_info->last_name"; ?><!--</h3>-->

<!--                                    <hr />-->
                                    <table class="table-hover">
                                        <tr>
                                            <td><strong><?= lang('employee_id')?></strong></td>
                                            <td>&nbsp;&nbsp;&nbsp;</td>
                                            <td><?php echo $employee_info->employment_id ?></td>
                                        </tr>
                                        <?php if (!empty($employee_info->email)): ?>
                                        <tr>
                                            <td><strong><?= lang('email')?></strong></td>
                                            <td>&nbsp;&nbsp;&nbsp;</td>
                                            <td><?php echo "$employee_info->email"; ?></td>
                                        </tr>
                                        <?php endif; ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function printDiv(printableArea) {
        var printContents = document.getElementById(printableArea).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>

