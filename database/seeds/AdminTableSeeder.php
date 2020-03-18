<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('admin_users')->insert([
            'username' => 'admin',
            'password' => bcrypt('admin'),
            'name' => 'Administrator',
        ]);

        \Illuminate\Support\Facades\DB::table('admin_roles')->insert([
            [
                'name' => 'Administrator',
                'slug' => 'administrator',
            ],
            [
                'name' => 'User',
                'slug' => 'user',
            ],
        ]);

        \Illuminate\Support\Facades\DB::table('admin_role_users')->insert([
            'role_id' => 1,
            'user_id' => 1,
        ]);

        \Illuminate\Support\Facades\DB::table('admin_permissions')->insert([
            [
                'name'        => 'All permission',
                'slug'        => '*',
                'http_method' => '',
                'http_path'   => '*',
            ],
            [
                'name'        => 'Dashboard',
                'slug'        => 'dashboard',
                'http_method' => 'GET',
                'http_path'   => '/',
            ],
            [
                'name'        => 'Login',
                'slug'        => 'auth.login',
                'http_method' => '',
                'http_path'   => "/auth/login\r\n/auth/logout",
            ],
            [
                'name'        => 'User setting',
                'slug'        => 'auth.setting',
                'http_method' => 'GET,PUT',
                'http_path'   => '/auth/setting',
            ],
            [
                'name'        => 'Auth management',
                'slug'        => 'auth.management',
                'http_method' => '',
                'http_path'   => "/auth/roles\r\n/auth/permissions\r\n/auth/menu\r\n/auth/logs",
            ],
        ]);

        \Illuminate\Support\Facades\DB::table('admin_role_permissions')->insert([
            'role_id' => 1,
            'permission_id' => 1,
        ]);

        \Illuminate\Support\Facades\DB::table('admin_menu')->insert([
            [
                'parent_id' => 0,
                'order'     => 1,
                'title'     => 'Dashboard',
                'icon'      => 'fa-bar-chart',
                'uri'       => '/',
            ],
            [
                'parent_id' => 0,
                'order'     => 2,
                'title'     => 'Workers',
                'icon'      => 'fa-bar-chart',
                'uri'       => '/workers',
            ],
            [
                'parent_id' => 0,
                'order'     => 3,
                'title'     => 'Students',
                'icon'      => 'fa-bar-chart',
                'uri'       => '/students',
            ],
            [
                'parent_id' => 0,
                'order'     => 4,
                'title'     => 'Working hours',
                'icon'      => 'fa-bar-chart',
                'uri'       => '/working-hours',
            ],
            [
                'parent_id' => 0,
                'order'     => 5,
                'title'     => 'Admin',
                'icon'      => 'fa-tasks',
                'uri'       => '',
            ],
            [
                'parent_id' => 5,
                'order'     => 6,
                'title'     => 'Users',
                'icon'      => 'fa-users',
                'uri'       => 'auth/users',
            ],
            [
                'parent_id' => 5,
                'order'     => 7,
                'title'     => 'Roles',
                'icon'      => 'fa-user',
                'uri'       => 'auth/roles',
            ],
            [
                'parent_id' => 5,
                'order'     => 8,
                'title'     => 'Permission',
                'icon'      => 'fa-ban',
                'uri'       => 'auth/permissions',
            ],
            [
                'parent_id' => 5,
                'order'     => 9,
                'title'     => 'Menu',
                'icon'      => 'fa-bars',
                'uri'       => 'auth/menu',
            ],
            [
                'parent_id' => 5,
                'order'     => 10,
                'title'     => 'Operation log',
                'icon'      => 'fa-history',
                'uri'       => 'auth/logs',
            ],
        ]);

        \Illuminate\Support\Facades\DB::table('admin_role_menu')->insert([
            'role_id' => 1,
            'menu_id' => 2,
        ]);
    }
}
