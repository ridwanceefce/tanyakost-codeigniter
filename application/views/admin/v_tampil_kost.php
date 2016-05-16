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
    <meta name="msapplication-TileImage" content="images/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <title><?php echo $judul ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/admin-profil.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/admin-bio.css') ?>"> 
    <!-- load style untuk bagian admin-bio -->
    <link rel="stylesheet" href="<?= base_url('assets/css/navbar-main.css') ?>">
    <link href="<?= base_url('assets/css/normalize.css') ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?= base_url('assets/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,500,700,300' rel='stylesheet' type='text/css'>
  
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
              <?php $this->load->view('admin/layouts/admin_bio') ?>
            </div>

            <div class="col-md-10 col-sm-8 pd-rl-5" >
              <div class="col-md-12" id="profil-konten">

                <div class="konten-kost ">
                  <div class="konten-head clearfix">
                    <h3><i class="fa fa-home" aria-hidden="true"></i>Semua Kost</h3>
                  </div>
                  <hr class="hr-primary mg-tb-10">
                  <div id="kosts-list" class="col-md-12">
                    <div class="row">
                    <?php foreach ($kosts as $k): ?>
                      <div class="col-md-3 col-sm-6 col-xs-12 pd-rl-5 mg-tb-10">
                        <div class="kost-item thumbnail">
                          <p class="mg-tb-10"><?= $k->nama_kost ?></p>
                          <img src="<?= base_url('assets/images/kosts/$k->') ?>" class="image-responsive" alt="">
                          <div class="box">
                            <div class="col-md-12">
                              <div class="row kost-label">
                                <!-- <p class=""><b>Rp.</b> 300k / bulan</p> -->
                                <!-- <p class="since">1 minggu yang lalu</p> -->
                                <a href="#" class="btn btn-primary btn-xs">Ubah</a>
                                <a href="#" class="btn btn-danger btn-xs">Hapus</a>
                              </div>  <!-- /.kost-label -->
                            </div>
                          </div> <!-- /.box -->
                        </div> <!-- /.kost-item -->
                      </div>
                    <?php endforeach; ?>

                    </div>
                  </div> <!-- /#kost-list -->
                </div> <!-- /.konten-kost -->

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
