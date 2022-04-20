<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Mdl_main;

use Auth;
use Session;
use DB;

class Ctrl_home extends BaseController
{
    //get home
	public function index(Request $request)
	{
		$email = session::get('email');
        
        if (!empty($email)) 
        {
            $title = "Beranda";

            return view('home.index',compact('email','title'));
        }
        else
        {
            $title = "Login";
            return view('login.index',compact('title'));
        }
	}

    //login 
    public function login(Request $req)
    {
        $rules = ['captcha' => 'required|captcha'];

        $validator = validator()->make(request()->all(), $rules);
        if ($validator->fails()) {
            $error = "Captcha Salah !!";
            $title = "Login";
            return view('login.index', ['error' => $error],compact('title'));
        } else {
            $arr = array('username' => $req->username);
            // dd(Hash::make($req->password));
            
            if (Auth::attempt(['username' => $req->username, 'password' => $req->password]) && !empty($val = Mdl_main::cekDataArray('users', $arr))) 
            {
                
                session_start();          
                session(['username' => $val->username,'email' => $val->email,'user_type' => $val->user_type]);
                
                return redirect('/beranda');
            }
            else 
            {
                $error = "Username / Password Salah !";
                return view('login.index', ['error' => $error]);
            }
        }
        
    }

    //logout
    public function logout(Request $request) 
    {
        Auth::logout();
        $request->session()->flush();
        return redirect('/');
    }
}
