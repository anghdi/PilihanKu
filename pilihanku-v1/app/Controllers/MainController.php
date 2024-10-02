<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class MainController extends BaseController
{

    public function index()
    {
        //
        return view('Main', ['title' => 'Dashboard']);
    }
}
