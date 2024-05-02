<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\User;
use App\models\Client;
use App\models\Message;
use App\models\Role;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            MessageSeeder::class,
            RoleSeeder::class,
            ClientSeeder::class,
        ]);
    }
}
