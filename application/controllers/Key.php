<?php
error_reporting(0);
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Key extends CI_Controller
{
    function __construct()
    {
        // construct parent
        parent::__construct();
        $this->load->model('MKeys');
    }
    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'index.php/key/?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'index.php/key/?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'index.php/key/';
            $config['first_url'] = base_url() . 'index.php/key/';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->MKeys->total_rows($q);
        $user = $this->MKeys->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'user_data' => $user,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $data['page'] = 'key/list_key';
        $this->load->view('admin', $data);
        // $this->load->view('user/user1_list', $data);
    }

    

    public function delete($id) 
    {
        $row = $this->MKeys->get_by_id($id);

        if ($row) {
            $this->MKeys->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('Key'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('Key'));
        }
    }

    
}
