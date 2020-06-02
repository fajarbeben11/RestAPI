<?php
Class Perusahaan extends CI_Controller{

    var $API ="";

    function __construct() {
        parent::__construct();
        $this->API="http://localhost/rest_server/index.php";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
    }

    // menampilkan data perusahaan
    function index(){
        $data['umkm'] = json_decode($this->curl->simple_get($this->API.'/perusahaan')); //pengguna name tabel
        $this->load->view('perusahaan/list',$data);
    }

    // insert data perusahaan
    function create(){
        if(isset($_POST['submit'])){
            $data = array(
                'id_pemesanan'=>$this->input->post('id_pemesanan'),
                'nama_perusahaan'=>$this->input->post('nama_perusahaan'),
                'bidang_industri'=>$this->input->post('bidang_industri'),
                'deskripsi_perusahaan'=>$this->input->post('deskripsi_perusahaan'),
                'email_perusahaan'=>$this->input->post('email_perusahaan'),
                'telp_perusahaan'=>$this->input->post('telp_perusahaan'),
                'tema'=>$this->input->post('tema'),
                'request'=>$this->input->post('request'));
            $insert =  $this->curl->simple_post($this->API.'/perusahaan', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($insert)
            {
                $this->session->set_flashdata('hasil','Insert Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Insert Data Gagal');
            }
            redirect('perusahaan');
        }else{
            $this->load->view('perusahaan/create');
        }
    }

    // edit data perusahaan
    function edit(){
        if(isset($_POST['submit'])){
            $data = array(
                'id_pemesanan'=>$this->input->post('id_pemesanan'),
                'nama_perusahaan'=>$this->input->post('nama_perusahaan'),
                'bidang_industri'=>$this->input->post('bidang_industri'),
                'deskripsi_perusahaan'=>$this->input->post('deskripsi_perusahaan'),
                'email_perusahaan'=>$this->input->post('email_perusahaan'),
                'telp_perusahaan'=>$this->input->post('telp_perusahaan'),
                'tema'=>$this->input->post('tema'),
                'request'=>$this->input->post('request'));
            $update =  $this->curl->simple_put($this->API.'/perusahaan', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($update)
            {
                $this->session->set_flashdata('hasil','Update Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Update Data Gagal');
            }
            redirect('Perusahaan');
        }else{
            $params = array('id_pemesanan'=>  $this->uri->segment(3));
            $data['umkm'] = json_decode($this->curl->simple_get($this->API.'/perusahaan',$params));
            $this->load->view('perusahaan/edit',$data);
        }
    }

    // delete data perusahaan
    function delete($id_pemesanan){
        if(empty($id_pemesanan)){
            redirect('Perusahaan');
        }else{
            $delete =  $this->curl->simple_delete($this->API.'/perusahaan', array('id_pemesanan'=>$id_pemesanan), array(CURLOPT_BUFFERSIZE => 10)); 
            if($delete)
            {
                $this->session->set_flashdata('hasil','Delete Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Delete Data Gagal');
            }
            redirect('Perusahaan');
        }
    }
}