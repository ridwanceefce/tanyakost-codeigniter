              <div class="col-md-12" id="profil-bio">
                <div class="bio-head">
                  <img src="<?= base_url('assets/images/photo_400x400.jpg') ?>" class="img-responsive img-circle" alt="">
                  <div class="user-name-status">
                    <p class="user-name"><?= $user['nama'] ?></p>
                    <p class="user-status">Pemilik Kost</p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <hr class="hr-primary">
                <div class="bio-control">
                  <!-- <button class="btn btn-tambah">tambah kost</button> -->
                  <a href="<?= base_url('user/'.$user['id_user'].'/kost/tambah') ?>" class="btn btn-tambah">tambah kost</a>
                  <ul class="control">
                    <li><a href="<?= base_url('user/'.$user['id_user']) ?>"><span><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</span></a></li>
                    <li><a href="<?= base_url('user/'.$user['id_user'].'/kost') ?>"><span><i class="fa fa-home" aria-hidden="true"></i> Kosts</span><span class="badge pull-right">1</span></a></li>
                    <li><a href="<?= base_url('user/'.$user['id_user'].'/pesan') ?>"><span><i class="fa fa-envelope" aria-hidden="true"></i> Pesan</span><span class="badge pull-right">10</span></a></li>
                  </ul>
                </div> <!-- /.bio-control -->
                <hr class="hr-primary">
                <div class="settings">
                  <h3>Pengaturan</h3>
                  <ul class="profil-setting">
                    <li><a href="<?= base_url('user/'.$user['id_user'].'/ubah') ?>"><i class="fa fa-user" aria-hidden="true"></i>Ubah profil</a></li>
                    <li><span><i class="fa fa-sign-out" aria-hidden="true"></i>Log out</span></li>
                  </ul>
                </div>
              </div>