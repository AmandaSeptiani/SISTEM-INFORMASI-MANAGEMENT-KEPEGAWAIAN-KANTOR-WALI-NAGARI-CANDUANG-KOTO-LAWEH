<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\CutiController;
use App\Http\Controllers\GajiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PegawaiDashboardController;
use App\Http\Controllers\GolonganDashboardController;
use App\Http\Controllers\CutiDashboardController;
use App\Http\Controllers\GajiDashboardController;
use App\Http\Controllers\UpdateCutiController;
use App\Http\Controllers\AdminPegawaiController;
use App\Http\Controllers\PrintController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\PresensiDashboardController;
use App\Http\Controllers\LaporanGajiController;
use App\Http\Controllers\LaporanCutiController;
use App\Http\Controllers\LaporanPresensiController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\WalinagariCutiController;

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

// Login
Route::get('/', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login-action', [LoginController::class,'authenticate']);

//Reset Password
Route::get('/reset', [ResetController::class, 'index']);
Route::post('/reset-action', [ResetController::class, 'authenticate']);
Route::get('/recover', [ResetController::class, 'recover'])->middleware('auth');
Route::post('/recover-action', [ResetController::class, 'recoverpassword']);




// Register
Route::resource('register', RegisterController::class);

// Logout
Route::get('/logout-action', [LoginController::class,'logout']);

Route::get('/home', function () {
    return view('home');
});

Route::group(['middleware' => ['auth','ceklevel:Admin,Pegawai,WaliNagari']], function() {

    //Admin

    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::resource('/pegawai-dashboard', PegawaiDashboardController::class);
    Route::resource('/golongan-dashboard', GolonganDashboardController::class);
    Route::resource('/cuti-dashboard', CutiDashboardController::class);
    Route::resource('/gaji-dashboard', GajiDashboardController::class);
    Route::post('/getpegawai',[GajiDashboardController::class, 'getpegawaiid']);
    Route::resource('/cuti', CutiController::class);
    Route::resource('admin-pegawai', AdminPegawaiController::class);
    Route::post('/update-setuju', [UpdateCutiController::class, 'updatesetujui']);
    Route::post('/update-tidaksetujui', [UpdateCutiController::class, 'updatetidaksetujui']);
    Route::resource('/pegawai', PegawaiController::class);
    Route::resource('/gaji', GajiController::class);
    Route::resource('/cuti', CutiController::class);
    Route::resource('/user', UserController::class);
    Route::resource('/presensi', PresensiController::class);
    Route::resource('/presensi-dashboard', PresensiDashboardController::class);
    Route::resource('/laporan-gaji', LaporanGajiController::class);
    Route::resource('/laporan-cuti', LaporanCutiController::class);
    Route::resource('/laporan-presensi', LaporanPresensiController::class);
    Route::post('/filter-cuti', [LaporanCutiController::class, 'filter'])->name('filter-cuti');
    Route::post('/filter-gaji', [LaporanGajiController::class, 'filter'])->name('filter-gaji');
    Route::post('/filter-presensi', [LaporanPresensiController::class, 'filter'])->name('filter-presensi');
    Route::get('/printgaji', [PrintController::class, 'printgaji']);
    Route::post('/printgajiadmin', [PrintController::class, 'printgajiadmin']);
    Route::post('/printpresensiadmin', [PrintController::class, 'printpresensiadmin']);
    Route::post('/printcutiadmin', [PrintController::class, 'printcutiadmin']);
    Route::get('/printpegawai', [PrintController::class, 'printpegawai']);
    Route::get('/printdetail', [PrintController::class, 'printdetail']);

    Route::resource('/walinagari-cuti', WalinagariCutiController::class);


});
