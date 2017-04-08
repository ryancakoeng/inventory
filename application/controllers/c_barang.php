<?php 
	class C_barang extends CI_Controller {
		//Konstruktor
		public function __construct(){
			parent::__construct(); //inheret dari parent
			$this->load->helper('url');
			$this->load->database();
			$this->load->library('table');
			$this->load->helper ('form');
			$this->load->model("m_barang");
		}

		public function index(){
			$this->load->view('template/header');
			$data = array();
			$data["judul"] = "Inventory - Barang";
			$data["daftar_barang"] = $this->m_barang->query_barang();
			$this->load->view("v_barang", $data);
			$this->load->view('template/footer');
		}

		public function tambah() {
			$this->load->view('template/header');
			if ($this->input->post("submit")) {
				$this->m_barang->tambahdata();
				redirect("c_barang");
			}
			$this->load->view("v_barang_tambah");
			$this->load->view('template/footer');
		}

		public function ubah () {
			$this->load->view('template/header');
			$id_barang = $this->uri->segment(3);
			$data ["daftar_barang"]= $this->m_barang->query_barang_id($id_barang);
			if ($this->input->post("submit")) {
				$this->m_barang->ubahdata($id_barang);
				redirect("c_barang");
			}
			$this->load->view("V_barang_ubah",$data);
			$this->load->view('template/footer');
		}

		public function hapus () {
			$id_barang = $this->uri->segment(3);
			$this-> m_barang ->hapusdata($id_barang);
			redirect ("c_barang");
		}
	}
 ?>