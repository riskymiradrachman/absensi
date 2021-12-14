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
                    <li class="nav-item active-color">
                        <a class="nav-link" href="<?= base_url('admin/pengaturan') ?>">
                            <i class="material-icons">settings</i>
                            <p>Pengaturan</p>
                        </a>
                    </li>
                    <!-- Nav Item - Pages Collapse Menu -->
                    <li class="dropdown nav-item">
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
                            <a href="<?= base_url('admin/izin') ?>" class="dropdown-item">
                                <i class="material-icons">messages</i> Izin
                            </a>
                        </div>
                    </li>
                    <li class="nav-item active-color active ">
                        <a class="nav-link" href="<?= base_url('admin/pegawai') ?>">
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
                        <div class="col-md-5">
                            <div class="places-buttons">
                                <div class="row">
                                    <div class="col-lg-12 col-md-15 ml-auto">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#tambahModal"><i class="fa fa-plus"></i> Tambah</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid justify-content-end">
                            <?= form_open('admin/search_pgw') ?>
                            <div class="col-md-5">
                                <form class="navbar-form">
                                    <div class="input-group no-border">
                                        <input type="text" name="keyword" value="" class="form-control" placeholder="Search...">
                                        <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                            <i class="material-icons">search</i>
                                            <div class="ripple-container"></div>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <?= form_close() ?>
                        </div>
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title ">Daftar Pegawai</h4>
                                <p class="card-category"> </p>
                            </div>
                            <?= $this->session->flashdata('notif'); ?>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class=" text-primary" align="center">
                                            <th>
                                                No
                                            </th>
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
                                                Bidang
                                            </th>
                                            <th>
                                                Jabatan
                                            </th>
                                            <th>
                                                Foto
                                            </th>
                                            <th>
                                                Aksi
                                            </th>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($user as $u) :
                                            ?>
                                                <tr align="center">
                                                    <td>
                                                        <?= $no++; ?>
                                                    </td>
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
                                                        <?= $u->bidang; ?>
                                                    </td>
                                                    <td>
                                                        <?= $u->jabatan; ?>
                                                    </td>
                                                    <td>
                                                        <?php if ($u->foto != "anonim.jpg") { ?>
                                                            <?= $u->foto; ?>
                                                        <?php } ?>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-round btn-sm" data-toggle="modal" data-target="#editModal<?= $u->nip; ?>">
                                                            Edit
                                                        </button>
                                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" onclick="$('#modalDelete #formDelete').attr('action','<?= site_url('admin/delete/' . $u->nip) ?>')" data-target="#modalDelete">
                                                            Hapus
                                                        </button>
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
                                                <a type="submit" href="<?= base_url('admin/excel_pgw') ?>">Cetak Dokumen</a>
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

        <!-- hpus -->
        <!-- Modal -->
        <div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Apakah Anda Yakin Ingin Dihapus</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-footer ">
                        <form id="formDelete" method="POST" action="">
                            <button class="btn btn-secondary active" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- * edit*/ -->
        <?php foreach ($user as $u) : ?>
            <div class="modal fade" id="editModal<?= $u->nip; ?>" tabindex="-" role="">
                <div class="modal-dialog modal-login" role="document">
                    <div class="modal-content">
                        <div class="card card-signup card-plain">

                            <div class="modal-body">
                                <?php echo form_open_multipart('admin/edit_pegawai') ?>
                                <p class="description text-center"> Edit Daftar Pegawai</p>
                                <div class="card-body">

                                    <div class="form-group bmd-form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <input type="hidden" class="form-control" name="nip" value="<?= $u->nip; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Nama</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" name="nama" value="<?= $u->nama; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput2">Umur</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput2" name="umur" value="<?= $u->umur; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Bidang</label>
                                        <select class="form-control" data-style="btn btn-link" id="exampleFormControlSelect1" name="bidang">
                                            <option value="Ekonomi & Sumber Daya Alam" <?= $u->bidang == 'Ekonomi & Sumber Daya Alam' ? "selected='selected'" : "" ?>>Ekonomi & Sumber Daya Alam</option>
                                            <option value="Infrastruktur & Pengembangan Wilayah" <?= $u->bidang == 'Infrastruktur & Pengembangan Wilayah' ? "selected='selected'" : "" ?>>Infrastruktur & Pengembangan Wilayah</option>
                                            <option value="Pembangunan Manusia & Masyarakat" <?= $u->bidang == 'Pembangunan Manusia & Masyarakat' ? "selected='selected'" : "" ?>>Pembangunan Manusia & Masyarakat</option>
                                            <option value="Perencanaan Makro" <?= $u->bidang == 'Perencanaan Makro' ? "selected='selected'" : "" ?>>Perencanaan Makro</option>
                                            <option value="Sekretariat" <?= $u->bidang == 'Sekretariat' ? "selected='selected'" : "" ?>>Sekretariat</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect2">Jabatan</label>
                                        <select class="form-control" data-style="btn btn-link" id="exampleFormControlSelect2" name="jabatan">
                                            <option value="Kepala Bappeda Prov. Sultra" <?= $u->jabatan == 'Kepala Bappeda Prov. Sultra' ? "selected='selected'" : "" ?>>Kepala Bappeda Prov. Sultra</option>
                                            <option value="Sekretaris Bappeda Prov. Sultra" <?= $u->jabatan == 'Sekretaris Bappeda Prov. Sultra' ? "selected='selected'" : "" ?>>Sekretaris Bappeda Prov. Sultra</option>
                                            <option value="Kasubbag. Keuangan" <?= $u->jabatan == 'Kasubbag. Keuangan' ? "selected='selected'" : "" ?>>Kasubbag. Keuangan</option>
                                            <option value="Kasubbag. Penyusunan Program" <?= $u->jabatan == 'Kasubbag. Penyusunan Program' ? "selected='selected'" : "" ?>>Kasubbag. Penyusunan Program</option>
                                            <option value="Kasubbag. Umum dan Kepegawaian" <?= $u->jabatan == 'Kasubbag. Umum dan Kepegawaian' ? "selected='selected'" : "" ?>>Kasubbag. Umum dan Kepegawaian</option>
                                            <option value="Fungsional Perenc." <?= $u->jabatan == 'Fungsional Perenc.' ? "selected='selected'" : "" ?>>Fungsional Perenc.</option>
                                            <option value="Kabid. Ekonomi & Sumberdaya Alam" <?= $u->jabatan == 'Kabid. Ekonomi & Sumberdaya Alam' ? "selected='selected'" : "" ?>>Kabid. Ekonomi & Sumberdaya Alam</option>
                                            <option value="Kabid. Infrastrukur & Pengembangan Wilayah" <?= $u->jabatan == 'Kabid. Infrastrukur & Pengembangan Wilayah' ? "selected='selected'" : "" ?>>Kabid. Infrastrukur & Pengembangan Wilayah</option>
                                            <option value="Kabid. Pembangunan Manusia & Masyarakat" <?= $u->jabatan == 'Kabid. Pembangunan Manusia & Masyarakat' ? "selected='selected'" : "" ?>>Kabid. Pembangunan Manusia & Masyarakat</option>
                                            <option value="Kabid. Perencanaan Makro" <?= $u->jabatan == 'Kabid. Perencanaan Makro' ? "selected='selected'" : "" ?>>Kabid. Perencanaan Makro</option>
                                            <option value="Kasubid. Dunia Usaha & Keuangan Daerah" <?= $u->jabatan == 'Kasubid. Dunia Usaha & Keuangan Daerah' ? "selected='selected'" : "" ?>>Kasubid. Dunia Usaha & Keuangan Daerah</option>
                                            <option value="Kasubid. Kependudukan & Pemberdayaan Masyarakat" <?= $u->jabatan == 'Kasubid. Kependudukan & Pemberdayaan Masyarakat' ? "selected='selected'" : "" ?>>Kasubid. Kependudukan & Pemberdayaan Masyarakat</option>
                                            <option value="Kasubid.Kesejahteraan Masyarakat" <?= $u->jabatan == 'Kasubid.Kesejahteraan Masyarakat' ? "selected='selected'" : "" ?>>Kasubid.Kesejahteraan Masyarakat</option>
                                            <option value="Kasubid. Pekerjaan Umum" <?= $u->jabatan == 'Kasubid. Pekerjaan Umum' ? "selected='selected'" : "" ?>>Kasubid. Pekerjaan Umum</option>
                                            <option value="Kasubid. Pemerintahan" <?= $u->jabatan == 'Kasubid. Pemerintahan' ? "selected='selected'" : "" ?>>Kasubid. Pemerintahan</option>
                                            <option value="Kasubid. Perhubungan" <?= $u->jabatan == 'Kasubid. Perhubungan' ? "selected='selected'" : "" ?>>Kasubid. Perhubungan</option>
                                            <option value="Kasubid. Pertanian & Kelautan" <?= $u->jabatan == 'Kasubid. Pertanian & Kelautan' ? "selected='selected'" : "" ?>>Kasubid. Pertanian & Kelautan</option>
                                            <option value="Kasubid. Sumberdaya Alam" <?= $u->jabatan == 'Kasubid. Sumberdaya Alam' ? "selected='selected'" : "" ?>>Kasubid. Sumberdaya Alam</option>
                                            <option value="Kasubid. Tata Ruang Perumahaan & Permukiman" <?= $u->jabatan == 'Kasubid. Tata Ruang Perumahaan & Permukiman' ? "selected='selected'" : "" ?>>Kasubid. Tata Ruang Perumahaan & Permukiman</option>
                                            <option value="Subidang Pendanaan & Pembiayaan Pembangunan Daerah" <?= $u->jabatan == 'Subidang Pendanaan & Pembiayaan Pembangunan Daerah' ? "selected='selected'" : "" ?>>Subidang Pendanaan & Pembiayaan Pembangunan Daerah</option>
                                            <option value="Subidang Perenc.Pembangunan Daerah" <?= $u->jabatan == 'Subidang Perenc.Pembangunan Daerah' ? "selected='selected'" : "" ?>>Subidang Perenc.Pembangunan Daerah</option>
                                            <option value="Staf Bappeda" <?= $u->jabatan == 'Staf Bappeda' ? "selected='selected'" : "" ?>>Staf Bappeda</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="upimg">Masukkan Foto</label>
                                        <?php if ($u->foto != 'anonim.jpg') { ?>
                                            <img src="<?= base_url('assets/user/img/user/' . $u->foto); ?>" style="width: 50%;">
                                        <?php } ?>
                                        <input type="file" class="form-control" id="upimg" name="foto" value="<?= $u->foto; ?>">
                                    </div>
                                    <div class="modal-footer justify-content-center">
                                        <button class="btn btn-secondary active" data-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-success" value="simpan">Simpan</button>
                                    </div>
                                </div>
                                <?= form_close() ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>





        <!-- * tambah*/ -->

        <div class="modal fade" id="tambahModal" tabindex="1-" role="">
            <div class="modal-dialog modal-login" role="document">
                <div class="modal-content">
                    <div class="card card-signup card-plain">
                        <div class="modal-body">
                            <?php echo form_open_multipart('admin/tambah_pegawai') ?>
                            <p class="description text-center"> Tambah Daftar Pegawai</p>
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="exampleFormControlInput3">NIP</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput3" name="nip" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Nama</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="nama" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput2">Umur</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput2" name="umur" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Bidang</label>
                                    <select class="form-control" data-style="btn btn-link" id="exampleFormControlSelect1" name="bidang" required>
                                        <option value="Ekonomi & Sumber Daya Alam">Ekonomi & Sumber Daya Alam</option>
                                        <option value="Infrastruktur & Pengembangan Wilayah">Infrastruktur & Pengembangan Wilayah</option>
                                        <option value="Pembangunan Manusia & Masyarakat">Pembangunan Manusia & Masyarakat</option>
                                        <option value="Perencanaan Makro">Perencanaan Makro</option>
                                        <option value="Sekretariat">Sekretariat</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect2">Jabatan</label>
                                    <select class="form-control" data-style="btn btn-link" id="exampleFormControlSelect2" name="jabatan" required>
                                        <option value="Kepala Bappeda Prov. Sultra">Kepala Bappeda Prov. Sultra</option>
                                        <option value="Sekretaris Bappeda Prov. Sultra">Sekretaris Bappeda Prov. Sultra</option>
                                        <option value="Kasubbag. Keuangan">>Kasubbag. Keuangan</option>
                                        <option value="Kasubbag. Penyusunan Program">Kasubbag. Penyusunan Program</option>
                                        <option value="Kasubbag. Umum dan Kepegawaian">Kasubbag. Umum dan Kepegawaian</option>
                                        <option value="Fungsional Perenc.">Fungsional Perenc.</option>
                                        <option value="Kabid. Ekonomi & Sumberdaya Alam">Kabid. Ekonomi & Sumberdaya Alam</option>
                                        <option value="Kabid. Infrastrukur & Pengembangan Wilayah">Kabid. Infrastrukur & Pengembangan Wilayah</option>
                                        <option value="Kabid. Pembangunan Manusia & Masyarakat">Kabid. Pembangunan Manusia & Masyarakat</option>
                                        <option value="Kabid. Perencanaan Makro">Kabid. Perencanaan Makro</option>
                                        <option value="Kasubid. Dunia Usaha & Keuangan Daerah">Kasubid. Dunia Usaha & Keuangan Daerah</option>
                                        <option value="Kasubid. Kependudukan & Pemberdayaan Masyarakat">Kasubid. Kependudukan & Pemberdayaan Masyarakat</option>
                                        <option value="Kasubid.Kesejahteraan Masyarakat">Kasubid.Kesejahteraan Masyarakat</option>
                                        <option value="Kasubid. Pekerjaan Umum">Kasubid. Pekerjaan Umum</option>
                                        <option value="Kasubid. Pemerintahan">Kasubid. Pemerintahan</option>
                                        <option value="Kasubid. Perhubungan">Kasubid. Perhubungan</option>
                                        <option value="Kasubid. Pertanian & Kelautan">Kasubid. Pertanian & Kelautan</option>
                                        <option value="Kasubid. Sumberdaya Alam">Kasubid. Sumberdaya Alam</option>
                                        <option value="Kasubid. Tata Ruang Perumahaan & Permukiman">Kasubid. Tata Ruang Perumahaan & Permukiman</option>
                                        <option value="Subidang Pendanaan & Pembiayaan Pembangunan Daerah">Subidang Pendanaan & Pembiayaan Pembangunan Daerah</option>
                                        <option value="Subidang Perenc.Pembangunan Daerah">Subidang Perenc.Pembangunan Daerah</option>
                                        <option value="Staf Bappeda">Staf Bappeda</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="upimg">Masukkan Foto</label>
                                    <input type="file" class="form-control" id="upimg" name="foto">
                                </div>
                                <div class="modal-footer justify-content-center">
                                    <button type="submit" class="btn btn-success active">Simpan</button>
                                    <button type="button" class="btn btn-default active" data-dismiss="modal">Batal</button>
                                </div>
                            </div>
                            <?= form_close() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>