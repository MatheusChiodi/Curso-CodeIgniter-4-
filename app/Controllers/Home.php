<?php

namespace App\Controllers;

class Home extends BaseController // o controlar home esta definido como o defaul base do site (da para ver no arquivos routes.php)
{
    public function index()
    {
        return view('welcome_message');
    }
}
