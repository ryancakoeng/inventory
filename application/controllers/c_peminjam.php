<?php 
	class C_peminjam extends CI_Controller {
		//Konstruktor
		public function __construct(){
			parent::__construct(); //inheret dari parent
			$this->load->helper('url');
			$this->load->database();
			$this->load->library('table');
			$this->load->helper ('form');
			$this->load->model("m_peminjam");
		}

		public function index(){
			$this->load->view('template/header');
			$data = array();
			$data["judul"] = "Inventory - Peminjam";
			$data["daftar_peminjam"] = $this->m_peminjam->query_peminjam();
			$this->load->view("v_peminjam", $data);
			$this->load->view('template/footer');
		}

		public function tambah() {
			$this->load->view('template/header');
			if ($this->input->post("submit")) {
				$this->m_peminjam->tambahdata();
				redirect("c_peminjam");
			}
			$this->load->view("v_peminjam_tambah");
			$this->load->view('template/footer');
		}

		public function ubah () {
			$this->load->view('template/header');
			$id_peminjam = $this->uri->segment(3);
			$data ["daftar_peminjam"]= $this->m_peminjam->query_peminjam_id($id_peminjam);
			if ($this->input->post("submit")) {
				$this->m_peminjam->ubahdata($id_peminjam);
				redirect("c_peminjam");
			}
			$this->load->view("V_peminjam_ubah",$data);
			$this->load->view('template/footer');
		}

		public function hapus () {
			$id_peminjam = $this->uri->segment(3);
			$this-> m_peminjam ->hapusdata($id_peminjam);
			redirect ("c_peminjam");
		}
	}
 ?>