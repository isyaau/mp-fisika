<?php

namespace App\Models;

use CodeIgniter\Model;

class MateriModel extends Model
{
    protected $table      = 'tb_materi';
    protected $primaryKey = 'id_materi';

    protected $allowedFields = ['nama_materi', 'status'];

    protected $useTimestamps = false;

    public function getMateri($id_materi = false)
    {
        if ($id_materi == false) {
            return $this->findAll();
        }
        return $this->where(['id_materi' => $id_materi])->first();
    }

    public function hitungJumlahMateriActive()
    {
        $user = $this->query('SELECT * FROM tb_materi WHERE status=1');
        return $user->getNumRows();
    }

    public function hitungJumlahMateriNonActive()
    {
        $user = $this->query('SELECT * FROM tb_materi WHERE status=0');
        return $user->getNumRows();
    }
    public function Gaya()
    {
        $user = $this->query('SELECT * FROM tb_materi WHERE nama_materi="Gaya"');
        return $user->get();
    }
    public function RodaBergerigi()
    {
        $user = $this->query('SELECT * FROM tb_materi WHERE nama_materi="Roda Bergerigi"');
        return $user->get();
    }
    public function Usaha()
    {
        $user = $this->query('SELECT * FROM tb_materi WHERE nama_materi="Usaha"');
        return $user->get();
    }
    public function TuasPengungkit()
    {
        $user = $this->query('SELECT * FROM tb_materi WHERE nama_materi="Tuas Pengungkit"');
        return $user->get();
    }
    public function BidangMiring()
    {
        $user = $this->query('SELECT * FROM tb_materi WHERE nama_materi="Bidang Miring"');
        return $user->get();
    }
    public function Katrol()
    {
        $user = $this->query('SELECT * FROM tb_materi WHERE nama_materi="Katrol"');
        return $user->get();
    }

    // ...
}
