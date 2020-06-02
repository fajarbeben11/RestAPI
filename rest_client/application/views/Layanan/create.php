<?php echo form_open_multipart('layanan/create');?>

<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <title>APLIKASIKU - Layanan</title> 
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
      <h2> <b>Beri Kami Saran</b> </h2>
<table align="center" border=0  width=50% class=tab>
	<tr>
    	<td>ID Pengguna</td>
    	<td><input type="text" name="id_pengguna" class="form-control" readonly value="<?php echo $this->session->userdata('id_pengguna'); ?>" required></td>
    </tr>
    <tr>
    	<td>Subjek</td>
    	<td><input type="text" name="subjek" class="form-control" value="<?php echo set_value('subjek'); ?>"></td>
    </tr>
    <tr>
    	<td>Pesan</td>
    	<td>
            <textarea name="pesan" cols="30" rows="10" class="form-control">
            <?php echo set_value('pesan'); ?>
            </textarea>
        </td>
    </tr>        
    <tr>
    	<td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('layanan','Kembali');?></td>
    </tr>
</table>
</center>
</div>
</body>
</html>
<?php echo form_close(); ?>