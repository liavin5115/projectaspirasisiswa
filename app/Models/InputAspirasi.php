<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InputAspirasi extends Model
{
    protected $table = 'input_aspirasis';
    protected $fillable = ['nis', 'kategori', 'lokasi', 'keterangan'];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'nis', 'nis');
    }

    public function aspirasi()
    {
        return $this->hasOne(Aspirasi::class);
    }

    public function aspirasis()
    {
        return $this->hasMany(Aspirasi::class)->orderByDesc('created_at');
    }
}
