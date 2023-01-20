<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $session = session();
        $data = [
            'session' => $session,
            'title' => 'Home | Pembelajaran Fisika',
            'user' => $this->userModel->hitungJumlahUser(),
            'usaha' => $this->materiModel->getMateri(1),
            'tuaspengungkit' => $this->materiModel->getMateri(2),
            'bidangmiring' => $this->materiModel->getMateri(3),
            'katrol' => $this->materiModel->getMateri(4),
            'rodabergerigi' => $this->materiModel->getMateri(5),
            'gaya' => $this->materiModel->getMateri(6),
            'active' => $this->materiModel->hitungJumlahMateriActive(),
            'nonactive' => $this->materiModel->hitungJumlahMateriNonActive(),
        ];
        return view('home/index', $data);
    }
}
