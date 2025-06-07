<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $primaryKey = 'nim';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $table = 'mahasiswa';
    protected $fillable = [
        'nim',
        'nama',
        'program_studi'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'nim', 'username');
    }
}
