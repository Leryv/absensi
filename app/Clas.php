<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clas extends Model
{
    protected $table = "class";
    protected $fillable = [
        'name', 'walas', 'jurusan', 'jumlah'
    ];

}
