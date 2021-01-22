<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index(){
        return view('HalamanDepan.Beranda');
    }

    public function halamansatu(){
        return view('Halaman.Halaman-satu');
    }

    public function halamandua(){
        return view('halaman.Halaman-dua');
    }

    public function halamantiga(){
        return view('halaman.Halaman-tiga');
    }
}
