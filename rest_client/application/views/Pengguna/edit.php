<?php echo form_open('pengguna/edit');?>
<?php echo form_hidden('id_pengguna',$umkm[0]->id_pengguna);?>

<table>
    <tr>
    	<td>ID Pengguna</td>
    	<td><input type="text" name="id_pengguna" value="<?php echo set_value('id_pengguna', $umkm[0]->id_pengguna); ?>" readonly></td>
    </tr>
    <tr>
    	<td>Username</td>
    	<td><input type="text" name="username" value="<?php echo set_value('username', $umkm[0]->username); ?>"></td>
    </tr>
    <tr>
    	<td>Password</td>
    	<td><input type="password" name="password" value="<?php echo set_value('password', $umkm[0]->password); ?>"></td>
    </tr>
    <tr>
    	<td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('pengguna','Kembali');?></td>
    </tr>
</table>
<?php
echo form_close();
?>