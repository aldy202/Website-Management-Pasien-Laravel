<?php

namespace App\Http\Controllers;

use App\Models\DataPasien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DataPasienCreate extends Controller
{
    public function index(Request $request)
    {
        $katakunci = $request->katakunci;
        $jumlahbaris = 100;
        if (strlen($katakunci)) {
            $dataPasien = DataPasien::where('nama', 'like', "%$katakunci%")
                ->orWhere('nama', 'like', "%$katakunci%")
                ->orWhere('gender', 'like', "%$katakunci%");
        } else {
            $dataPasien = DataPasien::orderBy('id', 'desc');
        }
        return view('pages.InputDataPasien')->with('dataPasien', $dataPasien);
    }

    public function create(){
        return view('pages.InputDataPasien');
    }

    public function store(Request $request){
        // return 'Hello store';
        // Session::flash('nama', $request->nama);
        // Session::flash('nama', $request->nama);
        // Session::flash('jurusan', $request->jurusan);

        $request->validate([
            'nama' => 'required',
            'umur' => 'required',
            'gender' => 'required',
            'no_telp' => 'required',
            'tgl_perawatan' => 'required',
            'keluhan' => 'required',
            'tindakan' => 'required',
            'status' => 'required',
        ]);
        $dataPasien = [
            'nama' => $request->nama,
            'umur' => $request->umur,
            'gender' => $request->gender,
            'no_telp' => $request->no_telp,
            'tgl_perawatan' => $request->tgl_perawatan,
            'keluhan' => $request->keluhan,
            'tindakan' => $request->tindakan,
            'status' => $request->status,
        ];
        $store = DataPasien::create($dataPasien);
        if($store)
        {
            return redirect()->back()->with('success', 'Berhasil menambahkan data');
        }
        return abort(500);
    }
}
