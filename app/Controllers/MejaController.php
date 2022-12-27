<?php

namespace App\Controllers;

class MejaController extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
}
