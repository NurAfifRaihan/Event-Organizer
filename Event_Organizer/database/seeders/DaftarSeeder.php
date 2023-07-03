<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DaftarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Daftar::create([
            'tanggal_daftar' => '2000-01-01',
            'alasan' => 'Untuk acara wisuda',
            'nama_peserta' => 'Alex',
            'nama_kegiatan' => 'Wisuda',
            'kategori_peserta' => 'Menengah keatas'
        ]); 
    }
}
