<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PembimbingAkd extends Model
{
    use HasFactory;

    protected $table = 'pembimbing_akd';
    protected $primaryKey = 'nip';
    public $incrementing = false;
    protected $keyType = 'int';

    protected $fillable = [
        'nip',
        'name',
        'email'
    ];

    public function mahasiswa()
    {
        return $this->hasMany(Mahasiswa::class, 'nip', 'nip');
    }
}
