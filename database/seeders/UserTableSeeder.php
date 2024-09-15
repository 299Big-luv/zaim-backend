<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->delete();
        $data = [];

        for ($i = 1; $i <= 10; $i++) {
            $user = [
                'name' => "ユーザー$i",
                'email' => "user$i@test.com",
                'password' => Hash::make('password'),
            ];
            $data[] = $user;
        }

        DB::table('users')->insert($data);
    }
}
