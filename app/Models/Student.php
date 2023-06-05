<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // untuk menentukan primary key
    protected $primaryKey = 'nim';
    // untuk menentukan tipe data primary key
    protected $keyType = 'string';
    // untuk menentukan apakah primary key increment atau bukan
    public $incrementing = false;
    // memasukkan semua field yang dapat diisi
    protected $guarded = [];
}