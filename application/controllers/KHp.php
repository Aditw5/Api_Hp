<?php
error_reporting(0);
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class KHp extends CI_Controller
{
    function __construct()
    {
        // construct parent
        parent::__construct();
        $this->load->model('MKHp');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'index.php/hp/?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'index.php/hp/?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'index.php/hp/';
            $config['first_url'] = base_url() . 'index.php/hp/';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->MKHp->total_rows($q);
        $user = $this->MKHp->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'user_data' => $user,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $data['page'] = 'hp/list_hp';
        $this->load->view('admin', $data);
        // $this->load->view('user/user1_list', $data);
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('KHp/create_action'),
	    'id' => set_value('id'),
        'handphone' => set_value('handphone'),
	    'merk_hp' => set_value('merk_hp'),
	    'harga' => set_value('harga'),
	);
        $data['page'] = 'hp/form';
        $this->load->view('admin', $data);
        // $this->load->view('user/user1_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
        'handphone' => $this->input->post('handphone',TRUE),
		'merk_hp' => $this->input->post('merk_hp',TRUE),
		'harga' => $this->input->post('harga',TRUE),
	    );

            $this->MKHp->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('KHp'));
        }
    }

    public function update($id) 
    {
        $row = $this->MKHp->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('KHp/update_action'),
		'id' => set_value('id', $row->id),
        'handphone' => set_value('handphone', $row->handphone),
		'merk_hp' => set_value('merk_hp', $row->merk_hp),
		'harga' => set_value('harga', $row->harga),
	    );
            $data['page'] = 'hp/form';
            $this->load->view('admin', $data);
            // $this->load->view('user/user1_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('KHp'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
        'handphone' => $this->input->post('handphone',TRUE),
		'merk_hp' => $this->input->post('merk_hp',TRUE),
		'harga' => $this->input->post('harga',TRUE),
	    );

            $this->MKHp->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('KHp'));
        }
    }

    public function delete($id) 
    {
        $row = $this->MKHp->get_by_id($id);

        if ($row) {
            $this->MKHp->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('KHp'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('KHp'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('handphone', 'handphone', 'trim|required');
	$this->form_validation->set_rules('merk_hp', 'merk_hp', 'trim|required');
	$this->form_validation->set_rules('harga', 'harga', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    
}
