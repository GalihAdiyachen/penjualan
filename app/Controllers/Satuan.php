<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelSatuan;
use CodeIgniter\HTTP\ResponseInterface;

class Satuan extends BaseController
{
    public function __construct() 
    {
        $this->ModelSatuan = new ModelSatuan();
    }
    public function index()
    {
        #conten
        $data =[
            #variabel
           'judul'     => 'Master Data',
           'subjudul'  => 'Satuan',
           'menu'   => 'masterdata',
           'submenu'=>'satuan',
           'page' => 'v.satuan.php',
           'satuan'=> $this->ModelSatuan->AllData(),
       ];
       return view('v.template.php', $data);
    }

    public function InsertData()
    {
        $data = ['nama_satuan' => $this->request->getPost('nama_satuan')];

        $this->ModelSatuan->InsertData($data);
        session()->setFlashdata('pesan','Data Berhasil Ditambahkan');
       return redirect()->to('Satuan');     
    }
    #untuk data edit
    public function UpdateData($id_satuan)
    {
        $data = [
            'id_satuan' => $id_satuan,
            'nama_satuan' => $this->request->getPost('nama_satuan')
        ];

        $this->ModelSatuan->UpdateData($data);
        session()->setFlashdata('pesan','Data Berhasil DiUbah');
       return redirect()->to('Satuan');     
    }
      #untuk data Hapus
      public function DeleteData($id_satuan)
      {
          $data = [
              'id_satuan' => $id_satuan,
          ];
  
          $this->ModelSatuan->DeleteData($data);
          session()->setFlashdata('pesan','Data Berhasil DiHapus !!');
         return redirect()->to('Satuan');     
      }
      
}
