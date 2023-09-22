<?php

namespace App\Controllers;

use App\Models\User;

class Users
{
    public function index(): object
    {
        $users = User::all();

        return $users;
    }
}
