<?php 
	class C_peminjaman extends CI_Controller {
		//Konstruktor
		public function __construct(){
			parent::__construct(); //inheret dari parent
			$this->load->helper('url');
			$this->load->database();
			$this->load->library('table');
			$this->load->helper ('form');
			$this->load->model("m_peminjaman");
		}

		public function index(){
			$this->load->view('template/header');
			$data = array();
			$data["judul"] = "Inventory - Peminjaman";
			$data["daftar_peminjaman"] = $this->m_peminjaman->query_peminjaman();
			$this->load->view("v_peminjaman", $data);
			$this->load->view('template/footer');
		}

		public function tambah() {
			$this->load->view('template/header');
			if ($this->input->post("submit")) {
				$this->m_peminjaman->tambahdata();
				redirect("c_peminjaman");
			}
			$this->load->view("v_peminjaman_tambah");
			$this->load->view('template/footer');
		}

		public function ubah () {
			$this->load->view('template/header');
			$id_peminjaman = $this->uri->segment(3);
			$data ["daftar_peminjaman"]= $this->m_peminjaman->query_peminjaman_id($id_peminjaman);
			if ($this->input->post("submit")) {
				$this->m_peminjaman->ubahdata($id_peminjaman);
				redirect("c_peminjaman");
			}
			$this->load->view("V_peminjaman_ubah",$data);
			$this->load->view('template/footer');
		}

		public function hapus () {
			$id_peminjaman = $this->uri->segment(3);
			$this-> m_peminjaman ->hapusdata($id_peminjaman);
			redirect ("c_peminjaman");
		}
	}
 ?>