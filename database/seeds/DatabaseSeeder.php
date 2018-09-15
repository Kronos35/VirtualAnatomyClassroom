<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AccountTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(GroupsTableSeeder::class);
        $this->call(TissueTypesSeeder::class);
        $this->call(ZonesSeeder::class);
        $this->call(MusclesSeeder::class);
        $this->call(BonesSeeder::class);
    }
}
