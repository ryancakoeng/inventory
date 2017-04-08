<div align="center">
	<h3><font color="white">Tambah Data Petugas</font></h3>
	<?php echo form_open("c_petugas/tambah"); ?>
	
	<table>
		<tr>
			<td><font color="white">ID Petugas </font></td>
			<td><font color="white">:</font>  </td>
			<td><?php echo form_input("id_petugas");?></td>
		</tr>
		<tr>
			<td>&nbsp</td>
			<td>&nbsp</td>
			<td>&nbsp</td>
		</tr>
		<tr>
			<td><font color="white">Nama</font> </td>
			<td><font color="white">:</font> </td>
			<td><?php echo form_input("nama");?></td>
		</tr>
		<tr>
			<td>&nbsp</td>
			<td>&nbsp</td>
			<td>&nbsp</td>
		</tr>
		<tr>
			<td><font color="white">Telepon</font></td>
			<td><font color="white"> : </font></td>
			<td><?php echo form_input("telp");?></td>
		</tr>
	</table>
	<br>
	<table>
		<tr>
			<td></td>
			<td>
				<?php echo form_submit ('submit','simpan','id_petugas="submit"');?>
			</td>
			<td>&nbsp</td>
			<td>
				<?php
					echo form_close();
					echo form_open("c_petugas/index");
					echo "<td>".form_submit('submit','kembali','id_petugas="submit"')."</td>";
					echo form_close();
				?>
			</td>
		</tr>
	</table>
</div>