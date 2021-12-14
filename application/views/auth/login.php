<body class="login-page sidebar-collapse">
  <div class="page-header header-filter" style="background-image: url(<?= base_url('/assets/user/img/DSC_6922.JPG'); ?>); background-size: cover; background-position: top center;">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-md-6 ml-auto mr-auto">
          <div class="card card-login" style="margin-top: 80px;">
            <?= $this->session->flashdata('message'); ?>
            <form class="form" method="post" action="<?= base_url('auth'); ?>">
              <div class="card-header card-header-primary text-center" style="margin-top:10px;">
                <img src="<?php echo base_url('assets/user/img/logo.png') ?>" alt="logo" width="120px">
                <h4 class="card-title">Login</h4>
                <div class="social-line">
                </div>
              </div>

              <div class="card-body">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">account_circle</i>
                    </span>
                  </div>
                  <input type="text" class="form-control" name="nip" id="nip" placeholder="NIP..." value="<?= set_value('nip'); ?>" autocomplete="off">
                </div>
                <?= form_error('nip', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="card-body">
                <?php
                date_default_timezone_set("Asia/Kuala_lumpur");
                $j = date('H');
                ?>
                <div class="input-group">
                  <input type="hidden" class="form-control" name="jam" id="jam" value="<?= $j ?>" required>
                  <input type="hidden" class="form-control" name="menit" id="menit" value="<?= date('i'); ?>" required>
                </div>
              </div>
              <div class="footer text-center">
                <button type="submit" class="btn btn-primary pull-center" style="margin-top:-35%;">Login</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>