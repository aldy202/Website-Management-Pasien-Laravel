<?php

namespace App\Http\Controllers;

use App\Models\DataPasien;
use Illuminate\Http\Request;

class DataPasienUpdateController extends Controller
{
    public function index(Request $request)
    {
        $katakunci = $request->katakunci;
        $jumlahbaris = 100;
        if (strlen($katakunci)) {
            $dataPasien = DataPasien::where('nama', 'like', "%$katakunci%")
                ->orWhere('nama', 'like', "%$katakunci%")
                ->orWhere('gender', 'like', "%$katakunci%")
                ->paginate($jumlahbaris);
        } else {
            $dataPasien = DataPasien::orderBy('id', 'desc')->paginate($jumlahbaris);
        }
        return view('pages.UpdatePasien')->with('dataPasien', $dataPasien);
    }

    public function edit($id)
    {
        // return 'Hello Blyat';
        $dataPasien = DataPasien::where('id', $id)->first();
        return view('pages.EditPasien')->with('dataPasien', $dataPasien);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'umur' => 'required',
            'gender' => 'required',
            'no_telp' => 'required',
            'tgl_perawatan' => 'required',
            'keluhan' => 'required',
            'tindakan' => 'required',
            'status' => 'required',
        ], [
            'nama.required' => 'Nama wajib diisi',
            'umur.required' => 'Umur harus di isi',
            'gender.required' => 'Gender Harus di isi',
            'no_telp.required' => 'Telp wajib diisi',
            'tgl_perawatan' => 'Tanggal Perawatan harus di isi',
            'keluhan' => 'Keluhan harus di isi',
            'tindakan' => 'Tindakan harus di isi',
            'status' => 'Status harus di isi',
            
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
        DataPasien::where('id', $id)->update($dataPasien);
        return redirect()->to('pasienupdate')->with('success', 'Berhasil melakukan update data');
    }
}
 