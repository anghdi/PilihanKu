<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AuthController extends BaseController
{
    public function index()
    {
        //
        return view('admin/auth/LoginAdmin');
    }

    public function registerUser()
    {
        return view('users/auth/RegisterUser');
    }

    public function loginUser()
    {
        
    }
}
