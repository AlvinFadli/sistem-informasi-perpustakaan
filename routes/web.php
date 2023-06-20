<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomepagePegawai;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PenerbitController;
use App\Http\Controllers\PengarangController;
use App\Models\Buku;
use App\Models\Jadwal;
use App\Models\Penerbit;
use App\Models\Pengarang;
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
    return view('main-page.homepage.index');
});
Route::get('/homepage', function () {
    return view('main-page.homepage.index');
});
Route::get('/dashboard',[DashboardController::class,'index'])->middleware('auth');
Route::get('/login',[LoginController::class,'login'])->name('login')->middleware('guest');
Route::get('/logout',[LoginController::class,'logout']);
Route::post('/login',[LoginController::class,'authenticate']);
Route::resource('/dashboard-buku', BukuController::class)->parameter('dashboard-buku','buku')->middleware('auth');
Route::resource('/dashboard/pengarang', PengarangController::class)->middleware('auth');
Route::resource('/dashboard/penerbit', PenerbitController::class)->middleware('auth');
Route::resource('/dashboard/pegawai', PegawaiController::class)->middleware('auth');
Route::resource('/dashboard/jadwal', JadwalController::class)->middleware('auth');
Route::resource('/homepage/pegawai', HomepagePegawai::class);

Route::get('/homepage/book', function () {
    return view('main-page.books.index',[
        'bukus'=>Buku::latest()->paginate(10),
    ]);
});
Route::get('/homepage/penulis', function () {
    return view('main-page.penulis.index',[
        'pengarangs'=>Pengarang::latest()->paginate(10),
    ]);
});
Route::get('/homepage/penerbit', function () {
    return view('main-page.penerbit.index',[
        'penerbits'=>Penerbit::latest()->paginate(10)
    ]);
});
// Route::get('/homepage/pegawai', function () {
//     return view('main-page.pegawai.index');
// });
Route::get('/homepage/jadwal', function () {
    return view('main-page.jadwal.index',[
        'jadwals'=>Jadwal::all()
    ]);
});