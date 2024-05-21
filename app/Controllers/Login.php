<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
    public function index(): string
    {
        return view('/pages/login');
    }

    public function login(): \CodeIgniter\HTTP\RedirectResponse
    {
        $user_model = model(UserModel::class);
        $user = $user_model->where('email', $this->request->getPost('email'))->first();

        if (isset($user) && $user['password'] == $this->request->getPost('password')) {
            session()->set([
                'id' => $user['id'],
                'email' => $user['email'],
                'name' => $user['name'],
                'isLoggedIn' => true
            ]);

            return redirect()->to('/');
        } else {
            session()->setFlashdata('error', 'Invalid email or password');
            return redirect()->to('/login');
        }

    }
}
