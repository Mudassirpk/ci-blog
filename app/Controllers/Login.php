<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
    public function index(): string|\CodeIgniter\HTTP\RedirectResponse
    {
        if (session()->get('isLoggedIn')) {
            return redirect()->to('/');
        } else {
            return view('/pages/login');
        }
    }

    public function login(): \CodeIgniter\HTTP\RedirectResponse
    {
        $user_model = model(UserModel::class);
        $user = $user_model->where('email', $this->request->getPost('email'))->first();

        if (isset($user) && $user['password'] == $this->request->getPost('password')) {
            session()->set([
                'id' => $user['id'],
                'email' => $user['email'],
                'name' => $user['username'],
                'isLoggedIn' => true
            ]);

            return redirect()->to('/');
        } else {
            session()->setFlashdata('error', 'Invalid email or password');
            return redirect()->to('/login');
        }

    }

    public function logout(): \CodeIgniter\HTTP\RedirectResponse
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
