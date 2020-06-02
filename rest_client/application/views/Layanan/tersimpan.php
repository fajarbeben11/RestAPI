<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <title>APLIKASIKU - Home</title> 
    <link href="<?php echo base_url('assets/css/css/bootstrap.css') 
?>" rel="stylesheet"> 
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
    <br> 
    <div class="container-fluid"> 
        <div class="jumbotron text-center"> 
           <div class="content">
            <h1> Terimakasih Atas Masukan Anda</b> </h1>
        </div>
    </div>
</body>
</html>