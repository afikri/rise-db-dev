<?php

namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\Controller;

class RegisterController extends Controller
{
    public function index()
    {
        // Load the form helper
        helper(['form']); 
        return view('register');
    }

    public function store()
    {
        helper(['form', 'url']);
        $validation = \Config\Services::validation();

        $validation->setRules([
            'username' => 'required|min_length[3]|max_length[20]|is_unique[users.username]',
            'email' => 'required|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[8]',
            'password_confirm' => 'matches[password]'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return view('register', [
                'validation' => $this->validator,
            ]);
        }

        $userModel = new UserModel();
        $userModel->save([
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
        ]);

        return redirect()->to('/register/success');
    }

    public function success()
    {
        return view('register_success');
    }
}
