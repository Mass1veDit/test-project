<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreateAdminUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
           'firstname'=>'admin',
            'lastname'=>'admin',
            'patronymic'=>'admin',
            'avatar'=>'/img/default_avatar.jpg',
            'email'=>'admin@admin.com',
            'phone'=>'79603353011',
            'password'=>bcrypt('admin'),
            'sex'=>'1',
            'status'=>'1',
        ]);
    }
}
