<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{

		$usr = $this->session->userdata('username');
		$this->load->model(array('MUser', 'MKeys'));
        // $data['dasbor'] = 'template/apikey';
        $data['page'] = 'template/profil_admin';
		 $data['res'] = $this->MUser->get_key($usr);
		$this->load->view('admin', $data);




		
        
        // $data['abud'] = 'akun';
       
        // $this->load->view('template/apikey', $data);
	}
}
