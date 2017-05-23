<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Operator;
use Illuminate\Auth\SessionGuard;
use Auth;

/**
* 
*/
class sesicontroller extends Controller
{
public function index()
    {
        return view('admin');
    }

    public function form()
    {
        if(Auth::check()){
            return redirect('/');
        }
        return view('login');
    }
    public function validasi(Request $input)
    {
        $this->validate($input,[
            'username'=>'required',
            'password'=>'required',
        ]);

        $Operator = Operator::where($input->only('username','password'))->first();
        if(! is_null($Operator)){
            Auth::login($Operator);
            if(Auth::check())
                if (Auth::user()->level == 'admin') {
                    return redirect('/')->with('informasi',"Selamat datang , anda telah berhasil login ".Auth::user()->username);
                }elseif (Auth::user()->level == 'user') {
                    return redirect('/')->with('informasi',"Selamat datang , anda telah berhasil login ".Auth::user()->username);
                }
                
        }
           return redirect('/login')->withErrors(['Maap Periksa Kembali password dan username anda']);
    }


    public function logout()
    {
        if(Auth::check()){
                Auth::logout();
                return redirect('/login')->withErrors(['Silahkan Masuk']);
        }else{
                return redirect('/login')->withErrors(['Silahkan masuk jangan keluar dalam ya']);
        }
    }
}