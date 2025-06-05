<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Keluhan extends Model
{
    protected $primaryKey = 'id_keluhan';
    protected $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_keluhan',
        'username',
        'nama',
        'deskripsi',
        'status',
        'kategori',
        'lokasi',
        'gambar',
        'prioritas',
        'tgl_keluhan',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'username', 'username');
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori', 'id_kategori');
    }
}
