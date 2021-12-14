<?php
class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('nip', 'NIP', 'required|trim', [
            'required' => 'NIP tidak boleh kosong'
        ]);
        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Absensi Bappeda Sultra';
            $this->load->view('user/template/header', $data);
            $this->load->view('auth/login');
            $this->load->view('user/template/footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $nip = $this->input->post('nip');
        $jam = $this->input->post('jam');
        $menit = $this->input->post('menit');

        $user = $this->db->get_where('tb_pegawai', ['nip' => $nip])->row_array();
        $waktu = $this->db->get_where('tb_waktu', ['id' => 1])->row_array();

        if ($user) {
            $data = [
                'id_pgw' => $user['id_pgw'],
                'nip' => $user['nip'],
                'role_id' => $user['role_id'],
                'login' => 'OK'
            ];
            $this->session->set_userdata($data);
            if ($user['role_id'] == 1) {
                redirect('admin');
            } else {
                if ($jam > $waktu['h_tutup_sore'] or ($jam == $waktu['h_tutup_sore'] and $menit > $waktu['m_tutup_sore'])) {
                    $status = ['status' => 'form_tutup'];
                    $this->session->set_userdata($status);
                    redirect('user_login/sore_tutup');
                } else if ($jam > $waktu['h_telat_sore'] or ($jam == $waktu['h_telat_sore'] and $menit >= $waktu['m_telat_sore'])) {
                    $status = ['status' => 'sore_telat'];
                    $this->session->set_userdata($status);
                    redirect('user_login/sore_telat');
                } else if ($jam > $waktu['h_sore'] or ($jam == $waktu['h_sore'] and $menit >= $waktu['m_sore'])) {
                    $status = ['status' => 'sore'];
                    $this->session->set_userdata($status);
                    redirect('user_login/sore');
                } else if ($jam > $waktu['h_tutup_siang'] or ($jam == $waktu['h_tutup_siang'] and $menit > $waktu['m_tutup_siang'])) {
                    $status = ['status' => 'form_tutup'];
                    $this->session->set_userdata($status);
                    redirect('user_login/siang_tutup');
                } else if ($jam > $waktu['h_telat_siang'] or ($jam == $waktu['h_telat_siang'] and $menit >= $waktu['m_telat_siang'])) {
                    $status = ['status' => 'siang_telat'];
                    $this->session->set_userdata($status);
                    redirect('user_login/siang_telat');
                } else if ($jam > $waktu['h_siang'] or ($jam == $waktu['h_siang'] and $menit >= $waktu['m_siang'])) {
                    $status = ['status' => 'siang'];
                    $this->session->set_userdata($status);
                    redirect('user_login/siang');
                } else if ($jam > $waktu['h_tutup_pagi'] or ($jam == $waktu['h_tutup_pagi'] and $menit > $waktu['m_tutup_pagi'])) {
                    $status = ['status' => 'form_tutup'];
                    $this->session->set_userdata($status);
                    redirect('user_login/pagi_tutup');
                } else if ($jam > $waktu['h_telat_pagi'] or ($jam == $waktu['h_telat_pagi'] and $menit >= $waktu['m_telat_pagi'])) {
                    $status = ['status' => 'pagi_telat'];
                    $this->session->set_userdata($status);
                    redirect('user_login/pagi_telat');
                } else if ($jam > $waktu['h'] or ($jam == $waktu['h'] and $menit >= $waktu['m'])) {
                    $status = ['status' => 'sore_telat'];
                    $this->session->set_userdata($status);
                    redirect('user_login/pagi');
                } else {
                    redirect('user_login/pagi_tutup');
                }
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">NIP tidak terdaftar</div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('id_pgw');
        $this->session->unset_userdata('nip');
        $this->session->unset_userdata('role_id');
        $this->session->unset_userdata('login');
        $this->session->unset_userdata('status');
        $this->session->unset_userdata('absen');

        redirect('auth');
    }
}
