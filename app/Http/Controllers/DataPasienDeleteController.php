<?php

namespace App\Http\Controllers;

use App\Models\DataPasien;
use Illuminate\Http\Request;

class DataPasienDeleteController extends Controller
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
        return view('pages.HapusPasien')->with('dataPasien', $dataPasien);
    }

    public function destroy($id)
    {
        // return 'HI'. $id;
        DataPasien::where('id', $id)->delete();
        return redirect()->to('pasienupdatehapus')->with('success', 'Berhasil melakukan delete data');
    }
}
