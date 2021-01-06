<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function login(){
        return view('login');
    }

    public function utama(){
        return view('utama');
    }
    public function kriteria(){
        return view('kriteria');
    }
    public function nilkrit(){
        return view('nilkrit');
    }
    public function alternatif(){
        return view('alternatif');
    }
    public function nilalter(){
        return view('nilalter');
    }
    public function pemilihan(){
        return view('pemilihan');
    }
    public function bobot(){
        return view('bobot');
    }
}
