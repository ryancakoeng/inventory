<div align="center">
	<h3><font color="white">Tambah Data Peminjam</font></h3>
	<?php echo form_open("c_peminjam/tambah"); ?>
	
	<table>
		<tr>
			<td><font color="white">ID Peminjam</font></td>
			<td><font color="white">:</font></td>
			<td><?php echo form_input("id_peminjam");?></td>
		</tr>
		<tr>
			<td>&nbsp</td>
			<td>&nbsp</td>
			<td>&nbsp</td>
		</tr>
		<tr>
			<td><font color="white">Nama</font></td>
			<td><font color="white">:</font></td>
			<td><?php echo form_input("nama");?></td>
		</tr>
		<tr>
			<td>&nbsp</td>
			<td>&nbsp</td>
			<td>&nbsp</td>
		</tr>
		<tr>
			<td><font color="white">Telepon</font></td>
			<td><font color="white">:</font></td>
			<td><?php echo form_input("telp");?></td>
		</tr>
	</table>
	<br>
	<table>
		<tr>
			<td></td>
			<td>
				<?php echo form_submit ('submit','simpan','id_peminjam="submit"');?>
			</td>
			<td>&nbsp</td>
			<td>
				<?php
					echo form_close();
					echo form_open("c_peminjam/index");
					echo "<td>".form_submit('submit','kembali','id_peminjam="submit"')."</td>";
					echo form_close();
				?>
			</td>
		</tr>
	</table>
</div>