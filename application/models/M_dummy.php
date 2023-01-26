<?php

class m_dummy extends CI_Model 
{
    public function getDummy() 
    {
        $sql = "SELECT * FROM dummy";
        $result = $this->db->query($sql);
        return $result->row()->kedua;
    }
}