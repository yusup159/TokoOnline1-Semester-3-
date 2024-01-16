<?php
class Model_kategori extends CI_Model{
	public function data_elektronik(){
		return $this->db->get_where("tb_barang",array('kategori'=> 'elektronik'));
	}
	public function data_pria(){
		return $this->db->get_where("tb_barang",array('kategori'=> 'pria'));
	}
	public function data_wanita(){
		return $this->db->get_where("tb_barang",array('kategori'=> 'wanita'));
	}
	public function data_anak_anak(){
		return $this->db->get_where("tb_barang",array('kategori'=> 'anak anak'));
	}
	public function data_peralatan_olahraga(){
		return $this->db->get_where("tb_barang",array('kategori'=> 'peralatan olahraga'));
	}
	
}