<?php

namespace App\Controllers;

use App\Models\M_model;

class user extends BaseController
{
    public function index()
    {
        $model = new M_model();
        $on = 'user.level=level.id_level';

        $data['vuser'] = $model->join2('user', 'level', $on);
        echo view('/template/header');
        echo view('/template/menu');
        echo view('/user/view', $data);
        echo view('/template/footer');
    }
    public function add()
    {
        echo view('/template/header');
        echo view('/template/menu');
        echo view('/user/add');
        echo view('/template/footer');
    }
    public function reset($id)
    {
        $model = new M_model();
        $where = array('id_user' => $id);

        // Generate an MD5 hash for the new password
        $newPassword = 'aaaa'; // Replace 'aaaa' with your desired new password
        $hashedPassword = md5($newPassword);

        // Prepare the updated data
        $user = array('password' => $hashedPassword);

        // Call the qedit method to update the user's password
        $model->qedit('user', $user, $where);

        // Uncomment the following line to enable redirection
        return redirect()->to('/user');
    }
   

}