<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'name' => 'admin'
            ],
            [
                'name' => 'creator'
            ],
            [
                'name' => 'editor'
            ],
            [
                'name' => 'destroyer'
            ]
        ];

        foreach ($roles as $role) {
            Role::create([
                'name' => $role['name']
            ]);
        }

        $admin = Role::where('name', 'admin')->first();

        $permissions = Permission::get();

        foreach ($permissions as $permission) {
            $admin->givePermissionTo($permission);
        }

        $creator = Role::where('name', 'creator')->first();
        $editor = Role::where('name', 'editor')->first();
        $destroyer = Role::where('name', 'destroyer')->first();

        $permissionsCreate = Permission::where('name', 'create')->first();
        $permissionsEdit = Permission::where('name', 'edit')->first();
        $permissionsDelete = Permission::where('name', 'delete')->first();

        $creator->givePermissionTo($permissionsCreate);
        $editor->givePermissionTo($permissionsEdit);
        $destroyer->givePermissionTo($permissionsDelete);
    }
}
