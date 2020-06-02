<?php echo form_open('pemesanan/edit');?>
<?php echo form_hidden('id_pemesan',$umkm[0]->id_pemesan);?>

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
      <h2> <b>Edit Data Pemesan</b> </h2>
<table align="center" border=0  width=50% class=tab>
    <tr>
        <td>ID Pemesanan</td>
        <td><input type="text" name="id_pemesan" value="<?php echo set_value('id_pemesan', $umkm[0]->id_pemesan); ?>" readonly></td>
    </tr>
    <tr>
    	<td>ID Pengguna</td>
    	<td><input type="text" name="id_pengguna" value="<?php echo set_value('id_pengguna', $umkm[0]->id_pengguna); ?>" readonly></td>
    </tr>
    <tr>
    	<td>Nama Pemesan</td>
    	<td><input type="text" name="nama_pemesan" value="<?php echo set_value('nama_pemesan', $umkm[0]->nama_pemesan); ?>"></td>
    </tr>
    <tr>
    	<td>Email Pemesan</td>
    	<td><input type="text" name="email_pemesan" value="<?php echo set_value('email_pemesan', $umkm[0]->email_pemesan); ?>"></td>
    </tr>
    <tr>
        <td>Telp. Pemesan</td>
        <td><input type="text" name="telp_pemesan" value="<?php echo set_value('telp_pemesan', $umkm[0]->telp_pemesan); ?>"></td>
    </tr>
    <tr>
        <td>Tanggal Pesan</td>
        <td><input type="text" name="tgl_pesan" value="<?php echo set_value('tgl_pesan', $umkm[0]->tgl_pesan); ?>"></td>
    </tr>
    <tr>
    	<td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('pemesanan','Kembali');?></td>
    </tr>
</table>
</center>
</div>
<?php echo form_close(); ?>
</body>
</html>