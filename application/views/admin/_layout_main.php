<?php $this->load->view('admin/components/header'); ?>

<body class="hold-transition skin-red sidebar-mini">
    <div class="wrapper">
        <?php $this->load->view('admin/components/user_profile'); ?>        

        <?php $this->load->view('admin/components/navigation'); ?>	
        <!-- Right side column. Contains the navbar and content of the page -->

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                
                <h1>
                    <?php echo $page_header; ?>            
                </h1>
                <ol class="breadcrumb">
                    <?php echo $this->breadcrumbs->build_breadcrumbs(); ?>
                </ol>
            </section>
            <section class="content">
                <?php echo $subview ?>
            </section>            


        </div><!-- /.right-side -->        

    <?php $this->load->view('admin/_layout_modal'); ?> 
    <?php $this->load->view('admin/_layout_modal_lg'); ?> 
    <?php $this->load->view('admin/components/footer'); ?>     
