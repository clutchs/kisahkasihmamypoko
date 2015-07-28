<?php if (!defined('BASEPATH')) exit('No direct script access allowed');?>
<script type="text/javascript">
//window.onload = function() {
    //FB.Canvas.setSize({ width: 810, height: 1450 });
//}
</script>
    <div class="bg-yellow row">
        <h1><img class="kisah-title" src="<?php echo base_url();?>assets/public/img/galeri.png" alt="galeri page"></h1>
        <div class="scroll-pane-arrows mekanisme-body scroll-body row">
        <?php
            if (!empty($gallery)) { ?>
            <div class="search-galeri row">
                <div class="col-xs-7">
                    <form role="form" action="" type="GET" class="form-horizontal sort">
                      <div class="input-group">
                        <select class="form-control input-sm" id="sel1" name="sort" style="width:100%" data-url="<?=uri_string();?>">
                          <option value="">Sort by</option>
                          <option value="atoz" <?=$this->input->get('sort') == 'atoz' ? 'selected' : '';?>>A to Z</option>
                          <option value="ztoa" <?=$this->input->get('sort') == 'ztoa' ? 'selected' : '';?>>Z to A</option>
                        </select>
                      </div>
                    </form>
                </div>
                <div class="col-xs-5">
                <form class="form-inline" action="" method="GET">
                    <div class="form-group">
                      <label class="sr-only" for="exampleInputAmount">Participant</label>
                      <div class="input-group">
                        <input type="text" class="form-control cari" name="search" value="<?=$this->input->get('search');?>" id="exampleInputAmount" placeholder="Participant">
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Cari</button>
                </form>
                </div>
            </div>
            <div class="galeri-thumbnail">
            <?php
                foreach ($gallery as $image) { ?>
                    <div class="col-xs-3 clear">
                        <div class="thumbnail">
                        <?php
                            $pathinfo	= pathinfo($image->file_name);
                            $thumb		= $pathinfo['filename'].'_thumb.'.$pathinfo['extension'];
                        ?>
                        <a href="javascript:;" class="popover_bootbox" rel="<?=base_url();?>uploads/gallery/<?=$image->file_name?>" title="<?php echo $image->name; echo ($image->baby_name) ? ' & '.$image->baby_name : ''?>">
                            <img style="width:100%;max-width:100%;height:auto;" data-toggle="modal" data-target=".bs-example-modal-sm-<?php echo $image->id ?>" src="<?php echo base_url();?>uploads/gallery/<?php echo $thumb?>" alt="<?php echo $image->name;?>" />
                        </a>
                        <div class="img-description hidden">
                            <?php echo $image->about;?>
                        </div>
                        <div class="caption vag-font">
                            <h5 class="nama-mamy"><?=character_limiter($image->name, 14);?></h5>
                            <h5 class="nama-baby"><?=character_limiter($image->baby_name, 14);?></h5>
                        </div>
                        </div>
                    </div>
<<<<<<< HEAD
            <?php } ?>            
                
               
                
        <?php } else { ?>
            <br/><br/><br/><br/><br/><br/><br/>
              <h3 class="text-center font-pocky">Belum ada galeri. <br/><a href="<?php echo base_url('photo_gallery');?>" title="Kembali">Kembali</a></h3>              
    <?php } ?>                  
          </div>            
        </div>        
        <div class="col-xs-12 pagination text-center">
            <?php echo $links; ?>
        </div>            
=======
            <?php } ?>
            <?php } else { ?>
            <br/><br/><br/><br/><br/><br/><br/>
              <h3 class="text-center font-pocky">Belum ada galeri. <br/><a href="<?php echo base_url('photo_gallery');?>" title="Kembali">Kembali</a></h3>
            <?php } ?>
          </div>
        </div>
>>>>>>> 684363661b34783bf24cf28816c5bf8a97553f1d
      </div>
