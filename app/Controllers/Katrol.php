<?php

namespace App\Controllers;

class Katrol extends BaseController
{
    public function katrol1()
    {
        $session = session();
        $data = [
            'session' => $session,
            'title' => 'Katrol | Pembelajaran Fisika',

        ];
        return view('katrol/katrol', $data);
    }
    public function katrol2()
    {
        $session = session();
        $data = [
            'session' => $session,
            'title' => 'Katrol | Pembelajaran Fisika',

        ];
        return view('katrol/katrol1', $data);
    }
    public function katrol3()
    {
        $session = session();
        $data = [
            'session' => $session,
            'title' => 'Katrol | Pembelajaran Fisika',

        ];
        return view('katrol/katrol2', $data);
    }
    public function katrol4()
    {
        $session = session();
        $data = [
            'session' => $session,
            'title' => 'Katrol | Pembelajaran Fisika',

        ];
        return view('katrol/katrol3', $data);
    }
    public function katrol5()
    {
        $session = session();
        $data = [
            'session' => $session,
            'title' => 'Katrol | Pembelajaran Fisika',

        ];
        return view('katrol/katrol4', $data);
    }
    public function katrol6()
    {
        $session = session();
        $data = [
            'session' => $session,
            'title' => 'Katrol | Pembelajaran Fisika',

        ];
        return view('katrol/katrol5', $data);
    }
    public function katrol7()
    {
        $session = session();
        $data = [
            'session' => $session,
            'title' => 'Katrol | Pembelajaran Fisika',

        ];
        return view('katrol/katrol6', $data);
    }

    public function test()
    {
        $session = session();
        $data = [
            'session' => $session,
            'title' => 'Katrol | Pembelajaran Fisika',

        ];
        return view('katrol/test', $data);
    }
}
