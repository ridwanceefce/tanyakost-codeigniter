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
    <link href="<?= base_url('assets/css/kosts-show.css') ?>" rel="stylesheet">
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

    <header>
      <?php $this->load->view('layouts/navbar-main'); ?>
    </header>

      <div class="container-fluid">
          <div class="row pd-rl-5">
              <div class="col-md-9 pd-rl-5">
                <div class="col-md-12" id="konten-show">
                  <h2>Detail kost - nusa indah 2</h2>
                  <hr class="hr-bio mg-tb-10">
                  <p class="time">2 minggu lalu</p>
                  <div class="col-md-8 pd-rl-5" id="photo">
                    <div class="thumbnail">
                      <img src="<?= base_url('assets/images/kosts/sampel-kost-1.jpg') ?>" class="img-responsive" alt="Foto Kost ">
                    </div>
                  </div>
                  <div class="col-md-4 pd-rl-5" id="description">
                    <ul class="nav nav-tabs">
                      <li class="active">
                        <a data-toggle="tab" href="#deskripsi">Deskripsi</a>
                      </li>
                      <li>
                        <a data-toggle="tab" href="#fasilitas">Fasilitas</a>
                      </li>
                      <li>
                        <a data-toggle="tab" href="#harga">Harga</a>
                      </li>
                    </ul>
                    <div class="tab-content">
                      <div id="deskripsi" class="tab-pane fade in active">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae deleniti itaque aliquam eveniet aperiam debitis quos excepturi. Maiores cum in enim explicabo architecto et, dolores fugit magnam numquam blanditiis, sapiente.</p>
                      </div>
                      <div id="fasilitas" class="tab-pane fade">
                        <ul>
                          <li>Lemari</li>
                        </ul>
                      </div>
                      <div id="harga" class="tab-pane fade">
                        <p>Rp. 300.000,00 / bulan</p>
                      </div>
                    </div> <!-- /.tab-content -->
                  </div>
                </div>                  
              </div>
              <div class="col-md-3 pd-rl-5">
                  <div class="col-md-12" id="bio-show">
                    <h2>Pemilik kost</h2>
                    <hr class="hr-bio mg-tb-10">
                    <div class="bio-head">
                      <img src="<?= base_url('assets/images/pemilik/photo_400x400.jpg') ?>" class="img-responsive img-circle" alt="">
                      <p class="nama-pemilik">Ridwan Nugroho</p>
                      <p class="since">Member sejak Apr 2015</p>
                    </div>
                    <hr class="hr-bio mg-tb-10">
                    <div class="bio-contact">
                      <p>
                        <i class="fa fa-map-marker" aria-hidden="true"></i> 
                        Jl. Nusa Indah, No. 25, <br> Condongcatur, Depok, Sleman, Yogyakarta 
                      </p>
                      <p>
                        <i class="fa fa-phone" aria-hidden="true"></i> 
                        +62 857 1234 6787
                      </p>
                    </div>
                    <hr class="hr-bio mg-tb-10">
                    <div class="bio-message">
                      <form>
                        <label>Hubungi pemilik kost</label>
                        <textarea name="pesan" id="pesan-user" class="form-control" rows="5" placeholder="Tuliskan pesan Anda ..."></textarea>
                        <input type="text" name="email" id="email-user" class="form-control" placeholder="isikan email Anda ...">
                        <button type="submit" class="btn btn-block" id="kirim-pesan">Kirim pesan</button>
                      </form>
                    </div>
                  </div>
              </div>
          </div>
      </div> <!-- /.container-fluid -->

      <!-- footer -->
      <div class="container-fluid">
        <?php $this->load->view('layouts/footer-main'); ?>
      </div>
      <!-- /footer -->
  </body>
</html>
