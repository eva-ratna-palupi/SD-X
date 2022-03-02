<?php

namespace App\Models;

use CodeIgniter\Model;

class PengaturanProfilModel extends Model
{
	public function allData()
    {
        return $this->db->table('pengaturan_profil')
            ->orderBy('id')
            ->get()->getResultArray();
    }
	public function edit($data)
    {
        $this->db->table('pengaturan_profil')
            ->where('id', $data['id'])
            ->update($data);
    }

}
