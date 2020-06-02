<!DOCTYPE html>
<html>
<head> 
    <title>APLIKASIKU - History Pemesanan</title> 
    <link href="<?php echo base_url('assets/css/css/style.css'); ?>" rel="stylesheet"> 
    <link href="<?php echo base_url('assets/css/css/bootstrap.css'); ?>" rel="stylesheet">
    <style type="text/css">
    .login-page { 
            display: flex; 
            align-items: center; 
            justify-content: center; 
            height: 100vh;
        }
    #wrapper{
        width:1000px;
        margin:0 auto;
    } 
  </style> 
</head>
<body>

  <div class="navbar navbar-expand bg-dark navbar-dark"> 
        <a class="navbar-brand" href="#">APLIKASIKU</a> 
        <ul class="navbar-nav">
            <li class="nav-item"> 
                <a class="nav-link" href="http://localhost/rest_client/index.php/Auth">Home</a> 
            </li>
            <li class="nav-item"> 
                <a class="nav-link" href="http://localhost/rest_client/index.php/Pemesanan"> Pemesanan</a>
            </li>
            <li class="nav-item"> 
                <a class="nav-link" href="http://localhost/rest_client/index.php/Pemesanan/lihat"> History</a>
            </li>
            <li class="nav-item"> 
                <a class="nav-link" href="http://localhost/rest_client/index.php/Layanan"> Layanan</a>
            </li>  
            <li> 
                <a class="nav-link" href="<?php echo site_url('auth/logout');?>">Log Out</a>                 
            </li> 
        </ul> 
    </div>

<center>
  <h2>
    <b>Data Perusahaan</b>
  </h2>
<table border="1">
    <tr>
      <th>ID Pemesananan</th>
      <th>Nama Perusahaan</th>
      <th>Bidang Industri</th>
      <th>Deskripsi Perusahaan</th>
      <th>Email Perusahaan</th>
      <th>Telp. Perusahaan</th>
      <th>Tema</th>
      <th>Request</th>
      <th>Aksi</th>
    </tr>
<?php
if(!empty($umkm)){ // Jika data perusahaan tidak sama dengan kosong, artinya jika data pengguna ada
    foreach ($umkm as $data){
        echo "<tr>
              <td>$data->id_pemesanan</td>
              <td>$data->nama_perusahaan</td>
              <td>$data->bidang_industri</td>
              <td>$data->deskripsi_perusahaan</td>
              <td>$data->email_perusahaan</td>
              <td>$data->telp_perusahaan</td>
              <td>$data->tema</td>
              <td>$data->request</td>
              <td>".anchor('Perusahaan/edit/'.$data->id_pemesanan,'Edit')."
                  ".anchor('Perusahaan/delete/'.$data->id_pemesanan,'Delete')."</td>
              </tr>";
    }
}else{ // Jika data pengguna kosong
       echo "<tr><td align='center' colspan='9'>Data Tidak Ditemukan</td></tr>";
      }
    ?>
</table>
<font color="red"> <b> <?php echo $this->session->flashdata('hasil'); ?> </b></font>