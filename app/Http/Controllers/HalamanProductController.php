<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanProductController extends Controller
{
    public function index () {
        return view('product');
    }
}
