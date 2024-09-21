<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AuthModel;
use CodeIgniter\HTTP\ResponseInterface;

class AuthController extends BaseController
{

    protected $model = null;

    public function __construct() {
        helper(['form']);
    }

    public function index()
    {
        //
        return view('admin/auth/LoginAdmin');
    }

    public function loginAdmin()
    {
        if ($this->request->getMethod() == 'post' || $this->request->getMethod() == 'POST' )
        {
            $this->model = new AuthModel();

            // ambil data 
            $data = [
                'username' => $this->request->getPost('username'),
                'password' => $this->request->getPost('password')
            ];

            $iRet = $this->cekValidasi($data);

            if ($iRet == 1)
            {
                 // Jika validasi gagal, kirimkan error
                 return view('admin/auth/LoginAdmin', [
                    'validation' => $this->model->errors(),
                ]);
            }

            $user = $this->model->getUserByUsername($data['username']);

            // Verifikasi password
            if ($user && password_verify($data['password'], $user['password'])) {
                session()->set([
                    'username'   => $user['username'],
                    'isLoggedIn' => true,
                ]);

                return redirect()->to('/dashboard');
            } else {
                session()->setFlashdata('error', 'Username atau Password salah.');
                return redirect()->to('/');
            }

            return view('admin/auth/LoginAdmin');
        }
    }

    public function cekValidasi($data)
    {
        $iRet = 0;

        if (!empty($this->model))
        {
            if (!$this->model->validate($data))
            {
               $iRet = 1;   
            }
        }

        return $iRet;
    }
}
