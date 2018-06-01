<?php

use App\Account;
use Illuminate\Database\Seeder;

class AccountTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $account_data = [
        	'name'=>'UACJ'
        ];
        Account::create($account_data);
    }
}
