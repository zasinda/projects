<?php

class Madmin extends CI_Model{

    /*public function cek_login($u, $p){
        $q = $this->db->get_where('tbl_admin', array('userName'=>$u, 'password'=>$p));
        return $q;
    }*/

    public function cek_login($u)
    {
        return $this->db->get_where('tbl_admin', array('userName' => $u))->row();
    }

    public function update_password($username, $password)
    {
    $this->db->where('userName', $username);
    $this->db->update('tbl_admin', array('password' => md5($password)));
    }   

    public function get_all_data($tabel){
        $q=$this->db->get($tabel);
        return $q;
    }

    public function insert($tabel, $data){
        $this->db->insert($tabel, $data);
    }

    public function get_by_id($tabel, $id){
        return $this->db->get_where($tabel, $id);
    }

    public function update($tabel, $data, $pk, $id){
        $this->db->where($pk, $id);
        $this->db->update($tabel, $data);
    }

    public function delete($tabel, $id, $val){
        $this->db->delete($tabel, array($id => $val));
    }

    public function save_register_info($data){
        return $this->db->insert('tbl_member', $data);
    }

    public function cek_login_member($u, $p){
        $q = $this->db->get_where('tbl_member', array('username'=>$u, 'password'=>$p, 'statusAktif'=>'Y'));
        return $q;
    }


}
?>