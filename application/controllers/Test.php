<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Test extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_test');
		$this->load->model('m_tabel');
	}
	public function index()
	{
		$data['judul'] = 'TEST';
		// $data['status'] = $this->m_test->getStatus();
		// $data['Stat'] = $this->m_test->setStatus();

		// $url = "http://ip.jsontest.com/";
		// $get_url = file_get_contents($url);
		// $data = json_decode($get_url);

		// $data_array = array (
		// 	'ip' => $data
		// );

		$data['showdummy'] = $this->m_test->getDummy();

		$this->load->view('templates/header', $data);
		$this->load->view('test/index');
		$this->load->view('templates/footer');
	}

	public function showDummy()
	{
		$status = $this->m_test->getDummy();
		
		$en_json = json_encode($status);
		echo $en_json;
	}

	public function showStatus() 
	{
		$this->load->model('m_test');
		// AMBIL DARI TABEL
		$status = $this->m_test->getStatus();
		// foreach ($status as $stat) :
		// 	echo $stat->kondisi;
		// 	echo $stat->lastupdate; 
		// endforeach;
		// var_dump ($status);
		$en_json = json_encode($status);
		echo $en_json;
		// echo gettype($newStat);
		// echo is_string($newStat);
		
		// var_dump($en_json);
	}

	public function status()
	{
		$this->load->model('m_test');

        //INSERT KE TABEL
        date_default_timezone_set('Asia/Jakarta');
		$nowtime = date('Y-m-d H:m:s');
		$stat = $this->input->post('stat');
		if($stat!=NULL) {
		$datastatus = array('kondisi'=>$stat, 'lastupdate'=>$nowtime);
		$this->m_test->saveStatus($datastatus);
		}
	}

	// public function Status($stat) 
	// {
	// 	// echo "Status : ", $stat;
	// 	date_default_timezone_set('Asia/Jakarta');
	// 	$nowtime = date('Y-m-d H:m:s');
	// 	// echo "Waktu : ", $nowtime;

	// 	$arraystat = array(
	// 		'stat' => $stat,
	// 		'nowtime' => $nowtime
	// 		);
	// 	// var_dump($arraystat);
	// 	$en_json= json_encode($arraystat);
	// 	echo $en_json;
	// }


}
