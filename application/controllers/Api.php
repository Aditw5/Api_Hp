<?php
class Api extends CI_Controller
{

    public function index()
    {
        $usr = $this->session->userdata('username');
        $this->load->model(array('MUser', 'MKeys'));
        // $data['dasbor'] = 'template/apikey';
        // $data['abud'] = 'akun';
        $data['res'] = $this->MUser->get_key($usr);
        // $this->load->view('template', $data);
        $data['page'] = 'template/api';
        $this->load->view('template', $data);
    }
}