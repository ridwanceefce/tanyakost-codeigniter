<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <?php $this->load->view('layouts/favico') ?>
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <title><?php echo $judul ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/user-read-message.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/navbar-main.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/user-bio.css') ?>"> 
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
              <?php $this->load->view('user/layouts/user_bio') ?>
            </div>

            <div class="col-md-10 col-sm-8 pd-rl-5" >
              <div class="col-md-12" id="profil-konten">
                <div id="baca-pesan" class="col-md-12">
                  <a href="<?= base_url('user/'.$user['id_user'].'/pesan') ?>" class="btn btn-danger mg-tb-10">Tampilkan semua pesan</a>
                  <div class="pesan-item">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h3>Pesan #<?= $pesan['id'] ?></h3>
                      </div>
                      <div class="panel-body">
                        <div id="pengirim">
                          <h5>Pengirim</h5>
                          <div class="well">
                            <p><?= $pesan['pengirim'] ?></p>
                          </div>
                        </div>
                        <div id="waktu-kirim">
                          <h5>Waktu Pengiriman</h5>
                          <div class="well">
                            <p><?= $pesan['waktu_kirim'] ?></p>
                          </div>
                        </div>
                        <div id="isi" class="mg-tb-10">
                          <h5>Isi pesan</h5>
                          <div class="well">
                            <p><?= $pesan['isi'] ?></p>
                          </div>
                        </div><!--  /#isi -->
                      </div><!--  /.panel-body -->
                      <div class="panel-footer">
                        <button class="btn btn-success">Balas</button>
                        <button class="btn btn-danger">Hapus</button>
                      </div>
                    </div>
                  </div> <!-- /.pesan-item -->
                </div>
              </div>  <!-- /#profil-konten -->
            </div>
          </div> <!-- /#main-profil -->
        </div>
      </div> <!-- /.container-fluid -->

      <!-- footer -->
      <div class="container-fluid">
      <?php $this->load->view('layouts/footer-main') ?>
      </div>
      <!-- /footer -->
  </body>
</html>
