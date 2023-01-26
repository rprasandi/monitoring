<?php

class m_test extends CI_Model 
{
    public function getWaktuCol()
    {
        return $this->db->get('suhu')->result();
    }

    function filter()
    {
        $this->input->get('tanggal');
    }

    function saveStatus($datastatus)
    {
        $this->db->insert('status', $datastatus);
        return TRUE;
    }

    function getStatus()
    {
        $this->db->select('*');
        $where = "id_status=(SELECT MAX(id_status) from status)";
        $this->db->where($where);
        return $this->db->get('status')->result();
    }

    public function getDummy()
    {
        $this->db->select('*');
        return $this->db->get('dummy')->result();
    }
}