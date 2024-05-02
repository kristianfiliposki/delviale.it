<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{

    public function run(): void
    {
        $users = [
                    [
                        'name' => 'Alice Johnson',
                        'email' => 'alice@example.com',
                        'password' => 'password123',
                    ],
                    [
                        'name' => 'Bob Smith',
                        'email' => 'bob@example.com',
                        'password' => 'qwerty123',
                    ],
                    [
                        'name' => 'Elena Rossi',
                        'email' => 'elena@example.com',
                        'password' => 'password456',
                    ],
                    [
                        'name' => 'David Lee',
                        'email' => 'david@example.com',
                        'password' => 'davidpass',
                    ],
                    [
                        'name' => 'Sophia Martinez',
                        'email' => 'sophia@example.com',
                        'password' => 'sophiapass',
                    ],
                    [
                        'name' => 'Maximilian Fischer',
                        'email' => 'max@example.com',
                        'password' => 'maxpass',
                    ],
                    [
                        'name' => 'Emma Wang',
                        'email' => 'emma@example.com',
                        'password' => 'emmapass',
                    ],
                    [
                        'name' => 'Lucas Hernandez',
                        'email' => 'lucas@example.com',
                        'password' => 'lucaspass',
                    ],
                    [
                        'name' => 'Ava Singh',
                        'email' => 'ava@example.com',
                        'password' => 'avapass',
                    ],
                    [
                        'name' => 'Alexander Brown',
                        'email' => 'alex@example.com',
                        'password' => 'alexpass',
                    ],
                

        ];

foreach ($users as $user) {
    $newuser = new User();
    $newuser->fill($user);
    $newuser->save();
    }
    }
}
