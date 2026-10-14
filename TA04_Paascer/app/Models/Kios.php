<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kios extends Model
{
   protected $table = 'kios';
    protected $fillable = ['nomor_kios', 'nama_pemilik', 'kategori'];

    public function retribusi()
    {
        return $this->hasMany(Retribusi::class, 'kios_id');
    }
}

