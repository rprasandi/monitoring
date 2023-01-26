<?php

class m_tabel extends CI_Model
{
    public function getAllSuhu()
    {
        return $this->db->get('suhu')->result();
    }
    public function getCurrentData()
    {
        $query = $this->db->query("select date_format(waktu,'%H') as jam, AVG(temperature) as ratasuhu, AVG(humid) as ratahumid, SUM(activity) as sumsensor, count(1) from suhu WHERE tgl=CURRENT_DATE() GROUP BY 1");
        return $query->result();
    }

    public function getFilterTgl($awal,$akhir)
    {
        $this->db->select('*');
        $this->db->where('tgl >=',$awal);
        $this->db->where('tgl <=',$akhir);
        $this->db->from('suhu');
        $query = $this->db->get()->result();
        
        return $query; 
    }

    public function getFilterWaktu($wawal,$wakhir)
    {
        $this->db->select('*');
        $this->db->where('waktu >=',$wawal);
        $this->db->where('waktu <=',$wakhir);
        $this->db->from('suhu');
        $query = $this->db->get()->result();
        
        return $query; 
    }

    public function getFilter($awal, $akhir, $wawal, $wakhir)
    {
        $this->db->select('*');
        $this->db->where('tgl >=',$awal);
        $this->db->where('tgl <=',$akhir);
        $this->db->where('waktu >=',$wawal);
        $this->db->where('waktu <=',$wakhir);
        $this->db->from('suhu');
        $query = $this->db->get()->result();
        
        return $query; 
    }

    public function getSuhuHari()
    {
        $query = $this->db->query("SELECT ROUND(avg(temperature),2) as ratasuhu , date_format(waktu,'%H') as jam FROM suhu WHERE tgl=CURRENT_DATE() GROUP BY hour(waktu)");
        return $query->result();
    }

    public function getLembabHari()
    {
        $query = $this->db->query("SELECT ROUND(avg(humid),2) as ratahumid , date_format(waktu,'%H') as jam FROM suhu WHERE tgl=CURRENT_DATE() GROUP BY hour(waktu)");
        return $query->result();
    }
    public function getSensorHari()
    {
        $query = $this->db->query("SELECT SUM(activity) as totalsensor , date_format(waktu,'%H') as jam FROM suhu WHERE tgl=CURRENT_DATE() GROUP BY hour(waktu)");
        return $query->result();
    }

    public function getGroupBySuhu()
    {
        $query = $this->db->query("SELECT sum(activity) as totalacti, temperature as temp FROM `suhu` GROUP BY temperature ORDER BY totalacti DESC limit 5");
        return $query->result();
        
    }
    public function getGroupBySuhuLow()
    {
        $query = $this->db->query("SELECT sum(activity) as totalacti, temperature as temp FROM `suhu` GROUP BY temperature ORDER BY totalacti ASC limit 5");
        return $query->result();
        
    }
}
