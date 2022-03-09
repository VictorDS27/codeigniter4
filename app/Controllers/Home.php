<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('temp/header');
        echo view('home');
        echo view('temp/footer');
    }
    public function page($page='home')
    {
        echo view('temp/header');
        echo view($page);
        echo view('temp/footer');
    }
}
