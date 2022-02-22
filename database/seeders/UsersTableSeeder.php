<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<20;$i++){
        DB::table('users')->insert([
            'firstname' => 'Ivanov 1',
            'lastname' => 'Ivanov 1',
            'patronymic' => 'Ivanov 1',
            'email' => Str::random(10).'@gmail.com',
            'sex'=>'1',
            'phone' => rand(10000000000,99999999999),
            'password' => Hash::make('password'),
            asdasd
        ]);
        }
    }
}
