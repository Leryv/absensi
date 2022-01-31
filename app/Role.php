<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends \Spatie\Permission\Models\Role
{
    public static function defaultRoles()
    {
        return [
            'Admin',
            'Walikelas',
            'Siswa',
        ];
    }
}
