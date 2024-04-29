<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $user1 = \App\Models\User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'nip' => '111111111',
            'year' => '2024',
            'password' => bcrypt('jika12345'),
        ]);     
        Permission::create(['name' => 'permission_admin']);
        $role1 = Role::create(['name' => 'admin']);
        $role1->givePermissionTo('permission_admin');
        $user1->assignRole($role1);

        $user2 = \App\Models\User::create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'nip' => '123123',
            'year' => '2024',
            'password' => bcrypt('jika12345'),
        ]);     
        Permission::create(['name' => 'permission_user']);
        $role2 = Role::create(['name' => 'user']);
        $role2->givePermissionTo('permission_user');
        $user2->assignRole($role2);

        $this->call(PeriodeSeeder::class);
    
    }
}
