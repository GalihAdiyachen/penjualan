<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Admin extends BaseController
{
    public function index()
    {
        #conten
        $data =[
            #variabel
            'judul'     => 'Dashboard',
            'subjudul'  => '',
            'menu'   => 'dashboard',
            'submenu'=>'',
            'page'   => 'v.admin.php',
        ];
        return view('v.template.php', $data);
    }
    public function Setting()
    {
        #conten
        $data =[
            #variabel
            'judul'     => 'Setting',
            'subjudul'  => '',
            'menu'   => 'setting',
            'submenu'=>'',
            'page'   => 'v.setting.php',
        ];
        return view('v.template.php', $data);
    }
}
