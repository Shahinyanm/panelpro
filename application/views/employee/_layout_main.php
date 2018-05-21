<?php $this->load->view('employee/component/header'); ?>
<body onload="startTime()">
    <?php $this->load->view('employee/component/navigations'); ?>
    <div class="container">
        <div class="row">

            <div class="margin">    
                <div class="col-md-12">
                    <div class="main_content">
                        <div class="row">
                            <?php echo $subview ?>              
                        </div>
                    </div>
                </div>
            </div>                    
        </div>                    
    </div>                        
    <?php $this->load->view('admin/_layout_modal'); ?> 
    <?php $this->load->view('admin/_layout_modal_lg'); ?> 
    <?php $this->load->view('employee/component/footer'); ?>