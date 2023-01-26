<?php

defined('BASEPATH') or exit('No Direct script access allowd');

class Home extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_home');
        $this->load->model('m_tabel');
                
    }

    public function index()
    {
        $data['judul']='Home';
        // $judul = 'Home';
        // $url = "http://103.195.90.35:2400/loli_pest/read.php";

        // $get_url = file_get_contents($url);
        // $temp = json_decode($get_url);
        // return var_dump($temp);

        // $datasuhu = $temp->data['0']->suhu;

        // $datasuhu = $data[''];
        // return var_dump($datasuhu);


        // $data = array(
        //     'judul' => $judul,
        //     'suhu' => $datasuhu/
            // 'humiavg' => $humiavg
            // 'actisum' => $actisum
        // );   
        
        // return var_dump($data['suhu']);


        $data['tempavg']=$this->m_home->getTempAvg();
        $data['humiavg']=$this->m_home->getHumiAvg();
        $data['actisum']=$this->m_home->getActiSum();

        $data['konten'] = $this->m_tabel->getAllSuhu();
        $data['suhuhari'] = $this->m_tabel->getSuhuHari();
        $data['humidhari'] = $this->m_tabel->getLembabHari();
        $data['sensorhari'] = $this->m_tabel->getSensorHari();
        $data['actibysuhu'] = $this->m_tabel->getGroupBySuhu();
        $data['actibysuhulow'] = $this->m_tabel->getGroupBySuhuLow();

        $data['suhu']=$this->m_tabel->getAllSuhu();
        $data['datanow']=$this->m_tabel->getCurrentData();

        $this->load->view('templates/header', $data);
        $this->load->view('home/index');
        $this->load->view('templates/footer');
    }
}