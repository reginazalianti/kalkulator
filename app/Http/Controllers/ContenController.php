<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContenController extends Controller
{
    //
    public function index()
    {
        return view('kalkulator.kalkulator1');
    }
    public function kalkulator4()
    {
        return view('kalkulator.kalkulator4');
    }
}
