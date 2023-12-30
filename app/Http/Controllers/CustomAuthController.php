<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;



class CustomAuthController extends Controller
{
    //Function to open the custom login Form

    public function login()
    {
  
        return view('auth.login');

    }

    //Function to start a login session without rember me

    public function customLogin(Request $request)
    {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);


        //-------------------------Todo : Remember me token er kaj bakii-------------------------------------------------------

        // $email = $request->input('email'); 
        // $password = $request->input('password');
        // $remember = $request->has('remember');
        // $data = compact('credentials','remember');
        // echo "<pre>";
        // print_r($data);
        // die;


        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            //User Session Files -> Storing specific user details in the session
            $user = Auth::user();
            $request->session()->put('user_id', $user->user_id);
            $request->session()->put('name', $user->name);
            $request->session()->put('email', $user->email);

            return redirect()->intended('/home');
        }

        // If the Authentication failed, redirecting back with an error message

        return redirect()->back()->withInput($request->only('email', 'remember'))->withErrors([
            'email' => 'Invalid email or password',
        ]);
    }

    //Function for User registration form

    public function register()
    {
        return view('auth.register');
    }
    //Function for the user Regirstration 
    public function customRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required',
        ]);
        //Custon Testing code here
        // $data = $request->all();
        // echo "<pre>";
        // print_r($data);
        // die;
        // $check = $this->create($data);
        // return redirect("dashboard")->withSuccess('You have signed-in');
                // Create a new user
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        //If user checked in the Remember me button the user will be logged in
        $remember = $request->has('remember');
        if($remember)
        {
            $request->session()->regenerate();
            Auth::login($user);
            //User Session Files -> Storing specific user details in the session
            $user = Auth::user();
            $request->session()->put('user_id', $user->user_id);
            $request->session()->put('name', $user->name);
            $request->session()->put('email', $user->email);
        }

        return redirect("home");
    }

    //Create function --- This is another way to register which require protected fillable field in the User model

    // public function create(array $data)
    // {
    //     return User::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'password' => Hash::make($data['password'])
    //     ]);
    // }

    //Function for user logout

    public function logOut()
    {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
}