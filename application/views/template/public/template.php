<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $page_title; ?></title>	
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/public/css/bootstrap.min.css" rel="stylesheet" type="text/css">	
    <!-- Site default CSS -->    
    <link href="<?php echo base_url();?>assets/public/font-awesome/css/font-awesome.css" rel="stylesheet">        
    <link href="<?php echo base_url();?>assets/public/css/fonts.css" rel="stylesheet">    
    <link href="<?php echo base_url();?>assets/public/css/colorbox/colorbox.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/static/js/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/public/css/style.css" rel="stylesheet">    
	<script type="text/javascript">var base_URL = '<?php echo base_url();?>';</script>
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-custom">	
	<div id="wrapper">		
        <?php $this->load->view('template/public/header'); ?>
        <div id="navigation">
            <?php $this->load->view('template/public/navigation'); ?>
        </div>
        <div id="main">
            <div class="messageFlash">
                <?php $this->load->view('flashdata'); ?>
            </div>
            <div class="container content">
                <?php $this->load->view($main); ?>
            </div>
        </div>	
        <?php $this->load->view('template/public/footer'); ?>		
	</div>    	
	<!-- Core JavaScript Files -->
    <script src="<?php echo base_url();?>assets/public/js/jquery.min.js"></script>
	<script src="<?php echo base_url();?>assets/public/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/public/js/jquery.easing.min.js"></script>	    
    <script src="<?php echo base_url();?>assets/public/js/jquery.colorbox-min.js"></script>
    <script src="<?php echo base_url();?>assets/public/js/bootbox/bootbox.min.js"></script>
    <script src="<?php echo base_url();?>assets/static/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    
    <script type="text/javascript" src="<?=base_url();?>assets/public/js/jquery.ui.widget.min.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets/public/js/jquery.iframe-transport.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets/public/js/jquery.fileupload.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets/public/js/jquery.fileupload-process.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets/public/js/jquery.fileupload-validate.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets/public/js/jquery.fileupload-ui.js"></script>
	
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url();?>assets/public/js/custom.js"></script>
    
<?php 
// Use only from controller to set js messages
if ($this->session->flashdata('inline_js')) { ?>
    <script type="text/javascript">
    $(document).ready(function() {
    <?php 
        // Set js message
        echo $this->session->flashdata('inline_js'); 
        // Destroy after displaying
        $this->session->unset_userdata('inline_js');
    ?>
    });
    </script>
<?php 
}
?>
    
</body>
</html>