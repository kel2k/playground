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
        $on = 'pelanggan.id_pelanggan=transaksi.pelanggan_id';

        $data['k'] = $model->join2('pelanggan', 'transaksi', $on);
        echo view('/template/header');
        echo view('/template/menu');
        echo view('/pelanggan/add', $data);
        echo view('/template/footer');
    }
    public function aksi_adduser()
    {
      $model = new M_model();
      date_default_timezone_set('Asia/Jakarta');
    
      // Ambil data dari formulir
      $nama_pelanggan = $this->request->getPost('nama_pelanggan');
      $alamat = $this->request->getPost('alamat');
      $no_telpon = $this->request->getPost('no_telpon');
      $nama_orangtua = $this->request->getPost('nama_orangtua');
      $biaya = $this->request->getPost('biaya');
      $permainan = $this->request->getPost('permainan');
    
      // Simpan data pelanggan
      $user = array(
        'nama_pelanggan' => $nama_pelanggan,
        'alamat' => $alamat,
        'no_telpon' => $no_telpon,
        'nama_orangtua' => $nama_orangtua,
        'biaya' => $biaya,
        'permainan' => $permainan,
        'created_at' => date('Y-m-d H:i:s')
      );
    
      $model->simpan('pelanggan', $user);
    
      // Dapatkan data pelanggan yang baru ditambahkan
      $result = $model->getWhere('pelanggan', array('nama_pelanggan' => $nama_pelanggan));
    
      if ($result) {
        $id_pelanggan = $result->id_pelanggan;
    
        // Hitung jumlah jam tambahan berdasarkan biaya
        $jam_tambahan = ceil($biaya / 10000);
    
        // Tambahkan data ke tabel 'transaksi'
        $transaksi = array(
          'pelanggan_id' => $id_pelanggan,
          'mulai_jam' => date('Y-m-d H:i:s'),
          'status' => '1'
        );
    
        $model->simpan('transaksi', $transaksi);
    
        // Dapatkan data transaksi yang baru ditambahkan
        $transaksiData = $model->getWhere('transaksi', array('pelanggan_id' => $id_pelanggan));
    
        if ($transaksiData) {
          // Dapatkan ID transaksi
          $id_transaksi = $transaksiData->id_transaksi;
    
          // Tambahkan waktu tambahan ke 'selesai_jam'
          $selesai_jam = date('Y-m-d H:i:s', strtotime("+{$jam_tambahan} hours"));
    
          // Update 'selesai_jam' in 'transaksi' table using the 'updateTransaction' method
          $model->updateTransaction(['selesai_jam' => $selesai_jam], ['id_transaksi' => $id_transaksi]);
    
          // Debugging: Output the times for checking
          echo "Current Time: " . date('Y-m-d H:i:s') . "<br>";
          echo "Selesai Jam: " . $selesai_jam . "<br>";
    
          // Hitung selisih waktu antara selesai_jam dan waktu saat ini
          $diff = date_diff(date_create($selesai_jam), date_create(date('Y-m-d H:i:s')));
          $minutes_diff = $diff->h * 60 + $diff->i;
    
          // Jika selisih waktu kurang dari atau sama dengan 0, perbarui status menjadi 2
          if ($minutes_diff <= 0) {
            // Update status to 2
            $model->updateTransaction(['status' => 2], ['id_transaksi' => $id_transaksi]);
          }
    
          return redirect()->to('/pelanggan');
        } else {
          // Handle the case where the transaction data is not found
          return "Error: Could not retrieve the transaction data.";
        }
      }
    }
    


    public function hapus($id)
    {
        $model = new M_model();

        // Kondisi untuk menghapus data dari tabel 'anggota'
        $where1 = array('id_pelanggan' => $id);
        $where2 = array('pelanggan_id' => $id);
        $model->hapus('pelanggan', $where1);

        return redirect()->to(base_url('/pelanggan'));
    }

}