<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\student;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // $admin_user = User::create([
        //     'name' => 'admin',
        //     'email' => 'admin@gmail.com',
        //     'password' => bcrypt(12345678)
        // ]);
        // $admin_role=Role::create(['name'=>'admin_role']);
        // $permission1=Permission::create(['name'=>'create artical']);
        // $permission2=Permission::create(['name'=>'edit artical']);
        // $permission3=Permission::create(['name'=>'delete artical']);
        // $admin_role->givePermissionTo($permission1);
        // $admin_role->givePermissionTo($permission2);
        // $admin_role->givePermissionTo($permission3);
        // $admin_user->assignRole( $admin_role);


        // $editor_user = User::create([
        //     'name' => 'editor',
        //     'email' => 'editor@gmail.com',
        //     'password' => bcrypt(12345678)
        // ]);
        // $editor_role=Role::create(['name'=>'editor_role']);
        // $editor_role->givePermissionTo($permission2);
        // $editor_user->assignRole( $editor_role);






        // $writer_user = User::create([
        //     'name' => 'writer',
        //     'email' => 'writer@gmail.com',
        //     'password' => bcrypt(12345678)
        // ]);
        // $writer_role=Role::create(['name'=>'writer_role']);
        // $writer_role->givePermissionTo($permission3);
        // $writer_user->assignRole( $writer_role);


        for ($i = 0; $i < 10; $i++) {
            student::create([
                'name' => fake()->name(),
                'email' => fake()->email(),
                'city' => fake()->city()
            ]);
        }
    }
}
