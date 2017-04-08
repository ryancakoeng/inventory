<?php 
	class M_peminjam extends CI_Model{
		function query_peminjam(){
			//mengakses isi tabel barang
			$query = $this->db->query ("SELECT * FROM peminjam");
			$query = $query->result();
			return $query;
		}

			function tambahdata() {
			$id_peminjam = $this->input->post('id_peminjam');
			$nama = $this->input->post('nama');
			$telp = $this->input->post('telp');
			$query = $this->db->query("insert into peminjam(id_peminjam, nama, telp)
			values ('$id_peminjam','$nama','$telp')");
		}

		function query_peminjam_id ($id_peminjam) {
			$query = $this->db->query("SELECT * FROM peminjam WHERE id_peminjam='$id_peminjam'");
			return $query;
		}
		
		function ubahdata($id_peminjam) {
			$id_peminjam = $this->input->post('id_peminjam');
			$nama = $this->input->post('nama');
			$telp = $this->input->post('telp');
			$query = $this->db->query("UPDATE peminjam SET id_peminjam='$id_peminjam', nama='$nama', telp='$telp'
										WHERE id_peminjam = '$id_peminjam'");
		}

		function hapusdata ($id_peminjam) {
			$query = $this->db->query("DELETE FROM peminjam where id_peminjam='$id_peminjam'");
		}
	}
 ?>