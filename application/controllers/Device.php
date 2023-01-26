<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Device extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_device');
        if ($this->session->userdata('masuk') != TRUE) {
            $url = base_url('user');
            redirect($url);
        }
    }

    public function index()
    {
        $data['judul'] = 'Monitoring Device';
        $data['status'] = $this->m_device->getLastStatus();
        

        if ($this->session->userdata('akses') == '1') {
            $this->load->view('templates/header', $data);
            $this->load->view('device/index', $data);
            $this->load->view('templates/footer');
        } else {
            echo "Login dulu gan";
        }
    }

    public function Status($stat) {
        $this->load->model('m_device');

        //INSERT KE TABEL
        date_default_timezone_set('Asia/Jakarta');
        $nowtime = date('Y-m-d H:m:s');
        $datastatus = array('kondisi'=>$stat, 'lastupdate'=>$nowtime);
        $this->m_device->NewStatus($datastatus);
        redirect('/user');
    }

}

