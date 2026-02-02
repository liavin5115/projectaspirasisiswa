<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    public function run(): void
    {
        $siswas = [
            ['nis' => '12345', 'nama' => 'Ahmad Rizki', 'kelas' => '10-A'],
            ['nis' => '12346', 'nama' => 'Budi Santoso', 'kelas' => '10-B'],
            ['nis' => '12347', 'nama' => 'Citra Dewi', 'kelas' => '11-A'],
            ['nis' => '12348', 'nama' => 'Dani Hermawan', 'kelas' => '11-B'],
            ['nis' => '12349', 'nama' => 'Eka Putri', 'kelas' => '12-A'],
            ['nis' => '12350', 'nama' => 'Fajar Wahyu', 'kelas' => '12-B'],
        ];

        foreach ($siswas as $siswa) {
            Siswa::create($siswa);
        }
    }
}
