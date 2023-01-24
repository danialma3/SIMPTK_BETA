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

Route::get('/honor-sekolah', [sekolah::class, 'cari']);
Route::post('/honor-sekolah-result', [sekolah::class, 'dapat']);
