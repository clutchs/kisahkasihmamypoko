<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<div class="bg-yellow row">
    <img class="kisah-title" alt="kisah kasih mamypoko" src="<?php echo base_url('assets/public/img/kisah-kasih.png');?>">
    <div class="mekanisme-body row">
      <div class="col-xs-12 pembatas">              
          <div class="row">
            <div class="register-form">
                <h2 class="vag-font text-info">Hallo Mamy</h2>
				<p>        
                Terima kasih untuk Mamy <strong><?php echo @$this->participant->name; echo ($this->participant->baby_name) ? ' & ' .$this->participant->baby_name : '';?></strong> sudah berpartisipasi dalam ajang lomba foto <strong>Kisah Kasih Mamypoko</strong>
				<?php if ($this->participant->file_name) { 
					$pathinfo	= pathinfo($this->participant->file_name);
					$thumb		= $pathinfo['filename'].'_thumb.'.$pathinfo['extension'];
				?>
				<div class="text-center">
                    <a href="javascript:;" class="popover_bootbox_auto img-thumbnail" rel="<?=base_url();?>uploads/gallery/<?=$this->participant->file_name?>" title="<?php echo $this->participant->name; echo ($this->participant->baby_name) ? ' & '.$this->participant->baby_name : ''?>">
                        <img style="width:100%;max-width:100%;height:auto;" data-toggle="modal" data-target=".bs-example-modal-sm-<?php echo $this->participant->id ?>" src="<?php echo base_url();?>uploads/gallery/<?php echo $thumb?>" alt="<?php echo $this->participant->name;?>" />
                    </a>
                    <div class="img-description hidden">
                        <?php echo $this->participant->about;?>
                    </div>
				</div>
				<?php } ?>
				<br/><br/>Silahkan Mamy kunjungi galeri <a href="<?php echo base_url('photo_gallery');?>" title="Galeri Kisah Kasih Mamypoko"><strong>Kisah Kasih Mamypoko</strong></a>
				</p>
            </div><!-- /.register-form -->
        </div><!-- /.row -->
      </div>

    </div>
</div>