<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ModelUser;

class User extends BaseController
{
    public function __construct()
    {
       $this->ModelUser = new ModelUser();
        
    }
    public function index()
    {
       #conten
       $data =[
        #variabel
       'judul'     => 'User',
       'subjudul'  => 'User',
       'menu'   => 'masterdata',
       'submenu'=>'user',
       'page' => 'v.user.php',
       'user'=> $this->ModelUser->AllData(),
   ];
   return view('v.template.php', $data);
    }
    public function InsertData()
    {
        $data = [
            'nama_user' => $this->request->getPost('nama_user'),
            'email' => $this->request->getPost('email'),
            'password' =>sha1($this->request->getPost('password')),
            'level' => $this->request->getPost('level'),
        ];

        $this->ModelUser->InsertData($data);
        session()->setFlashdata('pesan','Data User Berhasil Ditambahkan');
       return redirect()->to('user');     
    }
    #untuk data edit
    public function UpdateData($id_user)
    {
        $data = [
            'id_user' => $id_user,
            'nama_user' => $this->request->getPost('nama_user'),
            'email' => $this->request->getPost('email'),
            'password' =>sha1($this->request->getPost('password')),
            'level' => $this->request->getPost('level'),
        ];

        $this->ModelUser->UpdateData($data);
        session()->setFlashdata('pesan','Datauser Berhasil DiUbah');
       return redirect()->to('user');     
    }
    #untuk data Hapus
    public function DeleteData($id_user)
    {
        $data = [
            'id_user' => $id_user,
        ];

        $this->ModelUser->DeleteData($data);
        session()->setFlashdata('pesan','DataUser Berhasil DiHapus !!');
       return redirect()->to('user');     
    }
}
