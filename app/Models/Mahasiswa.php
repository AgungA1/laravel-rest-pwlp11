<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = "mahasiswas";
    public $timestamps = false;
    protected $primaryKey = 'nim';
    public $incrementing = false;

    protected $fillable = [
        'nim',
        'nama',
        'tanggal_lahir',
        'jurusan',
        'email',
        'no_hp',
        'kelas_id',
    ];
}
