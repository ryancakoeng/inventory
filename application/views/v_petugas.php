
	<center>
	<h2><font color="white">Daftar Petugas Inventory</font></h2>
	<?php	
	
		//Tabel kosong
		$this->table->set_empty('Tidak ada data pada tabel petugas');
		
		//Template
		$tmp1 = array (
			'table_open' => '<table width="80%">',
			
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
		echo anchor("c_petugas/tambah","Tambah Data Petugas");
		
		$this->table->set_heading('No','ID Petugas','Nama','Telepon','Ubah','Hapus');
		
		//tampilkan record	
		$i=1;
		foreach ($daftar_petugas as $row) {
			//echo $i.' | '.$row->nama.' | '.$row->telp.'<br/>';
			$this->table->add_row($i, $row->id_petugas, $row->nama, $row->telp, anchor("c_petugas/ubah/".$row->id_petugas,"Ubah"), anchor("c_petugas/hapus/".$row->id_petugas,"Hapus"));
			$i++;
		}
		echo $this->table->generate();
	
	?>
		
	</center>
