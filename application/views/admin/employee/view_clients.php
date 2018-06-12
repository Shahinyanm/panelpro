<div class="row">
    <div class="col-sm-12" data-spy="scroll" data-offset="0">                            
        <div class="box">            
            <!-- main content -->
            <div class="box-header with-border">
                <h3 class="box-title">Employee Detail</h3>
                <div class="pull-right">                               
<!--                    <span>--><?php //echo btn_edit('admin/employee/employees/' . $employee_info->employee_id); ?><!--</span>-->
<!--                    <span>--><?php //echo btn_pdf('admin/employee/make_pdf/' . $employee_info->employee_id); ?><!--</span>-->
<!--                    <button class="margin btn-print" type="button" data-toggle="tooltip" title="Print" onclick="printDiv('printableArea')">--><?php //echo btn_print(); ?><!--</button>                                                              -->
                </div>
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
                                    <h3><?php echo "$employee_info->first_name " . "$employee_info->last_name"; ?></h3>

                                    <hr />
                                    <table class="table-hover">
                                        <tr>
                                            <td><strong><?= lang('employee_id')?></strong></td>
                                            <td>&nbsp;&nbsp;&nbsp;</td>
                                            <td><?php echo $employee_info->employment_id ?></td>
                                        </tr>
<!--                                        <tr>-->
<!--                                            <td><strong>--><?//= lang('department')?><!--</strong></td>-->
<!--                                            <td>&nbsp;&nbsp;&nbsp;</td>-->
<!--                                            <td>--><?php //echo "$employee_info->department_name"; ?><!--</td>-->
<!--                                        </tr>-->
                                        <?php if (!empty($employee_info->email)): ?>
                                        <tr>
                                            <td><strong><?= lang('email')?></strong></td>
                                            <td>&nbsp;&nbsp;&nbsp;</td>
                                            <td><?php echo "$employee_info->email"; ?></td>
                                        </tr>
                                        <?php endif; ?>
                                        <tr>
                                            <td><strong><?= lang('joining_date')?></strong></td>
                                            <td>&nbsp;&nbsp;&nbsp;</td>
                                            <?php if($employee_info->joining_date != '0000-00-00'): ?>
                                            <td><?php echo date('d M Y', strtotime($employee_info->joining_date)); ?></td>
                                            <?php endif ?>
                                        </tr>                                            
                                    </table>                                                                           
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <!-- ************************ Personal Information Panel Start ************************-->
                        <div class="col-sm-6">
                            <div class="box box-info">
                                <div class="box-heading with-border">
                                    <h4 class="box-title"><?= lang('personal_details') ?></h4>
                                </div>
                                <div class="box-body form-horizontal">
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label"><?= lang('date_of_birth') ?>: </label>
                                        <div class="col-sm-8">
                                            <?php if($employee_info->date_of_birth != '0000-00-00'): ?>
                                            <p class="form-control-static"><?php echo date('d M Y', strtotime($employee_info->date_of_birth)); ?></p>
                                            <?php endif ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-4 control-label"><?= lang('gender') ?>:</label>
                                        <div class="col-sm-8">
                                            <p class="form-control-static"><?php echo "$employee_info->gender"; ?></p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label"><?= lang('maratial_status') ?>:</label>
                                        <div class="col-sm-8">
                                            <p class="form-control-static"><?php echo "$employee_info->maratial_status"; ?></p>
                                        </div>
                                    </div>
                                    <?php if (!empty($employee_info->middle_name)): ?>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label"><?= lang('middle_name')?>: </label>
                                        <div class="col-sm-8">
                                            <p class="form-control-static"><?php echo "$employee_info->middle_name"; ?></p>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if (!empty($employee_info->nationality)): ?>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label"><?= lang('nationality')?> : </label>
                                            <div class="col-sm-8">
                                                <p class="form-control-static"><?php echo "$employee_info->nationality"; ?></p>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (!empty($employee_info->interac)): ?>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label"><?= lang('interac')?>: </label>
                                            <div class="col-sm-8">
                                                <p class="form-control-static"><?php echo "$employee_info->interac"; ?></p>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (!empty($employee_info->paypal)): ?>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label"><?= lang('paypal')?>: </label>
                                            <div class="col-sm-8">
                                                <p class="form-control-static"><?php echo "$employee_info->paypal"; ?></p>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (!empty($employee_info->bitcoin)): ?>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label"><?= lang('bitcoin')?>: </label>
                                            <div class="col-sm-8">
                                                <p class="form-control-static"><?php echo "$employee_info->bitcoin"; ?></p>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <?php if (!empty($employee_info->etherum)): ?>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label"><?= lang('etherum')?>: </label>
                                            <div class="col-sm-8">
                                                <p class="form-control-static"><?php echo "$employee_info->etherum"; ?></p>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                </div>
                            </div>
                        </div> <!-- ************************ Personal Information Panel End ************************-->
                        <div class="col-sm-6"><!-- ************************ Contact Details Start******************************* -->
                            <div class="box box-info">
                                <div class="box-heading with-border">
                                    <h4 class="box-title"><?= lang('contact_details')?></h4>
                                </div>
                                <div class="box-body form-horizontal">
                                    <?php if (!empty($employee_info->email)): ?>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label"><?= lang('email')?> : </label>
                                            <div class="col-sm-8">
                                                <p class="form-control-static"><?php echo "$employee_info->email"; ?></p>                                                                                          
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (!empty($employee_info->phone)): ?>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label"><?= lang('phone')?> : </label>
                                            <div class="col-sm-8">
                                                <p class="form-control-static"><?php echo "$employee_info->phone"; ?></p>                                                                                          
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (!empty($employee_info->mobile)): ?>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label"><?= lang('mobile')?> : </label>
                                            <div class="col-sm-8">
                                                <p class="form-control-static"><?php echo "$employee_info->mobile"; ?></p>                                                                                          
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (!empty($employee_info->present_address)): ?>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label"><?= lang('present_address')?> : </label>
                                            <div class="col-sm-8">
                                                <p class="form-control-static"><?php echo "$employee_info->present_address"; ?></p>                                                                                          
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (!empty($employee_info->present_address2)): ?>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label"><?= lang('present_address')?> : 2</label>
                                            <div class="col-sm-8">
                                                <p class="form-control-static"><?php echo "$employee_info->present_address2"; ?></p>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (!empty($employee_info->state_province_region)): ?>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label"><?= lang('state_province_region')?> : </label>
                                            <div class="col-sm-8">
                                                <p class="form-control-static"><?php echo "$employee_info->state_province_region"; ?></p>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <?php if (!empty($employee_info->city)): ?>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label"><?= lang('city')?> : </label>
                                            <div class="col-sm-8">
                                                <p class="form-control-static"><?php echo "$employee_info->city"; ?></p>                                                                                          
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <?php if (!empty($employee_info->zip_postal)): ?>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label"><?= lang('zip_postal')?> : </label>
                                            <div class="col-sm-8">
                                                <p class="form-control-static"><?php echo "$employee_info->zip_postal"; ?></p>
                                            </div>
                                        </div>

                                    <?php endif; ?>
                                    <?php if (!empty($employee_info->country_id)): ?>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label"><?= lang('country')?> : </label>
                                            <div class="col-sm-8">
                                                <p class="form-control-static"><?php echo "$employee_info->countryName"; ?></p>                                                                                          
                                            </div>
                                        </div> 
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div> <!-- ************************ Contact Details End ******************************* -->
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

