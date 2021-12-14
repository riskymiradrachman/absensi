<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="blue" data-background-color="white" data-image="../assets/img/header.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger "

        Tip 2: you can also add an image using data-image tag
    -->

      <div class="logo"><a href="#" class="simple-text logo-normal">
          Admin Absensi
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <i class="material-icons">dashboard</i> Daftar Hadir
            </a>
            <div class="dropdown-menu dropdown-with-icons">
              <a href="<?= base_url('admin') ?>" class="dropdown-item">
                <i class="material-icons">content_paste</i> Hari Ini
              </a>
              <a href="<?= base_url('admin/tanggal') ?>" class="dropdown-item">
                <i class="material-icons">content_paste</i> Tanggal lainnya
              </a>
            </div>
          </li>
          <li class="nav-item active-color ">
            <a class="nav-link" href="<?= base_url('admin/pengaturan'); ?>">
              <i class="material-icons">settings</i>
              <p>Pengaturan</p>
            </a>
          </li>
          <!-- Nav Item - Pages Collapse Menu -->
          <li class="dropdown nav-item active">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <i class="material-icons">content_paste</i> Berdasarkan Kriteria
            </a>
            <div class="dropdown-menu dropdown-with-icons">
              <a href="<?= base_url('admin/ortu') ?>" class="dropdown-item">
                <i class="material-icons">layers</i> Umur 50 Tahun Ke Atas
              </a>
              <a href="<?= base_url('admin/sakit') ?>" class="dropdown-item">
                <i class="material-icons">sick</i> Sakit
              </a>
              <a href="#" class="dropdown-item">
                <i class="material-icons">messages</i> Izin
              </a>
            </div>
          </li>
          <li class="nav-item active-color ">
            <a class="nav-link" href="<?= base_url('admin/pegawai'); ?>">
              <i class="material-icons">library_books</i>
              <p>Daftar Pegawai</p>
            </a>
          </li>
          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <i class="material-icons">bubble_chart</i> Lainnya
            </a>
            <div class="dropdown-menu dropdown-with-icons">
              <a href="<?= base_url('admin/gnt_pass'); ?>" class="dropdown-item">
                Ganti Password
              </a>
              <a href="<?= base_url('auth/logout'); ?>" class="dropdown-item">
                Keluar
              </a>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Beranda</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i></a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="<?= base_url('admin/gnt_pass') ?>">
                    Ganti Password
                  </a>
                  <a class="dropdown-item" href="login.html" data-toggle="modal" data-target="#logoutModal">
                    Keluar
                  </a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <!-- Logout Modal-->
      <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Apakah Anda Ingin Keluar?</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal" aria-label="Close">Batal</button>
              <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Keluar</a>
            </div>
          </div>
        </div>
      </div>

      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Daftar Izin</h4>
                  <p class="card-category"> </p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary" align="center">
                        <th>
                          NIP
                        </th>
                        <th>
                          Nama
                        </th>
                        <th>
                          Umur
                        </th>
                        <th>
                          Jam
                        </th>
                        <th>
                          Status
                        </th>
                        <th>
                          Keterangan
                        </th>
                        <th>
                          Tanggal
                        </th>
                      </thead>
                      <tbody>
                        <?php foreach ($user as $u) : ?>
                          <tr align="center">
                            <td>
                              <?= $u->nip; ?>
                            </td>
                            <td>
                              <?= $u->nama; ?>
                            </td>
                            <td>
                              <?= $u->umur; ?>
                            </td>
                            <td>
                              <?= $u->jam; ?>
                            </td>
                            <td>
                              <?= $u->status; ?>
                            </td>
                            <td>
                              <?= $u->keterangan; ?>
                            </td>
                            <td>
                              <?= $u->tanggal; ?>
                            </td>
                          </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="places-buttons">
                <div class="row">
                  <div class="col-lg-8 col-md-10 ml-auto">
                    <div class="row">
                      <div class="col-md-4">
                        <button class="btn btn-warning btn-sm" type="button">
                          <i class="fa fa-download"></i>
                          <a type="submit" href="<?= base_url('admin/excel_izin') ?>">Cetak Dokumen</a>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>