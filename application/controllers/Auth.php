<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends CI_Controller {

	public function index(){  
		$data = array(
			'judul_hal' => 'Login',
		); 
        $this->load->view('login', $data);
	}

	public function login(){
        $username 	= $this->input->post('username');   
        $password   = md5($this->input->post('password'));
        $this->db->from('user')->where('username', $username);   
		$cek = $this->db->get()->row();
		if ($cek == NULL) {
			$this->session->set_flashdata('notif', 'Username Tidak Ditemukan');		
			redirect('auth');
		} else if ($cek->password==$password){
            $data = array(
                'id_user'  => $cek->id_user,
                'nama'     => $cek->nama,
                'username' => $cek->username,
                'level'    => $cek->level,
            );
            $this->session->set_userdata($data);
            redirect('home');
        } else {
			$this->session->set_flashdata('notif', 'Password Salah');
		}
		redirect('auth');
	}

	public function logout(){
        $this->session->sess_destroy();
        redirect('home');
    }
}
