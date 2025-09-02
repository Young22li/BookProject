<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('header');
        echo view('HomeContext');
        echo view('footer');
    }
}
