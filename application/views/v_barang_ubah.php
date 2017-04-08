<div align="center">
	<h3><font color="white">Ubah Data Barang</font></h3>
	<?php 
		echo form_open("c_barang/ubah");
		$row = $daftar_barang->row();
	?>
	
	<table>
		<tr>
			<td><font color="white">ID Barang</font></td>
			<td><font color="white">:</font></td>
			<td><?php echo form_input("id_barang", $row->id_barang);?></td>
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
			<td><font color="white">Kategori</font></td>
			<td><font color="white">:</font></td>
			<td><?php echo form_input("kategori", $row->kategori);?></td>
		</tr>
	</table>
	<br>
	<table>
		<tr>
			<td></td>
			<td>
				<?php echo form_submit ('submit','simpan','id_barang="submit"');?>
			</td>
			<td>&nbsp</td>
			<td>
			<?php
				echo form_close();
				echo form_open("c_barang/index");
				echo "<td>".form_submit('submit','kembali','id_barang="submit"')."</td>";
				echo form_close();
			?>
			</td>
		</tr>
	</table>
</div>