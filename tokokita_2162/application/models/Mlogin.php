<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mlogin extends CI_Model {

  public function cek_login_member($u, $p){
    $q = $this->db->get_where('tbl_member', array('username'=>$u, 'password'=>$p, 'statusAktif'=>'Y'));
    return $q;
}
}
