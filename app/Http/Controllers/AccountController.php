<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AccountController extends Controller
{
    public function user_list(User $user)
    {
        $users = $user->getUsers();
        return view('account/user_list', ['users' => $users]);

    }
}
