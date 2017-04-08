
	<center>
	<h2><font color="white">Daftar Peminjaman Inventory</font></h2>
	<?php	
	
		//Tabel kosong
		$this->table->set_empty('Tidak ada data pada tabel peminjaman');
		
		//Template
		$tmp1 = array (
			'table_open' => '<table width="98%">',
			
			'heading_row_start' => '<tr >',
			'heading_row_end' => '</tr>',
			'heading_cell_start' => '<th  bgcolor="#8b8b83">',
			'heading_cell_end' => '</th>',
			
			'row_start' => '<tr align="left">',
			'row_end' => '</tr>',
			'cell_start' => '<td bgcolor="#eeeee0">',
			'cell_end' => '</td>',
			
			'row_alt_start' => '<tr align="left">',
			'row_alt_end' => '</tr>',
			'cell_alt_start' => '<td bgcolor="#eeeee0">',
			'cell_alt_end' => '</td>',
			
			'table_close' => '</table>'
		);
		
		$this->table->set_template($tmp1);
		
		//tampilkan query
		//$this->table->set_caption('Daftar Tamu');
		
		//link tambah data
		echo anchor("c_peminjaman/tambah","Tambah Data Peminjaman");
		
		$this->table->set_heading('No','ID Peminjaman','ID Peminjamn','ID Barang','ID Petugas','Tanggal Pinjam','Tanggal Kembali','Status','Ubah','Hapus');
		
		//tampilkan record	
		$i=1;
		foreach ($daftar_peminjaman as $row) {
			//echo $i.' | '.$row->nama.' | '.$row->telp.'<br/>';
			$this->table->add_row($i, $row->id_peminjaman, $row->id_peminjam, $row->id_barang, $row->id_petugas, $row->tgl_awal, $row->tgl_akhir, $row->status_pinjam, anchor("c_peminjaman/ubah/".$row->id_peminjaman,"Ubah"), anchor("c_peminjaman/hapus/".$row->id_peminjaman,"Hapus"));
			$i++;
		}
		echo $this->table->generate();
	
	?>
		
	</center>
