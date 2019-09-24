<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {

        DB::table('users')->truncate();

        for ($i = 0 ; $i < 10 ; $i++){
            DB::table('users')->insert([
                'name' => 'user_'.Str::random(3).rand(0,5),
                'email' => Str::random(10).'@gmail.com',
                'password' => bcrypt('password'),
            ]);
        }

    }
}
