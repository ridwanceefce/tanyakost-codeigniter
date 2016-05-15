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
    <link href="<?= base_url('assets/css/profil.css') ?>" rel="stylesheet">
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

    <header class="container-fluid">
      <?php $this->load->view('layouts/navbar-main') ?>
    </header>

      <div class="container-fluid">
        <div class="row">
          <div class="" id="main-profil">
            <div class="col-md-2 col-sm-4 pd-rl-5" >
              <div class="col-md-12" id="profil-bio">
                <div class="bio-head">
                  <img src="<?= base_url('assets/images/photo_400x400.jpg') ?>" class="img-responsive img-circle" alt="">
                  <div class="user-name-status">
                    <p class="user-name">Miral Achmed</p>
                    <p class="user-status">Pemilik Kost</p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <hr class="hr-primary">
                <div class="bio-control">
                  <!-- <button class="btn btn-tambah">tambah kost</button> -->
                  <a href="user-kost-input.html" class="btn btn-tambah">tambah kost</a>
                  <ul class="control">
                    <li class="active"><span><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</span></li>
                    <li><span><i class="fa fa-home" aria-hidden="true"></i> Kosts</span><span class="badge pull-right">1</span></li>
                    <li><span><i class="fa fa-envelope" aria-hidden="true"></i> Pesan</span><span class="badge pull-right">10</span></li>
                  </ul>
                </div> <!-- /.bio-control -->
                <hr class="hr-primary">
                <div class="settings">
                  <h3>Pengaturan</h3>
                  <ul class="profil-setting">
                    <li><a href="user-profil-ubah.html"><i class="fa fa-user" aria-hidden="true"></i>Ubah profil</a></li>
                    <li><span><i class="fa fa-sign-out" aria-hidden="true"></i>Log out</span></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-10 col-sm-8 pd-rl-5" >
              <div class="col-md-12" id="profil-konten">
                <div class="konten-head">
                  <h3><i class="fa fa-home" aria-hidden="true"></i>Kost saya</h3>
                </div>
                <hr class="hr-primary mg-tb-10">
                <div id="kosts-list" class="clearfix">
                  <div class="pd-rl-5 kost-item col-md-3 thumbnail">
                  <a href="kosts-show.html">
                    <img src="<?= base_url('assets/images/kosts/sampel-kost-1.jpg') ?>" class="image-responsive" alt="">
                    <div class="box">
                      <div class="col-md-12">
                        <div class="row kost-label">
                          <!-- <p class=""><b>Rp.</b> 300k / bulan</p> -->
                          <!-- <p class="since">1 minggu yang lalu</p> -->
                          <a href="form-ubah-kost.html" class="btn btn-primary btn-sm">Ubah</a>
                          <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                        </div>  <!-- /.kost-label -->
                      </div>
                    </div> <!-- /.box -->
                  </a>
                  </div> <!-- /.kost-item -->
                </div> <!-- /#kost-list -->
                <div class="konten-head">
                  <h3><i class="fa fa-envelope" aria-hidden="true"></i> Pesan saya</h3>
                </div>
                <hr class="hr-primary">
                <div id="pesan-list">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th width="5%">#</th>
                          <th width="20%" class="hidden-xs">Pengirim</th>
                          <th width="45%">Isi pesan</th>
                          <th width="20%" class="hidden-xs">Waktu</th>
                          <th width="10%"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td class="hidden-xs">sdf</td>
                          <td>sfads</td>
                          <td class="hidden-xs">besok</td>
                          <td>
                            <a href="#" class="btn btn-primary btn-xs">baca</a>
                            <a href="#" class="btn btn-danger btn-xs">hapus</a>
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td class="hidden-xs">sdf</td>
                          <td>sfads</td>
                          <td class="hidden-xs">sdfa</td>
                          <td>
                            <a href="#" class="btn btn-primary btn-xs">baca</a>
                            <a href="#" class="btn btn-danger btn-xs">hapus</a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>  
            </div>
          </div>
        </div>
      </div>

      <!-- footer -->
      <div class="container-fluid">
        <?php $this->load->view('layouts/footer-main') ?>
      </div>
      <!-- /footer -->
  </body>
</html>
