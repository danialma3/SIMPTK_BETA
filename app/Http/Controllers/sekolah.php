<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\data_sekolah;
use App\Models\ptk_sekolah;

class sekolah extends Controller
{
    public function cari()
    {
        return view('hnr-sekolah', [
            "title" => "Honor Sekolah",
            "data_sekolah" => data_sekolah::all(),
        ]);
    }
    public function dapat(Request $request)
    {
        return view('hnr-sekolah-result', [
            "title" => "Honor Sekolah",
            "nama_sekolah" => $request->nama_sekolah,
            "data_ptk" => ptk_sekolah::where('nama_sekolah', $request->nama_sekolah)->get(),
            'i' => 0
        ]);
    }
}
