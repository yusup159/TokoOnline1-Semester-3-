<?php
class Kategori extends CI_Controller{
	public function elektronik(){
		$data['elektronik'] = $this->model_kategori->data_elektronik()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('elektronik',$data);
		$this->load->view('templates/footer');
	}
	public function pria(){
		$data['pria'] = $this->model_kategori->data_pria()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pria',$data);
		$this->load->view('templates/footer');
	}
	public function wanita(){
		$data['wanita'] = $this->model_kategori->data_wanita()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('wanita',$data);
		$this->load->view('templates/footer');
	}
	public function anak_anak(){
		$data['anak_anak'] = $this->model_kategori->data_anak_anak()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('anak_anak',$data);
		$this->load->view('templates/footer');
	}
	public function peralatan_olahraga(){
		$data['peralatan_olahraga'] = $this->model_kategori->data_peralatan_olahraga()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('peralatan_olahraga',$data);
		$this->load->view('templates/footer');
	}

}