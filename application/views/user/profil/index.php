<body class="profile-page sidebar-collapse">
  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="<?= base_url('user_login/index'); ?>">
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
              <i class="material-icons">person</i> Profil
            </a>
            <div class="dropdown-menu dropdown-with-icons">
              <a href="#" class="dropdown-item">
                <i class="material-icons">person</i> Profil
              </a>
              <a href="<?= base_url('auth/logout'); ?>" class="dropdown-item">
                <i class="material-icons">close</i> logout
              </a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="<?= base_url('user_login/index'); ?>">
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
              <i class="material-icons">person</i> Profil
            </a>
            <div class="dropdown-menu dropdown-with-icons">
              <a href="#" class="dropdown-item">
                <i class="material-icons">person</i> Profil
              </a>
              <a href="<?= base_url('auth'); ?>" class="dropdown-item">
                <i class="material-icons">close</i> logout
              </a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="page-header header-filter" data-parallax="true" style="background-image: url(<?php echo base_url('assets/user/img/DSC_6922_1.JPG') ?>);"></div>
  <div class="main main-raised">
    <div class="profile-content">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto mr-auto">
            <div class="profile">
              <div class="avatar">
                <img src="<?= base_url('assets/user/img/user/') . $user['foto']; ?>" alt="Circle Image" class="img-raised rounded img-fluid">
              </div>
            </div>
          </div>
        </div>
        <?= $this->session->flashdata('edit'); ?>
        <div class="description text-justify">
          <h3 class="text-center">Profil</h3>
          <p>NIP : <?= $user['nip']; ?> </p><br>
          <p>Nama : <?= $user['nama']; ?> </p><br>
          <p>Bidang : <?= $user['bidang']; ?> </p><br>
          <p>Jabatan : <?= $user['jabatan']; ?> </p><br>
          <p>Umur : <?= $user['umur']; ?> </p><br>
        </div>
        <div id="buttons" class="cd-section">
          <div class="row">
            <div class="col-md-110 mx-auto">
              <button class="btn btn-info" data-toggle="modal" data-target="#editModal<?= $user['nip']; ?>">Edit</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="modal fade" id="editModal<?= $user['nip']; ?>" tabindex="-1" role="">
    <div class="modal-dialog modal-login" role="document">
      <div class="modal-content">
        <div class="card card-signup card-plain">
          <div class="modal-header">
          </div>
          <div class="modal-body">
            <form method="POST" action="<?= site_url('user_login/edit'); ?>">
              <p class="description text-center">Edit Profil</p>
              <div class="card-body">
                <div class="form-group bmd-form-group">
                  <div class="input-group">
                    <input type="hidden" class="form-control" name="nip" value="<?= $user['nip']; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Nama</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" name="nama" value="<?= $user['nama']; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput2">Umur</label>
                  <input type="text" class="form-control" id="exampleFormControlInput2" name="umur" value="<?= $user['umur']; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Bidang</label>
                  <select class="form-control" data-style="btn btn-link" id="exampleFormControlSelect1" name="bidang">
                    <option value="Ekonomi & Sumber Daya Alam" <?= $user['bidang'] == 'Ekonomi & Sumber Daya Alam' ? "selected='selected'" : "" ?>>Ekonomi & Sumber Daya Alam</option>
                    <option value="Infrastruktur & Pengembangan Wilayah" <?= $user['bidang'] == 'Infrastruktur & Pengembangan Wilayah' ? "selected='selected'" : "" ?>>Infrastruktur & Pengembangan Wilayah</option>
                    <option value="Pembangunan Manusia & Masyarakat" <?= $user['bidang'] == 'Pembangunan Manusia & Masyarakat' ? "selected='selected'" : "" ?>>Pembangunan Manusia & Masyarakat</option>
                    <option value="Perencanaan Makro" <?= $user['bidang'] == 'Perencanaan Makro' ? "selected='selected'" : "" ?>>Perencanaan Makro</option>
                    <option value="Sekretariat" <?= $user['bidang'] == 'Sekretariat' ? "selected='selected'" : "" ?>>Sekretariat</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect2">Jabatan</label>
                  <select class="form-control" data-style="btn btn-link" id="exampleFormControlSelect2" name="jabatan">
                    <option value="Kepala Bappeda Prov. Sultra" <?= $user['jabatan'] == 'Kepala Bappeda Prov. Sultra' ? "selected='selected'" : "" ?>>Kepala Bappeda Prov. Sultra</option>
                    <option value="Sekretaris Bappeda Prov. Sultra" <?= $user['jabatan'] == 'Sekretaris Bappeda Prov. Sultra' ? "selected='selected'" : "" ?>>Sekretaris Bappeda Prov. Sultra</option>
                    <option value="Kasubbag. Keuangan" <?= $user['jabatan'] == 'Kasubbag. Keuangan' ? "selected='selected'" : "" ?>>Kasubbag. Keuangan</option>
                    <option value="Kasubbag. Penyusunan Program" <?= $user['jabatan'] == 'Kasubbag. Penyusunan Program' ? "selected='selected'" : "" ?>>Kasubbag. Penyusunan Program</option>
                    <option value="Kasubbag. Umum dan Kepegawaian" <?= $user['jabatan'] == 'Kasubbag. Umum dan Kepegawaian' ? "selected='selected'" : "" ?>>Kasubbag. Umum dan Kepegawaian</option>
                    <option value="Fungsional Perenc." <?= $user['jabatan'] == 'Fungsional Perenc.' ? "selected='selected'" : "" ?>>Fungsional Perenc.</option>
                    <option value="Kabid. Ekonomi & Sumberdaya Alam" <?= $user['jabatan'] == 'Kabid. Ekonomi & Sumberdaya Alam' ? "selected='selected'" : "" ?>>Kabid. Ekonomi & Sumberdaya Alam</option>
                    <option value="Kabid. Infrastrukur & Pengembangan Wilayah" <?= $user['jabatan'] == 'Kabid. Infrastrukur & Pengembangan Wilayah' ? "selected='selected'" : "" ?>>Kabid. Infrastrukur & Pengembangan Wilayah</option>
                    <option value="Kabid. Pembangunan Manusia & Masyarakat" <?= $user['jabatan'] == 'Kabid. Pembangunan Manusia & Masyarakat' ? "selected='selected'" : "" ?>>Kabid. Pembangunan Manusia & Masyarakat</option>
                    <option value="Kabid. Perencanaan Makro" <?= $user['jabatan'] == 'Kabid. Perencanaan Makro' ? "selected='selected'" : "" ?>>Kabid. Perencanaan Makro</option>
                    <option value="Kasubid. Dunia Usaha & Keuangan Daerah" <?= $user['jabatan'] == 'Kasubid. Dunia Usaha & Keuangan Daerah' ? "selected='selected'" : "" ?>>Kasubid. Dunia Usaha & Keuangan Daerah</option>
                    <option value="Kasubid. Kependudukan & Pemberdayaan Masyarakat" <?= $user['jabatan'] == 'Kasubid. Kependudukan & Pemberdayaan Masyarakat' ? "selected='selected'" : "" ?>>Kasubid. Kependudukan & Pemberdayaan Masyarakat</option>
                    <option value="Kasubid.Kesejahteraan Masyarakat" <?= $user['jabatan'] == 'Kasubid.Kesejahteraan Masyarakat' ? "selected='selected'" : "" ?>>Kasubid.Kesejahteraan Masyarakat</option>
                    <option value="Kasubid. Pekerjaan Umum" <?= $user['jabatan'] == 'Kasubid. Pekerjaan Umum' ? "selected='selected'" : "" ?>>Kasubid. Pekerjaan Umum</option>
                    <option value="Kasubid. Pemerintahan" <?= $user['jabatan'] == 'Kasubid. Pemerintahan' ? "selected='selected'" : "" ?>>Kasubid. Pemerintahan</option>
                    <option value="Kasubid. Perhubungan" <?= $user['jabatan'] == 'Kasubid. Perhubungan' ? "selected='selected'" : "" ?>>Kasubid. Perhubungan</option>
                    <option value="Kasubid. Pertanian & Kelautan" <?= $user['jabatan'] == 'Kasubid. Pertanian & Kelautan' ? "selected='selected'" : "" ?>>Kasubid. Pertanian & Kelautan</option>
                    <option value="Kasubid. Sumberdaya Alam" <?= $user['jabatan'] == 'Kasubid. Sumberdaya Alam' ? "selected='selected'" : "" ?>>Kasubid. Sumberdaya Alam</option>
                    <option value="Kasubid. Tata Ruang Perumahaan & Permukiman" <?= $user['jabatan'] == 'Kasubid. Tata Ruang Perumahaan & Permukiman' ? "selected='selected'" : "" ?>>Kasubid. Tata Ruang Perumahaan & Permukiman</option>
                    <option value="Subidang Pendanaan & Pembiayaan Pembangunan Daerah" <?= $user['jabatan'] == 'Subidang Pendanaan & Pembiayaan Pembangunan Daerah' ? "selected='selected'" : "" ?>>Subidang Pendanaan & Pembiayaan Pembangunan Daerah</option>
                    <option value="Subidang Perenc.Pembangunan Daerah" <?= $user['jabatan'] == 'Subidang Perenc.Pembangunan Daerah' ? "selected='selected'" : "" ?>>Subidang Perenc.Pembangunan Daerah</option>
                    <option value="Staf Bappeda" <?= $user['jabatan'] == 'Staf Bappeda' ? "selected='selected'" : "" ?>>Staf Bappeda</option>
                  </select>
                </div>
                <div>
                  <label for="upimg">Masukkan Foto</label>
                  <input type="file" class="form-control" id="upimg" name="foto">
                </div>
                <div class="modal-footer justify-content-center">
                  <button class="btn btn-secondary active" data-dismiss="modal">Batal</button>
                  <button type="submit" class="btn btn-success ">Simpan</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>