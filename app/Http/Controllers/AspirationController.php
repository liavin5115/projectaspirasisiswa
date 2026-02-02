<?php

namespace App\Http\Controllers;

use App\Models\InputAspirasi;
use App\Models\Siswa;
use Illuminate\Http\Request;

class AspirationController extends Controller
{
    public function submitForm()
    {
        $kategoris = ['Fasilitas', 'Keamanan', 'Akademik', 'Layanan', 'Lainnya'];
        return view('aspirations.submit', compact('kategoris'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nis' => 'required|exists:siswas,nis',
            'kategori' => 'required|string',
            'lokasi' => 'nullable|string',
            'keterangan' => 'required|string|min:10',
        ], [
            'nis.required' => 'NIS tidak boleh kosong.',
            'nis.exists' => 'NIS tidak terdaftar. Hubungi admin untuk mendaftarkan NIS Anda.',
            'kategori.required' => 'Kategori aspirasi harus dipilih.',
            'keterangan.required' => 'Keterangan aspirasi tidak boleh kosong.',
            'keterangan.min' => 'Keterangan aspirasi minimal 10 karakter.',
        ]);

        $aspirasi = InputAspirasi::create($validated);

        return redirect()->back()->with('success', "Aspirasi berhasil dikirim! ID Aspirasi Anda: #{$aspirasi->id}. Anda dapat memantau status melalui halaman \"Cek Status Aspirasi\".");
    }

    public function checkForm()
    {
        return view('aspirations.check');
    }

    public function check(Request $request)
    {
        $validated = $request->validate([
            'nis' => 'required|exists:siswas,nis',
        ], [
            'nis.required' => 'NIS tidak boleh kosong.',
            'nis.exists' => 'NIS tidak terdaftar di sistem. Silakan periksa kembali nomor induk siswa Anda.',
        ]);

        $nis = $validated['nis'];

        $laporans = InputAspirasi::where('nis', $nis)
            ->with(['aspirasi', 'aspirasis'])
            ->orderByDesc('created_at')
            ->get();

        return view('aspirations.result', compact('laporans', 'nis'));
    }
}
