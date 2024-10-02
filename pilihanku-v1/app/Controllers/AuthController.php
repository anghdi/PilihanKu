<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AuthModel;
use App\Models\ReturnModel;
use CodeIgniter\HTTP\ResponseInterface;
use DateTime;

class AuthController extends BaseController
{

    protected $model = null;

    public function __construct()
    {
        helper(['form']);
    }

    public function index(): string
    {
        //
        return view('auth/Login');
    }

    public function indexRegister(): string
    {
        return view('auth/Register');
    }

    #region Login Admin
    public function loginAdmin()
    {
        if ($this->request->getMethod() == 'post' || $this->request->getMethod() == 'POST') {
            $this->model = new AuthModel();

            // ambil data 
            $data = [
                'username' => $this->request->getPost('username'),
                'password' => $this->request->getPost('password')
            ];

            $iRet = $this->cekValidasi($data);

            if ($iRet == 1) {
                // Jika validasi gagal, kirimkan error
                return view('auth/Login', [
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

                return redirect()->to('/');
            } else {
                session()->setFlashdata('error', 'Username atau Password salah.');
                return redirect()->to('/login');
            }
        }
    }
    #endregion

    #region Register Users

    public function insertRegister()
    {
        if ($this->request->getMethod() == 'post' || $this->request->getMethod() == 'POST') {
            $this->model = new AuthModel();

            $retModel = new ReturnModel();

            $data = [
                'username' => $this->request->getPost('username'),
                'email' => $this->request->getPost('email'),
                'alamat' => $this->request->getPost('alamat')
            ];

            $iRet = $this->cekValidasi($data);

            if ($iRet == 1) {
                // Jika validasi gagal, kirimkan error
                return view('auth/Register', [
                    'validation' => $this->model->errors(),
                ]);
            }

            $db = \Config\Database::connect();
            $db->transBegin();

            try {

                $password = $this->genPassword();

                $iRet = $this->sendEmail($password, $data['email'], $data['username']);

                if ($iRet == 0) {
                    
                    $password = password_hash($password, PASSWORD_DEFAULT);

                    $data['password'] = $password;
                    $data['created_at'] = date('Y-m-d H:i:s');
                    $data['updated_at'] = date('Y-m-d H:i:s');
                    $data['status'] = 'ditunggu';

                    if (!$this->model->insert($data)) {
                        throw new \Exception('Gagal menambahkan data');
                    }

                    // Jika semua operasi sukses, commit transaksi
                    if ($db->transStatus() === false) {
                        // Jika ada error, rollback transaksi
                        $db->transRollback();
                        $retModel->setMessage('tidak dapat menambahkan data');
                        $retModel->setNumber(1);
                    } else {
                        // Commit jika sukses
                        $db->transCommit();
                        $retModel->setMessage('Data tersimpan, mohon menunggu persetujuan admin');
                        $retModel->setNumber(0);
                    }
                }
                else
                {
                    $retModel->setMessage("Pendaftaran tidak berhasil");
                    $retModel->setNumber(1);
                }
            } catch (\Exception $e) {
                // Jika terjadi kesalahan, rollback transaksi
                $db->transRollback();
                $retModel->setMessage($e->getMessage());
                $retModel->setNumber(1);
            }

            return view('auth/Register', ['number' => $retModel->getNumber(), 'message' => $retModel->getMessage()]);
        }
    }

    #endregion

    public function cekValidasi($data): int
    {
        $iRet = 0;

        if (!empty($this->model)) {
            if (!$this->model->validate($data)) {
                $iRet = 1;
            }
        }

        return $iRet;
    }

    private function genPassword(): string
    {
        $strPass = substr(bin2hex(random_bytes(3)), 0, 10);
        return $strPass;
    }

    public function sendEmail($password, $emailuser, $username): int
    {

        $iRet = 1;

        $email = \Config\Services::email();

        $email->setFrom('anggahadi447@gmail.com', 'Nama Pengirim');

        $email->setTo($emailuser);

        // $email->setCC('emailcc@example.com'); // Jika perlu
        // $email->setBCC('emailbcc@example.com'); // Jika perlu

        $email->setSubject('Password Akun Anda');
        $email->setMessage(' Terima kasih telah mendaftarkan akun Anda. <br> Berikut adalah informasi akun Anda: <br> <br> <br> 
                            <strong>username : ' . $username . '</strong> <br> 
                            <strong>password : ' . $password . '</strong> <br> 
                            <br> <br>
                            <i><b>Mohon untuk tetap menjaga privasi data anda agar tidak disalahgunakan oleh orang yang tidak bersangkutan.</b></i> ');

        if ($email->send()) {
            $iRet = 0;
        } else {
            $iRet = 1;
        }

        return $iRet;
    }
}
