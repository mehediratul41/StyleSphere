<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\User_role;

class UserController extends Controller
{
    //Function for user view
    public function view()
    {
        $users = User::all();
        $data = compact('users');
        return view('user')->with($data);
    }
    ///Function for the user role
    public function view_user_role()
    {
        $user_roles = User_role::all();
        $data = compact('user_roles');
        echo "<pre>";
        print_r($data);
    }
}
