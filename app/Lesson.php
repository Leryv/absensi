<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $table = "lessons";
    protected $guard = [];
    protected $fillable = [
        'name', 'teacher', 'class', 'jam_masuk', 'jam_selesai'
    ];

}
