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
            <h1> Selamat Datang di <b>Aplikasiku.</b> </h1>
            <!-- <?php echo $this->session->userdata('username'); ?> -->
        </div>
    </div>
        <p align=justify> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <b>Aplikasiku</b> adalah studio layanan jasa pembuatan aplikasi berbasis website untuk perusahaan bisnis Anda. <b>Aplikasiku</b> menyediakan banyak pilihan paket website, dan jenis website yang dapat disesuaikan dengan kebutuhan bisnis Anda.
        Hubungi segera <b>Aplikasiku</b> sebelum Anda membuat perusahaan bisnis Anda. Maka Anda akan mendapatkan sebuah website yang bagus.
        </p>
        </div> 
    <p align="center">
        <a href="http://localhost/rest_client/assets/image/1.jpg">
            <img src="http://localhost/rest_client/assets/image/1.jpg" width="600" height="300"/>
        </a> &nbsp;
        <a href="http://localhost/rest_client/assets/image/dua.jpg">
            <img src="http://localhost/rest_client/assets/image/dua.jpg" width="600" height="300"/>
        </a>
        <br><br><br>
        <a href="http://localhost/rest_client/assets/image/tiga.jpg">
            <img src="http://localhost/rest_client/assets/image/tiga.jpg" width="600" height="300"/>
        </a> &nbsp;
        <a href="http://localhost/rest_client/assets/image/empat.jpg">
            <img src="http://localhost/rest_client/assets/image/empat.jpg" width="600" height="300"/>
        </a>
    </p>
    </div> 
    <div class="jumbotron text-center"> 
           <div class="content">
            <h5>Copyright &copy; aplikasiku. 2020</a></h5>
        </div>
</body>
</html>