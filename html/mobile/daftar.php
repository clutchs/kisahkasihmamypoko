<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Note there is no responsive meta tag here -->

    <link rel="icon" href="../../favicon.ico">

    <title>Kisah Kasih Mamypoko</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/fonts.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Fixed navbar -->
    <?php include 'mainmenu.php';?>

    <div class="container">
      <div class="bg-yellow row">
        <h1><img class="kisah-title" src="../img/daftar.png" alt="mekanisme page"></h1>
        <div class="mekanisme-body row">
          <div class="cari-foto vag-font">

            <div class="img_holder_xhr">
              <div class="img-thumbnail">
                <a href="#" class="colorbox"><img src="http://mamypokoindonesia.com/kisahkasihmamypoko/assets/static/img/250x250.jpg" class="img-rounded" alt="Upload"></a>
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
                <input class="upload" type="file" id="fileupload" name="fileupload" data-url="http://mamypokoindonesia.com/kisahkasihmamypoko/upload/image"/>
              </div>
            </div>
            <input type="hidden" name="image_temp" value="">
            <div class="text-center button-submit" style="display: none">
              <input type="submit" name="text" value="KIRIM" class="btn submit-color" />
            </div>

            <div class="text-left">
              <small class="text-muted clearfix">( * ) Harus di isi. </small>
              <small class="text-danger">( ! ) Mohon diperhatikan data beserta foto nya Momy sebelum di Kirim</small>
            </div>
          </div>

          <div>

              <div class="row">
                <div class="register-form">
                  <form class="form-horizontal" role="form">
                    <fieldset>
                      <div class="form-group">
                        <label class="col-sm-4 control-label" for="fullname">Nama Lengkap</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="fullname" name="fullname" value="Iniakun Buattesting" placeholder="* Nama Mamy" required="required" />
                        </div>
                        <small class="text-danger"></small>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-4 control-label" for="id_number">No. KTP</label>
                        <div class="col-sm-8">
                          <input type="text" placeholder="* No. KTP" class="form-control" id="id_number" name="id_number" value=""/>
                        </div>
                        <small class="text-danger"></small>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-4 control-label" for="baby_name">Nama Baby</label>
                        <div class="col-sm-8">
                          <input type="text" placeholder="* Nama Baby" class="form-control" id="baby_name" name="baby_name" value=""/>
                        </div>
                        <small class="text-danger"></small>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-4 control-label" for="baby_birthday">Tanggal Lahir Baby</label>
                        <div class="col-sm-8">
                          <input type="text" placeholder="* DD/MM/YYYY" class="form-control datepicker" id="baby_birthday" name="baby_birthday" value=""/>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-4 control-label" for="email_register">Email</label>
                        <div class="col-sm-8">
                          <input type="email" class="form-control" id="email_register" name="email_register" value="muhammad.hilman@d3.dentsu.co.id" placeholder="* Email" required="required" />
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-4 control-label" for="phone_number">No. Hp</label>
                        <div class="col-sm-3">
                          <input type="text" placeholder="* No. Hp" class="form-control" id="phone_number" name="phone_number" value=""/>
                        </div>
                        <small class="text-danger"></small>

                        <label class="col-sm-2 control-label" for="phone_home">No. Tlp</label>
                        <div class="col-sm-3">
                          <input type="text" placeholder="No. Tlp" class="form-control" id="phone_home" name="phone_home" value=""/>
                        </div>
                        <small class="text-danger"></small>
                      </div>

                      <div class="form-group">
                        <div class="boxed-grey">
                          <label class="col-sm-2 control-label" for="captcha">Kode Captcha <a class="img-thumbnail reload_captcha" title="Rubah" data-toggle="tooltip" data-placement="right" rel="http://mamypokoindonesia.com/kisahkasihmamypoko/account/reload_captcha" href="javascript:;">
                            <img src="http://mamypokoindonesia.com/kisahkasihmamypoko/assets/static/captcha/image/1438062022.7.jpg" width="120" height="34" style="border:0;" alt=" " /></a><!--small class="text-danger">&nbsp; Captcha expired in 60 Seconds.</small-->
                            <br/><span><small class="text-muted">* Klik gambar untuk rubah</small></span>
                          </label>
                          <div class="col-sm-3">
                            <input type="text" class="form-control" placeholder="* Kode Captcha" id="captcha" name="captcha" value=""/>
                          </div>
                          <small class="text-danger"></small>
                        </div>
                        <label class="col-sm-12 control-label" for="about">Ceritakan Momen Momy & si Kecil</label>
                        <div class="col-sm-12 textarea-message">
                          <textarea class="form-control" type="textarea" id="about" placeholder="* Cerita.." name="about" maxlength="140" rows="6"></textarea>
                        </div>
                        <small class="text-danger"></small>
                        <div class="col-sm-12">
                          <div class="checkbox">
                            <input type="checkbox" class="" placeholder="* No. Hp" id="agreement" name="agreement" value=""/>
                            <label class="control-label" for="agreement">Persetujuan dengan Syarat dan Ketentuan.</label>
                            <a href="http://mamypokoindonesia.com/kisahkasihmamypoko/read/terms" class="text-muted small"><span class="fa fa-chevron-circle-right"></span>&nbsp;Baca</a>
                          </div>
                        </div>
                        <small class="text-danger"></small>
                      </div>


                    </fieldset>
                  </form>
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
          </div>
        </div>
      </div>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>
