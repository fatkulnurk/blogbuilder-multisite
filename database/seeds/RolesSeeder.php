<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            'root',
            'admin',
            'satpam',
            'satpol pp'
        ];

        foreach ($roles as $role) {
            Role::create([
                'role_name' => $role,
                'description' => ''
            ]);
        }
    }
}
