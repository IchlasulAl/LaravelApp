<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function about()
    {
        $nama = 'Ichlasul Al';
        return view('about', ['nama' => $nama]);
    }
}
