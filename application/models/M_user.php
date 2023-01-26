<?php

class m_user extends CI_Model 
{
	function auth_user($username,$pin)
    {
        $query = $this->db->query("SELECT * FROM admin WHERE nama_admin='$username' AND no_pin='$pin' LIMIT 1");
        return $query;        
	}
	
	public function getAll()
	{
		return $this->db->get('admin')->result();
	}

	public function daftar()
	{
		$data = [
			"nama_admin" => $this->input->post('nama', true),
			"no_pin" => $this->input->post('pin', true)
		];
		
		$this->db->insert('admin', $data);
	}
 
	public function delete()
    {
		$id = $this->session->userdata('ses_id');
		
        $this->db->where('id_admin', $id);
        $this->db->delete('admin');
	}
	
	public function update()
	{
		$data = [
			"no_pin" => $this->input->post('pinbaru', true)
		];
		$id = $this->session->userdata('ses_id');

		$this->db->where('id_admin', $id);
		$this->db->update('admin', $data);
	}
}