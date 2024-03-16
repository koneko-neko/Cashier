<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pengguna extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('level')!='Admin'){
			redirect('home');
		}
	}
	
	public function index(){  
		$this->db->from('user');
		$this->db->order_by('nama', 'ASC');
		$user = $this->db->get()->result_array();
		$data = array(
			'judul_hal' => 'Kasir || Data Pengguna',
			'active'	=> 'Pengguna',
			'user' 		=> $user
		); 
        $this->template->load('template', 'pengguna_index', $data);
	}
	
	public function simpan(){
		$this->db->from('user')->where('username', $this->input->post('username'));
		$cek = $this->db->get()->result_array();
	
		if ($cek == NULL) {
			$data = array(
				'username' => $this->input->post('username'),
				'nama' => $this->input->post('nama'),
				'password' => md5($this->input->post('password')),
				'level' => $this->input->post('level'),
			);
			$this->db->insert('user', $data);
			$this->session->set_flashdata('notif', 'Berhasil Menambahkan User.');
		} else {
			$this->session->set_flashdata('notif', 'Username sudah ada.');
		}
	
		redirect('pengguna');
	}

	public function hapus($id_user){
        $where = array(
			'id_user' => $id_user
		);
        $this->db->delete('user', $where);
		$this->session->set_flashdata('notif', 'Hapus User Berhasil!.');
        redirect('pengguna');
    }

	public function edit($id_user){
		$this->db->from('user')->where('id_user', $id_user);
		$user = $this->db->get()->row();
		$data = array(
			'judul_hal' => 'Kasir || Edit Data Pengguna',
			'active'	=> 'Pengguna',
			'user' 		=> $user
		); 
        $this->template->load('template', 'pengguna_edit', $data);
	}

	public function update(){
		$where = array(
            'id_user' => $this->input->post('id_user')
        );
		$data = array(
			'nama' => $this->input->post('nama'),
			'level' => $this->input->post('level')
		);
		$this->db->update('user', $data, $where);
		$this->session->set_flashdata('notif', 'Edit Berhasil.');
		redirect('pengguna');
	}

	public function reset($id_user){
		$where = array(
            'id_user' => $id_user
        );
		$data = array(
			'password' => md5('user123')
		);
		$this->db->update('user', $data, $where);
		$this->session->set_flashdata('notif', 'Edit Password Berhasil.');
		redirect('pengguna');
	}

}
