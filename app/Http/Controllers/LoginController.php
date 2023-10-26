<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

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

        // login berdasarkan role
        if(Auth::guard('opt')->attempt($credentials)){
            // dd(Auth::guard('opt')->user()->id);
            $request->session()->regenerate();
            return redirect()->intended('operator/dashboard_opt');
            
        }
        else if(Auth::guard('mhs')->attempt($credentials)){

            $request->session()->regenerate();
            return redirect()->intended('mahasiswa/dashboard_mhs');
        }
        else if(Auth::guard('dsn')->attempt($credentials)){

            $request->session()->regenerate();
            return redirect()->intended('dosen/dashboard_dsn');
        }
        else if(Auth::guard('dpt')->attempt($credentials)){

            $request->session()->regenerate();
            return redirect()->intended('departemen/dashboard_dpt');
        }
        else{
            return back()->with('loginError', 'Login Failed');
        }
    }
    public function getLogout(){
        Auth::logout();
        Session::flush();
        return Redirect::to('/');
    }

}
