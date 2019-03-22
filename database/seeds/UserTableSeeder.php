<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
    $role_NormalUser = Role::where(‘name’, ‘NormalUser’)->first();
    $role_manager  = Role::where(‘name’, ‘Manager’)->first();
    $role_admin  = Role::where(‘name’, ‘Admin’)->first();

    $NormalUser= new User();
    $NormalUser= new User();
    $NormalUser->name = ‘NormalUser Name’;
    $NormalUser->email = ‘normaluser@example.com’;
    $NormalUser->password = bcrypt(‘secret’);
    $NormalUser->save();
    $NormalUser->roles()->attach($role_NormalUser);
    
    $Manager = new User();
    $Manager->name = ‘Manager Name’;
    $Manager->email = ‘manager@example.com’;
    $Manager->password = bcrypt(‘secret’);
    $Manager->save();
    $Manager->roles()->attach($role_Manager);

    $Admin = new User();
    $Admin->name = Admin Name’;
    $Admin->email = ‘admin@example.com’;
    $Admin->password = bcrypt(‘secret’);
    $Admin->save();
    $Admin->roles()->attach($role_Admin);
    
 */
    }
}
