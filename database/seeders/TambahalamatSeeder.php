<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TambahalamatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tambah_alamats')->insert([
           'nama_lengkap' => 'Felisa Rahmawati',
           'no_telp' => '081222333444',
           'detail_alamat' => 'Jl.Raya barat, Karangampel Gg. 4 Utara RT/09 RW/03 blok. kedung jaya',
           'catatan' => 'pagar hitam, rumah warna orange'
        ]);
    }
}
