<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelKategori extends Model
{
    public function AllData()
    {
        return $this->db->table('tb_kategori')
        ->get()
        ->getResultArray();
    }

    public function InsertData($data)
    {

        $this->db->table('tb_kategori')->insert($data);

    }
    #edit data
    public function UpdateData($data)
    {
        $this->db->table('tb_kategori')
        ->where('id_kategori', $data['id_kategori'])
        ->update($data);
    }
    #hapus Data
    public function DeleteData($data)
    {
        $this->db->table('tb_kategori')
        ->where('id_kategori', $data['id_kategori'])
        ->delete($data);
    }
}