<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    public function run(): void
    {
        // Disable foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Clear existing siswa records
        Siswa::truncate();

        // Re-enable foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $namaDepan = [
            'Ahmad', 'Budi', 'Citra', 'Dani', 'Eka', 'Fajar', 'Gina', 'Hardi', 'Indah', 'Joko',
            'Karina', 'Liza', 'Miko', 'Nina', 'Omar', 'Putri', 'Qori', 'Rini', 'Sandi', 'Tia',
            'Udin', 'Vina', 'Wahyu', 'Xenia', 'Yuni', 'Zaki', 'Aditya', 'Bella', 'Cahyo', 'Diana',
            'Eman', 'Fito', 'Gilang', 'Hana', 'Iqbal', 'Jelita', 'Karim', 'Lina', 'Maman', 'Nanda',
            'Odie', 'Puri', 'Quota', 'Raka', 'Sinta', 'Tano', 'Umar', 'Vita', 'Wanta', 'Xander'
        ];

        $namaBelakang = [
            'Rizki', 'Santoso', 'Dewi', 'Hermawan', 'Putri', 'Wahyu', 'Wijaya', 'Kusuma', 'Pratama', 'Sutrisno',
            'Rahmanto', 'Setiawan', 'Tjandra', 'Utama', 'Vania', 'Wardana', 'Xenith', 'Yusman', 'Zainal', 'Abdullah',
            'Bambang', 'Chandra', 'Darmawan', 'Eka', 'Faisal', 'Gunawan', 'Harianto', 'Indra', 'Jaya', 'Kurnia',
            'Laksana', 'Mardiyanto', 'Nugroho', 'Orang', 'Pamungkas', 'Qoyyimah', 'Riyanto', 'Susanto', 'Taufiq', 'Usman',
            'Vicky', 'Wicakso', 'Xavier', 'Yusuf', 'Zulfan', 'Adel', 'Bestari', 'Cikmat', 'Djalil', 'Effendy'
        ];

        $kelas = ['10-A', '10-B', '10-C', '10-D', '11-A', '11-B', '11-C', '11-D', '12-A', '12-B', '12-C', '12-D'];

        $siswas = [];
        for ($i = 1; $i <= 150; $i++) {
            $nis = 12340 + $i;
            $nama = $namaDepan[array_rand($namaDepan)] . ' ' . $namaBelakang[array_rand($namaBelakang)];
            $kelasRandom = $kelas[array_rand($kelas)];

            $siswas[] = [
                'nis' => (string)$nis,
                'nama' => $nama,
                'kelas' => $kelasRandom,
            ];
        }

        foreach ($siswas as $siswa) {
            Siswa::create($siswa);
        }
    }
}
