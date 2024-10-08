<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::insert([
            ['uuid' => Str::uuid(), 'name' => 'admin', 'guard_name' => 'web'],
            ['uuid' => Str::uuid(), 'name' => 'guest', 'guard_name' => 'web'],
        ]);
        Permission::insert([
            ['uuid' => Str::uuid(), 'name' => 'edit articles', 'guard_name' => 'web'],
            ['uuid' => Str::uuid(), 'name' => 'delete articles', 'guard_name' => 'web'],
            ['uuid' => Str::uuid(), 'name' => 'store articles', 'guard_name' => 'web'],
            ['uuid' => Str::uuid(), 'name' => 'get articles', 'guard_name' => 'web'],
        ]);

        $role = Role::where('name', 'admin')->first();
        $role->givePermissionTo('edit articles');
        $role->givePermissionTo('delete articles');
        $role->givePermissionTo('store articles');
        $role->givePermissionTo('get articles');

        $guest = Role::where('name', 'guest')->first();
        $guest->givePermissionTo('get articles');

        $admin = User::where('name', 'renzi')->first();
        $admin->assignRole('admin');

        $guest = User::where('name', 'user')->first();
        $guest->assignRole('guest');
    }
}
