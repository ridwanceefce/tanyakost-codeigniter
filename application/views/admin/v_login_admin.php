<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="apple-touch-icon" sizes="57x57" href="images/favico/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/favico/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/favico/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/favico/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/favico/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/favico/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/favico/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/favico/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favico/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="images/favico/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="images/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <title>Tanyakost.com | Tempat cari kost</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/user-login.css" rel="stylesheet">
    <link href="css/normalize.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,500,700,300' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <header>
        <div class="container-fluids">
          <div class="navbar navbar-default navbar-fixed-top" id="navbar-main">

            <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
            <button class="navbar-toggle" data-target=".navigasi-welcome" data-toggle="collapse" type="button">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

            <a href="/" class="navbar-brand">
              <img src="images/logo-takos.svg" class="img-responsive hidden-xs logo-md" alt="Logo Tanyakost" >
              <img src="images/logo-takos.svg" class="img-responsive visible-xs logo-xs" alt="Logo Tanyakost" >
            </a>
          


            <div class="navbar-collapse collapse navigasi-welcome">
              
              <form class="navbar-form pull-left">
                <input type="text" class="form-control" placeholder="Search this site..." id="searchInput">
                <button type="submit" class="btn btn-default hidden-xs"><span class="glyphicon glyphicon-search"></span></button>
              </form>

              <ul class="nav navbar-nav pull-right" id="nav-welcome">
                <li class="active" ><a href="#">Home</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#">Contact us</a></li>
                <li><a href="#">Login</a></li>
              </ul>
            </div>
          </div>
        </div>
      </header>

      <div class="container">
        <div class="col-md-6 col-md-offset-3">
          <div id="login-section" class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Login Admin</h3>
            </div>
            <form>
              <div class="panel-body">
                <label>Email</label>
                <input type="email" id="email-user" class="form-control">
                <label>Password</label>
                <input type="password" id="pass-user" class="form-control">
              </div>
              <div class="panel-footer">
                <a href="admin-profil.html" class="btn" id="btn-login">Login</a>
                <p>belum punya akun? <a href="<?= base_url('registrasi') ?>">Daftar</a></p>
              </div>
            </form>
          </div> <!-- /#login-section -->
        </div>
      </div> <!-- /.container -->

      <!-- footer -->
      <div class="container-fluid">
        <footer class="row navbar navbar-fixed-bottom" id="footer-main">
          <!-- <div class="container-fluid"> -->
            <!-- <hr class="hr-white"> -->
            <div class="col-md-4">
              <p class="copyright">&copy; 2016 tanyakost.com</p>
            </div>
            <div class="col-md-4 col-md-offset-4">
              <nav class="hidden-xs">
                <a href="#"><i class="fa fa-facebook-square"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
              </nav>
            </div>
          <!-- </div> -->
        </footer>
      </div>
      <!-- /footer -->
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
