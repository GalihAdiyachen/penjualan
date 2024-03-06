<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        #conten
        $data =[
             #variabel
            'judul'     => 'Dashboard',
            'subjudul'  => '',
            'menu'   => 'dashboard',
            'submenu'=>'',
            'judul' => 'judul',
        ];
        return view('v.login.php', $data);
    }
}
