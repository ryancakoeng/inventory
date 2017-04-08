<?php 
	class M_petugas extends CI_Model{
		function query_petugas(){
			//mengakses isi tabel barang
			$query = $this->db->query ("SELECT * FROM petugas");
			$query = $query->result();
			return $query;
		}

			function tambahdata() {
			$id_petugas = $this->input->post('id_petugas');
			$nama = $this->input->post('nama');
			$telp = $this->input->post('telp');
			$query = $this->db->query("insert into petugas(id_petugas, nama, telp)
			values ('$id_petugas','$nama','$telp')");
		}

		function query_petugas_id ($id_petugas) {
			$query = $this->db->query("SELECT * FROM petugas WHERE id_petugas='$id_petugas'");
			return $query;
		}
		
		function ubahdata($id_petugas) {
			$id_petugas = $this->input->post('id_petugas');
			$nama = $this->input->post('nama');
			$telp = $this->input->post('telp');
			$query = $this->db->query("UPDATE petugas SET id_petugas='$id_petugas', nama='$nama', telp='$telp'
										WHERE id_petugas = '$id_petugas'");
		}

		function hapusdata ($id_petugas) {
			$query = $this->db->query("DELETE FROM petugas where id_petugas='$id_petugas'");
		}
	}
 ?>