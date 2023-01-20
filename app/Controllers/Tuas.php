<?php

namespace App\Controllers;

class Tuas extends BaseController
{
    public function tuas1()
    {
        $session = session();
        $data = [
            'session' => $session,
            'title' => 'Tuas | Pembelajaran Fisika',

        ];
        return view('tuas/tuas', $data);
    }
    public function tuas2()
    {
        $session = session();
        $data = [
            'session' => $session,
            'title' => 'Tuas | Pembelajaran Fisika',

        ];
        return view('tuas/tuas1', $data);
    }
    public function tuas3()
    {
        $session = session();
        $data = [
            'session' => $session,
            'title' => 'Tuas | Pembelajaran Fisika',

        ];
        return view('tuas/tuas2', $data);
    }
    public function tuas4()
    {
        $session = session();
        $data = [
            'session' => $session,
            'title' => 'Tuas | Pembelajaran Fisika',

        ];
        return view('tuas/tuas3', $data);
    }
    public function tuas5()
    {
        $session = session();
        $data = [
            'session' => $session,
            'title' => 'Tuas | Pembelajaran Fisika',

        ];
        return view('tuas/tuas4', $data);
    }

    public function test()
    {
        $session = session();
        $data = [
            'session' => $session,
            'title' => 'Tuas | Pembelajaran Fisika',

        ];
        return view('tuas/test', $data);
    }
}
