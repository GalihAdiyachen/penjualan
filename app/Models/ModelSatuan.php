<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelSatuan extends Model
{
    public function AllData()
    {
        return $this->db->table('tb_satuan')
        ->get()
        ->getResultArray();
    }

    public function InsertData($data)
    {

        $this->db->table('tb_satuan')->insert($data);

    }
    #edit data
    public function UpdateData($data)
    {
        $this->db->table('tb_satuan')
        ->where('id_satuan', $data['id_satuan'])
        ->update($data);
    }
    #hapus Data
    public function DeleteData($data)
    {
        $this->db->table('tb_satuan')
        ->where('id_satuan', $data['id_satuan'])
        ->delete($data);
    }
}