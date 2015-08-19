<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<div class="navbar-mamypoko">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container main-menu">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand vag-font" href="<?php echo base_url();?>">Mamypoko</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse bg-mm">
                <ul class="nav navbar-nav vag-font">
                    <li class="<?php echo ($this->uri->uri_string() == '') ? 'active' :'';?>"><a href="<?php echo base_url();?>">Home</a></li>
                    <li class="<?php echo ($this->uri->uri_string() == 'read/mechanism' || $this->uri->segment(1) == 'mechanism') ? 'active' :'';?>"><a href="<?php echo base_url('read/mechanism');?>">Mekanisme</a></li>
                    <li class="<?php echo ($this->uri->segment(1) == 'account' || $this->uri->segment(2) == 'register') ? 'active' :'';?>"><a href="<?php echo base_url('account');?>">Daftar</a></li>
                    <li class="<?php echo ($this->uri->uri_string() == 'read/prize') ? 'active' :'';?>"><a href="<?php echo base_url('read/prize');?>">Hadiah</a></li>
                    <li class="<?php echo ($this->uri->segment(1) == 'photo_gallery') ? 'active' :'';?>"><a href="<?php echo base_url('photo_gallery');?>">Galeri</a></li>
                    <li class="<?php echo ($this->uri->uri_string() == 'read/terms') ? 'active' :'';?>"><a href="<?php echo base_url('read/terms');?>">Syarat &amp; Ketentuan</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
</div>
