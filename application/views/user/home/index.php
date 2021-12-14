<body class="index-page sidebar-collapse">
  <script type="text/javascript">
    function EnableDisableTextBox() {
      var izin = document.getElementById("izin");
      var keterangan = document.getElementById("keterangan");
      keterangan.disabled = izin.checked ? false : true;
      if (!keterangan.disabled) {
        keterangan.focus();
      }
    }
    window.setTimeout("waktu()", 1000);

    function waktu() {
      var waktu = new Date();
      setTimeout("waktu()", 1000);
      document.getElementById("jam").innerHTML = waktu.getHours();
      document.getElementById("menit").innerHTML = waktu.getMinutes();
      document.getElementById("detik").innerHTML = waktu.getSeconds();
    }
  </script>
  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="#">
          Absensi Bappeda Sultra </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <i class="material-icons">person</i> <?= $user['nama']; ?>
            </a>
            <div class="dropdown-menu dropdown-with-icons">
              <a href="<?= base_url('user_login/profil'); ?>" class="dropdown-item">
                <i class="material-icons">person</i> Profil
              </a>
              <a href="<?= base_url('auth/logout'); ?>" class="dropdown-item">
                <i class="material-icons">close</i> Logout
              </a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="page-header header-filter clear-filter blue-filter" data-parallax="true" style="background-image: url(<?= base_url('assets/user/img/DSC_6922.JPG') ?>);">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto">
          <div class="brand">
            <img src="<?= base_url('assets/user/img//logo.png') ?>" alt="logo" style="width: 220px;height: 200px;"><br>
            <h1>BAPPEDA</h1>
            <h3>Provinsi Sulawesi Tenggara</h3>
          </div>
        </div>
      </div>
    </div>
  </div>