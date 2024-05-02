<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\Client;


class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clients=[
            [
                'name' => 'Alice Johnson',
                'punti'=>'21',
                'img_url'=>'',
                'user_id'=>1,
                'role_id'=>2,

            ],
            [
                'name' => 'Bob Smith',
                'punti'=>'22',
                'img_url'=>'',
                'user_id'=>2,
                'role_id'=>2,

            ],
            [
                'name' => 'Elena Rossi',
                'punti'=>'1',
                'img_url'=>'',
                'user_id'=>3,
                'role_id'=>2,

            ],
            [
                'name' => 'David Lee',
                'punti'=>'1',
                'img_url'=>'',
                'user_id'=>4,
                'role_id'=>2,

            ],
            [
                'name' => 'Sophia Martinez',
                'punti'=>'2',
                'img_url'=>'',
                'user_id'=>5,
                'role_id'=>2,

            ],
            [
                'name' => 'Maximilian Fischer',
                'punti'=>'3',
                'img_url'=>'',
                'user_id'=>6,
                'role_id'=>2,

            ],
            [
                'name' => 'Emma Wang',
                'punti'=>'23',
                'img_url'=>'',
                'user_id'=>7,
                'role_id'=>2,

            ],
            [
                'name' => 'Lucas Hernandez',
                'punti'=>'121',
                'img_url'=>'',
                'user_id'=>8,
                'role_id'=>2,

            ],
            [
                'name' => 'Ava Singh',
                'punti'=>'1',
                'img_url'=>'',
                'user_id'=>9,
                'role_id'=>2,

            ],
            [
                'name' => 'Alexander Brown',
                'punti'=>'2',
                'img_url'=>'',
                'user_id'=>10,
                'role_id'=>2,

            ],


        ];

        foreach($clients as $client){
            $newclient=new Client;
            $newclient->fill($client);
            $newclient->save();
        }
    }
}
