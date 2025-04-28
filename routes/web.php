<?php

use App\Http\Controllers\DashboardDataViewController;
use App\Http\Controllers\DataPasienCreate;
use App\Http\Controllers\DataPasienDeleteController;
use App\Http\Controllers\DataPasienUpdate;
use App\Http\Controllers\DataPasienUpdateController;
use App\Http\Controllers\PasienController;
use App\Models\DataPasien;
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

//Materi DPW2
/*
Route::get('/mahasiswa/{nama}/{umur}/{kotasal}', function($nama, $umur, $kotaasal){
    return view('mahasiswa')->with('nama', $nama)->with('umur', $umur)->with('kotaasal', $kotaasal);
});


Route::get('/mahasiswa', function () {
    return view('universitas.mahasiswa', ["mhs1"=>"Farhan Ardiyanto Wibowo"]);
});
*/

//Route Halaman Beranda Tamplate Sistem Informasi Rumah Sakit
/*
//Praktikum 4

Route::get('/produk', function (){
    $arrProduk = [
        "prod1" => "Televisi",
        "prod2" => "Kipas Angin",
        "prod3" => "Radio",
    ];
    return view('produk', $arrProduk);
});

Route::get('/', function () {
    return view('beranda');
});
*/

Route::get('/', function () {
    return view('pages.Login');
});

//1. 
//Dashboard route fix
Route::get('/misrs', function () {
    return view('pages.Beranda');
});

//2.
//Absensi route fix
Route::get('/absensi', function () {
    return view('pages.HalamanAbsensi');
});

//-> Cek Data Absensi route fix
Route::get('/dataabsensi', function () {
    return view('pages.CekAbsensi');
});

//-> Ajukan Izin Absen / Cuti route fix
Route::get('/pengajuanabsen', function () {
    return view('pages.PengajuanIzinDanCuti');
});

//3. 
//Data Pasien route fix
Route::get('/pasien', function () {
    return view('pages.DataPasien');
});

//-> Scan QR Data Pasien route fix
/*Route::get('/pasienqr', function () {
    return view('pages.ScanQR');
});*/

//-> Edit Data Pasien route fix
Route::get('/pasienupdate', function () {
    return view('pages.UpdatePasien');
});

//->> Hapus Data Pasien route fix
Route::get('/pasienupdatehapus', function () {
    return view('pages.HapusPasien');
});

//->> Generator QR Code Data Pasien route fix 
/*Route::get('/pasienqrbuat', function () {
    return view('pages.QRGenerator');
});*/

//4. 
//Input Data Pasien route fix
Route::get('/inputpasien', function () {
    return view('pages.InputDataPasien');
});

//5.
//Cek Status Pembayaran Pasien route fix
Route::get('/administrasi', function () {
    return view('pages.StatusAdministrasi');
});

//-> Edit Status Pembayaran Pasien route fix
Route::get('/administrasiupdate', function () {
    return view('pages.UpdateAdministrasi');
});

//fallback (route yang dicari tidak ada)
Route::fallback(function () {
    return "404 NOT FOUND";
});

//-> Cek Data Absensi route fix
Route::get('/data/{absensi}', function ($absensi) {
    return view('pages.CekAbsensi');
});

// Logout
Route::get('/logout', function () {
    return view('pages.Login');
});

//CONTROLLER
Route::get('/Dashboard', [App\Http\Controllers\DashboardController::class, 'index']);
Route::get('/Mahasiswa', [App\Http\Controllers\MahasiswaController::class, 'index']);

Route::post('/Login', [App\Http\Controllers\DashboardController::class, 'daftarsession']);
// Route::post('/misrs', [App\Http\Controllers\DashboardController::class,'hapussession']);

Route::resource('/misrs', DashboardDataViewController::class);
Route::resource('/pasien', PasienController::class);
Route::resource('/pasienupdate', DataPasienUpdateController::class);
Route::resource('/pasienupdatehapus', DataPasienDeleteController::class);
Route::resource('/inputpasien', DataPasienCreate::class);