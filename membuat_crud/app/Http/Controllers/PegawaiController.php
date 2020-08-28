<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        // mengambil data dari tabel pegawai
        $pegawai = DB::table('pegawai')->get();

        // mengirim data pegawai ke view index
        return view('index', ['pegawai' => $pegawai]);
    }
}
