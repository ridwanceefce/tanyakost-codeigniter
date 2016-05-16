      <div class="navbar navbar-default navbar-fixed-top" id="navbar-main">
        <div class="container-fluid">

          <div class="navbar-header">
            <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
            <button class="navbar-toggle collapsed" id="hamburger" data-target=".navigasi-welcome" data-toggle="collapse" type="button" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

            <a href="<?= base_url() ?>" class="navbar-brand">
              <img src="<?= base_url('assets/images/logo-takos-navbar-1.svg') ?>" class="img-responsive hidden-xs logo-md" alt="Logo Tanyakost" >
              <img src="<?= base_url('assets/images/logo-takos.svg') ?>" class="img-responsive visible-xs logo-xs" alt="Logo Tanyakost" >
            </a>
          </div>

            <div class="navbar-collapse collapse navigasi-welcome">
              <div class="container-fluid">
                <ul class="nav navbar-nav navbar-right" id="nav-welcome">
                  <li><a href="<?= base_url() ?>">Home</a></li>
                  <li><a href="#">About us</a></li>
                  <li><a href="#">Contact us</a></li>
                  <li role="separator" class="divider"></li>
                  <li class="active"><a href="<?= base_url('login-user') ?>">Login</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>