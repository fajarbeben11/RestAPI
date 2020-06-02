<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class UserModel extends CI_Model {
    
    public function get($username){
        $this->db->where('username', $username); // Untuk menambahkan Where Clause : username='$username'
        $result = $this->db->get('pengguna')->row(); // Untuk mengeksekusi dan mengambil data hasil query
        return $result;
    }

    function insertUser($user){ 
        return $this->db->insert("pengguna",$user); 
    }
/*
    function get_id_pengguna(){
        $q = $this->db->query("SELECT MAX(RIGHT(id_pengguna,4)) AS kd_max FROM pengguna WHERE DATE(tanggal)=CURDATE()");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%04s", $tmp);
            }
        }else{
            $kd = "0001";
        }
        date_default_timezone_set('Asia/Jakarta');
        return date('dmy').$kd;
    }
 
    function simpan_id($id_pengguna){
        $hasil=$this->db->query("INSERT INTO pengguna(id_pengguna) VALUES ('$id_pengguna')");
        return $hasil;
    }
    */
}