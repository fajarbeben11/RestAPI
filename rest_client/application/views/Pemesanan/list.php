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
    <b>History Pemesanan</b>
  </h2>
<table border="1">
    <tr>
      <th>ID Pemesanan</th>
      <th>ID Pengguna</th>
      <th>Nama Pemesan</th>
      <th>Email Pemesan</th>
      <th>Telp. Pemesan</th>
      <th>Tanggal Pesan</th>
      <th>Aksi</th>
    </tr>
<?php
if(!empty($umkm)){ // Jika data pemesanan tidak sama dengan kosong, artinya jika data pengguna ada
    foreach ($umkm as $data){
        echo "<tr>
              <td>$data->id_pemesan</td>
              <td>$data->id_pengguna</td>
              <td>$data->nama_pemesan</td>
              <td>$data->email_pemesan</td>
              <td>$data->telp_pemesan</td>
              <td>$data->tgl_pesan</td>
              <td>".anchor('Pemesanan/edit/'.$data->id_pemesan,'Edit')."
                  ".anchor('Pemesanan/delete/'.$data->id_pemesan,'Delete')."</td>
              </tr>";
    }
}else{ // Jika data pengguna kosong
       echo "<tr><td align='center' colspan='7'>Data Tidak Ditemukan</td></tr>";
      }
    ?>
</table>
<font color="red">
<?php echo $this->session->flashdata('hasil'); ?>
</font> <br>
<a href="http://localhost/rest_client/index.php/Pemesanan"><b>Tambah data</b></a>
</center>
</body>
</html>