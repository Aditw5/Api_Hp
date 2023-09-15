<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}

    function register() {
        $this->load->view('register copy');
    }

    function reg_save() {
        $this->load->model(array('MUser', 'MKeys'));

        $nama_lengkap = $this->input->post('nama_lengkap');
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $data_user = array(
            'nama_lengkap' => $nama_lengkap,
            'username' => $username,
            'password' => $password
        );

        $id_user = $this->MUser->insert($data_user);

        $data_user = array(
            'user_id' => $id_user,
            'key' => md5(date('y-m-d H:i:s')),
            'level' => '1',
            'date_created' => '1'
        );

        $this->MKeys->insert($data_user);
        redirect('Login');
    }

    // function validasi() {

    //     $this->load->model('MUser');

    //     $u = $this->input->post('username');
    //     $p = $this->input->post('password');

    //     $hasil_validasi = $this->MUser->login($u, $p);
    //     if ($hasil_validasi) {
    //         echo "Login berhasil";
    //         $res = $this->MUser->get_key($u);
    //         echo "<br> Key Anda Adalah". $res->key;
    //         // $this->session->set_userdata($hasil_validasi);
    //         redirect('Main');
    //         exit;
    //     } else {
    //         $this->session->set_flashdata('pesan', 'Username atau Pasword Anda salah');
    //         redirect('login');
    //         exit;
    //     }
    // }


    // function validasi()
    // {
    //     $this->load->model('MUser');
    //     $username = $this->input->post('username');
    //     $password = $this->input->post('password');

    //     if ($this->MUser->login($username, $password) == true) {
    //         //echo "Username Dan Password Benar";  
    //         $row = $this->MUser->get_by_username($username);
    //         //print_r($row);
    //         $data_user = array(
    //             'username' => $username,
    //             'user_id' => $row->id,
    //             // 'hak_akses' => $row->hak_akses,
    //             'is_login' => true,
    //         );
    //         $this->session->set_userdata($data_user);
    //         redirect('Dashboard');
    //     } else {
    //         $this->session->set_flashdata('pesan', 'Username Atau Passowrd Salah!');
    //         redirect('Login');
    //     }
    //     exit;
    // }


    function validasi()
    {
        $this->load->model('MUser');
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if ($this->MUser->login($username, $password) == true) {
            //echo "Username Dan Password Benar";  
            $row = $this->MUser->get_by_username($username);
            //print_r($row);
            $data_user = array(
                'username' => $username,
                'user_id' => $row->id,
                'hak_akses' => $row->hak_akses,
                'is_login' => true,
            );
                $this->session->set_userdata($data_user);
                redirect('Dashboard');
        } else {
            $this->session->set_flashdata('pesan', 'Username Atau Passowrd Salah!');
            redirect('Login');
        }
        exit;
    }
    function logout()
    {
        session_destroy();
        redirect('Main');
    }


}
