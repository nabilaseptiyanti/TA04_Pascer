<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Retribusi extends Model
{
    protected $table = 'retribusi';
    protected $fillable = ['kios_id', 'nominal', 'tanggal_bayar', 'status_pembayaran'];

    public function kios()
    {
        return $this->belongsTo(Kios::class, 'kios_id');
    }
}

