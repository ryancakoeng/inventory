<div align="center">
	<h3><font color="white">Tambah Data Peminjaman</font></h3>
	<?php echo form_open("c_peminjaman/tambah"); ?>
	
	<table>
		<tr>
			<td><font color="white">ID Peminjaman </font></td>
			<td><font color="white">:</font>  </td>
			<td><?php echo form_input("id_peminjaman");?></td>
		</tr>
		<tr>
			<td>&nbsp</td>
			<td>&nbsp</td>
			<td>&nbsp</td>
		</tr>
		<tr>
			<td><font color="white">ID Peminjam</font> </td>
			<td><font color="white">:</font> </td>
			<td><?php echo form_input("id_peminjam");?></td>
		</tr>
		<tr>
			<td>&nbsp</td>
			<td>&nbsp</td>
			<td>&nbsp</td>
		</tr>
		<tr>
			<td><font color="white">ID Barang</font></td>
			<td><font color="white"> : </font></td>
			<td><?php echo form_input("id_barang");?></td>
		</tr>
		<tr>
			<td>&nbsp</td>
			<td>&nbsp</td>
			<td>&nbsp</td>
		</tr>
		<tr>
			<td><font color="white">ID Petugas</font></td>
			<td><font color="white"> : </font></td>
			<td><?php echo form_input("id_petugas");?></td>
		</tr>
		<tr>
			<td>&nbsp</td>
			<td>&nbsp</td>
			<td>&nbsp</td>
		</tr>
		<tr>
			<td><font color="white">Tanggal Pinjam</font></td>
			<td><font color="white"> : </font></td>
			<td><?php echo form_input("tgl_awal");?></td>
		</tr>
		<tr>
			<td>&nbsp</td>
			<td>&nbsp</td>
			<td>&nbsp</td>
		</tr>
		<tr>
			<td><font color="white">Tanggal Kembali</font></td>
			<td><font color="white"> : </font></td>
			<td><?php echo form_input("tgl_akhir");?></td>
		</tr>
		<tr>
			<td>&nbsp</td>
			<td>&nbsp</td>
			<td>&nbsp</td>
		</tr>
		<tr>
			<td><font color="white">Status</font></td>
			<td><font color="white"> : </font></td>
			<td><?php echo form_input("status_pinjam");?></td>
		</tr>
	</table>
	<br>
	<table>
		<tr>
			<td></td>
			<td>
				<?php echo form_submit ('submit','simpan','id_peminjaman="submit"');?>
			</td>
			<td>&nbsp</td>
			<td>
				<?php
					echo form_close();
					echo form_open("c_peminjaman/index");
					echo "<td>".form_submit('submit','kembali','id_peminjaman="submit"')."</td>";
					echo form_close();
				?>
			</td>
		</tr>
	</table>
</div>