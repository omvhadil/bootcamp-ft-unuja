<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    use HasFactory;

    protected $guarded = [];

    // membuat relasi dengan model student
    public function student()
    {
        // hasMany = relasi one to many
        return $this->hasMany(Student::class);
    }
}