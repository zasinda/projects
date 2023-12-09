<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Madmin extends CI_Model {
  
public function get_all_pasien($table_name) {
  $query = $this->db->get($table_name);
  return $query->result(); 
}

public function get_user_by_id($user_id)
{
    $this->db->where('id_member', $user_id); 
    return $this->db->get('member');
}


public function cek_login($username, $password)
{
    $this->db->where('usr_member', $username);
    return $this->db->get('member');
}




public function cek_login_admin($username, $password){
  $this->db->where('username', $username);
  $this->db->where('password', $password);
  return $this->db->get('admin');
}

public function get_all_data_dokter($table)
{
    if ($table == 'dokter') {
        $this->db->select('dokter.*, spesialis.spesialis'); 
        $this->db->from('dokter');
        $this->db->join('spesialis', 'dokter.id_spesialis = spesialis.id_spesialis', 'left'); 
        return $this->db->get();
    } else {
        return $this->db->get($table);
    }
}

public function get_all_dokter_by_spesialis($id_spesialis)
{
    $this->db->select('dokter.*, spesialis.spesialis'); 
    $this->db->from('dokter');
    $this->db->join('spesialis', 'dokter.id_spesialis = spesialis.id_spesialis', 'left'); 
    $this->db->where('spesialis.id_spesialis', $id_spesialis);
    return $this->db->get()->result();
}


public function count_dokter_by_spesialis()
{
    $this->db->select('id_spesialis, COUNT(*) as jumlah_dokter');
    $this->db->from('dokter');
    $this->db->group_by('id_spesialis');
    $query = $this->db->get();
    return $query->result();
}

public function get_dokter_by_id($id_dokter)
{
    $this->db->select('dokter.*, spesialis.spesialis');
    $this->db->from('dokter');
    $this->db->join('spesialis', 'dokter.id_spesialis = spesialis.id_spesialis', 'left');
    $this->db->where('id_dokter', $id_dokter);
    return $this->db->get()->row();
}

public function get_temujanji_by_member_id($id_member)
{
    $this->db->select('temujanji.*, dokter.nama_dokter');
    $this->db->from('temujanji');
    $this->db->join('dokter', 'temujanji.id_dokter = dokter.id_dokter', 'left');
    $this->db->where('temujanji.id_member', $id_member);
    return $this->db->get()->result();
}

public function check_duplicate_temujanji($id_member, $id_dokter, $tanggal, $sesi)
{
    $this->db->where('id_member', $id_member);
    $this->db->where('id_dokter', $id_dokter);
    $this->db->where('tanggal', $tanggal);
    $this->db->where('sesi', $sesi);
    $query = $this->db->get('temujanji');
    return $query->num_rows() > 0;
}


public function get_all_data($table)
{
    if ($table == 'pasien') {
        $this->db->select('pasien.*, dokter.nama_dokter'); 
        $this->db->from('pasien');
        $this->db->join('dokter', 'pasien.id_dokter = dokter.id_dokter', 'left'); 
        return $this->db->get();
    } else {
        return $this->db->get($table);
    }
}

public function get_all_temujanji($table)
{
    if ($table == 'temujanji') {
        $this->db->select('temujanji.*, dokter.nama_dokter, member.nama_lengkap'); 
        $this->db->from('temujanji');
        $this->db->join('dokter', 'temujanji.id_dokter = dokter.id_dokter', 'left');
        $this->db->join('member', 'temujanji.id_member = member.id_member', 'left');
        return $this->db->get();
    } else {
        return $this->db->get($table);
    }
}


public function get_all_obat() {
  $query = $this->db->get('obat');
  return $query->result();
}

public function get_all_dokter() {
  $query = $this->db->get('dokter');
  return $query->result();
}

public function insert($table, $data)
{
  return $this->db->insert($table, $data);
}

public function get_by_id($tabel, $id){
  return $this->db->get_where($tabel, $id);
}

public function update($tabel, $data, $id_field, $id_value) {
  $this->db->where($id_field, $id_value);
  return $this->db->update($tabel, $data);
}

public function delete($tabel, $id, $val){
  $this->db->delete($tabel, array($id => $val));
}
}


