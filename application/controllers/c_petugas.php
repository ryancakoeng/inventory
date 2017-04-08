<?php 
	class C_petugas extends CI_Controller {
		//Konstruktor
		public function __construct(){
			parent::__construct(); //inheret dari parent
			$this->load->helper('url');
			$this->load->database();
			$this->load->library('table');
			$this->load->helper ('form');
			$this->load->model("m_petugas");
		}

		public function index(){
			$this->load->view('template/header');
			$data = array();
			$data["judul"] = "Inventory - Petugas";
			$data["daftar_petugas"] = $this->m_petugas->query_petugas();
			$this->load->view("v_petugas", $data);
			$this->load->view('template/footer');
		}

		public function tambah() {
			$this->load->view('template/header');
			if ($this->input->post("submit")) {
				$this->m_petugas->tambahdata();
				redirect("c_petugas");
			}
			$this->load->view("v_petugas_tambah");
			$this->load->view('template/footer');
		}

		public function ubah () {
			$this->load->view('template/header');
			$id_petugas = $this->uri->segment(3);
			$data ["daftar_petugas"]= $this->m_petugas->query_petugas_id($id_petugas);
			if ($this->input->post("submit")) {
				$this->m_petugas->ubahdata($id_petugas);
				redirect("c_petugas");
			}
			$this->load->view("V_petugas_ubah",$data);
			$this->load->view('template/footer');
		}

		public function hapus () {
			$id_petugas = $this->uri->segment(3);
			$this-> m_petugas ->hapusdata($id_petugas);
			redirect ("c_petugas");
		}
	}
 ?>