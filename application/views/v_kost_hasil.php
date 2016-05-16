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
    <link href="<?= base_url('assets/css/kosts.css') ?>" rel="stylesheet">
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
        <div class="col-md-2 pd-rl-5" >
          <div class="col-md-12" id="filter">
            <h2>filter</h2>
            <hr class="hr-primary">
            <form>
              <div class="form-group">
                <label>Jenis Kost</label>
                <select name="jenis_kost" class="form-control" id="jenis-kost">
                  <option value="">Kost Putra</option>
                </select>
              </div>
              <div class="form-group">
                <label>Tipe Kost</label>
                <select name="jenis_kost" class="form-control" id="tipe-kost">
                  <option value="">Bulanan</option>
                </select>
              </div>
              <div class="form-group">
                <label>Range harga</label>
                <input type="text" id="harga-min" class="form-control" placeholder="Harga min">
                <input type="text" id="harga-max" class="form-control" placeholder="Harga max">
              </div>
              <div class="form-group">
                <label>provinsi</label>
                <select name="provinsi" class="form-control" id="provinsi">
                  <option value="">D.I Yogyakara</option>
                </select>
              </div>
              <div class="form-group">
                <label>Kota / Kabupaten</label>
                <select name="kota" class="form-control" id="kota">
                  <option value="">Sleman</option>
                </select>
              </div>
              <button class="btn btn-block" type="submit" id="cari-filter">Cari</button>
            </form>
          </div> <!-- /#filter -->
        </div>
        <div class="col-md-10 pd-rl-5" >
          <div class="col-md-12" id="konten">
            <h2>Hasil pencarian: <span>"Condongcatur"</span></h2>
            <hr class="hr-primary">
            <div id="kosts-list" class="clearfix">
              <div class="col-md-3 pd-rl-5">
                <a href="<?= base_url('cari/id') ?>">
                  <div class="kost-item thumbnail">
                    <img src="<?= base_url('assets/images/kosts/sampel-kost-1.jpg') ?>" class="image-responsive" alt="">
                    <div class="box">
                      <p><b>Rp.</b> 300k / bulan</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-md-3 pd-rl-5">
                <div class="kost-item thumbnail">
                  <img src="<?= base_url('assets/images/kosts/sampel-kost-1.jpg') ?>" class="image-responsive" alt="">
                  <div class="box">
                    <p><b>Rp.</b> 300k / bulan</p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 pd-rl-5">
                <div class="kost-item thumbnail">
                  <img src="<?= base_url('assets/images/kosts/sampel-kost-1.jpg') ?>" class="image-responsive" alt="">
                  <div class="box">
                    <p><b>Rp.</b> 300k / bulan</p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 pd-rl-5">
                <div class="kost-item thumbnail">
                  <img src="<?= base_url('assets/images/kosts/sampel-kost-1.jpg') ?>" class="image-responsive" alt="">
                  <div class="box">
                    <p><b>Rp.</b> 300k / bulan</p>
                  </div>
                </div>
              </div>
            </div> <!-- /#kost-list -->
          </div><!--  /#konten -->
        </div> <!-- /.col-md-10 -->
      </div> <!-- /row -->
    </div><!--  /container-fluid -->

    <!-- footer -->
    <div class="container-fluid">
      <?php $this->load->view('layouts/footer-main'); ?>
    </div>
    <!-- /footer -->
  </body>
</html>
