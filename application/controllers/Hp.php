<?php

use chriskacerguis\RestServer\RestController;

class Hp extends RestController
{
    function __construct()
    {
        // construct parent
        parent::__construct();
        $this->load->model('MHp');
    }

    public function index_get()
    {

        // jika ada parameter id 
        $list_hp = $this->MHp->get_all();
        if ($list_hp) {
            $total_hp = count($list_hp);
            $this->response(
                array(
                    'status' => true,
                    'total_hp' => $total_hp,
                    'list_hp' => $list_hp
                ),
                200
            );
        } else {
            $this->response(
                array(
                    'status' => false,
                    'message' => 'Tidak Ada Data Buku'
                ),
                404
            );
        }
    }

    public function by_id_get()
    {
        // jika ada parameter id
        $id = $this->get('id');
        if ($id) {
            $data_hp = $this->MHp->get_by_id($id);
            if ($data_hp) {
                $this->response(
                    array(
                        'status' => true,
                        'data_hp' => $data_hp
                    ),
                    200
                );
            } else {
                $this->response(
                    array(
                        'status' => false,
                        'pesan' => 'ID ' . $id . ' Tidak Ditemukan'
                    ),
                    404
                );
            }
        } else {
            $this->response(
                array(
                    'status' => false,
                    'pesan' => 'Silahkan Masukkan Parameter Id'
                ),
                404
            );
        }
    }

    public function index_post()
    {
        $handphone = $this->post('handphone');
        $merk_hp = $this->post('merk_hp');
        $harga = $this->post('harga');
        

        $data_hp = array(
            'handphone' => $handphone,
            'merk_hp' => $merk_hp,
            'harga' => $harga
        );

        $this->MHp->insert($data_hp);
        $this->response(
            array(
                'status' => true,
                'pesan' => 'Data Berhasil Disimpan'
            ),
            200
        );
    }

    public function index_put()
    {
        $handphone = $this->put('handphone');
        $merk_hp = $this->put('merk_hp');
        $id = $this->put('id');
        $data_hp = array(
            'handphone' => $handphone,
            'merk_hp' =>  $merk_hp
        );

        $this->MHp->update($id, $data_hp);
        $this->response(
            array(
                'status' => true,
                'pesan' => 'Data Handphone Berhasil Diubah',
                'id' => $id
            ),
            200
        );
    }

    public function index_delete()
    {
        $id = $this->delete('id');
        $this->MHp->delete($id);
        $this->response(
            array(
                'Status' => true,
                'Pesan' => 'Data Handphone Berhasil Dihapus'
            ),
            200
        );
    }
}
