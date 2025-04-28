<?php>
//TUGAS , 5 route tanpa parameter, 3 route dengan parameter, 3 route dengan optional parameter

//Laporan Praktikum 1 DPW 2

//Routing Aplikasi Keperawatan Rumah Sakit
//Nama  : Farhan Ardiyanto Wibowo
//NIM   : 20104056
//Kelas : SE 04A

//1. Home Page
Route::get('/homepage', function(){
    return 'Halaman Beranda';
});

//2. Halaman Absensi
Route::get('/absensi', function(){
    return 'Halaman Absensi';
});
//->  Cek Data Absensi (Pengelola Rumah Sakit)
Route::get('/absensi/{nama}', function($nama){
    return "Manampilkan data absensi dengan nama = $nama";
});
//->> Ajukan Izin Absensi
Route::get('/absensi/{pengajuan}/{nama}', 
function($a = 'Pengajuan', $b = 'Absen'){
    return "Menampilkan Halaman $a Absensi Pegawai Dengan Nama $b ";
});

//3. Data Pasien
Route::get('/pasien', function(){
    return 'Halaman Data Pasien Rumah Sakit';
});
//->  Scan QR Data Pasien
Route::get('/pasien/{qr}', function($qr){
    return "Menampilkan Halaman $qr Scanner";
});
//->  Edit Data Pasien
Route::get('/pasien/{edit}', function($edit){
    return "Menampilkan Halaman $edit Data Pasien";
});
//->> Hapus Data Pasien
Route::get('/pasien/{edit}/{hapus}', 
function($a = 'edit', $b = 'data pasien'){
    return "Menampilkan Halaman $a $b Data Pasien ";
});
//->> Generator QR code Data Pasien
Route::get('/pasien/{qr}/{generator}', 
function($a = 'qr code', $b = 'generator'){
    return "Menampilkan Halaman $a $b Untuk Data Pasien";
});

//4. Input Data Pasien
Route::get('/inputpasien', function(){
    return 'Halaman Input Data Pasien Baru';
});

//5. Cek Status Pembayaran Pasien
Route::get('/payment', function(){
    return 'Halaman Status Pembayaran Pasien';
});
//->  Edit Status Pembayaran Pasien
Route::get('/payment/{edit}', function($edit){
    return "Menampilkan Halaman $edit payment status";
});

//fallback (route yang dicari tidak ada)

Route::fallback( function(){
    return "404 NOT FOUND";
});