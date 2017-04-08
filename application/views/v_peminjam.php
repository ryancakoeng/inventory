
	<center>
	<h2><font color="white">Daftar Peminjam Inventroy</font></h2>
	<?php	
	
		//Tabel kosong
		$this->table->set_empty('Tidak ada data pada tabel peminjam');
		
		//Template
		$tmp1 = array (
			'table_open' => '<table border="0" width="80%"
			cellpading="4" cellspacing="2">',
			
			'heading_row_start' => '<tr align="center">',
			'heading_row_end' => '</tr>',
			'heading_cell_start' => '<th bgcolor="#8b8b83">',
			'heading_cell_end' => '</th>',
			
			'row_start' => '<tr align="">',
			'row_end' => '</tr>',
			'cell_start' => '<td bgcolor="#eeeee0">',
			'cell_end' => '</td>',
			
			'row_alt_start' => '<tr align="">',
			'row_alt_end' => '</tr>',
			'cell_alt_start' => '<td bgcolor="#eeeee0">',
			'cell_alt_end' => '</td>',
			
			'table_close' => '</table>'
		);
		
		$this->table->set_template($tmp1);
		
		//tampilkan query
		//$this->table->set_caption('Daftar Tamu');
		
		//link tambah data
		echo anchor("c_peminjam/tambah","Tambah Data Peminjam");
		
		$this->table->set_heading('No','ID Peminjam','Nama','Telepon','Ubah','Hapus');
		
		//tampilkan record	
		$i=1;
		foreach ($daftar_peminjam as $row) {
			//echo $i.' | '.$row->nama.' | '.$row->telp.'<br/>';
			$this->table->add_row($i, $row->id_peminjam, $row->nama, $row->telp, anchor("c_peminjam/ubah/".$row->id_peminjam,"Ubah"), anchor("c_peminjam/hapus/".$row->id_peminjam,"Hapus"));
			$i++;
		}
		echo $this->table->generate();
	
	?>
		
	</center>
