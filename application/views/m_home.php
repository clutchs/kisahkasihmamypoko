<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<div class="bg-yellow row">
    <h1><img class="kisah-title" src="<?php echo base_url('assets/public/img');?>/kisah-kasih.png" alt="kisah kasih mamypoko"></h1>
</div>

<div class="row">
    <div class="col-md-12 mbg-carousel-body">
    <div id="Carousel" class="carousel slide">

      <!-- Carousel items -->
      <div class="carousel-inner">
        <?php
            $b = 1;
            $n = count($participants);
            foreach ($participants as $image) {

              $pathinfo	= pathinfo($image->file_name);
              $thumb		= $pathinfo['filename'].'_thumb.'.$pathinfo['extension'];

              if ($b == 1) { ?>
              <div class="item active">
                  <div class="row">
                    <?php } elseif ($b % 5 == 1 && $b != 1) {	?>
                        <div class="item">
                            <div class="row">
                              <?php } ?>
                              <div class="col-md-3">
                                  <div class="thumbnail">
                                      <?php
                                          $pathinfo	= pathinfo($image->file_name);
                                          $thumb		= $pathinfo['filename'].'_thumb.'.$pathinfo['extension'];
                                      ?>
                                      <a href="javascript:;" class="popover_bootbox high" rel="<?=base_url();?>uploads/gallery/<?=$image->file_name?>" title="<?php echo $image->name; echo ($image->baby_name) ? ' & '.$image->baby_name : ''?>">
                                          <img data-toggle="modal" data-target=".bs-example-modal-sm-<?php echo $image->id ?>" src="<?php echo base_url();?>uploads/gallery/<?php echo $thumb?>" alt="<?php echo $image->name;?>" />
                                      </a>
                                      <div class="img-description hidden">
                                          <?php echo $image->about;?>
                                      </div>
                                      <div class="caption vag-round-font hidden">
                                          <h5 class="nama-mamy"><?=character_limiter($image->name, 14);?></h5>
                                          <h5 class="nama-baby"><?=character_limiter($image->baby_name, 14);?></h5>
                                      </div>
                                  </div>
                              </div>
                              <?php if ($b % 5 == 0 && $b != $n) {	?>
                              </div><!--.row-->
                          </div><!--.item-->
                    <?php } if ($b == $n) { ?>
                </div><!--.row1-->
              </div><!--.item1-->
            <?php }
            $b++;
            }
            ?>

      </div><!--.carousel-inner-->
        <a data-slide="prev" href="#Carousel" class="left carousel-control"><img class="nav-carousel" src="<?php echo base_url('assets/public/img');?>/right-arrow-right-hi.png" alt="next"></a>
        <a data-slide="next" href="#Carousel" class="right carousel-control"><img class="nav-carousel" src="<?php echo base_url('assets/public/img');?>/left-arrow-right-hi.png" alt="next"></a>
    </div><!--.Carousel-->

  </div>
</div>

<img class="hadiah img-responsive" src="<?php echo base_url('assets/public/img');?>/home-mobile-hadiah.png" alt="hadiah mobil">
<div class="mdaftar-home vag-font">
    <button type="submit" class="btn submit-color" onclick="window.location.href='account/register';">Daftar</button>
</div>
