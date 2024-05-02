<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\Role;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles=[
            ['name'=>'Amministratore',],
            ['name'=>'Utente',],
        ];

        foreach($roles as $role){
            $newrole=new Role;
            $newrole->fill($role);
            $newrole->save();
        }
    }
}
