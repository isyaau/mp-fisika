<?php

namespace App\Controllers;

class Roda extends BaseController
{
    public function roda1()
    {
        $session = session();
        $data = [
            'session' => $session,
            'title' => 'Roda | Pembelajaran Fisika',

        ];
        return view('roda/roda', $data);
    }
    public function roda2()
    {
        $session = session();
        $data = [
            'session' => $session,
            'title' => 'Roda | Pembelajaran Fisika',

        ];
        return view('roda/roda1', $data);
    }
    public function roda3()
    {
        $session = session();
        $data = [
            'session' => $session,
            'title' => 'Roda | Pembelajaran Fisika',

        ];
        return view('roda/roda2', $data);
    }
    public function roda4()
    {
        $session = session();
        $data = [
            'session' => $session,
            'title' => 'Roda | Pembelajaran Fisika',

        ];
        return view('roda/roda3', $data);
    }
    public function roda5()
    {
        $session = session();
        $data = [
            'session' => $session,
            'title' => 'Roda | Pembelajaran Fisika',

        ];
        return view('roda/roda4', $data);
    }
    public function roda6()
    {
        $session = session();
        $data = [
            'session' => $session,
            'title' => 'Roda | Pembelajaran Fisika',

        ];
        return view('roda/roda5', $data);
    }

    public function test()
    {
        $session = session();
        $data = [
            'session' => $session,
            'title' => 'Roda | Pembelajaran Fisika',

        ];
        return view('roda/test', $data);
    }
}
