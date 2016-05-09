<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        DB::table('users')->insert([
            [
                'name' => 'jobizzness',
                'email' => 'jobizzness@gmail.com',
                'password' => bcrypt('biness')
            ],
            [
                'name' => 'penda',
                'email' => 'miss_penda@yahoo.com',
                'password' => bcrypt('misspenda')
        ],
        ]);
    }
}
