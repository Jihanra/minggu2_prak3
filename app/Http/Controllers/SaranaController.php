<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaranaController extends Controller
{
    public function Kantor() {
        return ('Daftar Sarana perkantoran');
    }

    public function Labor() {
        return ('Daftar Sarana Labotarium');
    }

    public function Kelas() {
        return ('Daftar Sarana Kelas');
    }

    public function Lainnya() {
        return ('Daftar Sarana Lainnya');
    }
}
