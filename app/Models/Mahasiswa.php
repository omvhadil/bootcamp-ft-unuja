<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'student';
    protected $primaryKey = 'nim';
    protected $keyType = 'string';
    public $incrumenting = false;

    protected $fillable = [
        'nim', 'nama', 'id_jurusan', 'alamat', 'semester', 'no_tlfn', 'tgl_lahir', 'jk', 'email', 'tahun_masuk', 'status'
    ];
}