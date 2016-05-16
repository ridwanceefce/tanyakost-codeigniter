<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="apple-touch-icon" sizes="57x57" href="<?= base_url('assets/images/favico/apple-icon-57x57.png'); ?>">
    <link rel="apple-touch-icon" sizes="60x60" href="<?= base_url('assets/images/favico/apple-icon-60x60.png'); ?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= base_url('assets/images/favico/apple-icon-72x72.png'); ?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('assets/images/favico/apple-icon-76x76.png'); ?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= base_url('assets/images/favico/apple-icon-114x114.png'); ?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?= base_url('assets/images/favico/apple-icon-120x120.png'); ?>">
    <link rel="apple-touch-icon" sizes="144x144" href="<?= base_url('assets/images/favico/apple-icon-120x120.png'); ?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?= base_url('assets/images/favico/apple-icon-152x152.png'); ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('assets/images/favico/apple-icon-180x180.png'); ?>">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?= base_url('assets/images/favico/android-icon-192x192.png'); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('assets/images/favicon-32x32.png'); ?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= base_url('assets/images/favicon-96x96.png'); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/images/favicon-16x16.png'); ?>">
    <link rel="manifest" href="<?= base_url('assets/manifest.json'); ?>">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <title><?php echo $judul ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?= base_url('assets/css/home_page.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/normalize.css') ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?= base_url('assets/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,500,700,300' rel='stylesheet' type='text/css'>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- jQuery -->
    <script src="<?= base_url('assets/js/jquery.js') ?>"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

      <header class="container">
        <div class="navbar navbar-default" id="navbar-welcome">
          <div class="container-fluid">
            <div class="navbar-header">
            <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
            <button class="navbar-toggle collapsed" id="hamburger" 
                    data-target=".navigasi-welcome" data-toggle="collapse" type="button" 
                                                    aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

              <a href="<?= base_url() ?>" class="navbar-brand">
                <img src="<?= base_url('assets/images/logo-takos-navbar-1.svg') ?>" 
                    class="img-responsive logo-md hidden-xs" alt="Logo Tanyakost" >
                <img src="<?= base_url('assets/images/logo-takos.svg') ?>" 
                    class="img-responsive logo-xs visible-xs" alt="Logo Tanyakost" >
              </a>
            </div>

            <div class="navbar-collapse collapse navigasi-welcome">
              <div class="container-fluid">
                <ul class="nav navbar-nav navbar-right" id="nav-welcome">
                  <li class="active"><a href="#">Home</a></li>
                  <li><a href="#">About us</a></li>
                  <li><a href="#">Contact us</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="<?= base_url('login-user') ?>">Login</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </header>

      <!-- Content -->
      <div class="content container clearfix">
        <div class="row">
          <div class="banner col-md-offset-2 col-md-8">
            <p>Bingung cari kost? <br> cari aja di <b>tanyakost.com</b></p>
            <div class="form-group">
              <div class="inner-addon right-inner-addon">
                <i class="fa fa-search" aria-hidden="true"></i>
                <input type="search" class="form-control" id="welcome_search" placeholder="Cari kost...">
              </div>
            </div>
          </div>
        </div>
          
        <div class="row text-center" id="pasang-iklan">
          <p>Ingin pasang iklan kost?</p>
          <button class="button_tambah">Pasang iklan</button>
        </div>
      </div>
      <!-- /content -->

      <!-- footer -->
      <div class="container clearfix">
        <footer class="row">
          <p class="copyright col-md-4 col-sm-12">&copy; 2016 tanyakost.com</p>
          <nav class="hidden-xs">
            <a href="#"><i class="fa fa-facebook-square"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
          </nav>
        </footer>
      </div>
      <!-- /footer -->

  </body>
</html>
