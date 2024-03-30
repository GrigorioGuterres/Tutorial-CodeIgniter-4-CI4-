<?php namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        helper(['form']);

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'username' => 'required',
                'password' => 'required'
            ];

            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $userModel = new UserModel();
                $user = $userModel->getUserByUsername($this->request->getPost('username'));

                if ($user && $userModel->verifyPassword($this->request->getPost('password'), $user['password'])) {
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['username'] = $user['username'];
                    
                    return redirect()->to('/Dashboard');
                } else {
                    $data['error'] = 'Username atau password salah';
                }
            }
        }

        return view('auth/login', $data ?? []);
    }
}
