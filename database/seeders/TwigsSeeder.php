<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TwigsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
        public function run(): void
    {
        DB::table('posts')->insert([
          'message' => 'Lorem ipsum dolor sit amet, iaculis ullamcorper. ',
            'user_id' => 1,
            'created_at' => '2002-12-25 00:00:00',
        ]);
        DB::table('posts')->insert([
            'message' => 'Fusce pretium nisl et enim interdum facilisis.  ',
            'user_id' => 1,
            'created_at' => '2004-02-17 00:00:00',
        ]);
    }
}
