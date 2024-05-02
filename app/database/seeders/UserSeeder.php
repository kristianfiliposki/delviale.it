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
                        'telefono' => '3398238323',
                        'email' => 'alice@example.com',
                        'password' => 'password123',
                    ],
                    [
                        'name' => 'Bob Smith',
                        'telefono' => '3398238323',
                        'email' => 'bob@example.com',
                        'password' => 'qwerty123',
                    ],
                    [
                        'name' => 'Elena Rossi',
                        'telefono' => '3398238323',
                        'email' => 'elena@example.com',
                        'password' => 'password456',
                    ],
                    [
                        'name' => 'David Lee',
                        'telefono' => '3398238323',
                        'email' => 'david@example.com',
                        'password' => 'davidpass',
                    ],
                    [
                        'name' => 'Sophia Martinez',
                        'telefono' => '3398238323',
                        'email' => 'sophia@example.com',
                        'password' => 'sophiapass',
                    ],
                    [
                        'name' => 'Maximilian Fischer',
                        'telefono' => '3398238323',
                        'email' => 'max@example.com',
                        'password' => 'maxpass',
                    ],
                    [
                        'name' => 'Emma Wang',
                        'telefono' => '3398238323',
                        'email' => 'emma@example.com',
                        'password' => 'emmapass',
                    ],
                    [
                        'name' => 'Lucas Hernandez',
                        'telefono' => '3398238323',
                        'email' => 'lucas@example.com',
                        'password' => 'lucaspass',
                    ],
                    [
                        'name' => 'Ava Singh',
                        'telefono' => '3398238323',
                        'email' => 'ava@example.com',
                        'password' => 'avapass',
                    ],
                    [
                        'name' => 'Alexander Brown',
                        'telefono' => '3398238323',
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
