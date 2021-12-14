<?php
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');

        if ($this->session->userdata('login') != 'OK') {
            redirect('auth');
        }
    }

    public function index()
    {
        $data['judul'] = 'Absensi Bappeda Sultra';

        $this->load->model('Beranda_model');
        $data['pagi'] = $this->Beranda_model->pagi();
        $data['siang'] = $this->Beranda_model->siang();
        $data['sore'] = $this->Beranda_model->sore();

        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/home/index', $data);
        $this->load->view('admin/template/footer');
    }

    public function tanggal()
    {
        $data['judul'] = 'Absensi Bappeda Sultra';

        $this->load->model('Beranda_model');
        $data['user'] = $this->Beranda_model->kehadiran();

        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/home/kehadiran', $data);
        $this->load->view('admin/template/footer');
    }

    public function pengaturan()
    {
        $data['judul'] = 'Absensi Bappeda Sultra';

        $this->load->model('Waktu_model');
        $where = array('id' => 1);
        $data['user'] = $this->Waktu_model->edit_data($where, 'tb_waktu')->result();

        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/pengaturan/index', $data);
        $this->load->view('admin/template/footer');
    }

    public function edit_pengaturan()
    {
        $id = $this->input->post('id');
        $h = $this->input->post('h');
        $m = $this->input->post('m');
        $s = $this->input->post('s');
        $h_telat_pagi = $this->input->post('h_telat_pagi');
        $m_telat_pagi = $this->input->post('m_telat_pagi');
        $s_telat_pagi = $this->input->post('s_telat_pagi');
        $h_tutup_pagi = $this->input->post('h_tutup_pagi');
        $m_tutup_pagi = $this->input->post('m_tutup_pagi');
        $s_tutup_pagi = $this->input->post('s_tutup_pagi');
        $h_siang = $this->input->post('h_siang');
        $m_siang = $this->input->post('m_siang');
        $s_siang = $this->input->post('s_siang');
        $h_telat_siang = $this->input->post('h_telat_siang');
        $m_telat_siang = $this->input->post('m_telat_siang');
        $s_telat_siang = $this->input->post('s_telat_siang');
        $h_tutup_siang = $this->input->post('h_tutup_siang');
        $m_tutup_siang = $this->input->post('m_tutup_siang');
        $s_tutup_siang = $this->input->post('s_tutup_siang');
        $h_sore = $this->input->post('h_sore');
        $m_sore = $this->input->post('m_sore');
        $s_sore = $this->input->post('s_sore');
        $h_telat_sore = $this->input->post('h_telat_sore');
        $m_telat_sore = $this->input->post('m_telat_sore');
        $s_telat_sore = $this->input->post('s_telat_sore');
        $h_tutup_sore = $this->input->post('h_tutup_sore');
        $m_tutup_sore = $this->input->post('m_tutup_sore');
        $s_tutup_sore = $this->input->post('s_tutup_sore');
        $this->load->model('Waktu_model');

        $data = array(
            'h' => $h,
            'm' => $m,
            's' => $s,
            'h_telat_pagi' => $h_telat_pagi,
            'm_telat_pagi' => $m_telat_pagi,
            's_telat_pagi' => $s_telat_pagi,
            'h_tutup_pagi' => $h_tutup_pagi,
            'm_tutup_pagi' => $m_tutup_pagi,
            's_tutup_pagi' => $s_tutup_pagi,
            'h_siang' => $h_siang,
            'm_siang' => $m_siang,
            's_siang' => $s_siang,
            'h_telat_siang' => $h_telat_siang,
            'm_telat_siang' => $m_telat_siang,
            's_telat_siang' => $s_telat_siang,
            'h_tutup_siang' => $h_tutup_siang,
            'm_tutup_siang' => $m_tutup_siang,
            's_tutup_siang' => $s_tutup_siang,
            'h_sore' => $h_sore,
            'm_sore' => $m_sore,
            's_sore' => $s_sore,
            'h_telat_sore' => $h_telat_sore,
            'm_telat_sore' => $m_telat_sore,
            's_telat_sore' => $s_telat_sore,
            'h_tutup_sore' => $h_tutup_sore,
            'm_tutup_sore' => $m_tutup_sore,
            's_tutup_sore' => $s_tutup_sore
        );

        $where = array(
            'id' => $id
        );

        $this->Waktu_model->update_data($where, $data, 'tb_waktu');
        redirect('admin/pengaturan');
    }

    public function ortu()
    {
        $data['judul'] = 'Absensi Bappeda Sultra';

        $this->load->model('Beranda_model');
        $data['user'] = $this->Beranda_model->ortu();

        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/kriteria/ortu', $data);
        $this->load->view('admin/template/footer');
    }

    public function sakit()
    {
        $data['judul'] = 'Absensi Bappeda Sultra';

        $this->load->model('Beranda_model');
        $data['user'] = $this->Beranda_model->sakit();

        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/kriteria/sakit', $data);
        $this->load->view('admin/template/footer');
    }

    public function izin()
    {
        $data['judul'] = 'Absensi Bappeda Sultra';

        $this->load->model('Beranda_model');
        $data['user'] = $this->Beranda_model->izin();

        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/kriteria/izin', $data);
        $this->load->view('admin/template/footer');
    }

    public function pegawai()
    {
        $data['judul'] = 'Absensi Bappeda Sultra';

        $this->load->model('Beranda_model');
        $data['user'] = $this->Beranda_model->getAllProfil()->result();

        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/pegawai/index', $data);
        $this->load->view('admin/template/footer');
    }

    public function tambah_pegawai()
    {
        $this->load->model('Beranda_model');
        $this->form_validation->set_rules('nip', 'NIP', 'required|trim|is_unique[tb_pegawai.nip]', [
            'is_unique' => 'NIP sudah ada !'
        ]);
        $config['upload_path']    = './assets/user/img/user/';
        $config['allowed_types']  = 'gif|jpg|png|jpeg';
        $config['max_size']       = 2048;
        $config['file_name']       = 'item-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
        $this->load->library('upload', $config);

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('notif', '<div class="alert alert-danger">
                <div class="container">
                <div class="alert-icon">
                    <i class="material-icons">check</i>
                </div>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"><i class="material-icons">clear</i></span>
                </button>
                <b>Error Alert:</b> NIP sudah ada
                </div>
            </div>');
            redirect('admin/pegawai');
        } else {
            if (@$_FILES['foto']['name'] != null) {
                if ($this->upload->do_upload('foto')) {
                    $post['foto'] = $this->upload->data('file_name');
                    $this->Beranda_model->insert_pgw($post);

                    $this->session->set_flashdata('notif', '<div class="alert alert-success">
                    <div class="container">
                    <div class="alert-icon">
                        <i class="material-icons">check</i>
                    </div>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"><i class="material-icons">clear</i></span>
                    </button>
                    <b>Success Alert:</b> Data telah berhasil ditambahkan
                    </div>
                </div>');
                    redirect('admin/pegawai');
                } else {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('notif', '<div class="alert alert-danger">
                    <div class="container">
                    <div class="alert-icon">
                        <i class="material-icons">error_outline</i>
                    </div>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"><i class="material-icons">clear</i></span>
                    </button>
                    <b>Error Alert:</b>' . $error . '
                    </div>
                    </div>');;
                    redirect('admin/pegawai');
                }
            } else {
                $post['foto'] = "anonim.jpg";
                $this->Beranda_model->insert_pgw($post);
                $this->session->set_flashdata('notif', '<div class="alert alert-success">
                    <div class="container">
                    <div class="alert-icon">
                        <i class="material-icons">check</i>
                    </div>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"><i class="material-icons">clear</i></span>
                    </button>
                    <b>Success Alert:</b> Data telah berhasil ditambahkan
                    </div>
                </div>');
                redirect('admin/pegawai');
            }
        }
    }

    public function delete($nip)
    {
        $this->load->model('Beranda_model');

        $where = array('nip' => $nip);
        $this->Beranda_model->hapus_data($where, 'tb_pegawai');
        $this->session->set_flashdata('notif', '<div class="alert alert-success">
        <div class="container">
          <div class="alert-icon">
            <i class="material-icons">check</i>
          </div>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"><i class="material-icons">clear</i></span>
          </button>
          <b>Success Alert:</b> Data telah berhasil dihapus
        </div>
      </div>');
        redirect('admin/pegawai');
    }

    public function edit_pegawai()
    {
        $this->form_validation->set_rules('nip', 'NIP', 'required');
        if ($this->form_validation->run() == false) {
            $this->session->flashdata('error', "Data Gagal Diedit");
            redirect('admin/pegawai');
        } else {
            $this->load->model('Beranda_model');
            $config['upload_path']    = './assets/user/img/user/';
            $config['allowed_types']  = 'gif|jpg|png|jpeg';
            $config['max_size']       = 2048;
            $config['file_name']       = 'item-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
            $this->load->library('upload', $config);

            if (@$_FILES['foto']['name'] != null) {
                if ($this->upload->do_upload('foto')) {
                    $post['foto'] = $this->upload->data('file_name');
                    $this->Beranda_model->update_pgw($post);

                    $this->session->set_flashdata('notif', '<div class="alert alert-success">
                    <div class="container">
                    <div class="alert-icon">
                        <i class="material-icons">check</i>
                    </div>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"><i class="material-icons">clear</i></span>
                    </button>
                    <b>Success Alert:</b> Data telah berhasil diubah
                    </div>
                    </div>');
                    redirect('admin/pegawai');
                } else {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('notif', '<div class="alert alert-danger">
                    <div class="container">
                    <div class="alert-icon">
                        <i class="material-icons">error_outline</i>
                    </div>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"><i class="material-icons">clear</i></span>
                    </button>
                    <b>Error Alert:</b>' . $error . '
                    </div>
                    </div>');;
                    redirect('admin/pegawai');
                }
            } else {
                $post['foto'] = "anonim.jpg";
                $this->Beranda_model->update_pgw($post);
                $this->session->set_flashdata('notif', '<div class="alert alert-success">
                    <div class="container">
                    <div class="alert-icon">
                        <i class="material-icons">check</i>
                    </div>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"><i class="material-icons">clear</i></span>
                    </button>
                    <b>Success Alert:</b> Data telah berhasil diubah
                    </div>
                    </div>');
                redirect('admin/pegawai');
            }
        }

        $data = array(
            'nip' => $_POST['nip'],
            'nama' => $_POST['nama'],
            'umur' => $_POST['umur'],
            'bidang' => $_POST['bidang'],
            'jabatan' => $_POST['jabatan']
        );
        $this->db->where('nip', $_POST['nip']);
        $this->db->update('tb_pegawai', $data);

        $this->session->set_flashdata('notif', '<div class="alert alert-success">
        <div class="container">
          <div class="alert-icon">
            <i class="material-icons">check</i>
          </div>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"><i class="material-icons">clear</i></span>
          </button>
          <b>Success Alert:</b> Data telah berhasil diubah
         </div>
        </div>');
        redirect('admin/pegawai');
    }

    public function excel_pgw()
    {
        $this->load->model('Beranda_model');
        $data['pegawai'] = $this->Beranda_model->getAllProfil()->result();

        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel.php');
        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

        $object = new PHPExcel();
        $object->getProperties()->setCreator("#");
        $object->getProperties()->setLastModifiedBy("#");
        $object->getProperties()->setTitle("Daftar Pegawai");
        $object->setActiveSheetIndex(0);

        $object->getActiveSheet()->setCellValue('A1', 'NO');
        $object->getActiveSheet()->setCellValue('B1', 'NIP');
        $object->getActiveSheet()->setCellValue('C1', 'Nama');
        $object->getActiveSheet()->setCellValue('D1', 'Umur');
        $object->getActiveSheet()->setCellValue('E1', 'Bidang');
        $object->getActiveSheet()->setCellValue('F1', 'Jabatan');

        $baris = 2;
        $no = 1;

        foreach ($data['pegawai'] as $pgw) {
            $object->getActiveSheet()->setCellValue('A' . $baris, $no++);
            $object->getActiveSheet()->setCellValue('B' . $baris, $pgw->nip);
            $object->getActiveSheet()->setCellValue('C' . $baris, $pgw->nama);
            $object->getActiveSheet()->setCellValue('D' . $baris, $pgw->umur);
            $object->getActiveSheet()->setCellValue('E' . $baris, $pgw->bidang);
            $object->getActiveSheet()->setCellValue('F' . $baris, $pgw->jabatan);

            $baris++;
        }

        $file_name = "Data_Pegawai" . '.xlsx';

        $object->getActiveSheet()->setTitle("Data Pegawai");

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $file_name . '"');
        header('Cache-Control: max-age=0');

        $writer = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
        $writer->save('php://output');
    }

    public function excel_pagi()
    {
        $this->load->model('Beranda_model');
        $data['pagi'] = $this->Beranda_model->pagi();

        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel.php');
        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

        $object = new PHPExcel();
        $object->getProperties()->setCreator("#");
        $object->getProperties()->setLastModifiedBy("#");
        $object->getProperties()->setTitle("Daftar Absensi Pagi");
        $object->setActiveSheetIndex(0);

        $object->getActiveSheet()->setCellValue('A1', 'NO');
        $object->getActiveSheet()->setCellValue('B1', 'NIP');
        $object->getActiveSheet()->setCellValue('C1', 'Nama');
        $object->getActiveSheet()->setCellValue('D1', 'Jam');
        $object->getActiveSheet()->setCellValue('E1', 'Status');
        $object->getActiveSheet()->setCellValue('F1', 'Tanggal');

        $baris = 2;
        $no = 1;

        foreach ($data['pagi'] as $pg) {
            $object->getActiveSheet()->setCellValue('A' . $baris, $no++);
            $object->getActiveSheet()->setCellValue('B' . $baris, $pg->nip);
            $object->getActiveSheet()->setCellValue('C' . $baris, $pg->nama);
            $object->getActiveSheet()->setCellValue('D' . $baris, $pg->jam);
            $object->getActiveSheet()->setCellValue('E' . $baris, $pg->status);
            $object->getActiveSheet()->setCellValue('F' . $baris, $pg->tanggal);

            $baris++;
        }

        $file_name = "Daftar_Absensi_Pagi" . '.xlsx';

        $object->getActiveSheet()->setTitle("Data Absensi");

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $file_name . '"');
        header('Cache-Control: max-age=0');

        $writer = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
        $writer->save('php://output');
    }

    public function excel_siang()
    {
        $this->load->model('Beranda_model');
        $data['siang'] = $this->Beranda_model->siang();

        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel.php');
        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

        $object = new PHPExcel();
        $object->getProperties()->setCreator("#");
        $object->getProperties()->setLastModifiedBy("#");
        $object->getProperties()->setTitle("Daftar Absensi Siang");
        $object->setActiveSheetIndex(0);

        $object->getActiveSheet()->setCellValue('A1', 'NO');
        $object->getActiveSheet()->setCellValue('B1', 'NIP');
        $object->getActiveSheet()->setCellValue('C1', 'Nama');
        $object->getActiveSheet()->setCellValue('D1', 'Jam');
        $object->getActiveSheet()->setCellValue('E1', 'Status');
        $object->getActiveSheet()->setCellValue('F1', 'Tanggal');

        $baris = 2;
        $no = 1;

        foreach ($data['siang'] as $pg) {
            $object->getActiveSheet()->setCellValue('A' . $baris, $no++);
            $object->getActiveSheet()->setCellValue('B' . $baris, $pg->nip);
            $object->getActiveSheet()->setCellValue('C' . $baris, $pg->nama);
            $object->getActiveSheet()->setCellValue('D' . $baris, $pg->jam);
            $object->getActiveSheet()->setCellValue('E' . $baris, $pg->status);
            $object->getActiveSheet()->setCellValue('F' . $baris, $pg->tanggal);

            $baris++;
        }

        $file_name = "Daftar_Absensi_Siang" . '.xlsx';

        $object->getActiveSheet()->setTitle("Data Absensi");

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $file_name . '"');
        header('Cache-Control: max-age=0');

        $writer = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
        $writer->save('php://output');
    }

    public function excel_sore()
    {
        $this->load->model('Beranda_model');
        $data['sore'] = $this->Beranda_model->sore();

        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel.php');
        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

        $object = new PHPExcel();
        $object->getProperties()->setCreator("#");
        $object->getProperties()->setLastModifiedBy("#");
        $object->getProperties()->setTitle("Daftar Absensi Sore");
        $object->setActiveSheetIndex(0);

        $object->getActiveSheet()->setCellValue('A1', 'NO');
        $object->getActiveSheet()->setCellValue('B1', 'NIP');
        $object->getActiveSheet()->setCellValue('C1', 'Nama');
        $object->getActiveSheet()->setCellValue('D1', 'Jam');
        $object->getActiveSheet()->setCellValue('E1', 'Status');
        $object->getActiveSheet()->setCellValue('F1', 'Tanggal');

        $baris = 2;
        $no = 1;

        foreach ($data['sore'] as $pg) {
            $object->getActiveSheet()->setCellValue('A' . $baris, $no++);
            $object->getActiveSheet()->setCellValue('B' . $baris, $pg->nip);
            $object->getActiveSheet()->setCellValue('C' . $baris, $pg->nama);
            $object->getActiveSheet()->setCellValue('D' . $baris, $pg->jam);
            $object->getActiveSheet()->setCellValue('E' . $baris, $pg->status);
            $object->getActiveSheet()->setCellValue('F' . $baris, $pg->tanggal);

            $baris++;
        }

        $file_name = "Daftar_Absensi_Sore" . '.xlsx';
        $object->getActiveSheet()->setTitle("Data Absensi");

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $file_name . '"');
        header('Cache-Control: max-age=0');

        $writer = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
        $writer->save('php://output');
    }

    public function excel_khdrn($tanggal)
    {
        $this->load->model('Beranda_model');
        $data['user'] = $this->Beranda_model->excl_hadir($tanggal);

        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel.php');
        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

        $object = new PHPExcel();
        $object->getProperties()->setCreator("#");
        $object->getProperties()->setLastModifiedBy("#");
        $object->getProperties()->setTitle("Daftar Absensi Sore");
        $object->setActiveSheetIndex(0);

        $object->getActiveSheet()->setCellValue('A1', 'NO');
        $object->getActiveSheet()->setCellValue('B1', 'NIP');
        $object->getActiveSheet()->setCellValue('C1', 'Nama');
        $object->getActiveSheet()->setCellValue('D1', 'Jam');
        $object->getActiveSheet()->setCellValue('E1', 'Status');
        $object->getActiveSheet()->setCellValue('F1', 'Tanggal');

        $baris = 2;
        $no = 1;

        foreach ($data['user'] as $pg) {
            $object->getActiveSheet()->setCellValue('A' . $baris, $no++);
            $object->getActiveSheet()->setCellValue('B' . $baris, $pg->nip);
            $object->getActiveSheet()->setCellValue('C' . $baris, $pg->nama);
            $object->getActiveSheet()->setCellValue('D' . $baris, $pg->jam);
            $object->getActiveSheet()->setCellValue('E' . $baris, $pg->status);
            $object->getActiveSheet()->setCellValue('F' . $baris, $pg->tanggal);

            $baris++;
        }

        $file_name = "Daftar_Absensi" . '.xlsx';
        $object->getActiveSheet()->setTitle("Data Absensi");

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $file_name . '"');
        header('Cache-Control: max-age=0');

        $writer = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
        $writer->save('php://output');
    }

    public function excel_ortu()
    {
        $this->load->model('Beranda_model');
        $data['user'] = $this->Beranda_model->ortu();

        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel.php');
        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

        $object = new PHPExcel();
        $object->getProperties()->setCreator("#");
        $object->getProperties()->setLastModifiedBy("#");
        $object->getProperties()->setTitle("Daftar Absensi Umur 5 Tahun Keatas");
        $object->setActiveSheetIndex(0);

        $object->getActiveSheet()->setCellValue('A1', 'NO');
        $object->getActiveSheet()->setCellValue('B1', 'NIP');
        $object->getActiveSheet()->setCellValue('C1', 'Nama');
        $object->getActiveSheet()->setCellValue('D1', 'Umur');
        $object->getActiveSheet()->setCellValue('E1', 'Jam');
        $object->getActiveSheet()->setCellValue('F1', 'Status');
        $object->getActiveSheet()->setCellValue('G1', 'Tanggal');

        $baris = 2;
        $no = 1;

        foreach ($data['user'] as $pg) {
            $object->getActiveSheet()->setCellValue('A' . $baris, $no++);
            $object->getActiveSheet()->setCellValue('B' . $baris, $pg->nip);
            $object->getActiveSheet()->setCellValue('C' . $baris, $pg->nama);
            $object->getActiveSheet()->setCellValue('D' . $baris, $pg->umur);
            $object->getActiveSheet()->setCellValue('E' . $baris, $pg->jam);
            $object->getActiveSheet()->setCellValue('F' . $baris, $pg->status);
            $object->getActiveSheet()->setCellValue('G' . $baris, $pg->tanggal);

            $baris++;
        }

        $file_name = "Daftar_Absensi" . '.xlsx';

        $object->getActiveSheet()->setTitle("Data Absensi");

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $file_name . '"');
        header('Cache-Control: max-age=0');

        $writer = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
        $writer->save('php://output');
    }

    public function excel_sakit()
    {
        $this->load->model('Beranda_model');
        $data['user'] = $this->Beranda_model->sakit();

        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel.php');
        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

        $object = new PHPExcel();
        $object->getProperties()->setCreator("#");
        $object->getProperties()->setLastModifiedBy("#");
        $object->getProperties()->setTitle("Daftar Absensi - Sakit");
        $object->setActiveSheetIndex(0);

        $object->getActiveSheet()->setCellValue('A1', 'NO');
        $object->getActiveSheet()->setCellValue('B1', 'NIP');
        $object->getActiveSheet()->setCellValue('C1', 'Nama');
        $object->getActiveSheet()->setCellValue('D1', 'Umur');
        $object->getActiveSheet()->setCellValue('E1', 'Jam');
        $object->getActiveSheet()->setCellValue('F1', 'Status');
        $object->getActiveSheet()->setCellValue('G1', 'Tanggal');

        $baris = 2;
        $no = 1;

        foreach ($data['user'] as $pg) {
            $object->getActiveSheet()->setCellValue('A' . $baris, $no++);
            $object->getActiveSheet()->setCellValue('B' . $baris, $pg->nip);
            $object->getActiveSheet()->setCellValue('C' . $baris, $pg->nama);
            $object->getActiveSheet()->setCellValue('D' . $baris, $pg->umur);
            $object->getActiveSheet()->setCellValue('E' . $baris, $pg->jam);
            $object->getActiveSheet()->setCellValue('F' . $baris, $pg->status);
            $object->getActiveSheet()->setCellValue('G' . $baris, $pg->tanggal);

            $baris++;
        }

        $file_name = "Daftar_Absensi" . '.xlsx';

        $object->getActiveSheet()->setTitle("Data Absensi");

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $file_name . '"');
        header('Cache-Control: max-age=0');

        $writer = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
        $writer->save('php://output');
    }

    public function excel_izin()
    {
        $this->load->model('Beranda_model');
        $data['user'] = $this->Beranda_model->izin();

        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel.php');
        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

        $object = new PHPExcel();
        $object->getProperties()->setCreator("#");
        $object->getProperties()->setLastModifiedBy("#");
        $object->getProperties()->setTitle("Daftar Absensi - Izin");
        $object->setActiveSheetIndex(0);

        $object->getActiveSheet()->setCellValue('A1', 'NO');
        $object->getActiveSheet()->setCellValue('B1', 'NIP');
        $object->getActiveSheet()->setCellValue('C1', 'Nama');
        $object->getActiveSheet()->setCellValue('D1', 'Umur');
        $object->getActiveSheet()->setCellValue('E1', 'Jam');
        $object->getActiveSheet()->setCellValue('F1', 'Status');
        $object->getActiveSheet()->setCellValue('G1', 'Keterangan');
        $object->getActiveSheet()->setCellValue('H1', 'Tanggal');

        $baris = 2;
        $no = 1;

        foreach ($data['user'] as $pg) {
            $object->getActiveSheet()->setCellValue('A' . $baris, $no++);
            $object->getActiveSheet()->setCellValue('B' . $baris, $pg->nip);
            $object->getActiveSheet()->setCellValue('C' . $baris, $pg->nama);
            $object->getActiveSheet()->setCellValue('D' . $baris, $pg->umur);
            $object->getActiveSheet()->setCellValue('E' . $baris, $pg->jam);
            $object->getActiveSheet()->setCellValue('F' . $baris, $pg->status);
            $object->getActiveSheet()->setCellValue('G' . $baris, $pg->keterangan);
            $object->getActiveSheet()->setCellValue('H' . $baris, $pg->tanggal);

            $baris++;
        }

        $file_name = "Daftar_Absensi" . '.xlsx';

        $object->getActiveSheet()->setTitle("Data Absensi");

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $file_name . '"');
        header('Cache-Control: max-age=0');

        $writer = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
        $writer->save('php://output');
    }

    public function search_hdr()
    {
        $data['judul'] = 'Absensi Bappeda Sultra';
        $this->load->model('Beranda_model');

        $keyword = $this->input->post('keyword');
        $data['user'] = $this->Beranda_model->get_keyword_hdr($keyword);

        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/home/kehadiran', $data);
        $this->load->view('admin/template/footer');
    }

    public function search_pgw()
    {
        $data['judul'] = 'Absensi Bappeda Sultra';
        $this->load->model('Beranda_model');

        $keyword = $this->input->post('keyword');
        $data['user'] = $this->Beranda_model->get_keyword_pgw($keyword);

        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/pegawai/index', $data);
        $this->load->view('admin/template/footer');
    }

    public function gnt_pass()
    {
        $data['judul'] = 'Absensi Bappeda Sultra';
        $data['user'] = $this->db->get_where('tb_pegawai', ['id_pgw' =>
        $this->session->userdata('id_pgw')])->row_array();

        $this->form_validation->set_rules(
            'old_pass',
            'Old Pass',
            'required|trim'
        );
        $this->form_validation->set_rules(
            'new_pass',
            'New Pass',
            'required|trim|min_length[5]|matches[confirm_pass]'
        );
        $this->form_validation->set_rules(
            'confirm_pass',
            'COnfirm Pass',
            'required|trim|min_length[5]|matches[new_pass]'
        );

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/home/password', $data);
            $this->load->view('admin/template/footer');
        } else {
            $old_pass = $this->input->post('old_pass');
            $new_pass = $this->input->post('new_pass');
            if (!($old_pass == $data['user']['nip'])) {
                $this->session->set_flashdata('notif', '<div class="card-header card-header-danger">
                <div class="container">
                    <div class="alert-icon">
                        <i class="material-icons">check</i>
                    </div>
                    <b>Danger Alert:</b> Password Lama Salah
                    </div>
                </div>');
                redirect('admin/gnt_pass');
            } else {
                if ($old_pass == $new_pass) {
                    $this->session->set_flashdata('notif', '<div class="card-header card-header-danger">
                        <div class="container">
                        <div class="alert-icon">
                            <i class="material-icons">check</i>
                        </div>
                        <b>Danger Alert:</b> Password Baru Tidak Boleh Sama dengan Password Lama
                        </div>
                    </div>');
                    redirect('admin/gnt_pass');
                } else {
                    $this->db->set('nip', $new_pass);
                    $this->db->where('id_pgw', $this->session->userdata('id_pgw'));
                    $ver = $this->db->update('tb_pegawai');

                    if ($ver) {
                        $this->session->set_flashdata('notif', '<div class="card-header card-header-success">
                        <div class="container">
                        <div class="alert-icon">
                            <i class="material-icons">check</i>
                        </div>
                        <b>Success Alert:</b> Password Telah Berubah
                        </div>
                    </div>');
                        redirect('admin/gnt_pass');
                    }
                }
            }
        }
    }
}
