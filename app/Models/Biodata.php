<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    protected $primaryKey = 'id_biodata';

    protected $fillable = [
        'username', 'email', 'nomor_telepon', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'alamat'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'username', 'username');
    }
}
