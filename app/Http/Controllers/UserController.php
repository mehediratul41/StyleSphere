<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;

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
    public function view_profile()
    {
        return view('user.view_profile');
    }
    public function edit_profile()
    {
        $user_id = request()->session()->get('user_id');
        $user_name = request()->session()->get('user_name');
        // dd($user_id);
        $data = compact('user_id','user_name');
        return view('user.edit_profile')->with($data);
    }
    //Function for Update the user profile
    public function update_profile($id, Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $user = User::find($id);
        $user->name = $request->name;
        $user->update();
        $request->session()->put('name', $user->name);
        return redirect()->back();
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
