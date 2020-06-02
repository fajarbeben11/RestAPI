<?php echo form_open_multipart('perusahaan/create');?>
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
        <td><input type="text" name="id_pemesanan" class="form-control" readonly value="<?php echo $this->session->userdata('id_pengguna'); ?>" required></td>
    </tr>
	<tr>
    	<td>Nama Perusahaan</td>
    	<td><input type="text" name="nama_perusahaan" class="form-control" value="<?php echo set_value('nama_perusahaan'); ?>" required></td>
    </tr>
    <tr>
    	<td>Bidang Industri</td>
    	<td><input type="text" name="bidang_industri" class="form-control" value="<?php echo set_value('bidang_industri'); ?>" required></td>
    </tr>
    <tr>
    	<td>Deskripsi Perusahaan</td>
    	<td>
            <textarea name="deskripsi_perusahaan" cols="30" rows="10" class="form-control">
            <?php echo set_value('deskripsi_perusahaan'); ?>
            </textarea>
        </td>
    </tr> 
    <tr>
        <td>Email Perusahaan</td>
        <td><input type="email" name="email_perusahaan" class="form-control" value="<?php echo set_value('email_perusahaan'); ?>" required></td>
    </tr>  
    <tr>
        <td>Telp. Perusahaan</td>
        <td><input type="text" name="telp_perusahaan" class="form-control" value="<?php echo set_value('telp_perusahaan'); ?>" required></td>
    </tr> 
    <tr>
        <td>Tema</td>
        <td>
            <input type="radio" name="tema" value="Modern"/> Modern <br>
            <input type="radio" name="tema" value="Klasik"/> Klasik <br>
            <input type="radio" name="tema" value="Elegan"/> Elegan <br>
            <input type="radio" name="tema" value="Natural"/> Natural <br>
        </td>
    </tr> 
    <tr>
        <td>Request</td>
        <td>
            <textarea name="request" cols="30" rows="10" class="form-control">
                <?php echo set_value('request'); ?>
            </textarea>
        </td>
    </tr>     
    <tr>
    	<td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('perusahaan','Kembali');?></td>
    </tr>
</table>
</center>
</div>
</body>
</html>
<?php echo form_close(); ?>