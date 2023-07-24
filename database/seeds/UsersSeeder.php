<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UsersSeeder extends Seeder
{
    public function run()
    {
        // Membuat role admin
        $adminRole = new Role();
        $adminRole->name = "admin";
        $adminRole->display_name = "Admin";
        $adminRole->save();

        // Membuat role member
        $memberRole = new Role();
        $memberRole->name = "member";
        $memberRole->display_name = "Member";
        $memberRole->save();

        // Membuat sample admin
        $admin = new User();
        $admin->name = 'admin perpuszani';
        $admin->email = 'admin@gmail.com';
        $admin->password = bcrypt('perpuszani');
        $admin->is_verified = 1;
        $admin->save();
        $admin->attachRole($adminRole);

        // Membuat sample member
        $member = new User();
        $member->name = "Sample Member";
        $member->email = 'member@gmail.com';
        $member->password = bcrypt('perpuszani');
        $member->is_verified = 1;
        $member->save();
        $member->attachRole($memberRole);
    }
}
