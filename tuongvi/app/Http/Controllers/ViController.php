<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViController extends Controller
{
    public function showIntroduction() {
        return view('sinhvien');
    }
    
}
