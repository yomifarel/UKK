<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Masyarakat;
use App\petugas;

class HandlerController extends Controller
{
    public function dashboard()
    {
        return view('pages.dashboard');
    }
    public function init()
    {
        if (Auth::guest()){
        return redirect()->route('getLogin');
    }else{
        if (Auth::user()->level == 'petugas'){

            if(Auth::user()->petugas->level=='admin'){
                return redirect()->route('dashboard');
                
            }else if (Auth::user()->petugas->level=='petugas'){

                return redirect()->route('dashboard');

            }else{
                Auth::logout();
                return redirect()->route('getLogin')->with('msgWarning', 'Terjadi Kesalahan Dengan Hak akses');
            }

        }else{

            return redirect()->route('laporan.index');

        }
    }}
    public function landing()
    {
        return view('pages.landing');
    }
    public function tentang()
    {
        return view('pages.tentang');
    }
    }

