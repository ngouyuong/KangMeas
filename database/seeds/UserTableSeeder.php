<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userAdmin = User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make(12345678),
        ]);

        $roleAdmin = Role::where('name', 'admin')->first();
        $roleCreator = Role::where('name', 'creator')->first();
        $roleEditor = Role::where('name', 'editor')->first();
        $roleDestroyer = Role::where('name', 'destroyer')->first();

        $userAdmin->assignRole($roleAdmin);

        $userCreator = User::create([
            'name' => 'creator',
            'email' => 'creator@creator.com',
            'password' => Hash::make(12345678),
        ]);
        $userEditor = User::create([
            'name' => 'editor',
            'email' => 'editor@editor.com',
            'password' => Hash::make(12345678),
        ]);
        $userDestroyer = User::create([
            'name' => 'destroyer',
            'email' => 'destroyer@destroyer.com',
            'password' => Hash::make(12345678),
        ]);

        $userCreator->assignRole($roleCreator);
        $userEditor->assignRole($roleEditor);
        $userDestroyer->assignRole($roleDestroyer);
    }
}
