<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            ['username' => 'Atlas一郎',
            'email' => '111@atlas.com',
            'password' => bcrypt('atlas111')],
            ['username' => 'Atlas二郎',
            'email' => '222@atlas.com',
            'password' => bcrypt('atlas222')],
            ['username' => 'Atlas三郎',
            'email' => '333@atlas.com',
            'password' => bcrypt('atlas333')],
            ['username' => 'Atlas四郎',
            'email' => '444@atlas.com',
            'password' => bcrypt('atlas444')],
            ['username' => 'Atlas五郎',
            'email' => '555@atlas.com',
            'password' => bcrypt('atlas555')]
        ]);
    }
}
