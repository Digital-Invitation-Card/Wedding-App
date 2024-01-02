<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }
    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                ->withSuccess('You have Successfully loggedin');
        }
        return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');
    }
    public function dashboard()
    {
        if (Auth::check()) {
            return view('admin.dashboard');
        }
        return redirect("login")->withSuccess('Opps! You do not have access');
    }
    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('login');
    }
}
