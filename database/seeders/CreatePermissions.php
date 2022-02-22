<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreatePermissions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            'alias'=>'ROLES_ACCESS',
            'title'=>'Управление ролями',
        ]);

        DB::table('permissions')->insert([
            'alias'=>'USER_ACCESS',
            'title'=>'Управление пользователями',
        ]);

        DB::table('permissions')->insert([
            'alias'=>'USER_SEARCH',
            'title'=>'Поиск пользователей',
        ]);

        DB::table('roles')->insert([
            'alias'=>'SUPER_ADMINISTRATOR',
            'title'=>'СУПЕР АДМИНИСТРАТОР',
        ]);

        DB::table('roles')->insert([
            'alias'=>'YURIST',
            'title'=>'Юрист',
        ]);

        DB::table('permission_role')->insert([
            'role_id'=>'1',
            'permission_id'=>'1',
        ]);


    }
}
