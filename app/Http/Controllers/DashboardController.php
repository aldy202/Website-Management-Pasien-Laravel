<?php
//Contoh :
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class DashboardController extends Controller {
    public function index(){
        $arrData = ["Mahasiswa 1", "Mahasiswa 2", "Mahasiswa 3", "Mahasiswa 4"];
        return view('pages.Beranda')->with('Mahasiswa', $arrData);
    }

    public function tampil(){
        return "Data Mahasiswa";
    }

    public function daftarsession(){
        session(['Id' => 'Session Perawat']);
        return redirect('/misrs');
    }
    
    public function hapussession(){
        session()-> flush();
        return redirect('/');
    }
}
