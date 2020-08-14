<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use app\User;

class LoginController extends Controller
{
    public function index(){
        return view ('login.index');
    }

    public function verifyUser(Request $request)
    {
        $email = $request['email'];
        $password = $request['password'];
        $credentials = [
            'email'=>$email,
            'password'=>$password
        ];

        if (Auth::attempt($credentials))
        {
            return redirect()->intended('/admin/dashboard');

        }else
        {
            return redirect()->to('/')->send();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->to('/')->send();
    }

}

