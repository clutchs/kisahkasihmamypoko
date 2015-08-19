<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-Frame-Options" content="allow" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo $page_title; echo config_item('title_default') ? ' | '.config_item('title_default') : '';?></title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/public/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- Site default CSS -->
    <link href="<?php echo base_url();?>assets/public/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/public/css/fonts.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/public/css/colorbox/colorbox.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/static/js/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" type="text/css">
    <link type="text/css" href="<?php echo base_url();?>assets/public/css/jquery.jscrollpane.css" rel="stylesheet" media="all" />
    <link type="text/css" href="<?php echo base_url();?>assets/public/css/jquery.jscrollpane.lozenge.css" rel="stylesheet" media="all" />
    <link href="<?php echo base_url();?>assets/public/css/style.css" rel="stylesheet">
    <script type="text/javascript">var base_URL = '<?php echo base_url();?>';</script>
</head>
<body>
<div id="fb-root"></div>
<script src="https://connect.facebook.net/en_US/all.js"></script>
<script>
FB.init({
    appId : '1584357841814568',
    status : true, // check login status
    cookie : true, // enable cookies to allow the server to access the session
    xfbml : true // parse XFBML
});
</script>
    <div id="wrapper">
        <?php $this->load->view('template/public/header'); ?>
        <div id="navigation">
            <?php $this->load->view('template/public/'.$this->mobile.'navigation'); ?>
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
    <script type="text/javascript" src="<?=base_url();?>assets/public/js/jquery.mousewheel.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets/public/js/jquery.jscrollpane.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url();?>assets/public/js/custom.js"></script>
<?php
// Use only from controller to set js messages
//if ($this->session->flashdata('inline_js')) { ?>
    <script type="text/javascript">
    $(document).ready(function() {
    <?php
        // Set js message
        echo $this->session->flashdata('inline_js');
        // Destroy after displaying
        // $this->session->unset_userdata('inline_js');
    ?>
    });
    </script>
<?php
//}
?>
</body>
</html>
