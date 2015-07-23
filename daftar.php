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
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

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
        <h1><img class="kisah-title" src="img/daftar.png" alt="mekanisme page"></h1>
        <div class="mekanisme-body row">
          <div class="col-xs-8 pembatas">
              
              <div class="row">
                <div class="register-form">
                  <form class="form-horizontal" role="form">
                    <fieldset>

                      <!-- Text input-->
                      <div class="form-group">
                        <label class="col-sm-3 control-label" for="textinput">Nama Mamy</label>
                        <div class="col-sm-9">
                          <input type="text" placeholder="Nama Mamy" class="form-control">
                        </div>
                      </div>

                      <!-- Text input-->
                      <div class="form-group">
                        <label class="col-sm-3 control-label" for="textinput">No. Ktp</label>
                        <div class="col-sm-9">
                          <input type="text" placeholder="No. Ktp" class="form-control">
                        </div>
                      </div>

                      <!-- Text input-->
                      <div class="form-group">
                        <label class="col-sm-3 control-label" for="textinput">Nama Bayi</label>
                        <div class="col-sm-9">
                          <input type="text" placeholder="Nama Bayi" class="form-control">
                        </div>
                      </div>

                      <!-- Text input-->
                      <div class="form-group">
                        <label class="col-sm-3 control-label" for="textinput">Tanggal Lahir Bayi</label>
                        <div class="col-sm-2">
                          <input type="text" placeholder="Tanggal Lahir Bayi" class="form-control">
                        </div>

                        <label class="col-sm-1 control-label" for="textinput">Bulan</label>
                        <div class="col-sm-3">
                          <input type="text" placeholder="Bulan" class="form-control">
                        </div>

                        <label class="col-sm-1 control-label" for="textinput">Tahun</label>
                        <div class="col-sm-2">
                          <input type="text" placeholder="Tahun" class="form-control">
                        </div>
                      </div>

                      <!-- Text input-->
                      <div class="form-group">
                        <label class="col-sm-3 control-label" for="textinput">Email</label>
                        <div class="col-sm-9">
                          <input type="text" placeholder="Email" class="form-control">
                        </div>
                      </div>

                      <!-- Text input-->
                      <div class="form-group">
                        <label class="col-sm-3 control-label" for="textinput">No. Telp</label>
                        <div class="col-sm-3">
                          <input type="text" placeholder="No. Telp" class="form-control">
                        </div>

                        <label class="col-sm-2 control-label" for="textinput">No. Hp</label>
                        <div class="col-sm-4">
                          <input type="text" placeholder="No. Hp" class="form-control">
                        </div>
                      </div>

                      <!-- Text input-->
                      <div class="form-group">
                        <label class="control-label" for="textinput">Country</label>
                        <div class="textarea-message">
                          <textarea class="form-control" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <div class="pull-right">
                            <button type="submit" class="btn btn-primary">Save</button>
                          </div>
                        </div>
                      </div>

                    </fieldset>
                  </form>
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
          </div>
          
          <div class="col-xs-4 cari-foto vag-font">
            <div><img src="http://placehold.it/250x250" style="max-width:100%;" class="img-thumbnail" alt="A generic"></div>
            <div><button type="submit" class="btn cari-foto-color">Cari Foto</button></div>
            <div><button type="submit" class="btn submit-color">Submit</button></div>
          </div>
        </div>
      </div>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
