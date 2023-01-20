<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sekolah extends Controller
{
    public function cari(Request $request)
    {
        $name = $request->name;
    }
}
