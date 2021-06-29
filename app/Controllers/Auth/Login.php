<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Entities\User;

class Login extends BaseController
{
	public function index()
	{
        $data = [
            'name' => 'Stefany',
            'lastname' => 'Livaque Rojas',
            'username' => 'user',
            'password' => '123456',
            'role_id' => '1',
            'document_type_id' => 1,
            'document' => '72075063',
        ];
        $user = new User($data);
        d($user);
        $model = model('UserModel');
        $model->save($user);
		return view('Auth\login');
	}
    
}
