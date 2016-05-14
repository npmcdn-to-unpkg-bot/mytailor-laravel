<?php

use Illuminate\Database\Seeder;

class ShotsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shots')->truncate();

        Db::table('shots')->insert([
            [
                'title' => 'African Skirts & tops',
                'description' => 'This is just something i\'ve been working on, i hope its dope and yall like it and all you knoe how posts can get. something i\'ve been working on, i hope its dope and yall like it and all you knoe how posts can get.',
                'file_name' => '89f42d0cb65b6bc4a2745a0a5a7566fc',
                'file_type' => 'jpg',
                'category' => 'fm',
                'featured' => '1',
                'views' => '2000'
            ],

            [
                'title' => 'African Skirts & tops',
                'description' => 'This is just something i\'ve been working on, i hope its dope and yall like it and all you knoe how posts can get. something i\'ve been working on, i hope its dope and yall like it and all you knoe how posts can get.',
                'file_name' => '213ceb5fac7df3dd9d71162a37c5651f',
                'file_type' => 'jpg',
                'category' => 'fm',
                'featured' => '1',
                'views' => '2000'
            ],

            [
                'title' => 'African Skirts & tops',
                'description' => 'This is just something i\'ve been working on, i hope its dope and yall like it and all you knoe how posts can get. something i\'ve been working on, i hope its dope and yall like it and all you knoe how posts can get.',
                'file_name' => '49927cb908d4168f6f036aa84f5586cc',
                'file_type' => 'jpg',
                'category' => 'fm',
                'featured' => '1',
                'views' => '2000'
            ],

            [
                'title' => 'African Skirts & tops',
                'description' => 'This is just something i\'ve been working on, i hope its dope and yall like it and all you knoe how posts can get. something i\'ve been working on, i hope its dope and yall like it and all you knoe how posts can get.',
                'file_name' => 'eefe0be3cd7e1c9bceba1f80d897943a',
                'file_type' => 'jpg',
                'category' => 'fm',
                'featured' => '1',
                'views' => '2000'
            ]
        ]);
    }
}
