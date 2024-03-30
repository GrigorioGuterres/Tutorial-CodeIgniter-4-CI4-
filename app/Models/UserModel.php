<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'password'];

    public function getUserByUsername($username)
    {
        return $this->where('username', $username)->first();
    }

    public function createUser($data)
    {
        $data['password'] = md5($data['password']);
        return $this->save($data);
    }

    public function verifyPassword($password, $hashedPassword)
    {
        return md5($password) === $hashedPassword;
    }
}
