<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswas';
    protected $primaryKey = 'nis';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['nis', 'nama', 'kelas'];

    public function inputAspirasis()
    {
        return $this->hasMany(InputAspirasi::class, 'nis', 'nis');
    }
}
