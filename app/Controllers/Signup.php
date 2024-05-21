<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use Config\Services;
use ReflectionException;

class Signup extends BaseController
{
    public function index(): string|\CodeIgniter\HTTP\RedirectResponse
    {
        if (session()->get('isLoggedIn')) {
            return redirect()->to('/');
        } else {
            return view('pages/signup');
        }
    }

    /**
     * @throws ReflectionException
     */
    public function signup(): string|\CodeIgniter\HTTP\RedirectResponse
    {
        $validation = Services::validation();

        $validation->setRules([
            'confirm_password' => 'matches[password]'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return view('pages/signup', [
                'validation' => $validation
            ]);
        }

        $data = [
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password')
        ];

        $model = model(UserModel::class);

        $model->save($data);

        return redirect()->to('/login');

    }
}