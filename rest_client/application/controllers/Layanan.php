<?php
Class Layanan extends CI_Controller{

    var $API ="";

    function __construct() {
        parent::__construct();
        $this->API="http://localhost/rest_server/index.php";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
    }

    // menampilkan data layanan
    function index(){
        $data['umkm'] = json_decode($this->curl->simple_get($this->API.'/layanan')); //pengguna name tabel
        $this->load->view('layanan/create',$data);
    }

    function sukses(){
        $this->load->view('layanan/tersimpan');
    }

    // insert data layanan
    function create(){
        if(isset($_POST['submit'])){
            $data = array(
                'id_pengguna'=>$this->input->post('id_pengguna'),
                'subjek'=>$this->input->post('subjek'),
                'pesan'=>$this->input->post('pesan'));
            $insert =  $this->curl->simple_post($this->API.'/layanan', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($insert)
            {
                $this->session->set_flashdata('hasil','Insert Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Insert Data Gagal');
            }
            redirect('layanan/sukses');
        }else{
            $this->load->view('layanan/create');
        }
    }

    // edit data pengguna
    function edit(){
        if(isset($_POST['submit'])){
            $data = array(
                'id_pengguna'=>$this->input->post('id_pengguna'),
                'subjek'=>$this->input->post('subjek'),
                'pesan'=>$this->input->post('pesan'));
            $update =  $this->curl->simple_put($this->API.'/layanan', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($update)
            {
                $this->session->set_flashdata('hasil','Update Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Update Data Gagal');
            }
            redirect('Layanan');
        }else{
            $params = array('id_pengguna'=>  $this->uri->segment(3));
            $data['umkm'] = json_decode($this->curl->simple_get($this->API.'/layanan',$params));
            $this->load->view('layanan/edit',$data);
        }
    }

    // delete data layanan
    function delete($id_pengguna){
        if(empty($id_pengguna)){
            redirect('Layanan');
        }else{
            $delete =  $this->curl->simple_delete($this->API.'/layanan', array('id_pengguna'=>$id_pengguna), array(CURLOPT_BUFFERSIZE => 10)); 
            if($delete)
            {
                $this->session->set_flashdata('hasil','Delete Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Delete Data Gagal');
            }
            redirect('Layanan');
        }
    }
}