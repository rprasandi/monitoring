<?php

class m_home extends CI_Model 
{
    public function getTempAvg() 
    {
        $sql = "SELECT MAX(temperature) as avgtemp FROM suhu";
        $result = $this->db->query($sql);
        return $result->row()->avgtemp;
    }
    public function getHumiAvg()
    {
        $sql = "SELECT MAX(humid) as avghumi FROM suhu";
        $result = $this->db->query($sql);
        return $result->row()->avghumi;
    }
    public function getActiSum() 
    {
        $sql = "SELECT SUM(activity) as actisum FROM suhu";
        $result = $this->db->query($sql);
        return $result->row()->actisum;
    }
}