<?php

use Illuminate\Database\Seeder;
use App\Role;
Use App\User;
Use App\Permission;

class AclSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions.
        app()['cache']->forget('spatie.permission.cache');

        // seed the default permission.
        $permissions = Permission::defaultPermissions();
        foreach ($permissions as $perms) {
            Permission::firstOrCreate(['name' => $perms]);
        }
        $this->command->info('Default Permissions added.');

        // seed the default roles.
        $roles = Role::defaultRoles();
        foreach ($roles as $role) {
            $role = Role::firstOrCreate(['name' => $role]);

            // assign all permissions.
            if ($role->name == 'admin') {
                $role->givePermissionTo(Permission::all());
            }
        }

        $this->command->info('Default Roles added.');
    }
}
