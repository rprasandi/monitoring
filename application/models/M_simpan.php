<?php

class m_simpan extends CI_model {

    function save($datasensor) {
        //$this->db->insert('suhu', $datasensor);
        
        //test
        $this->db->insert('suhu', $datasensor);
        return TRUE;

    }

//     public function salinDataDariArduino()
//   {
//     date_default_timezone_set('Asia/Jakarta'); # add your city to set local time zone
//     $nowdate = date('Y-m-d');
//     $nowtime = date('H:i:s');
    
 
//     $this->load->database();
//     $this->db->set('tgl', $nowdate);
//     $this->db->set('waktu', $nowtiem);
//     $this->db->set('temperature', $this->input->get('temp'));
//     $this->db->set('humid', $this->input->get('humid'));
//     $this->db->set('activity', $this->input->get('ir'));
//     $this->db->insert('suhu');
//     $this->db->close();
//   }


}