<?php

namespace App\Controllers;

class Bidang extends BaseController
{
    public function bidang1()
    {
        $session = session();
        $data = [
            'session' => $session,
            'title' => 'Bidang | Pembelajaran Fisika',

        ];
        return view('bidang/bidang', $data);
    }
    public function bidang2()
    {
        $session = session();
        $data = [
            'session' => $session,
            'title' => 'Bidang | Pembelajaran Fisika',

        ];
        return view('bidang/bidang1', $data);
    }
    public function bidang3()
    {
        $session = session();
        $data = [
            'session' => $session,
            'title' => 'Bidang | Pembelajaran Fisika',

        ];
        return view('bidang/bidang2', $data);
    }
    public function bidang4()
    {
        $session = session();
        $data = [
            'session' => $session,
            'title' => 'Bidang | Pembelajaran Fisika',

        ];
        return view('bidang/bidang3', $data);
    }

    public function test()
    {
        $session = session();
        $data = [
            'session' => $session,
            'title' => 'Bidang | Pembelajaran Fisika',

        ];
        return view('bidang/test', $data);
    }
}
