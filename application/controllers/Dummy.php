<?php

defined('BASEPATH') or exit('No Direct script access allowd');

class Dummy extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_dummy');
                
    }

    public function index()
    {
        $data['judul']='dummy';
 

        $data['chartdummy']=$this->m_dummy->getDummy();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/footer');
    }
}