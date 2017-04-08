<?php 
	class M_barang extends CI_Model{
		function query_barang(){
			//mengakses isi tabel barang
			$query = $this->db->query ("SELECT * FROM barang");
			$query = $query->result();
			return $query;
		}

			function tambahdata() {
			$id_barang = $this->input->post('id_barang');
			$nama = $this->input->post('nama');
			$kategori = $this->input->post('kategori');
			$query = $this->db->query("insert into barang(id_barang, nama, kategori)
			values ('$id_barang','$nama','$kategori')");
		}

		function query_barang_id ($id_barang) {
			$query = $this->db->query("SELECT * FROM barang WHERE id_barang='$id_barang'");
			return $query;
		}
		
		function ubahdata($id_barang) {
			$id_barang = $this->input->post('id_barang');
			$nama = $this->input->post('nama');
			$kategori = $this->input->post('kategori');
			$query = $this->db->query("UPDATE barang SET id_barang='$id_barang', nama='$nama', kategori='$kategori'
										WHERE id_barang = '$id_barang'");
		}

		function hapusdata ($id_barang) {
			$query = $this->db->query("DELETE FROM barang where id_barang='$id_barang'");
		}
	}
 ?>