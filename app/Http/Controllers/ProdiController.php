<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function Prodi() {
        return view ('MI');
    }

    public function Prodi2() {
        return view ('TI');
    }
}
