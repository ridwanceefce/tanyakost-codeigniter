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
    <link href="<?= base_url('assets/css/admin-login.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/navbar-main.css') ?>">
    <link href="<?= base_url('assets/css/normalize.css') ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?= base_url('assets/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">
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
      <?php $this->load->view('layouts/navbar-main') ?>
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
                <a href="<?= base_url('admin/profile') ?>" class="btn" id="btn-login">Login</a>
                <p>belum punya akun? <a href="<?= base_url('registrasi') ?>">Daftar</a></p>
              </div>
            </form>
          </div> <!-- /#login-section -->
        </div>
      </div> <!-- /.container -->

    <!-- footer -->
    <div class="container-fluid">
      <?php $this->load->view('layouts/footer-main-fixed') ?>
    </div>
    <!-- /footer -->
  </body>
</html>
