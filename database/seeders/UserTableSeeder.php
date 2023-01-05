<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'role_id' => '1',
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('pass@admin'),
            ],
            [
                'role_id' => '2',
                'name' => 'Author',
                'email' => 'author@gmail.com',
                'password' => bcrypt('pass@auther'),
            ],
            [
                'role_id' => '3',
                'name' => 'user',
                'email' => 'user@gmail.com',
                'password' => bcrypt('pass@user'),
            ]
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
