<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//import model Kegiatan

use App\Models\Kegiatan;
class KegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kegiatan::create([
            'judul' => 'Wisudawan ter epic',
            'kapasitas' => 500,
            'harga_tiket' => 20000,
            'tanggal' => '2023-01-05',
            'narasumber' => 'Bapak Presiden Jokowi',
            'tempat' => 'Gedung serbaguna tebet',
            'jenis_kegiatan' => 'Wisuda angkatan 225',
            

        ]); 
    }
}
