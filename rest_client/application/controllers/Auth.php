<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
  public function __construct(){
    parent::__construct();
    //$this->load->library('session');
    //$this->load->library('database');
    //$this->load->helper('form');
    //$this->load->helper('url');
    $this->load->model('UserModel');
  }

  public function index(){
    if($this->session->userdata('authenticated')) // Jika user sudah login (Session authenticated ditemukan)
      redirect('page/welcome'); // Redirect ke page welcome
    $this->load->view('login'); // Load view login.php
  }

  function register(){ 
        $this->load->view("Pengguna/create"); 
    }

  public function login(){
    $username = $this->input->post('username'); // Ambil isi dari inputan username pada form login
    $password = $this->input->post('password'); // Ambil isi dari inputan password pada form login
    $user = $this->UserModel->get($username); // Panggil fungsi get yang ada di UserModel.php
    if(empty($user)){ // Jika hasilnya kosong / user tidak ditemukan
      $this->session->set_flashdata('message', 'Kesalahan Pengisian USERNAME'); // Buat session flashdata
      redirect('auth'); // Redirect ke halaman login
    }else{
      if($password == $user->password){ // Jika password yang diinput sama dengan password yang didatabase
        $session = array(
          'authenticated'=>true, // Buat session authenticated dengan value true
          'id_pengguna'=>$user->id_pengguna, // Buat session id_pengguna
          'username'=>$user->username,  // Buat session username
          'password'=>$user->password // Buat session password
        );
        $this->session->set_userdata($session); // Buat session sesuai $session
        redirect('page/welcome'); // Redirect ke halaman welcome
      }else{
        $this->session->set_flashdata('message', 'Kesalahan Pengisian PASSWORD'); // Buat session flashdata
        redirect('auth'); // Redirect ke halaman login
      }
    }
  }
/*
  function prosesDaftar() 
    { 
        $this->load->model("UserModel","",TRUE); 
        $user = array( 
        	"id_pengguna" => $this->input->post("id_pengguna"),
            "username" => $this->input->post("username"), 
            "password" => $this->input->post("password")
        );  
        if($this->UserModel->insertUser($user)){ 
            redirect(site_url("auth")); 
        }else{ 
            redirect(site_url("auth/register")); 
        } 
     }
 */

  public function logout(){
    $this->session->sess_destroy(); // Hapus semua session
    redirect('auth'); // Redirect ke halaman login
  }

 }
?>