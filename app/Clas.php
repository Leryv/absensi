<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clas extends Model
{
    protected $table = "clas";
    protected $fillable = [
        'name', 'teacher', 'class', 'jam_masuk', 'jam_selesai'
    ];

}
