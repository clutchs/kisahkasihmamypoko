<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<div class="bg-yellow row">
    <img class="kisah-title" src="<?php echo base_url('assets/public/img/daftar.png')?>" alt="mekanisme page">
    <div class="mekanisme-body row">
      <?php echo form_open_multipart(base_url('account/register'),array('id'=>'form-register','class'=>'form-horizontal','name'=>'register','method'=>'POST'));?>
      <div class="col-xs-8 pembatas">              
          <div class="row">
            <div class="register-form">
                <fieldset>
                    <div class="form-group">
                        <label class="col-sm-4 control-label" for="fullname">Nama Lengkap</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="fullname" name="fullname" value="<?php echo set_value('fullname', $fields['fullname']) ?>" placeholder="* Nama Mamy" required="required" />
                        </div>
                        <small class="text-danger"><?php echo $errors['fullname'];?></small>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-4 control-label" for="id_number">No. KTP</label>
                      <div class="col-sm-8">
                        <input type="text" placeholder="* No. KTP" class="form-control" name="id_number" id="id_number">
                      </div>
                      <small class="text-danger"><?php echo $errors['id_number'];?></small>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-4 control-label" for="baby_name">Nama Baby</label>
                      <div class="col-sm-8">
                        <input type="text" placeholder="* Nama Baby" class="form-control" name="baby_name" id="baby_name">
                      </div>
                      <small class="text-danger"><?php echo $errors['fullname'];?></small>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-4 control-label" for="baby_birthday">Tanggal Lahir Baby</label>
                      <div class="col-sm-8">
                        <input type="text" placeholder="* DD/MM/YYYY" class="form-control datepicker" name="baby_birthday" id="baby_birthday">
                      </div>                  
                    </div>

                    <div class="form-group">
                      <label class="col-sm-4 control-label" for="email_register">Email</label>
                      <div class="col-sm-8">
                        <input type="email" class="form-control" id="email_register" name="email_register" value="<?php echo set_value('email_register', $fields['email_register']) ?>" placeholder="* Email" required="required" />
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-4 control-label" for="phone_number">No. Hp</label>
                      <div class="col-sm-3">
                        <input type="text" placeholder="* No. Hp" class="form-control" id="phone_number" name="phone_number" value="<?php echo $fields['phone_number']; ?>">
                      </div>
                      <small class="text-danger"><?php echo $errors['phone_number'];?></small>
                    
                      <label class="col-sm-2 control-label" for="phone_home">No. Tlp</label>
                      <div class="col-sm-3">
                        <input type="text" placeholder="No. Tlp" class="form-control" id="phone_home" name="phone_home">
                      </div>
                      <small class="text-danger"><?php echo $errors['phone_home'];?></small>     
                    </div>

                    <div class="form-group">
                      <label class="col-sm-12 control-label" for="about">Ceritakan Momen Momy & si Kecil</label>
                      <div class="col-sm-12 textarea-message">
                        <textarea class="form-control" type="textarea" id="about" placeholder="* Cerita.." name="about" maxlength="140" rows="6"><?php echo $fields['about']; ?></textarea>
                      </div>
                      <small class="text-danger"><?php echo $errors['about'];?></small>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-7 pull-left control-label" for="captcha">
                            Kode Captcha <a class="reload_captcha tooltips" title="Reload Captcha" data-placement="right" rel="<?=base_url()?>account/reload_captcha" href="javascript:;">
                            <?php echo $captcha['image'];?></a><!--small class="text-danger">&nbsp; Captcha expired in 60 Seconds.</small-->
                        </label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" placeholder="* Kode Captcha" id="captcha" name="captcha" value="<?php echo $fields['captcha']; ?>">
                        </div>
                        <small class="text-danger"><?php echo $errors['captcha'];?></small>
                    </div>
                </fieldset>                   
            </div><!-- /.register-form -->
        </div><!-- /.row -->
      </div>
      <div class="col-xs-4 cari-foto vag-font">        
            <?php echo form_open_multipart(base_url('upload/photo?data='.$this->session->userdata('user_id')), array('id'=>'fileUploadForm'));?>
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
                        <input class="upload" type="file" id="fileupload" name="fileupload" data-url="<?=base_url('upload/image');?>">
                    </div>
                </div>
                <input type="hidden" name="image_temp" value="">
                <div class="text-center button-submit" style="display: none">
                    <?php echo form_submit('text','KIRIM','class="btn submit-color"');?>                
                </div>
            <?php echo form_close(); ?>
            <div class="text-left">
                <small class="text-muted clearfix">( * ) Harus di isi. </small>
                <small class="text-danger">( ! ) Mohon diperhatikan data beserta foto nya Momy sebelum di Kirim</small>
            </div>
        </div>        
      <?php echo form_close();?>           
    </div>
</div>