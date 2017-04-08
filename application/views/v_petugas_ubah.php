<div align="center">
	<h3><font color="white">Ubah Data Petugas</font></h3>
	<?php 
		echo form_open("c_petugas/ubah");
		$row = $daftar_petugas->row();
	?>
	
	<table>
		<tr>
			<td><font color="white">ID Petugas</font></td>
			<td><font color="white">:</font></td>
			<td><?php echo form_input("id_petugas", $row->id_petugas);?></td>
		</tr>
		<tr>
			<td>&nbsp</td>
			<td>&nbsp</td>
			<td>&nbsp</td>
		</tr>
		<tr>
			<td><font color="white">Nama</font></td>
			<td><font color="white">:</font></td>
			<td><?php echo form_input("nama", $row->nama);?></td>
		</tr>
		<tr>
			<td>&nbsp</td>
			<td>&nbsp</td>
			<td>&nbsp</td>
		</tr>
		<tr>
			<td><font color="white">Telepon</font></td>
			<td><font color="white">:</font></td>
			<td><?php echo form_input("telp", $row->telp);?></td>
		</tr>
	</table>
	<br>
	<table>
		<tr>
			<td></td>
			<td></td>
			<td>
				<?php echo form_submit ('submit','simpan','id_petugas="submit"');?>
			</td>
			<td>&nbsp</td>
			<?php
				echo form_close();
				echo form_open("c_petugas/index");
				echo "<td>".form_submit('submit','kembali','	="submit"')."</td>";
				echo form_close();
			?>
		</tr>
	</table>
</div>