<?php

namespace App\Controllers;

class Gaya extends BaseController
{
    public function gaya1()
    {
        $session = session();
        $data = [
            'session' => $session,
            'title' => 'Gaya | Pembelajaran Fisika',

        ];
        return view('gaya/gaya', $data);
    }
    public function gaya2()
    {
        $session = session();
        $data = [
            'session' => $session,
            'title' => 'Gaya | Pembelajaran Fisika',

        ];
        return view('gaya/gaya1', $data);
    }
    public function gaya3()
    {
        $session = session();
        $data = [
            'session' => $session,
            'title' => 'Gaya | Pembelajaran Fisika',

        ];
        return view('gaya/gaya2', $data);
    }
    public function gaya4()
    {
        $session = session();
        $data = [
            'session' => $session,
            'title' => 'Gaya | Pembelajaran Fisika',

        ];
        return view('gaya/gaya3', $data);
    }
    public function gaya5()
    {
        $session = session();
        $data = [
            'session' => $session,
            'title' => 'Gaya | Pembelajaran Fisika',

        ];
        return view('gaya/gaya4', $data);
    }
    public function gaya6()
    {
        $session = session();
        $data = [
            'session' => $session,
            'title' => 'Gaya | Pembelajaran Fisika',

        ];
        return view('gaya/gaya5', $data);
    }
    public function gaya7()
    {
        $session = session();
        $data = [
            'session' => $session,
            'title' => 'Gaya | Pembelajaran Fisika',

        ];
        return view('gaya/gaya6', $data);
    }
    public function gaya8()
    {
        $session = session();
        $data = [
            'session' => $session,
            'title' => 'Gaya | Pembelajaran Fisika',

        ];
        return view('gaya/gaya7', $data);
    }
    public function gaya9()
    {
        $session = session();
        $data = [
            'session' => $session,
            'title' => 'Gaya | Pembelajaran Fisika',

        ];
        return view('gaya/gaya8', $data);
    }

    public function test()
    {
        $session = session();
        $data = [
            'session' => $session,
            'title' => 'Gaya | Pembelajaran Fisika',

        ];
        return view('gaya/test', $data);
    }
}
