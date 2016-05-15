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
    <meta name="theme-color" content="#ffffff">

    <title><?php echo $judul ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?= base_url('assets/css/admin-profil.css') ?>" rel="stylesheet">
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
              <?php $this->load->view('admin/layouts/admin_bio'); ?>
            </div>

            <div class="col-md-10 col-sm-8 pd-rl-5" >
              <div class="col-md-12" id="profil-konten">
              
                <div class="konten-user">
                  <div class="konten-head clearfix">
                    <h3 class="clearfix"><i class="fa fa-user" aria-hidden="true"></i>User baru</h3>
                  </div>
                  <hr class="hr-primary mg-tb-10">
                  <div id="users-list" class="clearfix">
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th width="5%">#</th>
                            <th width="25%">Nama</th>
                            <th width="30%">Email</th>
                            <th width="">Tanggal Registrasi</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>Miral Achmed</td>
                            <td>miral.achmed@gmail.com</td>
                            <td>05-12-2016 15:00:45</td>
                            <td>
                              <a href="#" class="btn btn-primary btn-xs">detail</a>
                              <a href="#" class="btn btn-danger btn-xs">hapus</a>
                            </td>
                          </tr>
                          <tr>
                            <td>1</td>
                            <td>Miral Achmed</td>
                            <td>miral.achmed@gmail.com</td>
                            <td>05-12-2016 15:00:45</td>
                            <td>
                              <a href="#" class="btn btn-primary btn-xs">baca</a>
                              <a href="#" class="btn btn-danger btn-xs">hapus</a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div> <!-- /.konten-user -->

                <div class="konten-kost ">
                  <div class="konten-head clearfix">
                    <h3><i class="fa fa-home" aria-hidden="true"></i>Kost baru</h3>
                  </div>
                  <hr class="hr-primary mg-tb-10">
                  <div id="kosts-list" class="col-md-12">
                    <div class="row">
                      <div class="col-md-3 col-sm-6 col-xs-12 pd-rl-5 mg-tb-10">
                        <div class="kost-item thumbnail">
                          <img src="<?= base_url('assets/images/sampel-kost-1.jpg') ?>" class="image-responsive" alt="">
                          <div class="box">
                            <div class="col-md-12">
                              <div class="row kost-label">
                                <!-- <p class=""><b>Rp.</b> 300k / bulan</p> -->
                                <!-- <p class="since">1 minggu yang lalu</p> -->
                                <a href="#" class="btn btn-primary btn-sm btn-xs">Ubah</a>
                                <a href="#" class="btn btn-danger btn-sm btn-xs">Hapus</a>
                              </div>  <!-- /.kost-label -->
                            </div>
                          </div> <!-- /.box -->
                        </div> <!-- /.kost-item -->
                      </div>

                      <div class="col-md-3 col-sm-6 col-xs-12 pd-rl-5 mg-tb-10">
                        <div class="kost-item thumbnail">
                          <img src="<?= base_url('assets/images/sampel-kost-1.jpg') ?>" class="image-responsive" alt="">
                          <div class="box">
                            <div class="col-md-12">
                              <div class="row kost-label">
                                <!-- <p class=""><b>Rp.</b> 300k / bulan</p> -->
                                <!-- <p class="since">1 minggu yang lalu</p> -->
                                <a href="#" class="btn btn-primary btn-sm">Ubah</a>
                                <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                              </div>  <!-- /.kost-label -->
                            </div>
                          </div> <!-- /.box -->
                        </div> <!-- /.kost-item -->
                      </div>
                    </div>
                  </div> <!-- /#kost-list -->
                </div> <!-- /.konten-kost -->

                <div class="konten-pesan clearfix">
                  <div class="konten-head clearfix">
                    <h3><i class="fa fa-envelope" aria-hidden="true"></i> Pesan baru</h3>
                  </div>
                  <hr class="hr-primary mg-tb-10">
                  <div id="pesan-list">
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th width="5%">#</th>
                            <th width="20%">Pengirim</th>
                            <th width="45%">Isi pesan</th>
                            <th width="20%">Waktu</th>
                            <th width="10%"></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>sdf</td>
                            <td>sfads</td>
                            <td>besok</td>
                            <td>
                              <a href="#" class="btn btn-primary btn-xs">baca</a>
                              <a href="#" class="btn btn-danger btn-xs">hapus</a>
                            </td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td>sdf</td>
                            <td>sfads</td>
                            <td>sdfa</td>
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
