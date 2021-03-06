 <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <?php $this->load->view('layouts/favico') ?> 
    <!-- mengload file favico pada folder layout, untuk mengurangi penulisan ulang -->
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="images/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <title><?php echo $judul ?></title>
    <!-- variabel $judul di ambil dari controller registrasi -->

    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?= base_url('assets/css/daftar.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/navbar-main.css') ?>">
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

    <header>
      <?php $this->load->view('layouts/navbar-main') ?>
    </header>

      <div class="container">
        <div class="col-md-6 col-md-offset-3">
          <div id="register-section" class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Registrasi</h3>
            </div>
            <form>
              <div class="panel-body">
                <label>Email</label>
                <input type="email" name="user-email" id="user-email" required class="form-control">
                <label>Password</label>
                <input type="password" name="user-password" id="user-password" class="form-control">
                <label>Konfirmasi password</label>
                <input type="password" name="user-passrowd-konfirm" id="user-password-konfirm" class="form-control">
              </div>
              <div class="panel-footer">
                <button type="submit" class="btn" id="btn-registrasi">Daftar</button>
              </div>
            </form>
          </div>
        </div>
      </div>

    <!-- footer -->
    <div class="container-fluid">
      <?php $this->load->view('layouts/footer-main-fixed') ?>      
    </div>
    <!-- /footer -->
  </body>
</html>
