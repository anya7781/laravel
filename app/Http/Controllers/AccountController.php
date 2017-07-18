<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AccountController extends Controller
{
    public function index()
    {
        $users = User::all();
       foreach ($users as $user){
           echo $user->login;
       }

    }
}
