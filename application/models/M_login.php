<?php

class m_login extends CI_Model 
{
    function auth_user($username,$pin)
    {
        $query = $this->db->query("SELECT * FROM admin WHERE nama_admin='$username' AND no_pin='$pin' LIMIT 1");
        return $query;        
    }

}