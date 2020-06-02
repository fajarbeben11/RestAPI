<?php
Class Pemesanan extends CI_Controller{

    var $API ="";

    function __construct() {
        parent::__construct();
        $this->API="http://localhost/rest_server/index.php";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('PemesananModel');
    }

    // menampilkan data pemesanan
    function index(){
        $data['umkm'] = json_decode($this->curl->simple_get($this->API.'/pemesanan')); //pemesanan name tabel
        $this->load->view('pemesanan/create',$data);
    }

    function lihat(){
        $data['umkm'] = json_decode($this->curl->simple_get($this->API.'/pemesanan')); //pemesanan name tabel
        $this->load->view('pemesanan/list',$data);
    }

    // insert data pemesanan
    function create(){
        if(isset($_POST['submit'])){
            $data = array(
                'id_pemesan'=>$this->input->post('id_pemesan'),
                'id_pengguna'=>$this->input->post('id_pengguna'),
                'nama_pemesan'=>$this->input->post('nama_pemesan'),
                'email_pemesan'=>$this->input->post('email_pemesan'),
                'telp_pemesan'=>$this->input->post('telp_pemesan'),
                'tgl_pesan'=>$this->input->post('tgl_pesan'));
            $insert =  $this->curl->simple_post($this->API.'/pemesanan', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($insert)
            {
                $this->session->set_flashdata('hasil','Insert Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Insert Data Gagal');
            }
            redirect('http://localhost/rest_client/index.php/Perusahaan/create');
        }else{
            $this->load->view('Auth');
        }
    }

    // edit data pengguna
    function edit(){
        if(isset($_POST['submit'])){
            $data = array(
                'id_pemesan'=>$this->input->post('id_pemesan'),
                'id_pengguna'=>$this->input->post('id_pengguna'),
                'nama_pemesan'=>$this->input->post('nama_pemesan'),
                'email_pemesan'=>$this->input->post('email_pemesan'),
                'telp_pemesan'=>$this->input->post('telp_pemesan'),
                'tgl_pesan'=>$this->input->post('tgl_pesan'));
            $update =  $this->curl->simple_put($this->API.'/pemesanan', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($update)
            {
                $this->session->set_flashdata('hasil','Update Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Update Data Gagal');
            }
            redirect('Pemesanan/lihat');
        }else{
            $params = array('id_pemesan'=>  $this->uri->segment(3));
            $data['umkm'] = json_decode($this->curl->simple_get($this->API.'/pemesanan',$params));
            $this->load->view('pemesanan/edit',$data);
        }
    }

    // delete data pengguna
    function delete($id_pemesan){
        if(empty($id_pemesan)){
            redirect('Pemesanan');
        }else{
            $delete =  $this->curl->simple_delete($this->API.'/pemesanan', array('id_pemesan'=>$id_pemesan), array(CURLOPT_BUFFERSIZE => 10)); 
            if($delete)
            {
                $this->session->set_flashdata('hasil','Delete Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Delete Data Gagal');
            }
            redirect('http://localhost/rest_client/index.php/Pemesanan/lihat');
        }
    }
}