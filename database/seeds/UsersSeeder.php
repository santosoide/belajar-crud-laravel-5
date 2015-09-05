<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // truncate table first
        DB::table('users')->truncate();

        // generate dummy data with 100 records using Faker
        factory('App\User', 100)->create();
    }
}
