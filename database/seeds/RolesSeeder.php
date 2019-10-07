<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\Enum\RolesEnum;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = RolesEnum::all();
        array_walk($roles, function ($value, $key){
            Role::create([
                'role_name' => $value,
                'description' => ''
            ]);
        });
//        foreach ($roles as $role) {
//            Role::create([
//                'role_name' => $role,
//                'description' => ''
//            ]);
//        }
    }
}
