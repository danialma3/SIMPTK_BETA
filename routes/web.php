<?php

use App\Http\Controllers\sekolah;
use App\Models\honor_sekolah;
use App\Models\ptk_sekolah;
use App\Models\data_sekolah;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('landing', [
        "title" => 'Home'
    ]);
});
Route::get('/honor-sekolah', function () {
    return view('hnr-sekolah', [
        "title" => 'Honor Sekolah',
        "data_sekolah" => data_sekolah::all()
    ]);
});
Route::get('/honor-sekolah-result', function () {

    return view('hnr-sekolah-result', [
        "title" => "Honor Sekolah Cari",
        "data_sekolah" => data_sekolah::all(),
        "data_ptk" => ptk_sekolah::all()
    ]);
});
