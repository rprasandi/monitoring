<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tabel extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_tabel');
        
    }

    public function index()
    {
        $data['judul'] = 'Halaman Tabel';

        //database
        $data['konten'] = $this->m_tabel->getAllSuhu();

        //navigasi
        $this->load->view('templates/header', $data);
        $this->load->view('tabel/index');
        $this->load->view('templates/footer');
    }

    function filter()
    {
        $awal = $this->input->post('awal');
        $akhir = $this->input->post('akhir');
        $wawal = $this->input->post('wawal');
        $wakhir = $this->input->post('wakhir');

        $data['awal'] = $awal;
        $data['wawal'] = $wakhir;
        // $data['konten'] = $this->m_tabel->getFilter($awal,$akhir);
        
        $data["judul"] = "Filter";
        if ($awal != NULL) {
            $data['konten'] = $this->m_tabel->getFilterTgl($awal, $akhir);
            // $data['konten'] = $this->m_tabel->getFilterWaktu($wawal, $wakhir);
        }
        if ($wawal != NULL) {
            $data['konten'] = $this->m_tabel->getFilterWaktu($wawal, $wakhir);
        }
        if ($awal !=NULL && $wawal!=NULL) {
            $data['konten'] = $this->m_tabel->getFilter($awal, $akhir, $wawal, $wakhir);
        }
        $this->load->view('templates/header', $data);
        $this->load->view('tabel/filter/index');
        $this->load->view('templates/footer');
    }

    function cetak()
    {
        

    }


}






