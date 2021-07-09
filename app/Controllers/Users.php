<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Users extends BaseController
{
    public function index()
    { 
        
        $db = \Config\Database::connect();
        $query = $db->query('SELECT username, email, created_at FROM users');

         $data = [
        'title' => 'Data Admin',
        'users' => $query->getResultArray()
  
    ];

    return view('admin/users', $data);

}
}
