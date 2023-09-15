<?php 
class MKeys extends CI_Model
{
    public $table = 'keys';
    public $id ='id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

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

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id', $q);
    $this->db->or_like('user_id', $q);
	$this->db->or_like('key', $q);
	$this->db->or_like('level', $q);
	// $this->db->or_like('ignore_limits', $q);
    // $this->db->or_like('is_private_key', $q);
    // $this->db->or_like('ip_addresses', $q);
    // $this->db->or_like('date_create', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }
}
