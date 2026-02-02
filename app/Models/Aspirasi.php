<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aspirasi extends Model
{
    protected $table = 'aspirasis';
    protected $fillable = ['input_aspirasi_id', 'status', 'feedback'];

    const STATUS_MENUNGGU = 'Menunggu';
    const STATUS_PROSES = 'Proses';
    const STATUS_SELESAI = 'Selesai';

    public function inputAspirasi()
    {
        return $this->belongsTo(InputAspirasi::class);
    }
}
