<?php

class Dashboard extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/userguide3/general/urls.html
     */
    public function index()
    {
        // $data['dasbor'] = 'template/dashboard';
        // return $this->load->view('template/dashboard_view', $data);
        // $this->load->view('akun');


        $usr = $this->session->userdata('username');
        $this->load->model(array('MUser', 'MKeys'));
        $data['dasbor'] = 'akun';
        // $data['abud'] = 'akun';
        $data['res'] = $this->MUser->get_key($usr);
        $this->load->view('akun', $data);

    }
}