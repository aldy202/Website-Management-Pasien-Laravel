<?php
//Bawaan

Route::get('/', function () {
    return view('beranda');
});

//Praktikum 1 

Route::get('/beranda', function(){
    return 'Halaman Beranda';
});

//routing dengan parameter

Route::get('/mobil/{jenis}', 
function($jenis){
    return 'Menampilkan data kendaraan dengan jenis ' .$jenis;
});

//Routing dengan optional parameter

Route::get('/kendaraan/{jenis}/{merk}', 
function($a = 'mobil', $b = 'Brio'){
    return "Menampilkan data $a $b ";
});

//Routing dengan parameter

Route::get('/product/{id}', 
function($id){
    return "Menampilkan data produk dengan ID = $id";
});

//ID Hanya angka

Route::get('/product data/{id}', 
function($id){
    return "Menampilkan data produk dengan ID = $id";
})->where('id', '[0-9]+');

//redirect

Route::get('/hubungi-kami', function(){
    return '<h1>Sedang Coli</h1>';
});

Route::redirect('/contact-us', '/hubungi-kami');

//route group

Route::prefix('/admin')->group(function() {
    Route::get('/dashboard', function(){
        return 'Tampilkan Halaman Dashboard';
    });
    Route::get('/datapegawai', function(){
        return 'Tampilkan Halaman Data Pegawai';
    });
    Route::get('/datamahasiswa', function(){
        return 'Tampilkan Halaman Data Mahasiswa';
    });
});

//fallback (route yang dicari tidak ada)

Route::fallback( function(){
    return "Ga ada blok";
});

//route priority (yang paling bawah yang dijalankan )

Route::get('/product/{id}', 
function($id){
    return "Menampilkan data produk dengan ID = $id";
});

Route::get('/product/{id}', 
function($id){
    return "Menampilkan data produk dengan ID $id";
});

Route::get('/product/{id}', 
function($id){
    return "Menampilkan produk dengan ID = $id";
});
