<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Suara extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('level')==NULL){
			redirect('auth');
		}
	}
	public function index(){
		$this->db->from('suara');
		$this->db->order_by('nama_tps_17', 'ASC');
		$suara = $this->db->get()->result_array();
		$data = array(
			'active'	=> 'Suara',
			'suara' 	=> $suara
		);
		$this->template->load('template', 'tps_index', $data);
	}

	public function simpan(){
		$total_suara_17		= $this->input->post('total_suara_17');
		$total_sah_17		= $this->input->post('total_sah_17');
		$total_tidaksah_17	= $this->input->post('total_tidaksah_17');
		$suara_no1_17		= $this->input->post('suara_no1_17');
		$suara_no2_17		= $this->input->post('suara_no2_17');
		$suara_no3_17		= $this->input->post('suara_no3_17');
		$nama_tps_17		= $this->input->post('nama_tps_17');

		if($total_suara_17 != ($total_sah_17+$total_tidaksah_17)){
			$this->session->set_flashdata('notif', 'Jumlah total suara tidak sama dengan penjumlahan total sah dengan total tidak sah');
			redirect('suara');
		} else if($total_sah_17 != ($suara_no1_17+$suara_no2_17+$suara_no3_17)){
			$this->session->set_flashdata('notif', 'jumlah sah tidak sesuai');
			redirect('suara');
		} else{
			$data = array(
				$total_suara_17		=> 'total_suara_17',
				$total_sah_17		=> 'total_sah_17',
				$total_tidaksah_17	=> 'total_tidaksah_17',
				$suara_no1_17		=> 'suara_no1_17',
				$suara_no2_17		=> 'suara_no2_17',
				$suara_no3_17		=> 'suara_no3_17',
				$nama_tps_17		=> 'nama_tps_17'
			);
			$this->db->insert('suara', $data);
			$this->session->set_flasdata('notif', 'berhasil');
			redirect('suara');
		}
	}
}