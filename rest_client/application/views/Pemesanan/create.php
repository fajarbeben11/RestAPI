<?php 
  echo form_open_multipart('pemesanan/create');

  $koneksi=mysqli_connect("localhost","root","","umkm");
  $idpemesan;
  $count;
  $sql = "SELECT * FROM pemesanan";
  $result = mysqli_query($koneksi,$sql);
  $row = mysqli_fetch_assoc($result);
  
  try{
      $sql = "SELECT COUNT(id_pemesan)+1 FROM pemesanan";
      $result = mysqli_query($koneksi, $sql);
      $row = mysqli_fetch_assoc($result);
      $count = $row['COUNT(id_pemesan)+1'];
      
  }catch(Exception $e) {
      echo 'Caught exception: ',  $e->getMessage(), "\n";
  }

  if($count <= 9){
      $idpemesan ="APL00000".(string)$count;
  }else if($count <99){
      $idpemesan ="APL00".(string)$count;
  }else{
      $idpemesan ="APL".(string)$count;
  }

?>
<!DOCTYPE html>
<html>
<head> 
    <title>APLIKASIKU - Pemesanan</title> 
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

<div id="wrapper">
    <center>
      <h2> <b>Pengisian Data Pemesan</b> </h2>
<table align="center" border=0  width=60% class=tab>
      <tr>
        <td>ID Pemesanan</td>
        <td><input type="text" name="id_pemesan" class="form-control" readonly value="<?php echo $idpemesan; ?>" required></td>
      </tr>
      <tr>
        <td>ID Pengguna</td>
        <td><input type="text" name="id_pengguna" class="form-control" readonly value="<?php echo $this->session->userdata('id_pengguna'); ?>" required> </td>
      </tr>
      <tr>
        <td>Nama Pemesan</td>
        <td><input type="text" name="nama_pemesan" class="form-control" value="<?php echo set_value('nama_pemesan'); ?>" required></td>
      </tr>
      <tr>
        <td>Email Pemesan</td>
        <td><input type="text" name="email_pemesan" class="form-control" value="<?php echo set_value('email_pemesan'); ?>" required></td>
      </tr>
      <tr>
        <td>Telp. Pemesan</td>
        <td><input type="text" name="telp_pemesan" class="form-control" value="<?php echo set_value('telp_pemesan'); ?>" required></td>
      </tr>
      <tr>
        <td>Tanggal Pesan</td>
        <td><input type="date" name="tgl_pesan" class="form-control" value="<?php echo set_value('tgl_pesan'); ?>" required></td>
      </tr>
      <tr>
        <td> <?php echo form_submit('submit','Selanjutnya');?> </td>
        <td> <?php echo anchor('Auth','Kembali');?></td>
    </tr>
</table>
</center>
</div>
</body>
</html>

<?php echo form_close(); ?>