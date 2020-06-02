<?php 
    echo form_open_multipart('pengguna/create');

    $koneksi=mysqli_connect("localhost","root","","umkm");
    $idpengguna;
    $count;
    $sql = "SELECT * FROM pengguna";
    $result = mysqli_query($koneksi,$sql);
    $row = mysqli_fetch_assoc($result);
    
    try{
        $sql = "SELECT COUNT(id_pengguna)+1 FROM pengguna";
        $result = mysqli_query($koneksi, $sql);
        $row = mysqli_fetch_assoc($result);
        $count = $row['COUNT(id_pengguna)+1'];
        
    }catch(Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }

    if($count <= 9){
        $idpengguna ="USER00000".(string)$count;
    }else if($count <99){
        $idpengguna ="USER00".(string)$count;
    }else{
        $idpengguna ="USER".(string)$count;
    }


?>
<!DOCTYPE>
<!DOCTYPE html>
<html>
<head> 
    <title>Register User</title> 
    <link rel="stylesheet" href="<?php echo base_url('assets/css/css/bootstrap.css') ?>"> 
    <style> 
        .login-page { 
            display: flex; 
            align-items: center; 
            justify-content: center; 
            height: 100vh; 
        } 
    </style> 
</head> 
<body class="login-page"> 
    <div class="card"> 
        <div class="card-header text-center"> <b>Register</b></div> 
        <div class="card-body"> 
<table>
	<tr>
    	<td>
            <label class="label">ID Pengguna</label>
    	   <input type="text" name="id_pengguna" class="form-control" readonly value="<?php echo $idpengguna; ?>"> <br>
        </td>
    </tr>
    <tr>
    	<td>
            <label class="label">Username</label>
            <input type="text" name="username" class="form-control" value="<?php echo set_value('username'); ?>"> <br>
        </td>
    </tr>
    <tr>
    	<td>
            <label class="label">Password</label>
            <input type="password" name="password" class="form-control" value="<?php echo set_value('password'); ?>"> <br>
        </td>
    </tr>        
    <tr>
    	<td>
            <?php echo form_submit('submit','Register');?>
            <br>
            </td>
    </tr>
</table>
</div> 
        <div class="card-footer text-center"> 
        Sudah Punya Akun? <br>
        <a class="nav-link" href="http://localhost/rest_client/index.php/Auth"> Sign In</a>
        </div> 
    </div> 
</body> 
</html>
<?php echo form_close();?>