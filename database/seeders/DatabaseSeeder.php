<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Course;
use App\Models\Lead;
use App\Models\Seminar;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $user = new User();
        $user->name = 'Super Admin';
        $user->email = 'super@lms.test';
        $user->password = bcrypt('password');
        $user->save();

        // $role = Role::create([
        //     'name' => 'Super Admin'


        // ]);



        $role = Role::create([
            'name' => 'Super Admin'

        ]);
        
        $permission = Permission::create([
            'name' => 'create-admin'

        ]);

        $role->givePermissionTo($permission);
        $permission->assignRole($role);

        $user->assignRole($role);
        
        //create leads
        Lead::factory()->count(100)->create();
        Course::factory()->count(100)->create();
        Seminar::factory()->count(100)->create();

        // //course create
        // Course::create()->count([
        //     'name' => 'Laravel',
        //     'description' => 'Laravel is a popular web development framework for developing ',
        //     'image' => 'http://laravel.com/img/logomark.min.svg',
            
        // ]);

        // //Seminars
        // Seminar::factory()->count(10)->create();



    }
}
