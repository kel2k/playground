<?php

namespace App\Controllers;

use App\Models\M_model;

class pelanggan extends BaseController
{
    public function index()
    {
   
        $model = new M_model();
        $data['vuser'] = $model->tampil('pelanggan');
        echo view('/template/header');
        echo view('/template/menu');
        echo view('/pelanggan/view', $data);
        echo view('/template/footer');
    }
    public function adduser()
    {
        $model = new M_model();

        $data['user'] = $model->tampil('pelanggan');
        echo view('/template/header');
        echo view('/template/menu');
        echo view('/pelanggan/add', $data);
        echo view('/template/footer');
    }
    public function aksi_adduser()
    {
        $model = new M_model();
        // $on='guru.user = user.id_user';
        $nama_pelanggan = $this->request->getPost('nama_pelanggan');
        $alamat = $this->request->getPost('alamat');
        $no_telpon = $this->request->getPost('no_telpon');
        $nama_orangtua = $this->request->getPost('nama_orangtua');

        $user = array(
            'nama_pelanggan' => $nama_pelanggan,
            'alamat' => $alamat,
            'no_telpon' => $no_telpon,
            'nama_orangtua' => $nama_orangtua,
            'created_at' => date('Y-m-d H:i:s')
        );

        $model = new M_model();
        $model->simpan('pelanggan', $user);
        return redirect()->to('/pelanggan');
    }
    public function hapus($id)
    {
        $model = new M_model();

        // Kondisi untuk menghapus data dari tabel 'anggota'
        $where1 = array('id_pelanggan' => $id);
        $model->hapus('pelanggan', $where1);

        return redirect()->to(base_url('/user'));
    }

}