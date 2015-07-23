<<<<<<< HEAD
<?php

/*
 *---------------------------------------------------------------
 * APPLICATION ENVIRONMENT
 *---------------------------------------------------------------
 *
 * You can load different configurations depending on your
 * current environment. Setting the environment also influences
 * things like logging and error reporting.
 *
 * This can be set to anything, but default usage is:
 *
 *     development
 *     testing
 *     production
 *
 * NOTE: If you change these, also change the error_reporting() code below
 *
 */
    define('ENVIRONMENT', 'development');
/*
 *---------------------------------------------------------------
 * ERROR REPORTING
 *---------------------------------------------------------------
 *
 * Different environments will require different levels of error reporting.
 * By default development will show errors but testing and live will hide them.
 */
if (defined('ENVIRONMENT'))
{
    switch (ENVIRONMENT)
    {
	case 'development':
		error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING); //error_reporting(E_ALL); /* Original Setting */
	break;

	case 'testing':
	case 'production':
		error_reporting(0);
	break;

	default:
		exit('The application environment is not set correctly.');
    }
}

/*
 *---------------------------------------------------------------
 * SYSTEM FOLDER NAME
 *---------------------------------------------------------------
 *
 * This variable must contain the name of your "system" folder.
 * Include the path if the folder is not in the same  directory
 * as this file.
 *
 */
    $system_path = 'system';

/*
 *---------------------------------------------------------------
 * APPLICATION FOLDER NAME
 *---------------------------------------------------------------
 *
 * If you want this front controller to use a different "application"
 * folder then the default one you can set its name here. The folder
 * can also be renamed or relocated anywhere on your server.  If
 * you do, use a full server path. For more info please see the user guide:
 * http://codeigniter.com/user_guide/general/managing_apps.html
 *
 * NO TRAILING SLASH!
 *
 */
    $application_folder = 'application';

/*
 * --------------------------------------------------------------------
 * DEFAULT CONTROLLER
 * --------------------------------------------------------------------
 *
 * Normally you will set your default controller in the routes.php file.
 * You can, however, force a custom routing by hard-coding a
 * specific controller class/function here.  For most applications, you
 * WILL NOT set your routing here, but it's an option for those
 * special instances where you might want to override the standard
 * routing in a specific front controller that shares a common CI installation.
 *
 * IMPORTANT:  If you set the routing here, NO OTHER controller will be
 * callable. In essence, this preference limits your application to ONE
 * specific controller.  Leave the function name blank if you need
 * to call functions dynamically via the URI.
 *
 * Un-comment the $routing array below to use this feature
 *
 */
    // The directory name, relative to the "controllers" folder.  Leave blank
    // if your controller is not in a sub-folder within the "controllers" folder
    // $routing['directory'] = '';

    // The controller class file name.  Example:  Mycontroller
    // $routing['controller'] = '';

    // The controller function you wish to be called.
    // $routing['function']	= '';


/*
 * -------------------------------------------------------------------
 *  CUSTOM CONFIG VALUES
 * -------------------------------------------------------------------
 *
 * The $assign_to_config array below will be passed dynamically to the
 * config class when initialized. This allows you to set custom config
 * items or override any default config values found in the config.php file.
 * This can be handy as it permits you to share one application between
 * multiple front controller files, with each file containing different
 * config values.
 *
 * Un-comment the $assign_to_config array below to use this feature
 *
 */
    // $assign_to_config['name_of_config_item'] = 'value of config item';

// --------------------------------------------------------------------
// END OF USER CONFIGURABLE SETTINGS.  DO NOT EDIT BELOW THIS LINE
// --------------------------------------------------------------------

/*
 * ---------------------------------------------------------------
 *  Resolve the system path for increased reliability
 * ---------------------------------------------------------------
 */

    // Set the current directory correctly for CLI requests
    if (defined('STDIN'))
    {
	chdir(dirname(__FILE__));
    }

    if (realpath($system_path) !== FALSE)
    {
	$system_path = realpath($system_path).'/';
    }

    // ensure there's a trailing slash
    $system_path = rtrim($system_path, '/').'/';

    // Is the system path correct?
    if ( ! is_dir($system_path))
    {
	exit("Your system folder path does not appear to be set correctly. Please open the following file and correct this: ".pathinfo(__FILE__, PATHINFO_BASENAME));
    }

/*
 * -------------------------------------------------------------------
 *  Now that we know the path, set the main path constants
 * -------------------------------------------------------------------
 */
    // The name of THIS file
    define('SELF', pathinfo(__FILE__, PATHINFO_BASENAME));

    // The PHP file extension
    // this global constant is deprecated.
    define('EXT', '.php');

    // Path to the system folder
    define('BASEPATH', str_replace("\\", "/", $system_path));

    // Path to the front controller (this file)
    define('FCPATH', str_replace(SELF, '', __FILE__));

    // Name of the "system folder"
    define('SYSDIR', trim(strrchr(trim(BASEPATH, '/'), '/'), '/'));


    // The path to the "application" folder
    if (is_dir($application_folder))
    {
	define('APPPATH', $application_folder.'/');
    }
    else
    {
	if ( ! is_dir(BASEPATH.$application_folder.'/'))
	{
		exit("Your application folder path does not appear to be set correctly. Please open the following file and correct this: ".SELF);
	}

	define('APPPATH', BASEPATH.$application_folder.'/');
    }

/*
 * --------------------------------------------------------------------
 * LOAD THE BOOTSTRAP FILE
 * --------------------------------------------------------------------
 *
 * And away we go...
 *
 */
require_once BASEPATH.'core/CodeIgniter.php';

/* End of file index.php */
/* Location: ./index.php */
=======
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
        <div class="col-xs-7">
          <h1><img class="kisah-title" src="img/kisah-kasih.png" alt="kisah kasih mamypoko"></h1>
          <h2><img class="dapatkan-hadiah" src="img/dapatkan-hadiah.png" alt="foto dan ceritakan kisah dengan mamypoko, dapatkan hadiahnya"></h2>
          <img class="baby-mesin" src="img/baby-mesin.png" alt="hadiah kecil">
        </div>

        <div class="col-xs-5">
          <img class="baby-mom" src="img/baby-mother.png" alt="foto ibu bayi">
        </div>

      </div>

      <div class="row">
        <div class="col-xs-5">
          <img class="mobil-brio" src="img/mobil-brio.png" alt="hadiah mobil">
        </div>
        
        <div class="col-xs-7 bg-pink">
          <div class="col-xs-9 vag-font stroke">
            Dan raih Hadiah Hiburan setiap 2 minggu sekali
            berupa ratusan karton popok Mamypoko Pants
          </div>
          <div class="col-xs-3 vag-font"><button type="submit" class="btn submit-color">Daftar</button></div>
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
                
            <div class="item active">
              <div class="row"> <!-- tiap thumnail item ukuran nya 106x106px -->
                <div class="col-md-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                <div class="col-md-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                <div class="col-md-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                <div class="col-md-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                <div class="col-md-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
              </div><!--.row-->
            </div><!--.item-->

            <div class="item">
              <div class="row">
                <div class="col-md-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                <div class="col-md-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                <div class="col-md-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                <div class="col-md-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                <div class="col-md-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
              </div><!--.row-->
            </div><!--.item-->
             
            </div><!--.carousel-inner-->
              <a data-slide="prev" href="#Carousel" class="left carousel-control"><img class="nav-carousel" src="img/right-arrow-right-hi.png" alt="next"></a>
              <a data-slide="next" href="#Carousel" class="right carousel-control"><img class="nav-carousel" src="img/left-arrow-right-hi.png" alt="next"></a>
          </div><!--.Carousel-->
                     
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
>>>>>>> 90b616a7c2cffde73a3178993920d7ac676b7d70
