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
    <link href="<?= base_url('assets/css/user-kost-input.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/admin-bio.css') ?>"> 
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
              <h3><i class="fa fa-list-alt" aria-hidden="true"></i> Form Ubah Kost</h3>
              <hr class="hr-primary">
              <form>
                <div class="row">
                  <div class="col-md-8">
                    <div id="user-pribadi" class="panel panel-default">
                      <div class="panel-heading">
                        <h4>Data Kost</h4>
                      </div>
                      <div class="panel-body">
                        <label>Nama Kost</label>
                        <input type="text" name="nama-kost" id="nama-kost" class="form-control mg-b-1em">
                        <span id="help-nama-user" class="help-block"><i class="fa fa-question-circle" aria-hidden="true"></i> nama lengkap akan ditampilkan pada detail iklan kost.</span>
                        <label>Jenis Kost</label>
                        <select name="jenis-kost" id="jenis-kost" class="form-control mg-b-1em">
                          <option value="">Putra</option>
                          <option value="">Putri</option>
                          <option value="">Pasutri</option>
                        </select>
                        <label>Tipe Kost</label>
                        <select name="tipe-kost" id="tipe-kost" class="form-control mg-b-1em">
                          <option value="bulanan">Harian</option>
                          <option value="bulanan">Mingguan</option>
                          <option value="bulanan">Bulanan</option>
                          <option value="tahunan">Tahunan</option>
                        </select>
                        <label>Harga</label>
                        <div class="input-group">
                          <span class="input-group-addon">Rp.</span>
                          <input type="text" id="harga-kost" class="form-control mg-b-1em">
                        </div>
                      </div>
                    </div> <!-- /#user-pribadi -->
                    <div id="user-alamat" class="panel panel-default">
                      <div class="panel-heading">
                        <h4>Alamat kost</h4>
                      </div>
                      <div class="panel-body">
                      <label>Provinsi</label>
                      <select name="provinsi" id="provinsi" class="form-control mg-b-1em">
                        <option value="">D.I. Yogyakarta</option>
                      </select>
                      <label>Kabupaten / Kota</label>
                      <select name="kota" id="kota" class="form-control mg-b-1em">
                        <option value="">Sleman</option>
                      </select>
                      <label>Kecamatan</label>
                      <select name="kecamatan" id="kecamatan" class="form-control mg-b-1em">
                        <option value="">Depok</option>
                      </select>
                        <label>Jalan</label>
                        <input type="text" name="jalan-user" class="form-control" placeholder="nama jalan lengkap">
                        <span class="help-block"><i class="fa fa-question-circle" aria-hidden="true"></i> contoh: Jl. Nusa Indah, No. 4, Condongcatur</span>
                      </div> 
                    </div> <!-- /#user-alamat -->
                    <div id="kost-deskripsi" class="panel panel-default">
                      <div class="panel-heading">
                        <h4>Deskripsi Kost</h4>
                      </div>
                      <div class="panel-body">
                      <textarea name="deskripsi-kost" id="deskripsi-kost" rows="10" class="form-control"></textarea>
                      <span class="help-block">
                        <i class="fa fa-question-circle" aria-hidden="true"></i> 
                        Isikan deskripsi lengkap kost (contoh: peraturan, kondisi lingkungan sekitar kost)
                      </span>
                      </div>
                    </div>
                    <div id="user-contact" class="panel panel-default">
                        <div class="panel-heading">
                          <h4>Fasilitas kost</h4>
                        </div>
                        <div class="panel-body">
                          <textarea name="fasilitas" id="fasilitas" class="form-control"
                           placeholder="contoh: kamar mandi dalam, lemari, tempat tidur"></textarea>
                          <span class="help-block">
                            <i class="fa fa-question-circle" aria-hidden="true"></i> 
                            Dipisahkan dengan koma ( , )
                          </span>
                        </div>
                    </div> <!-- /#user-contact -->
                  </div>
                  <div class="col-md-4">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4>Upload Foto Kost</h4>
                      </div>
                      <div class="panel-body  pd-rl-10">
                        <div class="thumbnail">
                          <img src="<?= base_url('assets/images/kosts/default.png') ?>" alt="">
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
                      <button type="submit" class="btn btn-success">Tambah kost</button>
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
      <?php $this->load->view('layouts/footer-main') ?>
    </div>
    <!-- /footer -->
  </body>
</html>
