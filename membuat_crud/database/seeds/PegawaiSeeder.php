<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pegawai')->insert([
            'pegawai_nama' => 'Maul',
            'pegawai_jabatan' => 'Web Develover',
            'pegawai_umur' => 23,
            'pegawai_alamat' => 'Jakarta'
        ]);
    }
}
