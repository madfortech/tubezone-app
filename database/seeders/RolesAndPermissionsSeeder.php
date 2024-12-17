<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

            // create permissions
            Permission::create(['name' => 'create-articles']);
            Permission::create(['name' => 'edit-articles']);
            Permission::create(['name' => 'delete-articles']);
            Permission::create(['name' => 'publish-articles']);
            
            $role1 = Role::create(['name' => 'writer']);
            $role1->givePermissionTo('create-articles');
            $role1->givePermissionTo('edit-articles');
            $role1->givePermissionTo('delete-articles');
 
            $role2 = Role::create(['name' => 'manager']);
            $role2->givePermissionTo('create-articles');
            $role2->givePermissionTo('edit-articles');
            $role2->givePermissionTo('delete-articles');
            $role2->givePermissionTo('publish-articles');

            $role3= Role::create(['name' => 'admin']);
            $role3->givePermissionTo(Permission::all());

            $user = \App\Models\User::factory()->create([
                
                'username' => 'writer',
                'name' => 'writer',
                'email' => 'writer@example.com',
                'password' =>  Hash::make('password'),
            ]);
            $user->assignRole($role1);

            $user = \App\Models\User::factory()->create([
                'username' => 'manager',
                'name' => 'manager',
                'email' => 'manager@example.com',
                'password' =>  Hash::make('password'),
            ]);
            $user->assignRole($role2);


            $user = \App\Models\User::factory()->create([
                'username' => 'super',
                'name' => 'super-admin',
                'email' => 'admin@example.com',
                'password' =>  Hash::make('password'),
            ]);
            $user->assignRole($role3);

             $user = \App\Models\User::factory()->create([
                'username' => 'user',
                'name' => 'user',
                'email' => 'user@example.com',
                'password' =>  Hash::make('password'),
            ]);
          

    }
}
