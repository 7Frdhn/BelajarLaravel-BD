<?php

use App\Http\Controllers\ProdiController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MapelController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::resource('/siswa', SiswaController::class);
Route::resource('/prodi',ProdiController::class);



// ROUTING MANUAL GURU
Route::get('/guru', [GuruController::class, 'tampil'])->name('guru.tampil');
Route::get('/guru/tambah', [GuruController::class, 'tambah'])->name('guru.tambah');
Route::post('/guru/simpan', [GuruController::class, 'simpan'])->name('guru.simpan');
Route::put('/guru/{nip}/simpan_edit', [GuruController::class, 'simpan_edit'])->name('guru.simpan_edit');
Route::get('/guru/{nip}/edit', [GuruController::class, 'edit'])->name('guru.edit');
Route::delete('/guru/{nip}/hapus', [GuruController::class, 'hapus'])->name('guru.hapus');
// END ROUTING MANUAL GURU



// ROUTING MANUAL MAPEL
Route::get('/mapel', [MapelController::class, 'tampil'])->name('mapel.tampil');
Route::get('/mapel/tambah', [MapelController::class, 'tambah'])->name('mapel.tambah');
Route::post('/mapel/simpan', [MapelController::class, 'simpan'])->name('mapel.simpan');
Route::put('/mapel/{kode_mapel}/simpan_edit', [MapelController::class, 'simpan_edit'])->name('mapel.simpan_edit');
Route::get('/mapel/{kode_mapel}/edit', [MapelController::class, 'edit'])->name('mapel.edit');
Route::delete('/mapel/{kode_mapel}/hapus', [MapelController::class, 'hapus'])->name('mapel.hapus');
// END ROUTING MANUAL MAPEL



// LOGIN RUTING
Route::get('/login', [AuthController::class, 'index']);
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'store']);

Route::get('/home', function () {
    return view('main');
})->middleware('isLogin')->name('home');

