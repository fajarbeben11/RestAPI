<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class PemesananModel extends CI_Model {
    
    public function get($id_pengguna){
        $this->db->where('id_pengguna', $this->session->userdata('id_pengguna')); // Untuk menambahkan Where Clause : username='$username'
        $result = $this->db->get('pemesanan')->row(); // Untuk mengeksekusi dan mengambil data hasil query
        return $result;
    }
}

?>