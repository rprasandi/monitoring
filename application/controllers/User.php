<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_user');
        $this->load->model('m_device');
        $this->load->library('session');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Halaman Admin';
        $data['konten'] = $this->m_user->getAll();
        $data['status'] = $this->m_device->getStatus();
        $data['laststat'] = $this->m_device->getLastStatus();

        if ($this->session->userdata('akses') == '1') {
            $this->load->view('templates/header', $data);
            $this->load->view('user/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->load->view('templates/header', $data);
            $this->load->view('user/index', $data);
            $this->load->view('templates/footer');
        }
    }

    public function login()
    {
        $username = htmlspecialchars($this->input->post('username', TRUE, ENT_QUOTES));
        $pin = htmlspecialchars($this->input->post('pin', TRUE, ENT_QUOTES));

        $cek_user = $this->m_user->auth_user($username, $pin);

        if ($cek_user->num_rows() > 0) {
            $data = $cek_user->row_array();
            $this->session->set_userdata('masuk', TRUE);
            $this->session->set_userdata('akses', '1');
            $this->session->set_userdata('ses_id', $data['id_admin']);
            $this->session->set_userdata('ses_nama', $data['nama_admin']);
            $url = base_url('user');
            redirect($url);
        } else {
            echo $this->session->set_flashdata('flash', 'Kombinasi username dan pin tidak terdaftar');
            $url = base_url('user');
            redirect($url);
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        $url = base_url('user');
        redirect($url);
    }

    public function create()
    {
        $data['judul'] = 'Halaman Tambah Admin';

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('pin', 'Pin', 'required|numeric|exact_length[4]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('user/tambah/index');
            $this->load->view('templates/footer');
        } else {
            $this->m_user->daftar();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('user');
        }
    }

    public function update()
    {
        $data['judul'] = 'Halaman Ubah Pin';
        $data['user'] = $this->session->userdata('ses_id');
        
        $this->form_validation->set_rules('pinlama', 'Pin Lama', 'required|numeric');
        $this->form_validation->set_rules('pinbaru', 'Pin Baru', 'required|numeric|exact_length[4]');
        $this->form_validation->set_rules('pinbaru2', 'Pin Baru', 'required|numeric|exact_length[4]|matches[pinbaru]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('user/update/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->m_user->update();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('user');
        }
    }

    public function delete()
    {
        $this->m_user->delete();
        $this->session->set_flashdata('flash', 'Dihapus');
        $this->session->sess_destroy();
        redirect('user');
    }
}
