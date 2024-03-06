<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelKategori;
use CodeIgniter\HTTP\ResponseInterface;

class Kategori extends BaseController
{
    public function __construct() 
    {
        $this->ModelKategori = new ModelKategori();
    }
    public function index()
    {
         #conten
         $data =[
            #variabel
           'judul'     => 'Master Data',
           'subjudul'  => 'Kategori',
           'menu'   => 'masterdata',
           'submenu'=>'kategori',
           'page' => 'v.kategori.php',
           'kategori' =>  $this->ModelKategori->allData(),
       ];
       return view('v.template.php', $data);
    }
    public function InsertData()
    {
        $data = ['nama_kategori' => $this->request->getPost('nama_kategori')];

        $this->ModelKategori->InsertData($data);
        session()->setFlashdata('pesan','Data Berhasil Ditambahkan');
       return redirect()->to('kategori');     
    }
    #untuk data edit
    public function UpdateData($id_kategori)
    {
        $data = [
            'id_kategori' => $id_kategori,
            'nama_kategori' => $this->request->getPost('nama_kategori')
        ];

        $this->ModelKategori->UpdateData($data);
        session()->setFlashdata('pesan','Data Berhasil DiUbah');
       return redirect()->to('kategori');     
    }
      #untuk data Hapus
      public function DeleteData($id_kategori)
      {
          $data = [
              'id_kategori' => $id_kategori,
          ];
  
          $this->ModelKategori->DeleteData($data);
          session()->setFlashdata('pesan','Data Berhasil DiHapus !!');
         return redirect()->to('kategori');     
      }
}
