<?php

use LDAP\Result;

class MUser extends CI_Model
{
    public $table = 'user';
    public $id ='id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    function login($username, $password)
    {
        $this->db->from($this->table);
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $result = $this->db->count_all_results();
        if ($result) {
            return true;
        } else {
            return false;
        }
    }


    public function CheckUser($username, $password)
    {
        $query = $this->db->get_where($this->table,
                array('username'=>$username,
                      'password'=>$password)
                );
        //cek apakah ada atau tidak
         if ($query->num_rows() > 0){
             return true;
         } else {
             return false;
         }
    }

    function get_by_username($username)
    {
        $this->db->where('username', $username);
        return $this->db->get($this->table)->row();
    }
    //  //cek username
    //  function get_by_username($username)
    //  {
    //       $this->db->where('username', $username);
    //       return $this->db->get($this->table)->row();
    //  } 

    //get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    //get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }

    //get total rows
    function total_rows()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    //insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id(); //mengambil id terakhir
    }

    //update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    //delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

    function get_key($username) {
        $this->db->select('u. username , u. nama_lengkap, u. password, u. hak_akses, k.key');
        $this->db->from('user u');
        $this->db->where('u.username', $username);
        $this->db->join('keys k', 'u.id = k.user_id', 'left');
        return $this->db->get()->row();
    }

    // get total rows
    // function total_rows($q = NULL) {
    //     $this->db->like('id', $q);
    // $this->db->or_like('nama_lengkap', $q);
	// $this->db->or_like('username', $q);
	// $this->db->or_like('password', $q);
	// $this->db->or_like('hak_akses', $q);
	// $this->db->from($this->table);
    //     return $this->db->count_all_results();
    // }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id', $q);
    $this->db->or_like('nama_lengkap', $q);
	$this->db->or_like('username', $q);
	$this->db->or_like('password', $q);
	$this->db->or_like('hak_akses', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }
    
}
