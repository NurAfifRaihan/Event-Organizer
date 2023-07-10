<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//import model Daftar
use App\Models\Daftar;
class DaftarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Daftar::create([
            'tanggal_daftar' => '2017-02-02',
            'alasan' => 'Untuk acara wisuda',
            'nama_peserta' => 'Alexis',
            'nama_kegiatan' => 'Wisuda',
            'kategori_peserta' => 'Menengah keatas',
        ]); 
    }
}
