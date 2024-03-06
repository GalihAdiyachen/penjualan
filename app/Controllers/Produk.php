<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Produk extends BaseController
{
    public function index()
    {
        #conten
        $data =[
             #variabel
            'judul'     => 'Master Data',
            'subjudul'  => 'Produk',
            'menu'   => 'masterdata',
            'submenu'=>'produk',
            'page' => 'v.produk.php',
        ];
        return view('v.template.php', $data);
    }
}
