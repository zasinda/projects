<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mregister extends CI_Model{
    
    public function save_register_info($data){
        return $this->db->insert('tbl_member', $data);
    }
}