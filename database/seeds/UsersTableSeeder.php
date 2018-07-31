<?php

use App\User;
use App\Account;
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
        // Account
        $account_id = (Account::where('name','UACJ')->first())->id;
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
        $permit_add_students = Permission::create(['name' => 'create students']);
        $permit_create_admins = Permission::create(['name' => 'create admins']);
        $permit_create_users = Permission::create(['name' => 'create users']);
        $permit_create_groups = Permission::create(['name' => 'create groups']);
        $permit_see_all_groups = Permission::create(['name' => 'see all groups']);
        $permit_create_tests = Permission::create(['name' => 'create tests']);
        $permit_read = Permission::create(['name' => 'read articles']);

        // Permission assignment
        // Administrator permissions
        $admin->givePermissionTo($permit_ban_users);
        $admin->givePermissionTo($permit_ban_articles);
        $admin->givePermissionTo($permit_edit_articles);
        $admin->givePermissionTo($permit_create_articles);
        $admin->givePermissionTo($permit_add_students);
        $admin->givePermissionTo($permit_create_groups);
        $admin->givePermissionTo($permit_see_all_groups);
        $admin->givePermissionTo($permit_create_tests);
        $admin->givePermissionTo($permit_create_users);
        $admin->givePermissionTo($permit_read);

        // Wirtter permissions
        $writer->givePermissionTo($permit_ban_articles);
        $writer->givePermissionTo($permit_create_articles);
        $writer->givePermissionTo($permit_read);

        // Student permissions
        $student->givePermissionTo($permit_read);
        
        // Teacher permissions
        $teacher->givePermissionTo($permit_read);
        $teacher->givePermissionTo($permit_create_groups);
        $teacher->givePermissionTo($permit_create_tests);

        // Create user potato
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'potato@potato.com',
            'account_id' => $account_id,
            'password' => bcrypt('123456'),
        ]);

        // Create user student
        DB::table('users')->insert([
            'name' => 'student',
            'email' => 'student@potato.com',
            'account_id' => $account_id,
            'password' => bcrypt('123456'),
        ]);

        // Create user student 2
        DB::table('users')->insert([
            'name' => 'student2',
            'email' => 'student2@potato.com',
            'account_id' => $account_id,
            'password' => bcrypt('123456'),
        ]);

        // Create user Teacher
        DB::table('users')->insert([
            'name' => 'Teacher',
            'email' => 'teacher@potato.com',
            'account_id' => $account_id,
            'password' => bcrypt('123456'),
        ]);

        // Create user Writer
        DB::table('users')->insert([
            'name' => 'Writer',
            'email' => 'writer@potato.com',
            'account_id' => $account_id,
            'password' => bcrypt('123456'),
        ]);

        $admin = User::where('name', 'Admin')->first();
        $admin->assignRole('admin');

        $student = User::where('name', 'Student')->first();
        $student->assignRole('student');

        $teacher = User::where('name', 'Teacher')->first();
        $teacher->assignRole('teacher');

        $writer = User::where('name', 'Writer')->first();
        $writer->assignRole('writer');
    }
}
