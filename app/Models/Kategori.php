<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori_keluhan';

    protected $primaryKey = 'id_kategori';

    protected $fillable = [
        'nama_kategori',
        'deskripsi_kategori',
    ];

    public $timestamps = false; // Karena tidak disebutkan ada created_at dan updated_at

    // Relasi: 1 kategori bisa punya banyak keluhan
    public function keluhan()
    {
        return $this->hasMany(Keluhan::class, 'kategori', 'id_kategori');
    }
}
