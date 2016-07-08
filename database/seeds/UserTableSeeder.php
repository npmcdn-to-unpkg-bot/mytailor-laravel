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
                'first_name' => 'Matarr',
                'last_name' => 'Jobe',
                'email' => 'jobizzness@gmail.com',
                'password' => bcrypt('biness'),
                'role_id' => 1,
                'profile_id'=>2
                ],
            [
                'first_name' => 'Penda',
                'last_name' => 'Faal',
                'role_id' => 2,
                'profile_id'=>3,
                'email' => 'miss_penda@yahoo.com',
                'password' => bcrypt('misspenda')
            ],
            [
                'first_name' => 'Ousman',
                'last_name' => 'Faye',
                'role_id' => 2,
                'profile_id'=>4,
                'email' => 'idealistmedia@hotmail.com',
                'password' => bcrypt('ousfye89')
            ],
            [
                'first_name' => 'Idrisa',
                'last_name' => 'Sarr',
                'role_id' => 2,
                'profile_id'=>5,
                'email' => 'Eddyflare@gmail.com',
                'password' => bcrypt('12something')
            ],
            [
                'first_name' => 'Mola',
                'last_name' => '',
                'role_id' => 2,
                'profile_id'=>6,
                'email' => '',
                'password' => bcrypt('boots12')
            ],
        ]);
    }
}
