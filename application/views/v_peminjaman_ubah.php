<div align="center">
	<h3><font color="white">Ubah Data Peminjaman</font></h3>
	<?php 
		echo form_open("c_peminjaman/ubah");
		$row = $daftar_peminjaman->row();
	?>
	
	<table>
		<tr>
			<td><font color="white">ID Peminjaman</font></td>
			<td><font color="white">:</font></td>
			<td><?php echo form_input("id_peminjaman", $row->id_peminjaman);?></td>
		</tr>
		<tr>
			<td>&nbsp</td>
			<td>&nbsp</td>
			<td>&nbsp</td>
		</tr>
		<tr>
			<td><font color="white">ID Peminjam</font></td>
			<td><font color="white">:</font></td>
			<td><?php echo form_input("id_peminjam", $row->id_peminjam);?></td>
		</tr>
		<tr>
			<td>&nbsp</td>
			<td>&nbsp</td>
			<td>&nbsp</td>
		</tr>
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
			<td><font color="white">Tanggal Pinjam</font></td>
			<td><font color="white">:</font></td>
			<td><?php echo form_input("tgl_awal", $row->tgl_awal);?></td>
		</tr>
		<tr>
			<td>&nbsp</td>
			<td>&nbsp</td>
			<td>&nbsp</td>
		</tr>
		<tr>
			<td><font color="white">Tanggal Kembali</font></td>
			<td><font color="white">:</font></td>
			<td><?php echo form_input("tgl_akhir", $row->tgl_akhir);?></td>
		</tr>
		<tr>
			<td>&nbsp</td>
			<td>&nbsp</td>
			<td>&nbsp</td>
		</tr>
		<tr>
			<td><font color="white">Status</font></td>
			<td><font color="white">:</font></td>
			<td><?php echo form_input("status_pinjam", $row->status_pinjam);?></td>
		</tr>
	</table>
	<br>
	<table>
		<tr>
			<td></td>
			<td></td>
			<td>
				<?php echo form_submit ('submit','simpan','id_peminjaman="submit"');?>
			</td>
			<td>&nbsp</td>
			<?php
				echo form_close();
				echo form_open("c_peminjaman/index");
				echo "<td>".form_submit('submit','kembali','	="submit"')."</td>";
				echo form_close();
			?>
		</tr>
	</table>
</div>