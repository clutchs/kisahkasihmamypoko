<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<script type="text/javascript">
window.onload = function() {
    FB.Canvas.setSize({ width: 810, height: 1200 });

    // Place following code after FB.init call.
    function onLogin(response) {
      if (response.status == 'connected') {
        FB.api('/me?fields=first_name', function(data) {
          //var welcomeBlock = document.getElementById('fb-welcome');
          //welcomeBlock.innerHTML = 'Hello, ' + data.first_name + '!';
		  <?php /*if ( $this->participant == '') { ?>
		  var url = '<?php echo base_url("hauth/login/Facebook") ?>';
                var form = $('<form action="' + url + '" method="post">' +
                        '<input type="hidden" name="signed_request" value="' + response.authResponse.signedRequest + '" />' +
                        '</form>');
                $('body').append(form);
                $(form).submit();
		  <?php }*/ ?>	
        });
      }
    }
    FB.getLoginStatus(function(response) {
      // Check login status on load, and if the user is
      // already logged in, go directly to the welcome message.
      if (response.status == 'connected') {
        onLogin(response);
      } else {
        // Otherwise, show Login dialog first.
        FB.login(function(response) {
            // handle the response
            if (response.status == 'connected') {
                var url = '<?php echo base_url("hauth/login/Facebook") ?>';
                var form = $('<form action="' + url + '" method="post">' +
                        '<input type="hidden" name="signed_request" value="' + response.authResponse.signedRequest + '" />' +
                        '</form>');
                $('body').append(form);
                $(form).submit();
            } else {
                top.location.reload();
            }
            console.log(response);
        }, {scope: 'read_stream,email'});
        // Additional initialization code here
      }
    });
    //FB.AppEvents.activateApp();
    //FB.AppEvents.logEvent('account');    
    //console.log( FB.getLoginStatus());
}
</script>
<div class="bg-yellow row">
    <img class="kisah-title" src="<?php echo base_url('assets/public/img/daftar.png')?>" alt="mekanisme page">
    <div class="mekanisme-body row">
      <?php echo form_open_multipart(base_url('account/register'),array('id'=>'form-register','class'=>'form-horizontal','name'=>'register','method'=>'POST'));?>
      <div class="col-xs-8 pembatas">              
          <div class="row">
            <div class="register-form">
                <fieldset>
                    <div class="form-group">
                        <label class="col-sm-4 control-label" for="fullname">Nama Mamy</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="fullname" name="fullname" value="<?php echo set_value('fullname', $fields['fullname'] ? $fields['fullname'] : $this->participant->name); ?>" placeholder="* Nama Mamy" required="required" />
                        </div>
                        <small class="text-danger"><?php echo $errors['fullname'];?></small>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-4 control-label" for="id_number">No. KTP</label>
                      <div class="col-sm-8">
                        <input type="text" placeholder="* No. KTP" class="form-control" id="id_number" name="id_number" value="<?php echo set_value('id_number', $fields['id_number']); ?>" required/>
                      </div>
                      <small class="text-danger"><?php echo $errors['id_number'];?></small>
                    </div>
                    
                    <div class="form-group">
                      <label class="col-sm-4 control-label" for="address">Alamat Lengkap</label>
                        <div class="col-sm-8">
                            <textarea type="text" class="form-control" placeholder="* Alamat Lengkap" id="address" name="address" required><?php echo set_value('address', @$user_fb->address) ?></textarea>
                            <small><?php echo $errors['address'];?></small>
                        </div>
                    </div>
        
                    <div class="form-group">
                      <div class="col-sm-4" for="textinput"></div>
                      <div class="col-sm-4">
                            <input type="hidden" value="<?php echo $fields['province'];?>">
                            <select name="province" class="form-control" id="province" onChange="getRegion($(this),'province');" required>
                                <option value="">PROPINSI</option>
                                <?php foreach ($provinces as $province){ ?>
                                  <option value="<?php echo $province->id;?>" name="province"><?php echo $province->name;?></option>
                                <?php } ?>
                            </select>
                            <small><?php echo $errors['province'];?></small>
                      </div>
                      <div class="col-sm-4">
                            <input type="hidden" value="<?php echo $fields['urbandistrict'];?>">
                            <select name="urbandistrict" class="form-control" id="urbandistrict" onChange="getRegion($(this),'urbandistrict');" required>
                                <option value="">KABUPATEN</option>
                            </select>
                            <small><?php echo $errors['urbandistrict'];?></small>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-4" for="textinput"></div>
                      <div class="col-sm-4">
                            <input type="hidden" value="<?php echo $fields['suburban'];?>" required>
                            <select name="suburban" class="form-control" id="suburban" onChange="getRegion($(this),'suburban');" required>
                                <option value="">KECAMATAN</option>
                            </select>
                            <small><?php echo $errors['suburban'];?></small>
                      </div>

                      <div class="col-sm-4">
                            <input type="text" name="zipcode" placeholder="Kode Pos" class="form-control" value="<?php echo $fields['zipcode'];?>" required>
                            <small><?php echo $errors['zipcode'];?></small>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-4 control-label" for="baby_name">Nama si Kecil</label>
                      <div class="col-sm-8">
                        <input type="text" placeholder="* Nama si Kecil" class="form-control" id="baby_name" name="baby_name" value="<?php echo set_value('baby_name', $fields['baby_name']); ?>"/>
                      </div>
                      <small class="text-danger"><?php echo $errors['fullname'];?></small>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-4 control-label" for="baby_birthday">Tanggal Lahir si Kecil</label>
                      <div class="col-sm-8">
                        <input type="text" placeholder="* DD/MM/YYYY" class="form-control datepicker" id="baby_birthday" name="baby_birthday" value="<?php echo set_value('baby_birthday', $fields['baby_birthday']); ?>"/>
                      </div>                  
                    </div>

                    <div class="form-group">
                      <label class="col-sm-4 control-label" for="email_register">Email</label>
                      <div class="col-sm-8">
                        <input type="email" class="form-control" id="email_register" name="email_register" value="<?php echo set_value('email_register', $fields['email_register'] ? $fields['email_register'] : $this->participant->email) ?>" placeholder="* Email" required="required" />
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-4 control-label" for="phone_number">No. Hp</label>
                      <div class="col-sm-3">
                        <input type="text" placeholder="* No. Hp" class="form-control" id="phone_number" name="phone_number" value="<?php echo $fields['phone_number']; ?>"/>
                      </div>
                      <small class="text-danger"><?php echo $errors['phone_number'];?></small>
                    
                      <label class="col-sm-2 control-label" for="phone_home">No. Tlp</label>
                      <div class="col-sm-3">
                        <input type="text" placeholder="No. Tlp" class="form-control" id="phone_home" name="phone_home" value="<?php echo set_value('phone_home', $fields['phone_home']); ?>"/>
                      </div>
                      <small class="text-danger"><?php echo $errors['phone_home'];?></small>     
                    </div>

                    <div class="form-group">
                        <div class="boxed-grey">
                            <label class="col-sm-7 control-label" for="captcha">Kode Captcha <a class="img-thumbnail reload_captcha" title="Rubah" rel="<?=base_url()?>account/reload_captcha" href="javascript:;">
                                <?php echo $captcha['image'];?></a><!--small class="text-danger">&nbsp; Captcha expired in 60 Seconds.</small-->                            
                                <br/><span><small class="text-muted">* Klik gambar untuk rubah</small></span>
                            </label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" placeholder="* Kode Captcha" id="captcha" name="captcha" value="<?php echo set_value('captcha', $fields['captcha']); ?>"/>
                            </div>                        
                            <small class="text-danger"><?php echo $errors['captcha'];?></small>
                        </div>
                        <label class="col-sm-12 control-label" for="about">Ceritakan Momen Mamy & si Kecil bersama MamyPoko Pants</label>
                        <div class="col-sm-12 textarea-message">
                          <textarea class="form-control" type="textarea" id="about" placeholder="* Cerita.." name="about" maxlength="140" rows="6"><?php echo set_value('phone_home', $fields['about']); ?></textarea>
                        </div>
                        <small class="text-danger"><?php echo $errors['about'];?></small>                                                
                                                
                        <div class="col-sm-12 radio-handler">
                            <label class="col-sm-12 control-label" for="about">Darimanakah Mamy mengetahui activity ini ?</label>
                            <ul class="list-group col-sm-7">
                            <?php 
                                $i = 0;
                                foreach ($findout as $find) { 
                                    echo $i == 5 ? '</ul><ul class="list-group col-sm-5">' : '';
                                    echo '<li class="list-group-item"><label for="'.$find.'">';
                                    echo form_radio('findout',$find, $i == 0 ? TRUE : FALSE);
                                    echo '&nbsp;'.$find.'</label></li>';
                                    $i++;
                                }
                            ?>  
                            </ul>                          
                        </div>
                        
                        <div class="col-sm-12">
                            <div class="checkbox">
                              <input type="checkbox" class="" placeholder="* Agreement" id="agreement" name="agreement" value="<?php echo $fields['agreement']; ?>"/>
                              <label class="control-label" for="agreement">* Persetujuan dengan Syarat dan Ketentuan.</label>       
                              <a href="<?php echo base_url('read/terms');?>" class="text-muted small"><span class="fa fa-chevron-circle-right"></span>&nbsp;Baca</a>
                            </div>  
                        </div>                             
                        <small class="text-danger"><?php echo $errors['agreement'];?></small>
                    </div>
                    
                    
                </fieldset>                   
            </div><!-- /.register-form -->
        </div><!-- /.row -->
      </div>
      
      <div class="col-xs-4 cari-foto vag-font">        
            <?php //echo form_open_multipart(base_url('upload/photo?data='.$this->session->userdata('user_id')), array('id'=>'fileUploadForm'));?>
                <div class="img_holder_xhr">
                    <div class="img-thumbnail">
                        <a href="#" class="colorbox"><img src="<?php echo base_url('assets/static/img/250x250.jpg');?>" class="img-rounded" alt="Upload"></a>
                    </div>
                </div>
                <div class="text-center">
                    <div class="container-fluid">
                        <!-- The global progress bar -->
                        <div id="progress" class="progress" style="display:none;">
                            <div class="progress-bar progress-bar-danger"></div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <div class="fileUpload">
                        <label class="cari-foto-color">Cari Foto</label>
                        <input class="upload" type="file" id="fileupload" name="fileupload" data-url="<?=base_url('upload/image');?>"/>
                    </div>
                </div>
                <input type="hidden" name="image_temp" value="">
                <div class="text-center button-submit" style="display: none">
                    <?php echo form_submit('text','KIRIM','class="btn submit-color"');?>                
                </div>
            
            <div class="text-left">
                <small class="text-muted clearfix">( * ) Harus di isi. </small>
                <small class="text-danger">( ! ) Mohon diperhatikan data beserta foto nya Mamy dan si Kecil sebelum di Kirim</small>
            </div>
        </div>    
        <?php echo form_close(); ?>
    </div>
</div>