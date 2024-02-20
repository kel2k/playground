<?php

namespace App\Controllers;

use App\Models\M_model;

class playground extends BaseController
{
    public function index()
    {
        $model = new M_model();
        $on = 'transaksi.pelanggan_id=pelanggan.id_pelanggan';

        $data['vuser'] = $model->join2('transaksi', 'pelanggan', $on);
        echo view('/template/header');
        echo view('/template/menu');
        echo view('/playground/biling', $data);
        echo view('/template/footer');
    }
}