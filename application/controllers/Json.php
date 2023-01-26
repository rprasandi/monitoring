<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Json extends CI_Controller {

	public function index()
	{
		$url = "http://ip.jsontest.com/";
		$get_url = file_get_contents($url);
		$data = json_decode($get_url);

		$data_array = array (
			'datalist' => $data
		);
		$this->load->view('json/json_list',$data_array);
	}
}
