<?php 

namespace App\Entities;

use CodeIgniter\Entity;

class User extends Entity
{
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected function setPassword(string $password){
        $this->attributes['password'] = password_hash($password, PASSWORD_DEFAULT);
    }
}
