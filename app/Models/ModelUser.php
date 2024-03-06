<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelUser extends Model
{
    public function AllData()
    {
        return $this->db->table('tb_user')
        ->get()
        ->getResultArray();
    }
    public function InsertData($data)
    {

        $this->db->table('tb_user')->insert($data);

    }
    #edit data
    public function UpdateData($data)
    {
        $this->db->table('tb_user')
        ->where('id_user', $data['id_user'])
        ->update($data);
    }
    #hapus Data
    public function DeleteData($data)
    {
        $this->db->table('tb_user')
        ->where('id_user', $data['id_user'])
        ->delete($data);
    }

}
