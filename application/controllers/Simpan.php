<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Simpan extends CI_Controller
{
        public function __construct()
        {
                parent::__construct();
				$this->load->model('m_device');

				header('Access-Control-Allow-Origin: *');
        		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        }

        public function index()
        {          
            $this->load->view('templates/header');
            $this->load->view('home/index');
            $this->load->view('templates/footer');
        }

        public function sensor(){
            $this->load->model('m_simpan');
            
            if(isset($_GET['temp']) && isset($_GET['humid']) && isset($_GET['ir'])) {

                //echo "Success!!";
                
                $datasuhu = $this->input->get('temp');
                $datahumid = $this->input->get('humid');
                $dataacti = $this->input->get('ir');

                //query input to database
                date_default_timezone_set('Asia/Jakarta');
                $nowdate = date('Y-m-d');
                $nowtime = date('H:m:s');
                $datasensor = array('temperature'=>$datasuhu, 'humid'=>$datahumid, 'activity'=>$dataacti, 'tgl'=>$nowdate, 'waktu'=>$nowtime);

                //echo "Suhu : ", $datasuhu;
                //echo "Kelembapan : ", $datahumid;
                //echo "Total pergerakan : ", $dataacti;
                $this->m_simpan->save($datasensor);

				//kirim response berupa status kontrol alat
					$status = $this->m_device->getLastStatus();
					foreach ($status as $value){
						echo $value->kondisi;
					}
				//-----------------------------------------------
            } else {
                echo "variable data tidak terdefinisi";
            }
        }
}
