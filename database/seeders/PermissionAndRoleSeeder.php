<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionAndRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Role::insert([
            ['name' => 'admin', 'guard_name' => 'web'], 
            ['name' => 'guest', 'guard_name' => 'web']  
        ]);
        Permission::insert([
            ['name' => 'edit articles', 'guard_name' => 'web'], 
            ['name' => 'delete articles', 'guard_name' => 'web'],
            ['name' => 'store articles', 'guard_name' => 'web'],
            ['name' => 'get articles', 'guard_name' => 'web'],
        ]);

        $role = Role::where('name','admin')->first();
        $role->givePermissionTo('edit articles');
        $role->givePermissionTo('delete articles');
        $role->givePermissionTo('store articles');
        $role->givePermissionTo('get articles');
        
        $guest = Role::where('name','guest')->first();
        $guest->givePermissionTo('get articles');
        
        $admin = User::where('name','renzi')->first();
        $admin->assignRole('admin');

        $guest = User::where('name','user')->first();
        $guest->assignRole('guest');

    }
}
