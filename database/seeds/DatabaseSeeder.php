<?php

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 100)->create();
        $this->call([
            PermissionTableSeeder::class,
            RoleTableSeeder::class,
            UserTableSeeder::class,
        ]);
    }
}
