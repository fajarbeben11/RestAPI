<font color="orange">
<?php echo $this->session->flashdata('hasil'); ?>
</font>
<table border="1">
    <tr>
      <th>ID Pengguna</th>
      <th>Username</th>
      <th>Password</th>
      <th>Aksi</th>
    </tr>
<?php
if(!empty($umkm)){ // Jika data pengguna tidak sama dengan kosong, artinya jika data pengguna ada
    foreach ($umkm as $data){
        echo "<tr>
              <td>$data->id_pengguna</td>
              <td>$data->username</td>
              <td>$data->password</td>
              <td>".anchor('Pengguna/edit/'.$data->id_pengguna,'Edit')."
                  ".anchor('Pengguna/delete/'.$data->id_pengguna,'Delete')."</td>
              </tr>";
    }
}else{ // Jika data pengguna kosong
       echo "<tr><td align='center' colspan='5'>Data Tidak Ditemukan</td></tr>";
      }
    ?>
</table>
<a href="http://localhost/rest_client/index.php/Pengguna/create">+ Tambah data<a>