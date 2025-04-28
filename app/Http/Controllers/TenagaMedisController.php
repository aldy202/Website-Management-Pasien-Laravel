<?php

namespace App\Http\Controllers;

use App\Models\DataTenagaMedis;
use Illuminate\Http\Request;

class TenagaMedisController extends Controller
{
    public function index(Request $request)
    {
        $katakunci = $request->katakunci;
        $jumlahbaris = 5;
        if (strlen($katakunci)) {
            $data = DataTenagaMedis::where('nama', 'like', "%$katakunci%")
                ->orWhere('nama', 'like', "%$katakunci%")
                ->orWhere('gender', 'like', "%$katakunci%")
                ->paginate($jumlahbaris);
        } else {
            $data = DataTenagaMedis::orderBy('id', 'desc')->paginate($jumlahbaris);
        }
        return view('pages.Beranda')->with('data', $data);
    }
}
