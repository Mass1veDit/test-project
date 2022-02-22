<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddMenu extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('menus')->insert(
            [
                //1
                [
                    'title' => 'Панель',
                    'path' => '/',
                    'parent' => 0,
                    'type' => 'admin',
                    'sort_order' => 100,
                ],
                [
                    'title' => 'Страницы',
                    'path' => 'pages.index',
                    'parent' => 0,
                    'type' => 'admin',
                    'sort_order' => 100,
                ],
                [
                    'title' => 'Роли',
                    'path' => 'roles.index',
                    'parent' => 0,
                    'type' => 'admin',
                    'sort_order' => 100,
                ],
                [
                    'title' => 'Привилегии',
                    'path' => 'permissions.index',
                    'parent' => 0,
                    'type' => 'admin',
                    'sort_order' => 100,
                ],
                [
                    'title' => 'Пользователи',
                    'path' => 'users.index',
                    'parent' => 0,
                    'type' => 'admin',
                    'sort_order' => 100,
                ],
                [
                    'title' => 'Панель',
                    'path' => '/',
                    'parent' => 0,
                    'type' => 'front',
                    'sort_order' => 100,
                ],
                [
                    'title' => 'Форма',
                    'path' => 'form',
                    'parent' => 0,
                    'type' => 'front',
                    'sort_order' => 100,
                ],
                [
                    'title' => 'Пользователи',
                    'path' => 'users',
                    'parent' => 0,
                    'type' => 'front',
                    'sort_order' => 100,
                ],
            ]
        );
    }
}
