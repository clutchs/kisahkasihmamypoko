<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Note there is no responsive meta tag here -->

    <link rel="icon" href="../../../favicon.ico">

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
        <div>
          <h1><img class="kisah-title" src="../img/kisah-kasih.png" alt="kisah kasih mamypoko"></h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 mbg-carousel-body">
          <div id="Carousel" class="carousel slide">

            <!-- Carousel items -->
            <div class="carousel-inner">

            <div class="item active">
              <div class="row"> <!-- tiap thumnail item ukuran nya 106x106px -->
                <div><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
              </div><!--.row-->
            </div><!--.item-->

            <div class="item">
              <div class="row"> <!-- tiap thumnail item ukuran nya 106x106px -->
                <div><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
              </div><!--.row-->
            </div><!--.item-->

            </div><!--.carousel-inner-->
            <a data-slide="prev" href="#Carousel" class="left carousel-control"><img class="nav-carousel" src="../img/right-arrow-right-hi.png" alt="next"></a>
            <a data-slide="next" href="#Carousel" class="right carousel-control"><img class="nav-carousel" src="../img/left-arrow-right-hi.png" alt="next"></a>
          </div><!--.Carousel-->
        </div>
      </div>
      <img class="hadiah img-responsive" src="../img/home-mobile-hadiah.png" alt="hadiah kisah kasih mamypoko">
      <div class="mdaftar-home vag-font">
        <button type="submit" class="btn submit-color">Daftar</button>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>
