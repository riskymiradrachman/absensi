<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="blue" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
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
          <li class="nav-item active">
            <a class="nav-link" href="#">
              <i class="material-icons">settings</i>
              <p>Pengaturan Waktu</p>
            </a>
          </li>
          <!-- Nav Item - Pages Collapse Menu -->
          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <i class="material-icons">content_paste</i> Berdasarkan Kriteria
            </a>
            <div class="dropdown-menu dropdown-with-icons">
              <a href="<?= base_url('admin/ortu'); ?>" class="dropdown-item">
                <i class="material-icons">layers</i> Umur 50 Tahun Ke Atas
              </a>
              <a href="<?= base_url('admin/sakit'); ?>" class="dropdown-item">
                <i class="material-icons">sick</i> Sakit
              </a>
              <a href="<?= base_url('admin/izin'); ?>" class="dropdown-item">
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
            <h2 class="navbar-brand" href="javascript:;">Pengaturan</h2>
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
                  <i class="material-icons">person</i>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="<?= base_url('admin/gnt_pass') ?>">
                    <i class="fas fa-key fa-sm fa-fw mr-2 text-gray-400"></i>
                    Ganti Password
                  </a>
                  <a class="dropdown-item" href="login.html" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Keluar
                  </a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="main-panel">
        <!-- Navbar -->
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
        <!-- End Navbar -->
        <div class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-8">

                <?php
                date_default_timezone_set("Asia/Kuala_lumpur");
                foreach ($user as $u) { ?>
                  <form action="<?= base_url('admin/edit_pengaturan'); ?>" method="post">
                    <div class="card">
                      <div class="card-header card-header-primary">
                        <h3 class="card-title">Pengaturan Waktu Absensi Pagi</h3>
                        <p class="card-category"></p>
                      </div>
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <table>
                                <tr>
                                  <td>
                                    <input type="hidden" name="id" value="<?= $u->id ?>">
                                  </td>
                                </tr>
                                <tr>
                                  <div class="col-md-1">
                                    <td class="bmd-label-floating">Absen Dibuka
                                    </td>
                                    <td style="width: 1000px;">
                                      <input type="number" name="h" value="<?= $u->h ?>" style="width: 40px;">
                                      : <input type="number" name="m" value="<?= $u->m ?>" style="width: 40px;">
                                      : <input type="number" name="s" value="<?= $u->s ?>" style="width: 40px;">
                                    </td>
                                  </div>
                                </tr>
                                <tr>
                                  <td class="bmd-label-floating">Batas Hadir
                                  </td>
                                  <td style="width: 1000px;">
                                    <input type="number" name="h_telat_pagi" value="<?= $u->h_telat_pagi ?>" style="width: 40px;">
                                    : <input type="number" name="m_telat_pagi" value="<?= $u->m_telat_pagi ?>" style="width: 40px;">
                                    : <input type="number" name="s_telat_pagi" value="<?= $u->s_telat_pagi ?>" style="width: 40px;">
                                  </td>
                                </tr>

                                <tr>
                                  <td class="bmd-label-floating">Absen Ditutup
                                  </td>
                                  <td style="width: 1000px;">

                                    <input type="number" name="h_tutup_pagi" value="<?= $u->h_tutup_pagi ?>" style="width: 40px;">
                                    : <input type="number" name="m_tutup_pagi" value="<?= $u->m_tutup_pagi ?>" style="width: 40px;">
                                    : <input type="number" name="s_tutup_pagi" value="<?= $u->s_tutup_pagi ?>" style="width: 40px;">
                                  </td>
                                </tr>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="card">
                      <div class="card-header card-header-primary">
                        <h3 class="card-title">Pengaturan Waktu Absensi Siang</h3>
                        <p class="card-category"></p>
                      </div>
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <table>
                                <tr>
                                  <td>
                                    <input type="hidden" name="id" value="<?= $u->id ?>">
                                  </td>
                                </tr>
                                <tr>
                                  <div class="col-md-1">
                                    <td class="bmd-label-floating">Absen Dibuka
                                    </td>
                                    <td style="width: 1000px;">
                                      <input type="number" name="h_siang" value="<?= $u->h_siang ?>" style="width: 40px;">
                                      : <input type="number" name="m_siang" value="<?= $u->m_siang ?>" style="width: 40px;">
                                      : <input type="number" name="s_siang" value="<?= $u->s_siang ?>" style="width: 40px;">
                                    </td>
                                  </div>
                                </tr>
                                <tr>
                                  <td class="bmd-label-floating">Batas Hadir
                                  </td>
                                  <td style="width: 1000px;">
                                    <input type="number" name="h_telat_siang" value="<?= $u->h_telat_siang ?>" style="width: 40px;">
                                    : <input type="number" name="m_telat_siang" value="<?= $u->m_telat_siang ?>" style="width: 40px;">
                                    : <input type="number" name="s_telat_siang" value="<?= $u->s_telat_siang ?>" style="width: 40px;">
                                  </td>
                                </tr>

                                <tr>
                                  <td class="bmd-label-floating">Absen Ditutup
                                  </td>
                                  <td style="width: 1000px;">

                                    <input type="number" name="h_tutup_siang" value="<?= $u->h_tutup_siang ?>" style="width: 40px;">
                                    : <input type="number" name="m_tutup_siang" value="<?= $u->m_tutup_siang ?>" style="width: 40px;">
                                    : <input type="number" name="s_tutup_siang" value="<?= $u->s_tutup_siang ?>" style="width: 40px;">
                                  </td>
                                </tr>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="card">
                      <div class="card-header card-header-primary">
                        <h3 class="card-title">Pengaturan Waktu Absensi Sore</h3>
                        <p class="card-category"></p>
                      </div>
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <table>
                                <tr>
                                  <td>
                                    <input type="hidden" name="id" value="<?= $u->id ?>">
                                  </td>
                                </tr>
                                <tr>
                                  <div class="col-md-1">
                                    <td class="bmd-label-floating">Absen Dibuka
                                    </td>
                                    <td style="width: 1000px;">
                                      <input type="number" name="h_sore" value="<?= $u->h_sore ?>" style="width: 40px;">
                                      : <input type="number" name="m_sore" value="<?= $u->m_sore ?>" style="width: 40px;">
                                      : <input type="number" name="s_sore" value="<?= $u->s_sore ?>" style="width: 40px;">
                                    </td>
                                  </div>
                                </tr>
                                <tr>
                                  <td class="bmd-label-floating">Batas Hadir
                                  </td>
                                  <td style="width: 1000px;">
                                    <input type="number" name="h_telat_sore" value="<?= $u->h_telat_sore ?>" style="width: 40px;">
                                    : <input type="number" name="m_telat_sore" value="<?= $u->m_telat_sore ?>" style="width: 40px;">
                                    : <input type="number" name="s_telat_sore" value="<?= $u->s_telat_sore ?>" style="width: 40px;">
                                  </td>
                                </tr>

                                <tr>
                                  <td class="bmd-label-floating">Absen Ditutup
                                  </td>
                                  <td style="width: 1000px;">

                                    <input type="number" name="h_tutup_sore" value="<?= $u->h_tutup_sore ?>" style="width: 40px;">
                                    : <input type="number" name="m_tutup_sore" value="<?= $u->m_tutup_sore ?>" style="width: 40px;">
                                    : <input type="number" name="s_tutup_sore" value="<?= $u->s_tutup_sore ?>" style="width: 40px;">
                                  </td>
                                </tr>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <button type="submit" class="btn btn-primary pull-right" value="tambah">Simpan</button>
                  </form>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>