<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login');
    }
    public function authenticate(Request $request)
    {
        
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            if(Auth::User()->role == 'operator'){
                return redirect()->intended('operator/dashboard_opt');
            }else if(Auth::User()->role == 'mahasiswa'){
                return redirect()->intended('mahasiswa/dashboard_mhs');
            }


            // }else if(Auth::user()->role == 'dosenwali'){
            //     return redirect()->intended('/dashboard_dsn');
            // }else if(Auth::user()->role == 'departemen'){
            //     return redirect()->intended('/dashboard_dpt');
            //
            // }


        }else{
            return back()->with('loginError', 'Login Failed');
        }

    }

}
