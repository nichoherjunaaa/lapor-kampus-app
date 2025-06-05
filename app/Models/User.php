<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $primaryKey = 'username';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'username',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */

    public function mahasiswa()
    {
        return $this->hasOne(Mahasiswa::class, 'nim', 'username');
    }
    public function biodata()
    {
        return $this->hasOne(Biodata::class, 'username', 'username');
    }
    public function keluhan()
    {
        return $this->hasOne(Keluhan::class, 'username', 'username');   
    }

}
