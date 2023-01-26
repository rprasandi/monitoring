<?php

class m_device extends CI_Model
{
    public function getStatus()
    {
        return $this->db->get('status')->result();
    }

    public function getLastStatus()
    {
        $this->db->select('*');
        $where = "id_status=(SELECT MAX(id_status) from status)";
        $this->db->where($where);
        return $this->db->get('status')->result();
    }

    public function NewStatus($datastatus)
	{
        $this->db->insert('status', $datastatus);
        return TRUE;
    }
    
}
