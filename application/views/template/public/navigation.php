<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<div class="navbar-mamypoko">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container main-menu">
            <div id="navbar" class="navbar-collapse collapse bg-mm">
                <ul class="nav navbar-nav vag-font">
                  <li class="<?php echo ($this->uri->uri_string() == '') ? 'active' :'';?>"><a href="<?php echo base_url();?>">Home</a></li>
                  <li class="<?php echo ($this->uri->uri_string() == 'read/mechanism' || $this->uri->segment(1) == 'mechanism') ? 'active' :'';?>"><a href="<?php echo base_url('read/mechanism');?>">Mekanisme</a></li>
                  <li class="<?php echo ($this->uri->uri_string() == 'account' || $this->uri->segment(2) == 'register') ? 'active' :'';?>"><a href="<?php echo base_url('account/register');?>">Daftar</a></li>			  
                  <li class="<?php echo ($this->uri->uri_string() == 'read/prize') ? 'active' :'';?>"><a href="<?php echo base_url('read/prize');?>">Hadiah</a></li>
                  <li class="<?php echo ($this->uri->uri_string() == 'photo_gallery') ? 'active' :'';?>"><a href="<?php echo base_url('photo_gallery');?>">Galeri</a></li>
                  <li class="<?php echo ($this->uri->uri_string() == 'read/terms') ? 'active' :'';?>"><a href="<?php echo base_url('read/terms');?>">Syarat &amp; Ketentuan</a></li>			  
                </ul>
            </div>		
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
</div>