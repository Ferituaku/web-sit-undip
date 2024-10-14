<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    // Specify the table name if it's different from the default
    protected $table = 'Mahasiswa';

    // Specify the primary key if it's not 'id'
    protected $primaryKey = 'nim';

    // Specify if the primary key is not auto-incrementing
    public $incrementing = false;

    // Specify the data type of the primary key
    protected $keyType = 'int';

    // Specify if the model should use timestamps
    public $timestamps = true;

    // Fillable attributes
    protected $fillable = [
        'nim',
        'name',
        'email',
        'nip'
    ];

    // Relation to PembimbingAkd
    public function pembimbingAkd()
    {
        return $this->belongsTo(PembimbingAkd::class, 'nip', 'nip');
    }
}
