<font color="orange">
<?php echo $this->session->flashdata('hasil'); ?>
</font>
<table border="1">
    <tr>
      <th>ID Pengguna</th>
      <th>Subjek</th>
      <th>Pesan</th>
      <th>Aksi</th>
    </tr>
<?php
if(!empty($umkm)){ // Jika data layanan tidak sama dengan kosong, artinya jika data pengguna ada
    foreach ($umkm as $data){
        echo "<tr>
              <td>$data->id_pengguna</td>
              <td>$data->subjek</td>
              <td>$data->pesan</td>
              <td>".anchor('Layanan/edit/'.$data->id_pengguna,'Edit')."
                  ".anchor('Layanan/delete/'.$data->id_pengguna,'Delete')."</td>
              </tr>";
    }
}else{ // Jika data layanan kosong
       echo "<tr><td align='center' colspan='5'>Data Tidak Ditemukan</td></tr>";
      }
    ?>
</table>
<a href="http://localhost/rest_client/index.php/Layanan/create">+ Tambah data<a>