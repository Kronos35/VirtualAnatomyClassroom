<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Roles
        $admin = Role::create(['name' => 'admin']);
        $writer = Role::create(['name' => 'writer']);
        $student = Role::create(['name' => 'student']);
        $teacher = Role::create(['name' => 'teacher']);

        // Permissions
        $permit_ban_users = Permission::create(['name' => 'ban users']);
        $permit_ban_articles = Permission::create(['name' => 'ban articles']);
        $permit_edit_articles = Permission::create(['name' => 'edit articles']);
        $permit_create_articles = Permission::create(['name' => 'create articles']);
        $permit_read = Permission::create(['name' => 'read articles']);
        
        // Permission assignment
        $admin->givePermissionTo($permit_ban_users);
        $admin->givePermissionTo($permit_ban_articles);
        $admin->givePermissionTo($permit_edit_articles);
        $admin->givePermissionTo($permit_create_articles);
        $admin->givePermissionTo($permit_read);

        $writer->givePermissionTo($permit_ban_articles);
        $writer->givePermissionTo($permit_create_articles);
        $writer->givePermissionTo($permit_read);

        $student->givePermissionTo($permit_read);
        $teacher->givePermissionTo($permit_read);

        // Create user potato
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'potato@potato.com',
            'password' => bcrypt('123456'),
        ]);

        // Create user potato
        DB::table('users')->insert([
            'name' => 'student',
            'email' => 'student@potato.com',
            'password' => bcrypt('123456'),
        ]);

        // Create user potato
        DB::table('users')->insert([
            'name' => 'Teacher',
            'email' => 'teacher@potato.com',
            'password' => bcrypt('123456'),
        ]);

        $potato = User::where('name', 'Admin')->first();
        $potato->assignRole('writer');

        $potato = User::where('name', 'Student')->first();
        $potato->assignRole('student');

        $potato = User::where('name', 'Teacher')->first();
        $potato->assignRole('teacher');
    }
}
