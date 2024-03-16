<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Produk extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('level')!=='Admin'){
			redirect('home');
		}
	}

	public function index(){ 
		$this->db->select('*');
        $this->db->from('produk');
		$this->db->order_by('nama', 'ASC');
		$user = $this->db->get()->result_array(); 
		$data = array(
			'judul_hal' => 'Kasir || Produk',
			'active'	=> 'Produk',
            'user'      => $user
		); 
        $this->template->load('template', 'produk_index', $data);
	}

    public function simpan(){
        $this->db->from('produk')->where('kode_produk', $this->input->post('kode_produk'));
		$cek = $this->db->get()->result_array();
		if ($cek == NULL) {
			$data = array(
				'kode_produk' => $this->input->post('kode_produk'),
				'stok' => $this->input->post('stok'),
				'nama' => $this->input->post('nama'),
				'harga' => $this->input->post('harga')
			);
			$this->db->insert('produk', $data);
			$this->session->set_flashdata('notif', 'Berhasil Menambahkan Produk.');
		} else {
			$this->session->set_flashdata('notif', 'Kode Produk sudah ada.');
		}
		redirect('produk');
    }

    public function hapus($id_produk){
        $where = array(
			'id_produk' => $id_produk
		);
        $this->db->delete('produk', $where);
		$this->session->set_flashdata('notif', 'Hapus Produk Berhasil!.');
        redirect('produk');
    }

    public function edit($id_produk){
		$this->db->from('produk');
		$this->db->where('id_produk', $id_produk);
		$user = $this->db->get()->row();
		$data = array(
			'judul_hal' => 'Kasir || Edit Data Produk',
			'active'	=> 'Produk',    
			'user' 		=> $user
		); 
        $this->template->load('template', 'produk_edit', $data);
	}

    public function update(){
		$where = array(
            'id_produk' => $this->input->post('id_produk')
        );
        $data = array(
            'kode_produk'   => $this->input->post('kode_produk'),
            'stok'          => $this->input->post('stok'),
            'nama'          => $this->input->post('nama'),
            'harga'         => $this->input->post('harga'),
        );
		$this->db->update('produk', $data, $where);
		$this->session->set_flashdata('notif', 'Edit Produk Berhasil.');
		redirect('produk');
	}
}
