<?php

use chriskacerguis\RestServer\RestController;

class Anggota extends RestController
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('MAnggota');
    }

    public function index_get()
    {

        //cek parameter id
        $list_anggota = $this->MAnggota->get_all();
        if ($list_anggota) {
            $total_anggota = count($list_anggota);
            $this->response(
                array(
                    'status' => true,
                    'total_anggota' => $total_anggota,
                    'list_anggota' => $list_anggota,
                ),
                200
            );
        } else {
            $this->response(
                array(
                    'status' => false,
                    'message' => 'Anggota Tidak Ditemukan'
                ),
                400
            );
        }
    }

    public function by_id_get()
    {
        // jika ada parameter id
        $id = $this->get('id');
        if ($id) {
            $data_anggota = $this->MAnggota->get_by_id($id);
            if ($data_anggota) {
                $this->response(
                    array(
                        'status' => true,
                        'data_anggota' => $data_anggota
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
                    'pesan' => 'Silahkan Masukkan Parameter Nama'
                ),
                404
            );
        }
    }

    public function by_noanggota_get()
    {
        $no_anggota = $this->get('no_anggota');
        if ($no_anggota) {
            $data_anggota = $this->MAnggota->get_by_noanggota($no_anggota);
            if ($data_anggota) {
                $this->response(
                    array(
                        'status' => true,
                        'data_anggota' => $data_anggota
                    ),
                    200
                );
            } else {
                $this->response(
                    array(
                        'status' => false,
                        'pesan' => 'Nama ' . $no_anggota . ' Tidak Ditemukan'
                    ),
                    404
                );
            }
        } else {
            $this->response(
                array(
                    'status' => false,
                    'pesan' => 'Silahkan Masukkan Parameter Nama'
                ),
                404
            );
        }
    }

    public function by_nama_get()
    {
        $nama = $this->get('nama');
        if ($nama) {
            $data_anggota = $this->MAnggota->get_by_nama($nama);
            if ($data_anggota) {
                $this->response(
                    array(
                        'status' => true,
                        'data_anggota' => $data_anggota
                    ),
                    200
                );
            } else {
                $this->response(
                    array(
                        'status' => false,
                        'pesan' => 'Nama ' . $nama . ' Tidak Ditemukan'
                    ),
                    404
                );
            }
        } else {
            $this->response(
                array(
                    'status' => false,
                    'pesan' => 'Silahkan Masukkan Parameter Nama'
                ),
                404
            );
        }
    }

    public function index_post()
    {
        $nama = $this->post('nama');
        $no_anggota =$this->post('no_anggota');
        $telepon = $this->post('telepon');
        $alamat = $this->post('alamat');
        $email = $this->post('email');
        $status = $this->post('status');

        $data_anggota = array(
            'nama' => $nama,
            'no_anggota' => $no_anggota,
            'telepon' => $telepon,
            'alamat' => $alamat,
            'email' => $email,
            'status' => $status
        );

        $this->MAnggota->insert($data_anggota);
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
        $nama = $this->put('nama');
        $no_anggota = $this->put('no_anggota');
        $email = $this->put('email');
        $id = $this->put('id');
        $data_anggota = array(
            'nama' => $nama,
            'no_anggota' => $no_anggota,
            'email' => $email
        );

        $this->MAnggota->update($id, $data_anggota);
        $this->response(
            array(
                'status' => true,
                'pesan' => 'Data Anggota Berhasil Diubah',
                'id' => $id
            ),
            200
        );
    }

    public function index_delete()
    {
        $id = $this->delete('id');
        $this->MAnggota->delete($id);
        $this->response(
            array(
                'Status' => true,
                'Pesan' => 'Data Anggota Berhasil Dihapus'
            ),
            200
        );
    }

}
