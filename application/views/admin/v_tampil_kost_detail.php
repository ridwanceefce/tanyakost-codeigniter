<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <?php $this->load->view('layouts/favico'); ?>
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="images/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <title><?php echo $judul ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?= base_url('assets/css/admin-kost.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/admin-bio.css') ?>"> 
    <!-- load style untuk bagian admin-bio -->
    <link rel="stylesheet" href="<?= base_url('assets/css/navbar-main.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/normalize.css') ?>">

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

    <header class="container-fluid">
      <?php $this->load->view('layouts/navbar-main') ?>
    </header>

      <div class="container-fluid">
        <div class="row">
          <div class="" id="main-profil">
            <div class="col-md-2 col-sm-4 pd-rl-5" >
              <?php $this->load->view('admin/layouts/admin_bio'); ?>
            </div>

            <div class="col-md-10 col-sm-8 pd-rl-5" >
              <div class="col-md-12" id="profil-konten">
                <div id="tampil-kost" class="col-md-12">
                  <a href="<?= base_url('admin/'.$admin['id'].'/kost-user') ?>" class="btn btn-danger mg-tb-10">TAMPILKAN SEMUA KOST</a>
                  <div class="kost-item">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h3>Kost #<?= $kost['id_kost'] ?></h3>
                      </div>
                      <div class="panel-body">
                        <div id="kost-bio" class="col-md-8">
                          <div id="kost-name">
                            <h5>Nama Kost</h5>
                            <div class="well">
                              <p><?= $kost['nama_kost'] ?></p>
                            </div>
                          </div>
                          <div id="kost-tipe">
                            <h5>Tipe Kost</h5>
                            <div class="well">
                              <p><?= $kost['tipe_kost'] ?></p>
                            </div>
                          </div>
                          <div id="kost-jenis">
                            <h5>Jenis Kost</h5>
                            <div class="well">
                              <p><?= $kost['jenis_kost'] ?></p>
                            </div>
                          </div>
                          <div id="kost-harga">
                            <h5>Harga</h5>
                            <div class="well">
                              <p><?= $kost['harga'] ?></p>
                            </div>
                          </div>
                          <div id="kost-alamat">
                            <h5>Alamat Lengkap</h5>
                            <div class="well">
                              <p>Jl. Nusa Indah, No. 4, Condongcatur, Depok, Sleman, D.I. Yogyakarta</p>
                            </div>
                          </div>
                          <div id="kost-fasilitas">
                            <h5>Fasilitas Kost</h5>
                            <div class="well">
                              <p><?= $kost['fasilitas'] ?></p>
                            </div>
                          </div>
                          <div id="kost-pemilik">
                            <h5>Pemilik Kost</h5>
                            <div class="well">
                              <p><?= $kost['id_user'] ?></p>
                            </div>
                          </div>
                        </div>
                        <div id="user-foto" class="col-md-4">
                          <div class="thumbnail">
                            <img src="<?= base_url('assets/images/kosts/sampel-kost-1.jpg') ?>" alt="">
                          </div>
                        </div>
                      </div>
                      <div class="panel-footer">
                        <a href="#" class="btn btn-success">Perbaharui Kost</a>
                        <a href="#" class="btn btn-danger">Hapus Kost</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>  <!-- /#profil-konten -->
            </div>
          </div> <!-- /#main-profil -->
        </div>
      </div> <!-- /.container-fluid -->

      <!-- footer -->
      <div class="container-fluid">
        <footer class="row" id="footer-main">
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
