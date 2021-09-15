<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaranaController extends Controller
{
    public function Kantor() {
        return view ('kantor');
    }

    public function Labor() {
        return view ('lab');
    }

    public function Kelas() {
        return view ('kelas');
    }

    public function Lainnya() {
        return view ('lainnya');
    }
}
