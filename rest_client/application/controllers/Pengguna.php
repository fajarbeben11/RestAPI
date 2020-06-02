<?php
Class Pengguna extends CI_Controller{

    var $API ="";

    function __construct() {
        parent::__construct();
        $this->API="http://localhost/rest_server/index.php";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
    }

    // menampilkan data pengguna
    function index(){
        $data['umkm'] = json_decode($this->curl->simple_get($this->API.'/pengguna')); //pengguna name tabel
        $this->load->view('pengguna/list',$data);
    }

    // insert data pengguna
    function create(){
        if(isset($_POST['submit'])){
            $data = array(
                'id_pengguna'=>$this->input->post('id_pengguna'),
                'username'=>$this->input->post('username'),
                'password'=>$this->input->post('password'));
            $insert =  $this->curl->simple_post($this->API.'/pengguna', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($insert)
            {
                $this->session->set_flashdata('hasil','Insert Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Insert Data Gagal');
            }
            redirect('Auth');
        }else{
            $this->load->view('pengguna/create');
        }
    }

    // edit data pengguna
    function edit(){
        if(isset($_POST['submit'])){
            $data = array(
                'id_pengguna'=>$this->input->post('id_pengguna'),
                'username'=>$this->input->post('username'),
                'password'=>$this->input->post('password'));
            $update =  $this->curl->simple_put($this->API.'/pengguna', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($update)
            {
                $this->session->set_flashdata('hasil','Update Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Update Data Gagal');
            }
            redirect('Pengguna');
        }else{
            $params = array('id_pengguna'=>  $this->uri->segment(3));
            $data['umkm'] = json_decode($this->curl->simple_get($this->API.'/pengguna',$params));
            $this->load->view('pengguna/edit',$data);
        }
    }

    // delete data pengguna
    function delete($id_pengguna){
        if(empty($id_pengguna)){
            redirect('Pengguna');
        }else{
            $delete =  $this->curl->simple_delete($this->API.'/pengguna', array('id_pengguna'=>$id_pengguna), array(CURLOPT_BUFFERSIZE => 10)); 
            if($delete)
            {
                $this->session->set_flashdata('hasil','Delete Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Delete Data Gagal');
            }
            redirect('Pengguna');
        }
    }
}