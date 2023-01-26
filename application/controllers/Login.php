<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // if($this->session->userdata('admin'))
        //     redirect('home/index');
        $this->load->model('m_user');
        $this->load->model('m_login');
        $this->load->library('session');
    }

    function auth()
    {
        $username=htmlspecialchars($this->input->post('username',TRUE,ENT_QUOTES));
        $pin=htmlspecialchars($this->input->post('pin',TRUE,ENT_QUOTES));

        $cek_user=$this->m_login->auth_user($username,$pin);

        if($cek_user->num_rows() > 0)
        {
            $data=$cek_user->row_array();
            $this->session->set_userdata('masuk',TRUE);
            $this->session->set_userdata('akses','1');
            $this->session->set_userdata('ses_id',$data['id_admin']);
            $this->session->set_userdata('ses_nama',$data['nama_admin']);
            $url=base_url();
            redirect($url);
        } else {
            $url=base_url();
            echo $this->session->set_flashdata('msg','Username Atau Password Salah');
            redirect($url);
        }        
    }

    public function logout()
    {
        $this->session->sess_destroy();
        $url=base_url('');
        redirect($url);
    }
}
