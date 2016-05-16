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
    <link href="<?= base_url('assets/css/user-profil-ubah.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/navbar-main.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/admin-bio.css') ?>"> 
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
              <?php $this->load->view('admin/layouts/admin_bio') ?>
            </div>
            <div class="col-md-10 col-sm-8 pd-rl-5" >
              <div class="col-md-12" id="profil-konten">
                <h3><i class="fa fa-user" aria-hidden="true"></i>  Update Data Profil</h3>
                <hr class="hr-primary">
                <form>
                  <div class="row">
                    <div class="col-md-8">
                      <div id="user-pribadi" class="panel panel-default">
                        <div class="panel-heading">
                          <h4>Data pribadi</h4>
                        </div>
                        <div class="panel-body">
                          <label>Nama Lengkap</label>
                          <input type="text" name="user-name" name="user-name" id="user-name" class="form-control">
                          <span id="help-nama-user" class="help-block"><i class="fa fa-question-circle" aria-hidden="true"></i> nama lengkap akan ditampilkan pada detail iklan kost.</span>

                          <label>Nomor Telepon</label>
                          <input type="text" name="telp-user" id="telp-user" class="form-control">
                          <span id="help-telp-user" class="help-block"><i class="fa fa-question-circle" aria-hidden="true"></i> nomor telepon akan ditampilkan pada detail iklan kost.</span>
                        </div>
                      </div> <!-- /#user-pribadi -->
                      <div id="user-contact" class="panel panel-default">
                        <div class="panel-heading">
                          <h4>Data Akun</h4>
                        </div>
                        <div class="panel-body">
                          <label>Alamat email</label>
                          <input type="email" name="email-user" id="email-user" class="form-control">

                          <label>Password</label>
                          <input type="password" name="password-user" id="password-user" class="form-control">
                        </div>
                      </div> <!-- /#user-contact -->
                    </div>
                    <div class="col-md-4">
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4>Upload Foto</h4>
                        </div>
                        <div class="panel-body  pd-rl-10">
                          <div class="thumbnail">
                            <img src="<?= base_url('assets/images/admin/photo_400x400.jpg') ?>" alt="">
                          </div>
                          <div class="col-md-8 col-sm-8 col-xs-8 pd-rl-5">
                            <input type="hidden" name="postersaatini" value="">
                            <input id="uploadFile" class="form-control" placeholder="Nama File" disabled="disabled" />
                          </div>
                          <div class="file-upload btn btn-info col-md-4 col-sm-4 col-xs-4">
                            <span><b>Pilih foto</b></span>
                            <input type="file" class="upload">
                          </div>
                        </div>
                      </div>
                    </div> <!-- /.col-md-4 upload foto -->
                  </div>
                  <div class="row">
                    <div class="col-md-8">
                    <div id="action" class="panel panel-default">
                      <div class="panel-heading">
                        <h4>Action</h4>
                      </div>
                      <div class="panel-body">
                        <button type="submit" class="btn btn-success">Perbaharui Profil</button>
                        <button type="reset" class="btn btn-danger">Batal</button>
                      </div>
                    </div><!--  /#action -->
                    <!-- <div class="clearfix"></div> -->
                    </div>
                  </div>
                </form>
              </div>  <!-- /#profil-konten -->
            </div>
          </div>
        </div>
      </div>

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
  </body>
</html>
