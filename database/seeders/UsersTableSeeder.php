<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            ['name' => 'Atlas一郎',
            'mail' => '111@atlas.com',
            'password' => bcrypt('atlas1')],
            ['name' => 'Atlas二郎',
            'mail' => '222@atlas.com',
            'password' => bcrypt('atlas2')],
            ['name' => 'Atlas三郎',
            'mail' => '333@atlas.com',
            'password' => bcrypt('atlas3')],
            ['name' => 'Atlas四郎',
            'mail' => '444@atlas.com',
            'password' => bcrypt('atlas4')],
            ['name' => 'Atlas五郎',
            'mail' => '555@atlas.com',
            'password' => bcrypt('atlas5')]
        ]);
    }
}
