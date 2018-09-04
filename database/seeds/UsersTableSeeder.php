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
        $admin = Role::create(['name' => 'System Administrator']);
        $writer = Role::create(['name' => 'Writer']);
        $student = Role::create(['name' => 'Student']);
        $teacher = Role::create(['name' => 'Teacher']);

        // Permissions creation
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
        $permit_create_lectures = Permission::create(['name' => 'create lectures']);
        $permit_answer_tests = Permission::create(['name' => 'answer tests']);
        $permit_read = Permission::create(['name' => 'read articles']);

        // Permission assignment
        // Administrator permissions
        $admin->givePermissionTo($permit_ban_users);
        $admin->givePermissionTo($permit_ban_articles);
        $admin->givePermissionTo($permit_edit_articles);
        $admin->givePermissionTo($permit_create_articles);
        $admin->givePermissionTo($permit_add_students);
        $admin->givePermissionTo($permit_create_admins);
        $admin->givePermissionTo($permit_create_groups);
        $admin->givePermissionTo($permit_see_all_groups);
        $admin->givePermissionTo($permit_create_tests);
        $admin->givePermissionTo($permit_create_lectures);
        $admin->givePermissionTo($permit_answer_tests);
        $admin->givePermissionTo($permit_create_users);
        $admin->givePermissionTo($permit_read);

        // Writter permissions
        $writer->givePermissionTo($permit_ban_articles);
        $writer->givePermissionTo($permit_create_articles);
        $writer->givePermissionTo($permit_read);

        // Student permissions
        $student->givePermissionTo($permit_read);
        $student->givePermissionTo($permit_answer_tests);
        
        // Teacher permissions
        $teacher->givePermissionTo($permit_read);
        $teacher->givePermissionTo($permit_create_groups);
        $teacher->givePermissionTo($permit_create_tests);
        $teacher->givePermissionTo($permit_create_lectures);

        // Create user potato
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'potato@potato.com',
            'account_id' => $account_id,
            'password' => bcrypt('123456'),
            'created_at' => date("Y-m-d H:i:s")
        ]);

        // Create user student
        DB::table('users')->insert([
            'name' => 'Student',
            'email' => 'student@potato.com',
            'account_id' => $account_id,
            'password' => bcrypt('123456'),
            'created_at' => date("Y-m-d H:i:s")
        ]);

        // Create user student 2
        DB::table('users')->insert([
            'name' => 'Student 2',
            'email' => 'student2@potato.com',
            'account_id' => $account_id,
            'password' => bcrypt('123456'),
            'created_at' => date("Y-m-d H:i:s")
        ]);

        // Create user Teacher
        DB::table('users')->insert([
            'name' => 'Teacher',
            'email' => 'teacher@potato.com',
            'account_id' => $account_id,
            'password' => bcrypt('123456'),
            'created_at' => date("Y-m-d H:i:s")
        ]);

        // Create user Writer
        DB::table('users')->insert([
            'name' => 'Writer',
            'email' => 'writer@potato.com',
            'account_id' => $account_id,
            'password' => bcrypt('123456'),
            'created_at' => date("Y-m-d H:i:s")
        ]);

        $admin = User::where('name', 'Admin')->first();
        $admin->assignRole('System Administrator');

        $student = User::where('name', 'Student')->first();
        $student->assignRole('Student');

        $student = User::where('name', 'Student 2')->first();
        $student->assignRole('Student');

        $teacher = User::where('name', 'Teacher')->first();
        $teacher->assignRole('Teacher');

        $writer = User::where('name', 'Writer')->first();
        $writer->assignRole('Writer');
    }
}
