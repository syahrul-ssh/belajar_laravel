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
    // method untuk menampilkan view tambah pegawai
    public function tambah()
    {
        // memanggil view tambah
        return view('tambah');
    }
    // method untuk insert data ke tabel pegawai
    public function store(Request $request)
    {
        //insert data ke tabel pegawai
        DB::table('pegawai')->insert([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat,
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/pegawai');
    }
}
