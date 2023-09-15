<?php
class MAnggota extends CI_Model
{
    public $table = 'anggota';
    public $name = 'nama';
    public $id = 'id';
    public $no_anggota ='no_anggota';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    public function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }

    function get_by_noanggota($no_anggota)
    {
        $this->db->where($this->no_anggota, $no_anggota);
        return $this->db->get($this->table)->row();
    }


    public function get_by_nama($nama)
    {
        $this->db->like($this->name, $nama);
        return $this->db->get($this->table)->row();
    }

    public function total_rows()
    {
        $this->db->from($this->table);
        return $this->db->count_all_restult();
    }

    public function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    public function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }
    
    public function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}
