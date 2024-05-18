<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class LoginController extends Controller
{
    public function index()
    {
        helper(['form']);
        return view('login');
    }

    public function authenticate()
    {
        $session = session();
        $model = new UserModel();
        
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $data = $model->where('email', $email)->first();
        
        if ($data) {
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if ($verify_pass) {
                $ses_data = [
                    'id'       => $data['id'],
                    'username' => $data['username'],
                    'email'    => $data['email'],
                    'logged_in'=> TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/dashboard');
            } else {
                $session->setFlashdata('error', 'Wrong Password');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('error', 'Email not Found');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }

    public function goToDashboard(){
        return view('dashboard');
    }
}
