<div class="row">
    <div class="col-sm-12" data-spy="scroll" data-offset="0">                            
        <div class="box">            
            <!-- main content -->
            <div class="box-header with-border">
                <h3 class="box-title">Employee Detail</h3>
                <div class="pull-right">                               
                    <span><?php echo btn_pdf('admin/employee/make_pdf/' . $employee_info->employee_id); ?></span>
                    <button class="margin btn-print" type="button" data-toggle="tooltip" title="Print" onclick="printDiv('printableArea')"><?php echo btn_print(); ?></button>                                                              
                </div>
            </div><!-- /.box-header -->
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
                    </div>
                </div>

                <div class="row">

                    <div class="col-sm-12">
                        <!-- ************************      Bank Details Start******************************* -->
                        <div class="col-sm-6">
                            <div class="box box-info">
                                <div class="box-heading with-border">                                    
                                    <h4 class="box-title"><?= lang('bank_information')?></h4>                                    
                                </div>
                                <div class="box-body form-horizontal">                                
                                    <?php if (!empty($employee_info->bank_name)): ?>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label" > <?= lang('bank_name')?> :</label>
                                            <div class="col-sm-8">
                                                <p class="form-control-static"><?php echo "$employee_info->bank_name"; ?></p>                                                                                          
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (!empty($employee_info->holder_name)): ?>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label"><?= lang('holder_name')?> : </label>
                                            <div class="col-sm-8">
                                                <p class="form-control-static"><?php echo "$employee_info->holder_name"; ?></p>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (!empty($employee_info->type_of_account)): ?>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label" ><?= lang('type_of_account')?> :</label>
                                            <div class="col-sm-8">
                                                <p class="form-control-static"><?php echo "$employee_info->type_of_account"; ?></p>
                                            </div>
                                        </div>
                                    <?php endif; ?>                                
                                    <?php if (!empty($employee_info->bank_address)): ?>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label"><?= lang('bank_address')?> : </label>
                                            <div class="col-sm-8">
                                                <p class="form-control-static"><?php echo "$employee_info->bank_address"; ?></p>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (!empty($employee_info->aba_check_routing_number)): ?>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label"><?= lang('aba_check_routing_number')?> : </label>
                                            <div class="col-sm-8">
                                                <p class="form-control-static"><?php echo "$employee_info->aba_check_routing_number"; ?></p>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (!empty($employee_info->ach_routing_transit_number)): ?>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label"><?= lang('ach_routing_transit_number')?> : </label>
                                            <div class="col-sm-8">
                                                <p class="form-control-static"><?php echo "$employee_info->ach_routing_transit_number"; ?></p>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (!empty($employee_info->wire_routing_nubmer)): ?>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label"><?= lang('wire_routing_nubmer')?> : </label>
                                            <div class="col-sm-8">
                                                <p class="form-control-static"><?php echo "$employee_info->wire_routing_nubmer"; ?></p>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (!empty($employee_info->bank_account_number)): ?>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label"><?= lang('bank_account_number')?> : </label>
                                            <div class="col-sm-8">
                                                <p class="form-control-static"><?php echo "$employee_info->bank_account_number"; ?></p>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                </div>
                            </div>
                        </div><!-- ************************ Bank Details End ******************************* -->
                        <!-- ************************      Payment Details Start******************************* -->

                        <div class="col-sm-6">
                            <div class="box box-info">
                                <div class="box-heading with-border">
                                    <h4 class="box-title"><?= lang('bank_information')?></h4>
                                </div>
                                <div class="box-body form-horizontal">
                                    <?php if (!empty($employee_info->interac)): ?>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label" > <?= lang('interac')?> :</label>
                                            <div class="col-sm-8">
                                                <p class="form-control-static"><?php echo "$employee_info->interac"; ?></p>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (!empty($employee_info->paypal)): ?>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label"><?= lang('paypal')?> : </label>
                                            <div class="col-sm-8">
                                                <p class="form-control-static"><?php echo "$employee_info->paypal"; ?></p>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (!empty($employee_info->type_of_account)): ?>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label" ><?= lang('type_of_account')?> :</label>
                                            <div class="col-sm-8">
                                                <p class="form-control-static"><?php echo "$employee_info->type_of_account"; ?></p>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (!empty($employee_info->bitcoin)): ?>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label"><?= lang('bitcoin')?> : </label>
                                            <div class="col-sm-8">
                                                <p class="form-control-static"><?php echo "$employee_info->bitcoin"; ?></p>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (!empty($employee_info->etherum)): ?>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label"><?= lang('etherum')?> : </label>
                                            <div class="col-sm-8">
                                                <p class="form-control-static"><?php echo "$employee_info->etherum"; ?></p>
                                            </div>
                                        </div>
                                    <?php endif; ?>


                                </div>
                            </div>
                        </div><!-- ************************ Payment Details End ******************************* -->

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

