<?php if (!defined('BASEPATH')) exit('No direct script access allowed');?>
<script type="text/javascript">
//window.onload = function() {
	//FB.Canvas.setSize({ width: 810, height: 1450 });
//}
</script>
    <div class="bg-yellow row">
        <h1><img class="kisah-title" src="<?php echo base_url();?>assets/public/img/galeri.png" alt="galeri page"></h1>
        <div class="scroll-pane-arrows mekanisme-body scroll-body row">
          
          <div class="galeri-thumbnail">
            <?php 
            if (!empty($gallery)) { ?>
                <div class="col-sm-12 col-md-12 col-lg-12 pull-left sort">
					<form role="form" action="" type="GET" class="form-horizontal sort">
					  <div class="input-group">
						<select class="form-control input-sm" id="sel1" name="sort" style="width:100%" data-url="<?=uri_string();?>">
						  <option value=""><b>Sort by</b></option>                  
						  <option value="atoz" <?=$this->input->get('sort') == 'atoz' ? 'selected' : '';?>>A to Z</option>
						  <option value="ztoa" <?=$this->input->get('sort') == 'ztoa' ? 'selected' : '';?>>Z to A</option>
						</select>                  
					  </div>
					</form>
				</div>
				<div class="col-sm-7 pull-right">
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
                <?php 
                foreach ($gallery as $image) { ?>
                    <div class="col-xs-3">
                        <div class="thumbnail">
                        <?php
                            $pathinfo	= pathinfo($image->file_name);
                            $thumb		= $pathinfo['filename'].'_thumb.'.$pathinfo['extension'];
                        ?>
                        <a href="javascript:;" class="popover_bootbox" rel="<?=base_url();?>uploads/gallery/<?=$image->file_name?>" title="<?php echo $image->name;?>">
                            <img style="height:190px" data-toggle="modal" data-target=".bs-example-modal-sm-<?php echo $image->id ?>" src="<?=base_url();?>uploads/gallery/<?=$thumb?>" alt="<?=$image->file_name;?>" />
                        </a>
                          <div class="caption">
                            <h3 class="nama-mamy"><?=character_limiter($image->name, 16);?></h3>
                            <h3 class="nama-baby"><?=character_limiter($image->baby_name, 16);?></h3>
                          </div>
                        </div>
                    </div>
            <?php }
            } else { ?>
            <br/><br/><br/><br/><br/><br/><br/>
			  <h3 class="text-center font-pocky">Belum ada galeri</h3>
            
            <?php } ?>
          </div>
        </div>
      </div>

<script type="text/javascript">
    function fb_share(url, image) {
        var product_name = 'Pocky Stiker Inspirasi';
        var description = 'Koleksi stiker inspirasi Pocky JKT48 ku sudah lengkap! Unggah foto koleksi stiker inspirasi Pocky JKT48 kamu di sini, dan menangkan hadiah eksklusif JKT48 hanya dari Pocky.';
        var share_image = 'http://panasonicidapps.com/sts/uploads/gallery/' + image;
        var share_link = url;
        FB.ui({
            method: 'feed',
            name: product_name,
            link: share_link,
            picture: share_image,
            description: description
        }, function(response) {
            if (response && response.post_id) {
            }
            else {
                console.log(response);
            }
        });
    }
<?php $title = 'Unggah koleksi lengkap stiker inspirasi Pocky JKT48 kamu sekarang, dan menangkan hadiah eksklusif dari JKT48!'; ?>
    function tweet(url) {
        var urltemp = encodeURIComponent(url);
        window.open('https://twitter.com/share?url=' + urltemp + '&text=<?php echo urlencode($title) ?>', 'Share to Twitter', 'height=320, width=640, toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, directories=no, status=no');
    }
</script>