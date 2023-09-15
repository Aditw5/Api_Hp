<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	public function index()
	{
		$usr = $this->session->userdata('username');
        $this->load->model(array('MUser', 'MKeys'));
        $data['dasbor'] = 'template/apikey';
        // $data['abud'] = 'akun';
        $data['res'] = $this->MUser->get_key($usr);
        $this->load->view('template/apikey', $data);
	}
}
