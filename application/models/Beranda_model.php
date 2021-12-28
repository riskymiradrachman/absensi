<?php
class Beranda_model extends CI_Model
{
    public function getAllProfil()
    {
        return $this->db->order_by('nama','ASC')->get_where('tb_pegawai', ['role_id' => 2]);
    }

    public function pagi()
    {
        date_default_timezone_set("Asia/Kuala_lumpur");
        $tanggal = date('d-m-Y');
        $waktu = $this->db->get_where('tb_waktu', ['id' => 1])->row_array();
        $jam = $waktu['h'];
        $jamttp = $waktu['h_tutup_pagi'];
        return $this->db->from('tb_pegawai')->join('tb_kehadiran', 'tb_kehadiran.nip=tb_pegawai.nip')->where('tanggal', $tanggal)->where('jam >=',$jam)->where('jam <=',$jamttp)->where("(role_id='2')")->get()->result();
    }

    public function siang()
    {
        date_default_timezone_set("Asia/Kuala_lumpur");
        $tanggal = date('d-m-Y');
        $waktu = $this->db->get_where('tb_waktu', ['id' => 1])->row_array();
        $jam = $waktu['h_siang'];
        $jamttp = $waktu['h_tutup_siang'];
        return $this->db->from('tb_pegawai')->join('tb_kehadiran', 'tb_kehadiran.nip=tb_pegawai.nip')->where('tanggal', $tanggal)->where('jam >=',$jam)->where('jam <=',$jamttp)->where("(role_id='2')")->get()->result();
    }

    public function sore()
    {
        date_default_timezone_set("Asia/Kuala_lumpur");
        $tanggal = date('d-m-Y');
        $waktu = $this->db->get_where('tb_waktu', ['id' => 1])->row_array();
        $jam = $waktu['h_sore'];
        $jamttp = $waktu['h_tutup_sore'];
        
        // return $waktu['h_sore'].' : '.$waktu['m_sore'];
        return $this->db->from('tb_pegawai')->join('tb_kehadiran', 'tb_kehadiran.nip=tb_pegawai.nip')->where('tanggal', $tanggal)->where('jam >=',$jam)->where('jam <=',$jamttp)->where("(role_id='2')")->get()->result();
    }

    public function kehadiran()
    {
        date_default_timezone_set("Asia/Kuala_lumpur");
        $tanggal = date('d-m-Y');
        return $this->db->from('tb_pegawai')->join('tb_kehadiran', 'tb_kehadiran.nip=tb_pegawai.nip')->where('tanggal', $tanggal)->get()->result();
    }

    public function ortu()
    {
        return $this->db->from('tb_pegawai')->join('tb_kehadiran', 'tb_kehadiran.nip=tb_pegawai.nip')->where('tb_pegawai.umur >=', 50)->get()->result();
    }

    public function sakit()
    {
        return $this->db->from('tb_pegawai')->join('tb_kehadiran', 'tb_kehadiran.nip=tb_pegawai.nip')->where('tb_kehadiran.status', 'sakit')->get()->result();
    }

    public function izin()
    {
        return $this->db->from('tb_pegawai')->join('tb_kehadiran', 'tb_kehadiran.nip=tb_pegawai.nip')->where('tb_kehadiran.status', 'izin')->get()->result();
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function edit_pegawai($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function get_keyword_hdr($keyword)
    {
        $this->db->select('*');
        $this->db->from('tb_pegawai');
        $this->db->join('tb_kehadiran', 'tb_kehadiran.nip=tb_pegawai.nip');
        $this->db->like('tanggal',$keyword);
        return $this->db->get()->result();
    }

    public function excl_hadir($tanggal)
    {
        return $this->db->from('tb_pegawai')->join('tb_kehadiran', 'tb_kehadiran.nip=tb_pegawai.nip')->where('tanggal', $tanggal)->get()->result();
    }
    
    public function get_keyword_pgw($keyword)
    {
        $this->db->select('*');
        $this->db->from('tb_pegawai');
        $this->db->like('nip',$keyword);
        $this->db->or_like('nama',$keyword);
        $this->db->or_like('umur',$keyword);
        $this->db->or_like('bidang',$keyword);
        $this->db->or_like('jabatan',$keyword);
        return $this->db->get()->result();
    }

    public function insert_pgw($post)
    {
        $params = [
            'nip' => $_POST['nip'],
            'nama' => $_POST['nama'],
            'umur' => $_POST['umur'],
            'bidang' => $_POST['bidang'],
            'jabatan' => $_POST['jabatan'],
            'foto' => $post['foto'],
            'role_id' => '2'
        ];
        $this->db->insert('tb_pegawai',$params);
    }

    public function update_pgw($post)
    {
        $params = [
            'nip' => $_POST['nip'],
            'nama' => $_POST['nama'],
            'umur' => $_POST['umur'],
            'bidang' => $_POST['bidang'],
            'jabatan' => $_POST['jabatan']
        ];

        if($post['foto'] != null) {
            $params['foto'] = $post['foto'];
        }
        $this->db->where('nip', $_POST['nip']);
        $this->db->update('tb_pegawai', $params);
    }
}
