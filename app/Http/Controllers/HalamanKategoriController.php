<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanKategoriController extends Controller
{
    public function index() {
        return view('kategori');
    }
}
