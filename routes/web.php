<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SppController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\UserLoginController;


use App\Models\Siswa;
use App\Models\Petugas;
use App\Models\Guru;

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
    return view('welcome');
});

Route::group(['middleware' => ['auth:sanctum', 'verified']], function() {
	Route::get('/dashboard', function() {
		return view('dashboard', [
    		'siswa' => count(Siswa::all()),
    		'petugas' => count(Petugas::all()),
    		'guru' => count(Guru::all())
    	]);
	})->name('dashboard');
	// KELAS
	Route::resource('/kelas', KelasController::class);

	// SISWA
	Route::resource('/siswa', SiswaController::class);

	
	// SPP
	Route::resource('/spp', SppController::class);

	// // Pembayaran
	Route::resource('/transaksi', PembayaranController::class);
	Route::get('/transaksi/bayar/{id}', [PembayaranController::class, 'bayar']);

	// Petugas
	Route::resource('/petugas', PetugasController::class);

	// Guru 
	Route::resource('/guru', GuruController::class);

	// Riwayat
	Route::get('/riwayat', [RiwayatController::class, 'index']);
	Route::get('/riwayat/cetak', [RiwayatController::class, 'cetakPdf']);
});

Route::get('/user_login', [UserLoginController::class, 'index']);
Route::post('/proses_login_user', [UserLoginController::class, 'proses_login']);

Route::group(['middleware' => 'cek_login'], function() {
    Route::get('/dashboardSiswa', [UserLoginController::class, 'dashboard']);
    Route::get('/logoutSiswa', [UserLoginController::class, 'logout']);
});