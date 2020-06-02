<html>
<head>
  <title>APLIKASIKU</title>
  <link href="<?php echo base_url('assets/css/css/bootstrap.css');?>" rel="stylesheet"> 
  <style type="text/css">
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
        <div class="card-header text-center"><b>LOG IN</b></div> 
        <div class="card-body"> 
            <form method="post" action="<?php echo base_url('index.php/auth/login') ?>">
              <label>Username</label>
              <input type="text" name="username" placeholder="Username" class="form-control"><br>
              <label>Password</label>
              <input type="password" name="password" placeholder="Password" class="form-control"><br>
              <button type="submit">Login</button>
          </form>
          <div style="color: red;margin-bottom: 15px;">
            <?php
            // Cek apakah terdapat session nama message
            if($this->session->flashdata('message')){ // Jika ada
              echo $this->session->flashdata('message'); // Tampilkan pesannya
            }
            ?>
          </div>

        </div> 
        <div class="card-footer text-center"> 
        Tidak Punya Akun? 
        <br><a class="nav-link" href="http://localhost/rest_client/index.php/Pengguna/create"> Register</a> 
      </div>
</body>
</html>