<?php 
	class M_peminjaman extends CI_Model{
		function query_peminjaman(){
			//mengakses isi tabel barang
			$query = $this->db->query ("SELECT * FROM peminjaman");
			$query = $query->result();
			return $query;
		}

			function tambahdata() {
			$id_peminjaman = $this->input->post('id_peminjaman');
			$id_peminjam = $this->input->post('id_peminjam');
			$id_barang = $this->input->post('id_barang');
			$id_petugas = $this->input->post('id_petugas');
			$tgl_awal = $this->input->post('tgl_awal');
			$tgl_akhir = $this->input->post('tgl_akhir');
			$status_pinjam = $this->input->post('status_pinjam');
			$query = $this->db->query("insert into peminjaman(id_peminjaman, id_peminjam, id_barang, id_petugas, tgl_awal, tgl_akhir, status_pinjam)
			values ('$id_peminjaman','$id_peminjam','$id_barang','$id_petugas','$tgl_awal','$tgl_akhir', '$status_pinjam')");
		}

		function query_peminjaman_id ($id_peminjaman) {
			$query = $this->db->query("SELECT * FROM peminjaman WHERE id_peminjaman='$id_peminjaman'");
			return $query;
		}
		
		function ubahdata($id_peminjaman) {
			$id_peminjaman = $this->input->post('id_peminjaman');
			$id_peminjam = $this->input->post('id_peminjam');
			$id_barang = $this->input->post('id_barang');
			$id_petugas = $this->input->post('id_petugas');
			$tgl_awal = $this->input->post('tgl_awal');
			$tgl_akhir = $this->input->post('tgl_akhir');
			$status_pinjam = $this->input->post('status_pinjam');
			$query = $this->db->query("UPDATE peminjaman SET id_peminjaman='$id_peminjaman', id_peminjam='$id_peminjam', id_barang='$id_barang', id_petugas='$id_petugas', tgl_awal='$tgl_awal', tgl_akhir='$tgl_akhir', status_pinjam='$status_pinjam'	WHERE id_peminjaman = '$id_peminjaman'");
		}

		function hapusdata ($id_peminjaman) {
			$query = $this->db->query("DELETE FROM peminjaman where id_peminjaman='$id_peminjaman'");
		}
	}
 ?>