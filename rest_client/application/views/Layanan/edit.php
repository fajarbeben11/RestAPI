<?php echo form_open('layanan/edit');?>
<?php echo form_hidden('id_pengguna',$umkm[0]->id_pengguna);?>

<table>
    <tr>
    	<td>ID Pengguna</td>
    	<td><input type="text" name="id_pengguna" value="<?php echo set_value('id_pengguna', $umkm[0]->id_pengguna); ?>" readonly></td>
    </tr>
    <tr>
    	<td>Subjek</td>
    	<td><input type="text" name="subjek" value="<?php echo set_value('subjek', $umkm[0]->subjek); ?>"></td>
    </tr>
    <tr>
    	<td>Pesan</td>
    	<td>
            <textarea name="pesan" cols="30" rows="10">
            <?php echo set_value('pesan', $umkm[0]->pesan); ?>
            </textarea>
        </td>
    </tr>
    <tr>
    	<td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('layanan','Kembali');?></td>
    </tr>
</table>
<?php
echo form_close();
?>