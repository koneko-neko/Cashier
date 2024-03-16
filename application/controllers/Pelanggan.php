<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pelanggan extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('level')==NULL){
			redirect('auth');
		}
	}

	public function index(){ 
        $this->db->from('pelanggan');
		$this->db->order_by('nama', 'ASC');
		$user = $this->db->get()->result_array(); 
		$data = array(
			'judul_hal' => 'Kasir || Pelanggan',
			'active'	=> 'Pelanggan',
            'user'      => $user
		); 
        $this->template->load('template', 'pelanggan_index', $data);
	}

    public function simpan(){
        $data = array(
            'alamat' => $this->input->post('alamat'),
            'telp' => $this->input->post('telp'),
            'nama' => $this->input->post('nama')
        );
        $this->db->insert('pelanggan', $data);
        $this->session->set_flashdata('notif', 'Pelanggan Berhasil Ditambahkan!.');
		redirect('pelanggan');
    }

    public function hapus($id_pelanggan){
        $where = array(
			'id_pelanggan' => $id_pelanggan
		);
        $this->db->delete('pelanggan', $where);
		$this->session->set_flashdata('notif', 'Hapus Pelanggan Berhasil!.');
        redirect('pelanggan');
    }

    public function edit($id_pelanggan){
		$this->db->from('pelanggan');
		$this->db->where('id_pelanggan', $id_pelanggan);
		$user = $this->db->get()->row();
		$data = array(
			'judul_hal' => 'Kasir || Edit Data Pelanggan',
			'active'	=> 'Pelanggan',    
			'user' 		=> $user
		); 
        $this->template->load('template', 'pelanggan_edit', $data);
	}

    public function update(){
		$where = array(
            'id_pelanggan' => $this->input->post('id_pelanggan')
        );
        $data = array(
            'alamat'   => $this->input->post('alamat'),
            'telp'          => $this->input->post('telp'),
            'nama'          => $this->input->post('nama')
        );
		$this->db->update('pelanggan', $data, $where);
		$this->session->set_flashdata('notif', 'Edit Pelanggan Berhasil.');
		redirect('pelanggan');
	}
}
