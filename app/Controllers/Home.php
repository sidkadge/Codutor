<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('index');
    }
    public function header()
    {
        return view('header');
    }
    public function footer()
    {
        return view('footer');
    }
}
