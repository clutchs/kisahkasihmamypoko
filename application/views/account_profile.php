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
				<a href="javascript:;" class="popover_bootbox img-thumbnail" rel="<?=base_url();?>uploads/gallery/<?=$this->participant->file_name?>">
					<img style="height:190px" data-toggle="modal" data-target=".bs-example-modal-sm-<?php echo $image->id ?>" src="<?=base_url();?>uploads/gallery/<?=$thumb?>" alt="<?=$image->file_name;?>" />
				</a>
				</div>
				<?php } ?>
				<br/><br/>Silahkan Mamy kunjungi galeri <a href="<?php echo base_url('photo_gallery');?>" title="Galeri Kisah Kasih Mamypoko"><strong>Kisah Kasih Mamypoko</strong></a>
				</p>
            </div><!-- /.register-form -->
        </div><!-- /.row -->
      </div>

    </div>
</div>