<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_login extends CI_Controller
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
        $data['user'] = $this->db->get_where('tb_pegawai', ['nip' =>
        $this->session->userdata('nip')])->row_array();


        $this->load->view('user/template/header', $data);
        $this->load->view('user/home/index', $data);

        if (!($this->session->userdata('absen') == 'sudah')) {
            if ($this->session->userdata('status') == 'pagi') {
                $this->load->view('user/home/pagi', $data);
            } else if ($this->session->userdata('status') == 'pagi_telat') {
                $this->load->view('user/home/pagi_telat', $data);
            } else if ($this->session->userdata('status') == 'siang') {
                $this->load->view('user/home/siang', $data);
            } else if ($this->session->userdata('status') == 'siang_telat') {
                $this->load->view('user/home/siang_telat', $data);
            } else if ($this->session->userdata('status') == 'sore') {
                $this->load->view('user/home/sore', $data);
            } else if ($this->session->userdata('status') == 'sore_telat') {
                $this->load->view('user/home/sore_telat', $data);
            } else if ($this->session->userdata('status') == 'form_tutup') {
                $this->load->view('user/home/form_tutup', $data);
            }
        } else if ($this->session->userdata('absen') == 'sudah') {
            $this->load->view('user/home/sudah_absen', $data);
        }

        $this->load->view('user/template/footer');
    }

    public function pagi()
    {
        $data['judul'] = 'Absensi Bappeda Sultra';
        $data['user'] = $this->db->get_where('tb_pegawai', ['nip' =>
        $this->session->userdata('nip')])->row_array();


        if ($this->session->userdata('status') != 'pagi') {
            $this->load->view('errors/html/error_404');
        } else {
            $this->load->view('user/template/header', $data);
            $this->load->view('user/home/index', $data);
            $this->load->view('user/home/pagi', $data);
            $this->load->view('user/template/footer');
        }
    }

    public function pagi_telat()
    {
        $data['judul'] = 'Absensi Bappeda Sultra';
        $data['user'] = $this->db->get_where('tb_pegawai', ['nip' =>
        $this->session->userdata('nip')])->row_array();


        if ($this->session->userdata('status') != 'pagi_telat') {
            $this->load->view('errors/html/error_404');
        } else {
            $this->load->view('user/template/header', $data);
            $this->load->view('user/home/index', $data);
            $this->load->view('user/home/pagi_telat', $data);
            $this->load->view('user/template/footer');
        }
    }

    public function pagi_tutup()
    {
        $data['judul'] = 'Absensi Bappeda Sultra';
        $data['tutup'] = 'Form Absensi Pagi Tutup';
        $data['user'] = $this->db->get_where('tb_pegawai', ['nip' =>
        $this->session->userdata('nip')])->row_array();


        if ($this->session->userdata('status') != 'form_tutup') {
            $this->load->view('errors/html/error_404');
        } else {
            $this->load->view('user/template/header', $data);
            $this->load->view('user/home/index', $data);
            $this->load->view('user/home/form_tutup', $data);
            $this->load->view('user/template/footer');
        }
    }

    public function siang()
    {
        $data['judul'] = 'Absensi Bappeda Sultra';
        $data['user'] = $this->db->get_where('tb_pegawai', ['nip' =>
        $this->session->userdata('nip')])->row_array();


        if ($this->session->userdata('status') != 'siang') {
            $this->load->view('errors/html/error_404');
        } else {
            $this->load->view('user/template/header', $data);
            $this->load->view('user/home/index', $data);
            $this->load->view('user/home/siang', $data);
            $this->load->view('user/template/footer');
        }
    }

    public function siang_telat()
    {
        $data['judul'] = 'Absensi Bappeda Sultra';
        $data['user'] = $this->db->get_where('tb_pegawai', ['nip' =>
        $this->session->userdata('nip')])->row_array();


        if ($this->session->userdata('status') != 'siang_telat') {
            $this->load->view('errors/html/error_404');
        } else {
            $this->load->view('user/template/header', $data);
            $this->load->view('user/home/index', $data);
            $this->load->view('user/home/siang_telat', $data);
            $this->load->view('user/template/footer');
        }
    }

    public function siang_tutup()
    {
        $data['judul'] = 'Absensi Bappeda Sultra';
        $data['tutup'] = 'Form Absensi Siang Tutup';
        $data['user'] = $this->db->get_where('tb_pegawai', ['nip' =>
        $this->session->userdata('nip')])->row_array();


        if ($this->session->userdata('status') != 'form_tutup') {
            $this->load->view('errors/html/error_404');
        } else {
            $this->load->view('user/template/header', $data);
            $this->load->view('user/home/index', $data);
            $this->load->view('user/home/form_tutup', $data);
            $this->load->view('user/template/footer');
        }
    }

    public function sore()
    {
        $data['judul'] = 'Absensi Bappeda Sultra';
        $data['user'] = $this->db->get_where('tb_pegawai', ['nip' =>
        $this->session->userdata('nip')])->row_array();

        if ($this->session->userdata('status') != 'sore') {
            $this->load->view('errors/html/error_404');
        } else {
            $this->load->view('user/template/header', $data);
            $this->load->view('user/home/index', $data);
            $this->load->view('user/home/sore', $data);
            $this->load->view('user/template/footer');
        }
    }

    public function sore_telat()
    {
        $data['judul'] = 'Absensi Bappeda Sultra';
        $data['user'] = $this->db->get_where('tb_pegawai', ['nip' =>
        $this->session->userdata('nip')])->row_array();


        if ($this->session->userdata('status') != 'sore_telat') {
            $this->load->view('errors/html/error_404');
        } else {
            $this->load->view('user/template/header', $data);
            $this->load->view('user/home/index', $data);
            $this->load->view('user/home/sore_telat', $data);
            $this->load->view('user/template/footer');
        }
    }

    public function sore_tutup()
    {
        $data['judul'] = 'Absensi Bappeda Sultra';
        $data['tutup'] = 'Form Absensi Sore Tutup';
        $data['user'] = $this->db->get_where('tb_pegawai', ['nip' =>
        $this->session->userdata('nip')])->row_array();


        if ($this->session->userdata('status') != 'form_tutup') {
            $this->load->view('errors/html/error_404');
        } else {
            $this->load->view('user/template/header', $data);
            $this->load->view('user/home/index', $data);
            $this->load->view('user/home/form_tutup', $data);
            $this->load->view('user/template/footer');
        }
    }

    public function profil()
    {
        $data['judul'] = 'Absensi Bappeda Sultra';
        $data['user'] = $this->db->get_where('tb_pegawai', ['nip' =>
        $this->session->userdata('nip')])->row_array();

        $this->load->view('user/template/header', $data);
        $this->load->view('user/profil/index', $data);
        $this->load->view('user/template/footer');
    }

    public function absen()
    {
        $this->load->model('Absen_model');
        if ($this->input->post('keterangan') == "") {
            $nip = $this->input->post('nip');
            $jam = $this->input->post('jam');
            $status = $this->input->post('status');
            $tanggal = $this->input->post('tanggal');

            $data = array(
                'nip' => $nip,
                'jam' => $jam,
                'status' => $status,
                'tanggal' => $tanggal
            );
            $this->Absen_model->input_data($data, 'tb_kehadiran');

            $absen = ['absen' => 'sudah'];
            $this->session->set_userdata($absen);

            redirect('user_login/sudah_absen');
        } else {
            $nip = $this->input->post('nip');
            $jam = $this->input->post('jam');
            $status = $this->input->post('status');
            $keterangan = $this->input->post('keterangan');
            $tanggal = $this->input->post('tanggal');

            $data = array(
                'nip' => $nip,
                'jam' => $jam,
                'status' => $status,
                'keterangan' => $keterangan,
                'tanggal' => $tanggal
            );
            $this->Absen_model->input_data($data, 'tb_kehadiran');

            $absen = ['absen' => 'sudah'];
            $this->session->set_userdata($absen);

            redirect('user_login/sudah_absen');
        }
    }

    public function sudah_absen()
    {
        $data['judul'] = 'Absensi Bappeda Sultra';
        $data['user'] = $this->db->get_where('tb_pegawai', ['nip' =>
        $this->session->userdata('nip')])->row_array();


        $this->load->view('user/template/header', $data);
        $this->load->view('user/home/index', $data);
        $this->load->view('user/home/sudah_absen', $data);
        $this->load->view('user/template/footer');
    }

    public function edit()
    {
        $this->form_validation->set_rules('nip', 'NIP', 'required');
        if ($this->form_validation->run() == false) {
            $this->session->flashdata('error', "Data Gagal Diedit");
            redirect('user_login/profil');
        } else {
            $data = array(
                'nip' => $_POST['nip'],
                'nama' => $_POST['nama'],
                'umur' => $_POST['umur'],
                'bidang' => $_POST['bidang'],
                'jabatan' => $_POST['jabatan'],
                'foto' => $_POST['foto']
            );
        }
        $this->db->where('nip', $_POST['nip']);
        $this->db->update('tb_pegawai', $data);

        $this->session->set_flashdata('edit', '<div class="alert alert-success">
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
        redirect('user_login/profil');
    }
}
