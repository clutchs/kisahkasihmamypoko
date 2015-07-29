<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="bg-yellow row">
    <div class="col-xs-7">
      <h1><img class="kisah-title" src="<?php echo base_url('assets/public/img');?>/kisah-kasih.png" alt="kisah kasih mamypoko"></h1>
      <h2><img class="dapatkan-hadiah" src="<?php echo base_url('assets/public/img');?>/dapatkan-hadiah.png" alt="foto dan ceritakan kisah dengan mamypoko, dapatkan hadiahnya"></h2>
      <img class="baby-mesin" src="<?php echo base_url('assets/public/img');?>/baby-mesin.png" alt="hadiah kecil">
    </div>

    <div class="col-xs-5">
      <img class="baby-mom" src="<?php echo base_url('assets/public/img');?>/baby-mother.png" alt="foto ibu bayi">
    </div>

</div>

<div class="row">
  <div class="col-xs-5">
    <img class="mobil-brio" src="<?php echo base_url('assets/public/img');?>/mobil-brio.png" alt="hadiah mobil">
  </div>

  <div class="col-xs-7 bg-pink">
    <div class="col-xs-9 vag-font stroke">
      Dan raih Hadiah Hiburan setiap 2 minggu sekali
      berupa ratusan karton popok Mamypoko Pants
    </div>
    <div class="col-xs-3 vag-font"><button type="submit" class="btn submit-color" onclick="window.location.href='account/register';">Daftar</button></div>
  </div>
  <div class="note">
    &ast;Gambar hanya ilustrasi. Tipe warna, merek hadiah sesuai dengan ketentuan pihak Unicharm.
    Pajak hadiah ditanggung oleh Unicharm. Hadiah tidak dapat diuangkan.
    Hati-hati penipuan atas nama Unicharm. Pemenang tidak dipungut biaya apapun.
  </div>
</div>

<div class="row">
  <div class="col-md-12">
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
                                        <div class="col-sm-3 col-md-3">
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
